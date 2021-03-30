@extends('layouts.master')
@section('title')
Change password
@endsection
@section('content')
<section class="content">

          <div class="card">
            <div class="card-header">
            <h4>Edit Profile</h4>
            </div>

            <div class="card-body">
            

              <div>
                <form class="form-horizontal" method="POST" action="{{route('userpostpassword')}}" >
                @csrf
                
                 <div class="row">
                 <div class="col-md-12">
                 <div class="form-group">
                 <label for="newpassword" >Enter new password</label>
                    <input id="newpassword" type="password" class="form-control @error('newpassword') is-invalid @enderror" name="newpassword" value="{{ old('newpassword') }}" required autocomplete="newpassword" autofocus>
                    @error('newpassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                 </div>
                 <div class="form-group">
                 <label for="newpassword_confirmation" >Reenter new password</label>
                    <input id="newpassword_confirmation" type="password" class="form-control @error('newpassword_confirmation') is-invalid @enderror" name="newpassword_confirmation" value="{{ old('newpassword_confirmation') }}" required autocomplete="newpassword_confirmation" autofocus>
                    @error('newpassword_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                 </div>
                 <div class="col-md-12">
                 <div class="form-group button">
                 <button type="submit" class="btn btn-primary">Change password</div>
                 </div>
                 </div>
                 </div>
                 </div>
                  
                 
                  
                  
                 
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
      
        <!-- /.col -->
     
      <!-- /.row -->

    </section>
    
@endsection
