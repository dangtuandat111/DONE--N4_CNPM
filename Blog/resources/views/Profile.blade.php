@extends('master')
@section ('Title', 'Travel')
@section('Main')

<!-- Side-bar Here -->
<div class = "share-side-bar">
    <nav>
        <ul>
            <li><a href="#"><i class="fab fa-facebook-f"></i><span>Facebook</span></a></li>
            <li><a href="#"><i class="fab fa-twitter" ></i><span>Twitter</span></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i><span>Instagram</span></a></li>
            <li><a href="#"><i class="fab fa-youtube"></i><span>Youtube</span></a></li>
        </ul>
    </nav>
</div>
<!-- Side-bar End Here -->

@if(session('thongbao')) 
  <div class="alert alert-success" id = 'alert' onmouseover='HideMess();'>
    <span class="closebtn">&times;</span>  
    <strong>Thông báo!</strong><br>
    {{session('thongbao')}}
  </div>
@endif

@if(count($errors) > 0)
  <div class='alert alert-danger' id = 'alert' onmouseover='HideMess();'>  
    <strong>Lỗi!</strong><br> 
    @foreach ($errors->all() as $error)
      {{ $error }}
      @break;
    @endforeach
</div>
@endif

<div class="blog-posts grid-system">
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px" 
                    src="{{ asset('upload/'.$user[0]->Image) }}" alt="Avatar">
                    <span class="font-weight-bold"><?php echo $user[0]->FirstName.' '.$user[0]->LastName;?></span>
                    <span class="text-black-50"><?php $user[0]->Email;?></span>
                    <span class="text-black-50"><?php echo ('About me:'.$user[0]->About); ?></span><span> </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <form action = "{{ url('/SubmitProfile/') }}" method = "POST" enctype= 'multipart/form-data'>
                        <input type = "hidden"  name = "_token" value = "{{csrf_token()}}" />
                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">First Name</label>
                            <input type="text" class="form-control" placeholder="First Name" name="First_Name" value="{{$user[0]->FirstName}}"></div>

                            <div class="col-md-6"><label class="labels">Last Name</label>
                            <input type="text" class="form-control" name="Last_Name" placeholder="Last Name" value="{{$user[0]->LastName}}"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Phone Number</label>
                            <input type="text" class="form-control" placeholder="Enter Phone Number" name="Phone" value="{{$user[0]->Phone}}"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Image Avatar</label>
                            <input type="file" class="form-control" placeholder="Image" name="Image" value="{{$user[0]->Image}}"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">About</label>
                            <input type="text" class="form-control" placeholder="About" name="About" value="{{$user[0]->About}}"></div>
                        </div>
                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience">
                    <h4 class="text-right">Profile Settings</h4>
                </div><br>
            </div>
            <form action="{{url('resetPass')}}" method="post">
                <input type = "hidden" name = "_token" value = "{{ csrf_token() }}">
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" name = "Email" value = "{{old('Email')}}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Old Password" name = "Old_Password" >
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name = "Password" >
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Confirm Password" name = "Confirm_Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Thay đổi mật khẩu</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('Script')
<script>

</script>
@stop() 