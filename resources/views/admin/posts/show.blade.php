@extends('admin.layouts.base')

@section('mainContent')
    <h2>
        {{ $post->title }}
    </h2>

    <img src="{{ $post->image }}" alt="{{ $post->title }}">

    <p>
        {{ $post->content }}
    </p>
@endsection
