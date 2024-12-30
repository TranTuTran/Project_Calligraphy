@extends('admin.layout')

@section('content')
  
<div class="container-fluid">
  <h4 class="c-grey-900 mT-10 mB-30">Category</h4>
  <div class="row">
    <div class="col-md-12">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <h4 class="c-grey-900 mB-20">Create Category</h4>
        @include('admin.commons.form-validate')
        <form method="POST" action="{{ route('admin.category.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-md-2">
              <figure class="figure block-preview-image">
                <div style="width: 150px; height: 150px; overflow: hidden"><img src="https://placehold.co/400x400" id="preview" class="figure-img img-fluid rounded-circle w-100 h-100" alt="..."></div>
                <input type="file" style="display: none" name="thumbnail" id="imageInput" accept="image/*">
                <hr/>
                <figcaption class="figure-caption"><a class="btn btn-primary changeImageBtn">Change image</a></figcaption>
              </figure>
            </div>
            <div class="col-md-10">
              <div class="row">
                <div class="mb-3 col-md-12">
                  <label class="form-label" for="inputEmail4">Name</label>
                  <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Category name" value="{{ old('name') }}">
                </div>
                <div class="mb-3 col-md-12">
                  <label class="form-label" for="inputEmail4">Description</label>
                  <textarea name="description" class="form-control" id="inputEmail4">{{ old('description') }}</textarea>
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-color">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection