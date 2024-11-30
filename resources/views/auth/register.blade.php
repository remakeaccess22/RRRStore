<x-guest-layout>
    <!-- Session Status -->
    <x-auth-sessions class="mb-4" :status="session('status')" />

    <form method="POST" action={{ route('register') }}>

        @csrf
        <h2 class="text-center text-2xl font-bold text-gray-800 mb-6">Create an account</h2>

        <div class="space-y-6">
            <div class="grid grid-cols-1 gap-4">
                <!-- First Name -->
                <x-form-field>
                    <x-form-label for="first_name">First Name</x-form-label>
                    <div class="mt-1">
                        <x-form-input name="first_name" id="first_name" type="text" :value="old('first_name')" required />
                        <x-form-error name="first_name" />
                    </div>
                </x-form-field>

                <!-- Last Name -->
                <x-form-field>
                    <x-form-label for="last_name">Last Name</x-form-label>
                    <div class="mt-1">
                        <x-form-input name="last_name" id="last_name" type="text" :value="old('last_name')" required />
                        <x-form-error name="last_name" />
                    </div>
                </x-form-field>

                <!-- Email -->
                <x-form-field>
                    <x-form-label for="email">Email</x-form-label>
                    <div class="mt-1">
                        <x-form-input name="email" id="email" type="email" :value="old('email')" required />
                        <x-form-error name="email" />
                    </div>
                </x-form-field>

                <!-- Confirm Email -->
                <x-form-field>
                    <x-form-label for="email_confirmation">Confirm Email</x-form-label>
                    <div class="mt-1">
                        <x-form-input name="email_confirmation" id="email_confirmation" type="email" required />
                        <x-form-error name="email_confirmation" />
                    </div>
                </x-form-field>

                <!-- Password -->
                <x-form-field>
                    <x-form-label for="password">Password</x-form-label>
                    <div class="mt-1">
                        <x-form-input name="password" id="password" type="password" required />
                        <x-form-error name="password" />
                    </div>
                </x-form-field>
            </div>
        </div>

        <!-- Register - Create Function here-->
        <div class="mt-8">
            <x-form-button>
                Create account
            </x-form-button>
        </div>

        <p class="mt-6 text-center text-sm text-gray-600">
            Already have an account?
            <x-primary-label href="{{ url('/') }}">Sign in</x-primary-label>
        </p>
    </form>
</x-guest-layout>
