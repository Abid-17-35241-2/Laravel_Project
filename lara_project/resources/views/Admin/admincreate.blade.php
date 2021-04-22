@extends('layouts.main')


@section('title')
    Create Admin
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card" style="background-color: rgb(215, 253, 253)">
        <div class="card-header">
            <h3>Create New Admin</h3>

        </div>
        <div class="card-body">
        <form method="post">
             @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="ad_name" value="{{old('ad_name')}}">
                <span style="color: red">{{ $errors->first('ad_name') }}</span>
            </div>

            <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" name="ad_email" value="{{old('ad_email')}}">
                <span style="color: red">{{ $errors->first('ad_email') }}</span>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="ad_password">

            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" name="cpassword">
                <span style="color: red">{{ $errors->first('cpassword') }}</span>

            </div>

            <div class="form-group">
                <label>City</label>
                <input type="text" class="form-control" name="city" value="{{old('city')}}">
                <span style="color: red">{{ $errors->first('city') }}</span>
            </div>
            <div class="form-group">
                <label>Country</label>
                <input type="text" class="form-control" name="country" value="{{old('country')}}">
                <span style="color: red">{{ $errors->first('country') }}</span>
            </div>
            <div class="form-group">
                <label>Salary</label>
                <input type="text" class="form-control" name="salary" value="{{old('salary')}}">
                <span style="color: red">{{ $errors->first('salary') }}</span>
            </div>



              <div class="form-group">
                <label>Type </label>
                <input type="text" class="form-control" name="type">
              </div>
              <button type="submit" class="btn submit" style="background-color: rgb(9, 196, 9)">Create</button>
              <a href="/superadmin/adminlist" class="btn submit" style="background-color: red">Cancle</a>

        </form>
        </div>
      </div>
    </div>

@endsection

@section('scripts')

@endsection
