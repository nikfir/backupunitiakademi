<x-guest-layout>
    <x-frontend.auth-card>
        <x-slot name="header">
            Join Us Now.
        </x-slot>
        <x-slot name="paragraph">
            Start by creating your account.
        </x-slot>
        <div class="flex justify-between items-center pb-4 ">
            <div class="w-24 h-px bg-txt-p-l"></div>
            <div class="flex items-center justify-center font-mont text-txt-p-l">Continue with </div>
            <div class="w-24 h-px bg-txt-p-l"></div>
        </div>
        <div class="grid grid-cols-2 gap-2">
            <x-button.facebook />

            <x-button.microsoft />

            <x-button.google />

            <x-button.apple />
        </div>
        <div class="flex items-center pb-4 pt-4">
            <div class="w-full h-px bg-txt-p-l"></div>
            <div class="px-3 flex items-center justify-center font-mont text-txt-p-l">Or</div>
            <div class="w-full h-px bg-txt-p-l"></div>
        </div>
        <form method="POST" action="{{ route('registerbyemail') }}">
            @csrf
            <x-input.text-icon placeholder="Full Name" class="mb-2 w-full" id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
                <x-svg.user/>  
            </x-input.text-icon>

            <x-input.text-icon placeholder="Email" class="mb-2 w-full" id="email" type="email" name="email" :value="old('email')" required>
                <x-svg.envelope/>  
            </x-input.text-icon>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <button type = "submit" class="button accent w-full mt-4 ">Continue</button>
        
        </form>

        <div class="w-full flex items-center justify-center pt-4"><a href="/login"><p>I already have an account</p></a></div>
    </x-frontend.auth-card>
</x-guest-layout>