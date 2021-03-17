@extends('layouts.master')
@section('title')
Profile
@endsection
@section('content')
<section class="content">

      <div class="row">
      
        <div class="col-md-3">
        
          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">

              <h3 class="profile-username text-center" style ="text-transform:uppercase">{{auth()->user()->name}}</h3>

              <!-- <p class="text-muted text-center">{{auth()->user()->role}}</p>   -->
              <p class="text-muted text-center">{{auth()->user()->email}}</p>
              <!-- <p class="text-muted text-center">{{auth()->user()->phone}}</p> -->

             
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card">
            <div class="card-header">
            <h4>Edit Profile</h4>
            </div>

            <div class="card-body">
            

              <div>
                <form class="form-horizontal" method="POST" action="{{route('user.postprofile')}}" >
                @csrf
                
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                    <input id="email" type="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('siteemail')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  <div class="form-group">
                    <label for="phone" class="col-sm-2 control-label">Phone number</label>
                    <input id="text" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    
                  </div>
                  
                  
                  
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-primary"><i class="fas fa-user-edit"></i>Update profile</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    
@endsection
