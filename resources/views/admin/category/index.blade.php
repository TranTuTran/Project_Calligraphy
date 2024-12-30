@extends('admin.layout')
@section('content')
@include('admin.commons.flash-message')
<div class="container-fluid">
  <h4 class="c-grey-900 mT-10 mB-30">Categories</h4>
  <div class="row">
    <div class="col-md-12">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <h4 class="c-grey-900 mB-20">Danh sach category</h4>
        <a class="btn btn-success" href="{{ route('admin.category.create') }}">Create category</a>
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>ID</th>
                <th>Thumbnail</th>
                <th>Name</th>
                <th>Description</th>
                <th>status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>ID</th>
                <th>Thumbnail</th>
                <th>Name</th>
                <th>Description</th>
                <th>status</th>
                <th>Action</th>
              </tr>
            </tfoot>
            <tbody>
                @foreach ($categories as $category)
                  <tr>
                    <td>{{ $category->id }}</td>
                    <td><img src="{{ asset('storage/' . $category->thumbnail) }}" width="100" /></td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>{{ $category->getStatusName() }}</td>
                    <td>
                      <a class="btn cur-p btn-info btn-color" href="{{ route('admin.category.edit', $category->id) }}">Edit</a>
                      @if($category->isShow())  
                        <a class="btn cur-p btn-danger btn-color" href="{{ route('admin.category.hide-category', $category->id) }}" onclick="confirm('Are you sure?')">Hide category</button>
                      @else
                        <a class="btn cur-p btn-info btn-color" href="{{ route('admin.category.show-category', $category->id) }}" onclick="confirm('Are you sure?')">Show category</button>
                      @endif
                    </td>
                  </tr>
                @endforeach
              
            </tbody>
          </table>
      </div>
    </div>
  </div>
</div>
@endsection