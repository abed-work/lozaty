@extends('layouts.admin-layout')

@section('body')
  <div class="card">
      <div class="card-header">
        {{$video->title}}
      </div>
      <div class="card-body">
        <iframe width="100%" height="500" src="https://www.youtube.com/embed/{{$video->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
  </div>
@endsection