@extends('layouts.admin-layout')

  @section('body')
    <div class="card">
    <div class="card-header"><i class="fas fa-plus"></i> Edit the video </div>
    <div class="card-body">
        <form action={{route('dashboard.videos.update',['video'=>$video->id])}} method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="label">Video Title (EN)</div>
                <input type="text" name="video_title_en" id="" placeholder="Video 1" value="{{$video->title_en}}">
                @error('video_title_en')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <div class="label">Video Title (AR)</div>
                <input type="text" name="video_title_ar" id="" placeholder="عنوان الفيديو" value="{{$video->title_ar}}" style="direction: rtl">
                @error('video_title_ar')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <div class="label">Youtube video id</div>
                <input type="text" name="video_link" id="" placeholder="Hf07tAkyCvM" value="{{$video->link}}">
            </div>

            <div class="form-group checkbox-parent">
                <div class="label">Is Featured</div>
                <input type="checkbox" name="is_featured" id="" {{($video->isFeatured? 'checked':'')}}>
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

            @if ($video->featured_image)
              <div class="edit-image form-group" style="margin-top: 40px">
                  <img src="{{asset('/storage/images/'.$video->featured_image)}}" alt="" height="150px" width="150px">
                  <div class="del">
                      <i class="fas fa-trash-alt" style="color:red;cursor: pointer;"></i>
                  </div>
              </div>
            @endif

            <div class="form-group ">
                <input class="save-btn" type="submit" value="Save changes">
            </div>

        </form>
        @if(session('success'))
            <div class="success">{{session('success')}}</div>
        @endif
    </div>
  </div>

  <script>
    if(document.querySelector('.del')){
        document.querySelector('.del').addEventListener('click',()=>{
            //document.querySelector('[name="hidden_category_image"]').setAttribute('value','');
            document.querySelector('.edit-image').remove();
        });
    }
</script>
@endsection