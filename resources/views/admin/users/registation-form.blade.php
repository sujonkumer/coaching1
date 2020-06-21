<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coaching | Registation Form</title>
    <!--    Bootstrap-4.3 Stylesheet-->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css')}}">
    <!--    Theme Stylesheet-->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.png')}} " type="image/x-icon">
</head>
<body>

<!--Content Start-->
<section class="container-fluid">
    <div class="row content login-form">
        <div class="col-12 pl-0 pr-0">
            <div class="form-group">
                <div class="col-sm-12">
                    <h4 class="text-center font-weight-bold font-italic mt-3">User Registration Form</h4>
                </div>
            </div>
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" autocomplete="" class="form-inline">
            @csrf
                <div class="form-group col-12 mb-3">
                    <label for="role" class="col-sm-3 col-form-label text-right">Role</label>
                    <select name="role" class="form-control @error('role') is-invalid @enderror col-sm-9" id="role">
                        <option value="">Select Role</option>
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                    </select>
                    @error('role')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-12 mb-3">
                    <label for="name" class="col-sm-3 col-form-label text-right">Name</label>
                    <input id="name" type="text" class="col-sm-9 form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}" placeholder="Name" required autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-12 mb-3">
                    <label for="mobile" class="col-sm-3 col-form-label text-right">Mobile</label>
                    <input id="mobile" type="text" class="col-sm-9 form-control @error('mibile') is-invalid @enderror" name="mobile" value="" placeholder="8801xxxxxxxxx" required autofocus>
                    @error('mobile')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-12 mb-3">
                    <label for="email" class="col-sm-3 col-form-label text-right">E-Mail Address</label>
                    <input id="email" type="email" class="col-sm-9 form-control @error('email') is-invalid @enderror" name="email" value="" placeholder="Email Address" required autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-12 mb-3">
                    <label for="password" class="col-sm-3 col-form-label text-right">Password</label>
                    <input id="password" type="password" class="col-sm-9 form-control @error('password') is-invalid @enderror"" name="password" placeholder="Password" required autofocus>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-12 mb-3">
                    <label for="password-confirm" class="col-sm-3 col-form-label text-right">Confirm Password</label>
                    <input id="password-confirm" type="password" class="col-sm-9 form-control" name="password_confirmation" placeholder="Confirm Password" required autofocus>
                </div>

                <div class="form-group col-12 mb-3">
                    <label class="col-sm-3"></label>
                    <button type="submit" class="col-sm-9 btn btn-block my-btn-submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>
<!--Content End-->
</body>
</html>