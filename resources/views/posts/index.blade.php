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
                    <header class=" flex px-6 py-4 border-b border-gray-100">
                        <h2 class="font-semibold text-gray-800">{{ __('List Post') }}</h2>
                        <a href="{{ route('posts.create') }}" class="ml-4 justify-end"> (+){{ __('Create Post') }}</a>
                    </header>
                    <div class="p-2">
                        <div class="overflow-x-auto">
                            @if ($posts->isNotEmpty())
                                <table class="table-auto w-full">
                                    <tbody class="text-sm divide-y divide-gray-100">
                                        @foreach ($posts as $post)
                                            <tr>
                                                <td class="p-2 whitespace-nowrap">
                                                    <a href="{{ route('posts.show', $post->slug) }}">
                                                        {{ $post->title }}
                                                    </a>
                                                </td>
                                                <td class="p-2 text-right whitespace-nowrap">
                                                    <a href="{{ route('posts.edit', $post->id) }}" class="text-blue-600 dark:text-blue-500 hover:underline">{{ __('Edit') }}</a>
                                                </td>
                                                <td class="p-2 whitespace-nowrap">
                                                    <form action="{{route('posts.destroy', [$post->id])}}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button onclick="return confirm('{{ __('Delete post?') }}')" type="submit">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <div class="p-6 bg-white border-b border-gray-200">
                                    {{ __('Empty Post') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
