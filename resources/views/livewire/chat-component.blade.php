<div>


    {{-- <div class="d-flex flex-column h-100">
        <div class="chat-header shadow-sm">
            <div class="d-flex align-items-center justify-content-between w-100">
                <div class="d-flex align-items-center">
                    <div class="chat-avatar me-3">
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center fw-bold"
                            style="width: 45px; height: 45px; font-size: 1rem;">
                            {{ substr($conversation->receiver_id == auth()->id() ? $conversation->sender->name : $conversation->receiver->name, 0, 2) }}
                        </div>
                    </div>
                    <div>
                        <h6 class="mb-0 fw-bold text-dark">
                            {{ $conversation->receiver_id == auth()->id() ? $conversation->sender->name : $conversation->receiver->name }}
                        </h6>
                        <small class="text-success d-flex align-items-center gap-1">
                            <i class="bi bi-circle-fill" style="font-size: 7px;"></i> Online
                        </small>
                    </div>
                </div>
                <div class="chat-actions">
                    <button class="btn btn-light btn-sm rounded-circle"><i class="bi bi-telephone"></i></button>
                    <button class="btn btn-light btn-sm rounded-circle"><i
                            class="bi bi-three-dots-vertical"></i></button>
                </div>
            </div>
        </div>

        <div class="chat-messages px-4 py-3" id="chatMessages">
            <div class="text-center my-3">
                <span class="badge bg-light text-muted fw-normal">Conversation Started</span>
            </div>

            @foreach ($messages as $msg)
                <div
                    class="message-wrapper {{ $msg->user_id == auth()->id() ? 'justify-content-end' : 'justify-content-start' }} d-flex mb-3">
                    <div class="message {{ $msg->user_id == auth()->id() ? 'sent' : 'received' }} shadow-sm">
                        <div class="message-content">
                            {{ $msg->body }}
                        </div>
                        <div
                            class="message-meta d-flex align-items-center {{ $msg->user_id == auth()->id() ? 'justify-content-end' : 'justify-content-start' }}">
                            <span class="message-time me-1">{{ $msg->created_at->format('h:i A') }}</span>
                            @if ($msg->user_id == auth()->id())
                                <i class="bi bi-check2-all text-white-50"></i>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="chat-input-area border-top px-3 py-3">
            <div class="input-group align-items-center gap-2">
                <button class="btn btn-link text-muted p-0"><i class="bi bi-plus-circle fs-4"></i></button>
                <input type="text" wire:model="newMessage" wire:keydown.enter="sendMessage"
                    class="form-control chat-input-field shadow-none border-0 bg-light px-4"
                    placeholder="Type your message here..." style="border-radius: 25px;">
                <button wire:click="sendMessage"
                    class="btn btn-primary rounded-circle d-flex align-items-center justify-content-center"
                    style="width: 45px; height: 45px; flex-shrink: 0;">
                    <i class="bi bi-send-fill"></i>
                </button>
            </div>
        </div> --}}



    <div class="chat-component-wrapper">
        <div class="chat-header p-3 bg-white border-bottom shadow-sm flex-shrink-0">
            <h6 class="mb-0 fw-bold text-primary">
                <i class="bi bi-person-circle me-2"></i>
                {{ $conversation->receiver_id == auth()->id() ? $conversation->sender->name : $conversation->receiver->name }}
            </h6>
        </div>

        <div id="chatMessages">
            @foreach ($messages as $msg)
                <div
                    class="message-wrapper {{ $msg->user_id == auth()->id() ? 'justify-content-end' : 'justify-content-start' }} mb-3">
                    <div class="message {{ $msg->user_id == auth()->id() ? 'sent' : 'received' }}">
                        <div class="message-content">{{ $msg->body }}</div>
                        <div class="message-meta text-end" style="font-size: 0.7rem; opacity: 0.7;">
                            {{ $msg->created_at->format('h:i A') }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="chat-input-area">
            <div class="input-group shadow-sm" style="border-radius: 30px; overflow: hidden; border: 1px solid #ddd;">
                <input type="text" wire:model="newMessage" wire:keydown.enter="sendMessage"
                    class="form-control border-0 py-2 px-3" placeholder="Type a message...">
                <button wire:click="sendMessage" class="btn btn-primary border-0 px-4">
                    <i class="bi bi-send-fill"></i>
                </button>
            </div>
        </div>
    </div>


</div>

















</div>


</div>
