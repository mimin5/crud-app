
@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $post["tittle"] }}</h2>
    <h5>{{ $post["author"] }}</h5>
    <p>{{ $post["body"] }}</p>
</article>

<a href="/blog">back to blog</a>
@endsection