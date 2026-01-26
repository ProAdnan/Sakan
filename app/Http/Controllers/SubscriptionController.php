<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use App\Models\Subscription;
class SubscriptionController extends Controller
{





    public function subscribe(Plan $plan)
    {
        $user = auth()->user()->refresh();


        $activeSub = $user->subscription;



        // GUARD: Check if they are trying to buy their current plan
        if ($activeSub && $activeSub->plan_id == $plan->id && $activeSub->status == 'active') {
            return redirect()->back()->with('error', 'You are already subscribed to the ' . $plan->name . ' plan.');
        }

        if (!$user->card_token) {

            // Change this line to match the new route parameter
            return redirect()->route('card.create', ['plan' => $plan->id]);
        } else {

            return redirect()->route('plans.confirm', ['plan' => $plan->id]);

        }

    }




    public function confirm(Plan $plan)
    {
        // Simply show the confirmation page with the plan details
        return view('owner.confirm', compact('plan'));
    }

    public function finalize(Plan $plan)
    {
        $user = auth()->user();

        // Security check: Make sure they actually have a card
        if (!$user->card_token) {
            return redirect()->route('card.create', ['plan' => $plan->id]);
        }

        // Reuse our processing logic
        return $this->processSubscription($user, $plan);
    }


    protected function processSubscription($user, $plan)
    {
        // 1. Look for an existing active subscription
        $existingSub = Subscription::where('owner_id', $user->id)
            ->where('status', 'active')
            ->first();

        if ($existingSub) {



            // 2. UPGRADE: Update the existing record instead of creating a new row
            $existingSub->update([
                'plan_id' => $plan->id,
                'start_date' => now(),
                'end_date' => now()->addDays($plan->duration_days),
            ]);

            $message = "Your plan has been upgraded to " . $plan->name;




        } else {
            // 3. NEW: Create a new record if they had nothing
            Subscription::create([
                'owner_id' => $user->id,
                'plan_id' => $plan->id,
                'start_date' => now(),
                'end_date' => now()->addDays($plan->duration_days),
                'status' => 'active',
            ]);

            $message = "Successfully subscribed to " . $plan->name;
        }

        return redirect()->route('owner_apartments.index')->with('success', $message);
    }


}
