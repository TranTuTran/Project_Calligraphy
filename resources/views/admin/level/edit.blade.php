@extends('admin.layout')
@section('content')
  
<div class="container-fluid">
  <h4 class="c-grey-900 mT-10 mB-30">Level</h4>
  <div class="row">
    <div class="col-md-12">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <h4 class="c-grey-900 mB-20">Edit level</h4>
        @include('admin.commons.form-validate')
        <form method="POST" action="{{ route('admin.level.update', $level->id) }}" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="mb-3 col-md-12">
                  <label class="form-label" for="inputEmail4">Name</label>
                  <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Level name" value="{{ old('name', $level->name) }}">
                </div>
                <div class="mb-3 col-md-12">
                  <label class="form-label" for="inputEmail4">Description</label>
                  <textarea name="description" class="form-control" id="inputEmail4">{{ old('description', $level->description) }}</textarea>
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