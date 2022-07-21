@extends('layouts.header')

@section('content')
<center>
    <div class="col-lg-6" style="margin-top: 250px;">
        <div class="card">
            <div class="card-header">
                <strong>Change</strong> Password
        </div>
        <div class="card-body card-block">
            <form  method="POST" class="form-horizontal" action="{{route('change')}}" >
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="hf-email" class=" form-control-label">Old Password</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="password" id="hf-email" name="oldpassword" placeholder="Enter old passowrd" class="form-control">
                        <!-- <span class="help-block">Please enter your old password</span> --><br>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="hf-password" class=" form-control-label">New Password</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="password" id="hf-password" name="newpassword" placeholder="Enter new Password..." class="form-control">
                        <!-- <span class="help-block">Please enter your new password</span> --><br>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="hf-password" class=" form-control-label">Re-type New Password</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="password" id="hf-password" name="rnewpassword" placeholder="Enter Re-type new Password..." class="form-control">
                        <!-- <span class="help-block">Please enter your Re-type new password</span> --><br>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary btn-sm" value="Change Password">
                
            </form>
        </div>
        <div class="card-footer">
            <a href="{{route('showprofile')}}"><button class="btn btn-warning btn-sm">
                <i class="fa fa-arrow-circle-left"></i> Go Back
            </button></a>
        </div>
    </div>
</div>
</center><br><br><br><br><br>
@endsection
