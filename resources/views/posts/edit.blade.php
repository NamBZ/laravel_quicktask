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
                <div class="w-full mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
                    <header class="px-6 py-4 border-b border-gray-100">
                        <h2 class="font-semibold text-gray-800">{{ __('Update Post') }}</h2>
                    </header>
                    <div class="p-6">
                        <div class="overflow-x-auto">
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            <form method="POST" action="{{ route('posts.update', ['post' => $post]) }}">
                                @csrf
                                @method('PUT')

                                <!-- Title -->
                                <div>
                                    <x-label for="title" :value="__('Title')" />

                                    <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title', $post->title)" required autofocus />
                                </div>

                                <!-- Content -->
                                <div class="mt-4">
                                    <x-label for="content" :value="__('Content')" />

                                    <x-textarea id="content" class="block mt-1 w-full" name="content" :value="old('content', $post->content)" required />
                                </div>

                                <!-- Author -->
                                <div class="mt-4">
                                    <x-label for="user_id" :value="__('Author')" />

                                    <select class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="user_id" name="user_id">
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}" @if ($post->user_id == $user->id) selected @endif>{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Description -->
                                <div class="mt-4">
                                    <x-label for="description" :value="__('Description')" />

                                    <x-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description', $post->description)" />
                                </div>

                                <!-- Keyword -->
                                <div class="mt-4">
                                    <x-label for="keyword" :value="__('Keyword')" />

                                    <x-input id="keyword" class="block mt-1 w-full" type="text" name="keyword" :value="old('keyword', $post->keyword)" />
                                </div>

                                <div class="mt-4">
                                    <x-button>
                                        {{ __('Save') }}
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
