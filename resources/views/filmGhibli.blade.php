@extends('page')

@section('films')
<h1>One film</h1>
<p>{{ $film->synopsis }}</p>
<h2>voici ses posts</h2>
<ol>
    @foreach($filmPosts as $filmPost)
    <li>{{ $filmPost->content }}</li>
    @endforeach
</ol>
<h2>voici ses commentaires</h2>
<ol>
    @foreach($filmComments as $filmComment)
    <li>{{ $filmComment->content }}</li>
    @endforeach
</ol>
@endsection

