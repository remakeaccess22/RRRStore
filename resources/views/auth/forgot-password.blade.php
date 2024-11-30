<x-guest-layout>
    <!-- Session Status -->
    <x-auth-sessions class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('forgot-password') }}">
        @csrf

        <!-- Title -->
        <h2 class="text-center text-2xl font-bold text-gray-800 mb-6">Forgot Password</h2>

        <!-- Description -->
        <p class="text-center text-sm text-gray-600 mb-6">
            Enter your email address below, and we'll send you a link to reset your password.
        </p>

        <!-- Input Section -->
        <div class="space-y-6">
            <x-form-field>
                <x-form-label for="email">Email</x-form-label>
                <div class="mt-2">
                    <x-form-input name="email" id="email" type="email" :value="old('email')" required />
                    <x-form-error name="email" />
                </div>
            </x-form-field>
        </div>

        <!-- Submit Button - Create a function -->
        <div class="mt-8">
            <x-form-button>
                Send Password Reset Link
            </x-form-button>
        </div>

        <!-- Footer -->
        <p class="mt-6 text-center text-sm text-gray-500">
            Remember your password?
            <x-primary-label href="{{ url('/') }}">Sign in</x-primary-label>
        </p>
    </form>
</x-guest-layout>
