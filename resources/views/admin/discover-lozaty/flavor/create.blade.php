@extends('layouts.admin-layout')

  @section('body')
    <div class="card">
    <div class="card-header"><i class="fas fa-plus"></i> Add a flavor </div>
    <div class="card-body">
        <form action="{{route('dashboard.flavors.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="label">Title (EN)</div>
                <input type="text" name="title_en" id="" placeholder="Orange">
                @error('title_en')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <div class="label">Title (AR)</div>
                <input type="text" name="title_ar" id="" placeholder="بنكهة الليمون" style="direction: rtl">
                @error('title_ar')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group image-parent">
                <div class="label">Main Image (max size 500 KB)</div>
                <span class="btn btn-primary btn-file">
                    <i class="fas fa-images"></i> 
                    <span class="image-label">Main Image</span>
                    <input type="file" id="images" name="main_image" accept="image/gif, image/jpeg, image/png">
                </span>
                @error('main_image')
                    <div class="error-message">{{ $message }}</div>
                @enderror
                <div id="frames"> </div>
            </div>

            <div class="form-group image-parent">
                <div class="label">Pop-up Image (max size 500 KB)</div>
                <span class="btn btn-primary btn-file">
                    <i class="fas fa-images"></i> 
                    <span class="image-label">Pop-up Image</span>
                    <input type="file" id="images1" name="pop_image" accept="image/gif, image/jpeg, image/png">
                </span>
                @error('pop_image')
                    <div class="error-message">{{ $message }}</div>
                @enderror
                <div id="frames1" style="margin-top: 25px"> </div>
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
  <style>
      .image-parent .label{
          margin-bottom: 10px;
      }
      .image-parent .error-message{
          margin-top: 10px;
      }
  </style>
@endsection