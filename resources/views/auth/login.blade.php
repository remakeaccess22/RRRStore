<x-guest-layout>
    <!-- Session Status -->
    <x-auth-sessions class="mb-4" :status="session('status')" />

    <!-- Login Form -->
    <form method="POST" action="{{ route('login') }}">
        @csrf
    
        <!-- Title -->
        <h2 class="text-center text-2xl font-bold text-gray-800 mb-6">Sign in to your account</h2>

        <div class="space-y-6">
            <!-- Email Field -->
            <div>
                <x-form-field>
                    <x-form-label for="email">Email</x-form-label>
                    <div class="mt-2">
                        <x-form-input name="email" id="email" type="email" :value="old('email')" required />
                        <x-form-error name="email" />
                    </div>
                </x-form-field>
            </div>

            <!-- Password Field -->
            <div class="mt-2">
                <x-form-field>
                    <x-form-label for="password">Password</x-form-label>
                    <div class="mt-2 relative">
                        <x-form-input name="password" id="password" type="password" required />
                        <x-form-error name="password" />

                        <!-- Add an icon for toggling password visibility -->
                        <button type="button" onclick="togglePasswordVisibility()"
                            class="absolute inset-y-0 right-0 flex items-center pr-3">
                            <!-- Eye Open Icon -->
                            <svg id="eye-open-icon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-700"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" style="display: none;">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>

                            <!-- Eye Slash Icon -->
                            <svg id="eye-slash-icon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-700"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" style="display: inline;">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <path d="M2 2l20 20"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                        </button>
                    </div>
                </x-form-field>
            </div>
        </div>

        <!-- Forgot Password Link -->
        <div class="mt-6">
            <x-primary-label href="{{ url('/forgot-password') }}">Forgot Password?</x-primary-label>
        </div>

        <!-- Login - Create Function here-->
        <div class="mt-8">
            <x-form-button>
                Login
            </x-form-button>
        </div>

        <!-- Register Link -->
        <p class="mt-6 text-center text-sm text-gray-600">
            Don’t have an account?
            <x-primary-label href="{{ url('/register') }}" class="ml-1">Create one</x-primary-label>
        </p>
    </form>
</x-guest-layout>
