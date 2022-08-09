@extends('layouts/main')

@section('container')

    @foreach ( $post as $posts )
        <article class="mb-7">
            <h2>
            <a href="/post/{{ $posts['slug'] }}">{{ $posts["title"]   }}</a>
            </h2>
            <h5>By : {{ $posts["author"] }}</h5>
            <p>{{ $posts["body"] }}</p>
        </article>
    @endforeach


@endsection