@extends('layouts.admin-layout')

  @section('body')
    <div class="card">
    <div class="card-header"><i class="fas fa-plus"></i> Edit a flavor </div>
    <div class="card-body">
        <form action={{route('dashboard.flavors.update',['flavor'=>$flavor->id])}} method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="label">Title</div>
                <input type="text" name="title" id="" placeholder="Orange" value="{{$flavor->title}}">
                @error('title')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group image-parent">
                <div class="label">Main Image</div>
                <span class="btn btn-primary btn-file">
                    <i class="fas fa-images"></i> 
                    <span class="image-label">Main Image</span>
                    <input type="file" id="images" name="main_image" accept="image/gif, image/jpeg, image/png">
                    <input type="hidden" name="old_main_image" value="{{$flavor->main_image}}">
                </span>
                @error('main_image')
                    <div class="error-message">{{ $message }}</div>
                @enderror
                <div id="frames"> </div>
            </div>

            <div class="form-group image-parent">
                <div class="label">Pop-up Image</div>
                <span class="btn btn-primary btn-file">
                    <i class="fas fa-images"></i> 
                    <span class="image-label">Pop-up Image</span>
                    <input type="file" id="images" name="pop_image" accept="image/gif, image/jpeg, image/png">
                    <input type="hidden" name="old_pop_image" value="{{$flavor->pop_image}}">
                </span>
                @error('pop_image')
                    <div class="error-message">{{ $message }}</div>
                @enderror
                <div id="frames"> </div>
            </div>

            <div class="form-group ">
                <input class="save-btn" type="submit" value="Save changes">
            </div>

        </form>
        @if(session('success'))
            <div class="success">{{session('success')}}</div>
        @endif
    </div>
  </div>
  <style>
      .image-parent .label{
          margin-bottom: 10px;
      }
      .image-parent .error-message{
          margin-top: 10px;
      }
  </style>
@endsection