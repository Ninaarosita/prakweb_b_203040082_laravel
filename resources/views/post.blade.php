@extends('layouts.main')

@section('container')
<h2>{{ $post->title }}</h2>
<p>By. Nina Rosita in <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name   }}</a></p></p>
{!! $post->body!!}
<a href="/posts">Back to Posts</a>
    
@endsection