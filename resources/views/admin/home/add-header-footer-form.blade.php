@extends('admin.master')
@section('content')
<!--Content Start-->
<section class="container-fluid">
    <div class="row content ">
        <div class="col-12 pl-0 pr-0">
            <div class="form-group">
                <div class="col-sm-12">
                    <h4 class="text-center font-weight-bold font-italic mt-3">Headre And Footer Add Form</h4>
                </div>
            </div>
            <form method="POST" action="{{ route('header-and-footer-save') }}" enctype="multipart/form-data" autocomplete="" class="form-inline">
            @csrf

            <div class="form-group col-12 mb-3">
                <label for="ownarName" class="col-sm-3 col-form-label text-right">OwnarName</label>
                <input id="ownarName" type="text" class="col-sm-9 form-control @error('ownarName') is-invalid @enderror" name="ownarName" placeholder="Ownar Name" value="{{ old('ownarName') }}" required autocomplete="ownarName" autofocus>
                @error('ownarName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group col-12 mb-3">
                <label for="ownerDepartment" class="col-sm-3 col-form-label text-right">Owner Department</label>
                <input id="ownerDepartment" type="text" class="col-sm-9 form-control @error('ownerDepartment') is-invalid @enderror" name="ownerDepartment" placeholder="Ownar Department" value="{{ old('ownerDepartment') }}" required autocomplete="ownerDepartment" autofocus>
                @error('ownarownerDepartmentName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group col-12 mb-3">
                <label for="mobile" class="col-sm-3 col-form-label text-right">Mobile</label>
                <input id="mobile" type="text" class="col-sm-9 form-control" name="mobile" value="{{ old('mobile') }}" placeholder="8801xxxxxxxxx" autocomplete="mobile" required>
            </div>

            <div class="form-group col-12 mb-3">
                <label for="address" class="col-sm-3 col-form-label text-right">Address</label>
                <input id="address" type="text" class="col-sm-9 form-control @error('address') is-invalid @enderror" name="address" placeholder="Address" value="{{ old('address') }}" autocomplete="address" required>
                @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group col-12 mb-3">
                <label for="copyright" class="col-sm-3 col-form-label text-right">Copyright</label>
                <input id="copyright" type="text" class="col-sm-9 form-control @error('copyright') is-invalid @enderror" name="copyright" placeholder="copyright text" value="{{ old('copyright') }}" autocomplete="copyright" required>
                @error('copyright')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <input type="hidden" name="status" value="1">


            <div class="form-group col-12 mb-3">
                <label class="col-sm-3"></label>
                <button type="submit" class="col-sm-9 btn btn-block my-btn-submit">Submit</button>
            </div>
            </form>
        </div>
    </div>
</section>
<!--Content End-->
@endsection
