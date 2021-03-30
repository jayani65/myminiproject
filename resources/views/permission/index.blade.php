@extends('layouts.master')
@section('title')
Permission

@endsection
@section('content')
<div class="container">
<div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Permissions</h3>

                <div class="card-tools">
                  <a href="{{route('permission.create')}}" class="btn btn-primary">Create new permission</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Date posted</th>
                      <th>Action</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                 
                   @forelse($permissions as $permission)
                    <tr>
                      <td>{{$permission->id}}</td>
                      <td>{{$permission->name}}</td>
                      <td>{{$permission->created_at}}</td>
                      <td>
                      <a href="{{route('permission.edit',$permission->id)}}" class="btn btn-sm btn-info">Edit permissions</a>
                     
                      </td>
                    </tr>
                    @empty
                    <tr>Not found</tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
</div>
@endsection
