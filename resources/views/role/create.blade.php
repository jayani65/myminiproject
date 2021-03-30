@extends('layouts.master')
@section('title')
Create Role

@endsection

@section('content')
<div class="card card-primary">
<div class=" card-header">
<h3 class="card-Title">
Add new Role
</h3>
<div class="card-tools">
<a href="{{route('permission.index')}}" class="btn btn-primary">All roles</a>
</div>
</div>

<div class=" card-body">
<role></role>
</div>


</div>

@endsection