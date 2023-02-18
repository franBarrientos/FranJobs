<x-guest-layout>
    <form novalidate method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            @error("name")
            <livewire:mostrar-alerta 
            :messages="$message"
            />
            @enderror
            {{--             <x-input-error :messages="$errors->get('name')" class="mt-2" />
 --}}        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            @error("email")
            <livewire:mostrar-alerta 
            :messages="$message"
            />
            @enderror
        </div>

        <!-- Roll -->
        <div class="mt-4">
            <x-input-label for="rol" :value="__('What type of account do you want in FranJobs?')" />
           <select
                id="rol"
                name="rol"
                class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
           >
                <option value="">-- Select your rol</option>
                <option value="1">Developer - Get a Job</option>
                <option value="2">Recruitter - Posts Jobs</option>
           </select>
           @error("rol")
           <livewire:mostrar-alerta 
           :messages="$message"
           />
           @enderror
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

                            @error("password")
                            <livewire:mostrar-alerta 
                            :messages="$message"
                            />
                            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required />

                            @error("password_confirmation")
                            <livewire:mostrar-alerta 
                            :messages="$message"
                            />
                            @enderror        </div>

        <div class="flex items-center justify-end my-4">
            
            <x-link
                :href="route('login')"
            >
                {{ __('Already registered?') }}
            </x-link>

            
        </div>
        <x-primary-button class="w-full justify-center ">
            {{ __('Register') }}
        </x-primary-button>
    </form>
</x-guest-layout>
