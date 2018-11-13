@extends('_layouts.master')

@section('body')
    <div class="pt-2">
        @foreach ($posts as $post)
            <a class="d-block mb-2 text-dark" href="{{ $post->getUrl() }}">
                <span class="text-bold">{{ $post->title }}</span><br>
                <span class="">{{ $post->description }}</span>
            </a>
        @endforeach
    </div>
@endsection
