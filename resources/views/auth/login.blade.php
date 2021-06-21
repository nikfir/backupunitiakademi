<x-guest-layout>
    <x-frontend.auth-card>
        <x-slot name="header">
            Welcome Back.
        </x-slot>
        <x-slot name="paragraph">
            Please sign in to your account
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <x-input.text-icon placeholder="Email" class="mb-2 w-full" id="email" type="email" name="email" :value="old('email')" required autofocus>
                <x-svg.user/>  
            </x-input.text-icon>

            <x-input.text-icon type="password" placeholder="Password" class="mb-2 w-full" id="password" type="password" name="password" required autocomplete="current-password">
                <x-svg.key/>  
            </x-input.text-icon>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-input.checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

            </div>
            <button type = "submit" class="button danger-outline w-full mt-4 ">Log In</button>
        </form>
            
    </x-frontend.auth-card>
</x-guest-layout>
