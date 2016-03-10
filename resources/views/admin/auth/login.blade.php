@extends('admin.layouts.master')

@section('content')

   {{-- admin login !--}}






    <div id="login-box-inner">
        <form role="form" action="registration-full.html">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input class="form-control" type="text" placeholder="Full name">
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input class="form-control" type="text" placeholder="Email address">
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" placeholder="Enter password">
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
                <input type="password" class="form-control" placeholder="Re-enter password">
            </div>
            <div id="remember-me-wrapper">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="checkbox-nice">
                            <input type="checkbox" id="terms-cond" checked="checked">
                            <label for="terms-cond">
                                I accept terms and conditions
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-success col-xs-12">Register</button>
                </div>
            </div>
        </form>
    </div>
@endsection
