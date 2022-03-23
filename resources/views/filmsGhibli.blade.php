@extends('page')

@section('films')
<h1>All films</h1>
<ol>
    @foreach($films as $film)
    <li><a href="{{route("filmpage",$film->id)}}">{{ $film->title }}</a></li>
    @endforeach
</ol>
@endsection


