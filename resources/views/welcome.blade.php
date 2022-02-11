<x-home-layout>
    <x-slot name="title">{{ __('Home') }}</x-slot>

    <div class="phdr">
        <i class="fa fa-th-list" style="color:yellow;"></i>
        <h2>{{ __('Latest Post') }}</h2>
    </div>
    
    @if ($posts->isNotEmpty())
        @foreach ($posts as $post)
            <div class="trithuc9x">
                <a href="{{ route('posts.show', $post->slug) }}">
                    {{ $post->title }}
                </a>
            </div>
        @endforeach
    @else
        <div class="list1">{{ __('Empty Post') }}</div>
    @endif
</x-home-layout>
