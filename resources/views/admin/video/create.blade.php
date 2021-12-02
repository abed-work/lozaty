@extends('layouts.admin-layout')

  @section('body')
    <div class="card">
    <div class="card-header"><i class="fas fa-plus"></i> Add a video </div>
    <div class="card-body">
        <form action="{{route('dashboard.videos.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="label">Video Title (EN)</div>
                <input type="text" name="video_title_en" id="" placeholder="Video 1">
                @error('video_title_en')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <div class="label">Video Title (AR)</div>
                <input type="text" name="video_title_ar" id="" placeholder="عنوان الفيديو " style="direction: rtl">
                @error('video_title_ar')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <div class="label">Youtube video id</div>
                <input type="text" name="video_id" id="" placeholder="Hf07tAkyCvM">
                @error('video_id')
                    <div class="error-message">{{ $message }}</div>
                @enderror
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
                @error('video_image')
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