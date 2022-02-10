<x-home-layout>
    <x-slot name="title">{{ $post->title }}</x-slot>

    <div class="phdr">
        <a itemprop="url" href="{{ route('home') }}" title="{{ __('Home') }}"><span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope=""><span itemprop="title">{{ __('Home') }}</span></span></a> /
        <a itemprop="url" href="{{ route('posts.show', $post->slug) }}" title="{{ $post->title }}"><span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope=""><span itemprop="title">{{ $post->title }}</span></span></a>
    </div>
    <article class="menu">{{ $post->content }}</article>
</x-home-layout>
