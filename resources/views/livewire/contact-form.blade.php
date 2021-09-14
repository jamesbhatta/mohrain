<form wire:submit.prevent="send()" method="POST" class="md:pl-16 py-5 md:py-12">
    <div class="text-gray-500 uppercase font-rubik font-bold tracking-wider">
        <div class="inline-block h-2 w-2 bg-gray-500 rounded-full mr-2"></div>Get In Touch
    </div>
    <h2 class="text-xl md:text-3xl font-rubik font-bold tracking-wider my-3">Ready to get started?</h2>

    <div class="my-5">
        <input type="text" wire:model.defer="name" class="w-full py-3 px-5 border-gray-200 rounded-full @error('name') border-red-500 @enderror" placeholder="Your Full Name *">
        <x-invalid-feedback field="name"></x-invalid-feedback>
    </div>
    <div class="my-5">
        <input type="number" wire:model.defer="mobile" class="w-full py-3 px-5 border-gray-200 rounded-full @error('mobile') border-red-500 @enderror" placeholder="Your Contact Number *">
        <x-invalid-feedback field="mobile"></x-invalid-feedback>
    </div>
    <div class="my-5">
        <input type="email" wire:model.defer="email" class="w-full py-3 px-5 border-gray-200 rounded-full @error('email') border-red-500 @enderror" placeholder="Your Email (optional)">
        <x-invalid-feedback field="email"></x-invalid-feedback>
    </div>
    <div class="my-5">
        <textarea wire:model.defer="message" class="w-full py-3 px-5 border-gray-200 rounded-2xl @error('message') border-red-500 @enderror" rows="5" placeholder="Message *"></textarea>
        <x-invalid-feedback field="message"></x-invalid-feedback>
    </div>
    
    @if($sent == true)
    <div class="mb-3">
        <div class="flex items-center bg-blue-500 text-white text-sm font-medium px-4 py-3 tracking-wide rounded" role="alert">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <div class="ml-2">Your message has been sent. We will get back to you as early as possible.</div>    
        </div>
    </div>
    <script>
        setTimeout(() => {
            @this.sent = false;
        }, 10000);
    </script>
    @endif

    @if($messageSendError != null)
    <div class="mb-3">
        <div class="flex items-center bg-red-500 text-white text-sm font-medium px-4 py-3 tracking-wide rounded" role="alert">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
            <div class="ml-2">{{ $messageSendError }}</div>    
        </div>
    </div>
    @endif

    <div class="my-5">
        <button type="submit" class="bg-blue-500 text-gray-50 py-3 px-6 rounded-full font-rubik font-bold tracking-wide disabled:bg-opacity-80" wire:loading.attr="disabled">
            <span wire:loading.remove>Send Message</span>
            <span wire:loading>Sending...</span>
        </button>
    </div>

</form>
