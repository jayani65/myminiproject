@extends('layouts.master')
@section('title')
Roles

@endsection
@section('content')
<div class="container">
<div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Roles</h3>

                <div class="card-tools">
                  <a href="{{route('role.create')}}" class="btn btn-primary">Create new role</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Role</th>
                      <th>Permission</th>
                      <th>Date posted</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                 
                   @forelse($roles as $role)
                    <tr>
                      <td>{{$role->id}}</td>
                      <td>{{$role->name}}</td>
                      <td>
                      @foreach($role->permissions as $permission)
<button class="btn btn-warning" role="button" ><i class="fas fa-shield-alt"></i>{{$permission->name}}</button>
                      @endforeach
                      </td>
                      <td>
                      <span class="tag tag-success">{{$role->created_at}}</span>
                      <!-- <a href="{{route('role.edit',$role->id)}}" class="btn btn-sm btn-info">Edit role</a> -->
                     
                      </td>
                    </tr>
                    @empty
                    <tr><td><i class="fas fa-folder-open"></i>Not found</td></tr>
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
