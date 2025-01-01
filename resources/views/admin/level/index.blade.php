@extends('admin.layout')
@section('content')
@include('admin.commons.flash-message')
<div class="container-fluid">
  <h4 class="c-grey-900 mT-10 mB-30">Levels</h4>
  <div class="row">
    <div class="col-md-12">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <h4 class="c-grey-900 mB-20">Danh sach level</h4>
        <a class="btn btn-success" href="{{ route('admin.level.create') }}">Create level</a>
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Number of students</th>
                <th>Number of lessons</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Number of students</th>
                <th>Number of lessons</th>
                <th>Action</th>
              </tr>
            </tfoot>
            <tbody>
                @foreach ($levels as $level)
                  <tr>
                    <td>{{ $level->id }}</td>
                    <td>{{ $level->name }}</td>
                    <td>{{ $level->description }}</td>
                    <td>{{ $level->students->count() }}</td>
                    <td>{{ $level->lessons->count() }}</td>
                    <td>
                      <a class="btn cur-p btn-info btn-color" href="{{ route('admin.level.edit', $level->id) }}">Edit</a>
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