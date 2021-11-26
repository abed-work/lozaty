@extends('layouts.admin-layout')

  @section('body')
    <div class="card">
    <div class="card-header"><i class="fas fa-plus"></i> Add a video </div>
    <div class="card-body">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="label">Name</div>
                <input type="text" name="category_name" id="" placeholder="Laptops...">
                @error('category_name')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <div class="label">Description</div>
                <textarea  id="" name="category_description" cols="30" rows="10" placeholder="Description"></textarea>
                @error('category_description')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <div class="label">Choose a parent category</div>

            </div>
            <div class="form-group">
                <div class="label">Check to add this category on home page</div>
                <div class="isfeature">
                    <input type="checkbox" name="isFeatured" id="">
                    <span class="checkbox-label">show on home page</span>
                </div>
            </div>
            <div class="form-group image-parent">
                <span class="btn btn-primary btn-file">
                    <i class="fas fa-images"></i> 
                    <span class="image-label">Upload an image</span>
                    <input type="file" id="images" name="category_image" accept="image/gif, image/jpeg, image/png">
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