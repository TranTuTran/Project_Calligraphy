@extends('admin.layout')
@section('content')
@include('admin.commons.flash-message')
<div class="container-fluid">
  <h4 class="c-grey-900 mT-10 mB-30">Lesson</h4>
  <div class="row">
    <div class="col-md-12">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <h4 class="c-grey-900 mB-20">Danh sach lesson</h4>
        <a class="btn btn-success" href="{{ route('admin.lesson.create') }}">Create lesson</a>
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>ID</th>
                <th>Thumbnail</th>
                <th>Title</th>
                <th>Short description</th>
                <th>Level</th>
                <th>National</th>
                <th>Category</th>
                <th>status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>ID</th>
                <th>Thumbnail</th>
                <th>Title</th>
                <th>Short description</th>
                <th>Level</th>
                <th>National</th>
                <th>Category</th>
                <th>status</th>
                <th>Action</th>
              </tr>
            </tfoot>
            <tbody>
                @foreach ($lessons as $lesson)
                  <tr>
                    <td>{{ $lesson->id }}</td>
                    <td><img src="{{ asset('storage/' . $lesson->thumbnail) }}" width="100" /></td>
                    <td>{{ $lesson->title }}</td>
                    <td>{{ $lesson->short_description }}</td>
                    <td>{{ $lesson->level->name }}</td>
                    <td>{{ $lesson->national->name }}</td>
                    <td>{{ $lesson->category->name }}</td>
                    <td>{{ $lesson->getStatusName() }}</td>
                    <td>
                      <a class="btn cur-p btn-info btn-color" href="{{ route('admin.lesson.edit', $lesson->id) }}">Edit</a>
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