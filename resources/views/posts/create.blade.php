<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a href="{{ route('posts.index') }}">{{ __('Posts') }}</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Table -->
                <div class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
                    <header class="px-6 py-4 border-b border-gray-100">
                        <h2 class="font-semibold text-gray-800">{{ __('Create Post') }}</h2>
                    </header>
                    <div class="p-6">
                        <div class="overflow-x-auto">
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            <form method="POST" action="{{ route('posts.store') }}">
                                @csrf

                                <!-- Title -->
                                <div class="mt-4">
                                    <x-label for="title" :value="__('Title')" />

                                    <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
                                </div>

                                <!-- Content -->
                                <div class="mt-4">
                                    <x-label for="content" :value="__('Content')" />

                                    <x-textarea id="content" class="block mt-1 w-full" name="content" :value="old('content')" required />
                                </div>

                                <!-- Description -->
                                <div class="mt-4">
                                    <x-label for="description" :value="__('Description')" />

                                    <x-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" />
                                </div>

                                <!-- Keyword -->
                                <div class="mt-4">
                                    <x-label for="keyword" :value="__('Keyword')" />

                                    <x-input id="keyword" class="block mt-1 w-full" type="text" name="keyword" :value="old('keyword')" />
                                </div>

                                <div class="mt-4">
                                    <x-button class="ml-4">
                                        {{ __('Post') }}
                                    </x-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
