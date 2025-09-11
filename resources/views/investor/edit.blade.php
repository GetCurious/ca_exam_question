<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Investor') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('investors.update', $investor->id) }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <div class="mb-4">
                            <x-input-label for="name"
                                class="block text-sm font-medium text-gray-700">Name</x-input-label>
                            <x-text-input type="text" name="name" id="name" required
                                :value="old('name', $investor->name)"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            </x-text-input>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="email"
                                class="block text-sm font-medium text-gray-700">Email</x-input-label>
                            <x-text-input type="email" name="email" id="email" required
                                :value="old('email', $investor->email)"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            </x-text-input>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="contact_number" class="block text-sm font-medium text-gray-700">
                                Contact Number
                            </x-input-label>
                            <x-text-input type="text" name="contact_number" id="contact_number"
                                :value="old('contact_number', $investor->contact_number)"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            </x-text-input>
                            <x-input-error :messages="$errors->get('contact_number')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end">
                            <x-primary-button>
                                {{ __('Update') }}
                            </x-primary-button>

                            <x-secondary-button class="ms-4" onclick="window.location='{{ route('investors.index') }}'">
                                {{ __('Back') }}
                            </x-secondary-button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>