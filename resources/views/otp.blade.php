<x-guest-layout>
    <form method="POST" action="#">
        @csrf

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="number" :value="__('otp')" />
            <x-text-input id="number" class="block mt-1 w-full" type="number" name="otp" :value="old('otp')"  />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>



        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="ml-4">
                {{ __('Submit') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
