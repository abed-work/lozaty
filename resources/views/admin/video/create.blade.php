@extends('layouts.admin-layout')

  @section('body')
    <div class="card">
    <div class="card-header"><i class="fas fa-plus"></i> Add a video </div>
    <div class="card-body">
        <form action="{{route('dashboard.videos.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="label">Video Title</div>
                <input type="text" name="video_title" id="" placeholder="Video 1">
                @error('category_name')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <div class="label">Youtube video id</div>
                <input type="text" name="video_id" id="" placeholder="Hf07tAkyCvM">
            </div>

            <div class="form-group checkbox-parent">
                <div class="label">Is Featured</div>
                <input type="checkbox" name="is_featured" id="">
            </div>

            <div class="form-group image-parent">
                <span class="btn btn-primary btn-file">
                    <i class="fas fa-images"></i> 
                    <span class="image-label">Featured Image</span>
                    <input type="file" id="images" name="video_image" accept="image/gif, image/jpeg, image/png">
                </span>
                @error('category_image')
                    <div class="error-message">{{ $message }}</div>
                @enderror
                <div id="frames"> </div>
            </div>

            <div class="form-group ">
                <input class="save-btn" type="submit" value="Add">
            </div>

        </form>
        @if(session('success'))
            <div class="success">{{session('success')}}</div>
        @endif
    </div>
  </div>
@endsection