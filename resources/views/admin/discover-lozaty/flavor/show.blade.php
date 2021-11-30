@extends('layouts.admin-layout')

@section('body')
  <div class="card">
      <div class="card-header">
        {{$flavor->title}}
      </div>
      <div class="card-body">
        <h5>Main Image</h5>
        <div><img src="{{asset('storage/images/'.$flavor->main_image)}}" alt=""></div>
        <h5>Pop-up Image</h5>
        <div><img src="{{asset('storage/images/'.$flavor->pop_image)}}" alt=""></div>
      </div>
  </div>

  <style>
      h5{
          margin-bottom: 10px
      }
  </style>
@endsection