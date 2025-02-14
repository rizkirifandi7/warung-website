<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl text-gray-800 leading-tight">
            <a href="{{ route('users.index') }}" class="hover:underline">Admin Users</a> /
            <span class="font-semibold">{{ __('Create') }}</span>
        </h2>
    </x-slot>

    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8 bg-white border border-[#FF8F00] mt-10 shadow-md rounded-md">
        <form method="POST" action="{{ route('users.store') }}" class="w-full text-black">
            <h1 class="text-2xl font-bold mb-10">Register User</h1>
            @csrf
            <div class="mb-4">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input name="name" placeholder="{{ __('New User') }}"
                    class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    :value="old('name')"></x-text-input>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input name="email" placeholder="{{ __('New email') }}"
                    class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    :value="old('email')"></x-text-input>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input name="password" type="password" placeholder="{{ __('Password') }}"
                    class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"></x-text-input>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-text-input name="password_confirmation" type="password" placeholder="{{ __('Confirm Password') }}"
                    class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"></x-text-input>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="buttons mt-8 flex justify-end gap-4">
                <x-secondary-button-link class="btn"
                    href="{{ route('categories.index') }}">{{ __('Cancel') }}</x-secondary-button-link>
                <x-primary-button class="btn bg-[#2E7D32]">{{ __('Save') }}</x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>