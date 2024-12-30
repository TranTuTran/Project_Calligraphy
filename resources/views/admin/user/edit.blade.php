@extends('admin.layout')
@section('content')
  
<div class="container-fluid">
  <h4 class="c-grey-900 mT-10 mB-30">Users</h4>
  <div class="row">
    <div class="col-md-12">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <h4 class="c-grey-900 mB-20">Edit user</h4>
        @include('admin.commons.form-validate')
        <form method="POST" action="{{ route('admin.user.update', $user->id) }}" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-md-2">
              <figure class="figure block-preview-image">
                <div style="width: 150px; height: 150px; overflow: hidden"><img src="{{ $user->profile->avatar ? asset('storage/'. $user->profile->avatar) : 'https://placehold.co/400x400' }}" id="preview" class="figure-img img-fluid rounded-circle w-100 h-100" alt="..."></div>
                <input type="file" style="display: none" name="avatar" id="imageInput" accept="image/*">
                <hr/>
                <figcaption class="figure-caption"><a class="btn btn-primary changeImageBtn">Change image</a></figcaption>
              </figure>
            </div>
            <div class="col-md-10">
              <div class="row">
                <div class="mb-3 col-md-12">
                  <label class="form-label" for="inputEmail4">Email</label>
                  <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" value="{{ old('email', $user->email) }}">
                </div>
                <div class="mb-3 col-md-12">
                  <label class="form-label" for="inputEmail4">Full name</label>
                  <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Your full name" value="{{ old('name', $user->name) }}">
                </div>
              </div>
    
              <div class="mb-3">
                <label class="form-label" for="inputAddress">Address</label>
                <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St" value="{{ old('address', $user->profile->address) }}">
              </div>
              <div class="mb-3">
                <label class="form-label" for="inputAddress2">Phone number</label>
                <input type="text" name="phone_number" class="form-control" id="inputAddress2" placeholder="+84xxxx" value="{{ old('phone_number', $user->profile->phone_number) }}">
              </div>
    
              <div class="row">
                <div class="mb-3 col-md-12">
                  <label class="form-label" for="inputState">Level</label>
                  <select id="inputState" name="level_id" class="form-control">
                    <option selected="selected">Choose level</option>
                    {
                      @foreach($levels as $level)
                        <option value="{{ $level->id }}" {{ $level->id == old('level_id', $user->profile->level_id) ? 'selected' : '' }}>{{ $level->name }}</option>
                      @endforeach
                    }
                  </select>
                </div>
                <div class="mb-3 col-md-12">
                  <label class="form-label" for="inputState">National</label>
                  <select id="inputState" name="national_id" class="form-control">
                    <option selected="selected">Choose national</option>
                    {
                      @foreach($nationals as $national)
                        <option value="{{ $national->id }}" {{ $national->id == old('national_id', $user->profile->national_id) ? 'selected' : '' }}>{{ $national->name }}</option>
                      @endforeach
                    }
                  </select>
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