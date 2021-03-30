@extends('layouts.master')
@section('title')
Create Permission

@endsection

@section('content')
<div class="card card-primary">
<div class=" card-header">
<h3 class="card-Title">
Add new permission
</h3>
<div class="card-tools">
<a href="{{route('permission.index')}}" class="btn btn-primary">All permissions</a>
</div>
</div>
<form method="POST" action= "{{route('permission.store')}}">
@csrf 
<div class=" card-body">
<div class="form-group">
<label for="name"> Permission Name </label>
<input id="name" type="text" class="form-control @error('password') is-invalid @enderror" name="name" value="{{ old('name') }}"required autocomplete="name">
@error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


</div>
</div>

<div class="card-footer">
<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Create permission</button>
</div>
</form>
</div>

@endsection