@extends('layouts.main')
@section('content')
<h1> ini Tampilan blog </h1>

@foreach ($posts as $post)
<h2>
    <a href="/blog/{{  $post['slug'] }}">{{ $post['title'] }}</a>
    {{-- {{ $post['title'] }} --}}
</h2>
<h5> By : {{ $post['author'] }}</h5>
<p>{{ $post['body'] }}</p>
@endforeach
@endsection