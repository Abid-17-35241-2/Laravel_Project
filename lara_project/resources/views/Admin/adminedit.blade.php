@extends('layouts.main')


@section('title')
    Edit Admin
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            <h3>Edit Admin Info</h3>

        </div>
        <div class="card-body">
        <form method="post">
             @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="ad_name" value="{{$ad['ad_name']}}">
            </div>

            <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" name="ad_email" value="{{$ad['ad_email']}}">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="ad_password" value="{{$ad['ad_password']}}">
            </div>



              <div class="form-group">
                <label>Role </label>
                <select name="usertype">
                    <option value="admin" @if ($ad['usertype'] == 'admin') selected @endif >ADMIN</option>
                    <option value="user" @if ($ad['usertype'] == 'user') selected @endif >USER</option>

                </select>
              </div>
              <button type="submit" class="btn submit" style="background-color: rgb(9, 196, 9)">Update</button>
             <a href="/superadmin/adminlist" class="btn submit" style="background-color: red">Cancle</a>

        </form>
        </div>
      </div>
    </div>

@endsection

@section('scripts')

@endsection
