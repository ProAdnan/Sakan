<?php

namespace App\Http\Controllers;

use App\Models\ApartmentImage;
use App\Models\University;
use Illuminate\Http\Request;
use function PHPUnit\Framework\returnValueMap;
use App\Models\Apartment;
use App\Models\Feature;
use Illuminate\Support\Facades\Storage;



class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $apartments = Apartment::with('images')
            ->where('owner_id', auth()->id())
            ->latest()
            ->get();

        return view('owner.owner-apartments', compact('apartments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $universities = University::all();
        return view('owner.owner-add-apartment', compact('universities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Validation
        $request->validate([
            'name' => 'required|string|max:150',
            'latitude' => 'required',
            'longitude' => 'required',
            'images' => 'required|array|min:1|max:5',
            'images.*' => 'image|mimes:jpeg,png,jpg|max:2048',
            'gender' => 'required',
            'university_id' => 'required',
        ]);



        // 2. Create Apartment
        $apartment = Apartment::create([
            'owner_id' => auth()->id(),
            'university_id' => $request->university_id, // Ensure your <select> name matches
            'name' => $request->name,
            'location' => $request->location,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'area' => $request->area,
            'allowed_gender' => $request->gender,
            'rent_type' => $request->rentType,
            'price' => $request->price,
            'description' => $request->description,
            'status' => 'available',
            'number_of_rooms' => $request->number_of_rooms,
        ]);

        // 3. Process Dynamic Features (JSON to Many-to-Many)
        $featureNames = json_decode($request->features, true);
        if (!empty($featureNames)) {
            $featureIds = [];
            foreach ($featureNames as $name) {
                $f = Feature::firstOrCreate(['name' => trim($name)]);
                $featureIds[] = $f->id;
            }
            $apartment->features()->sync($featureIds);
        }

        // 4. Process Multiple Images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $index => $file) {
                $path = $file->store('apartments', 'public');
                $apartment->images()->create([
                    'image_path' => $path,
                    'is_main' => ($index === 0)
                ]);
            }
        }




        return redirect()->route('owner_apartments.index')->with('success', 'Apartment pinned successfully!');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Apartment $owner_apartment)
    {

        foreach ($owner_apartment->images as $image) {
            Storage::disk('public')->delete($image->image_path);
        }

        $owner_apartment->delete();

        return redirect()->route('owner_apartments.index')->with('success', 'Apartment Deleted Successfully!');

    }
}
