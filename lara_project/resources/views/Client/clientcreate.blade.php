@extends('layouts.main')


@section('title')
    Edit Client
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            <h3>Create New Client</h3>

        </div>
        <div class="card-body">
        <form method="post">
             @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="clientname" value="{{old('clientname')}}">
                <span style="color: red">{{ $errors->first('clientname') }}</span>
            </div>

            <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" name="clientemail" value="{{old('clientemail')}}">
                <span style="color: red">{{ $errors->first('clientemail') }}</span>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="clientpassword">

            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" name="cpassword">
                <span style="color: red">{{ $errors->first('cpassword') }}</span>

            </div>

            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="address" value="{{old('address')}}">
                <span style="color: red">{{ $errors->first('address') }}</span>
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
                <label>Role </label>
                <select name="type">
                    <option value="admin" {{-- @if ($client['type'] == 'admin') selected @endif --}} >ADMIN</option>
                    <option value="client" {{-- @if ($client['type'] == 'Client') selected @endif  --}}>Client</option>
                    <span style="color: red">{{ $errors->first('type') }}</span>

                </select>
              </div>
              <button type="submit" class="btn submit" style="background-color: rgb(9, 196, 9)">Create</button>
              <a href="/superadmin/clientlist" class="btn submit" style="background-color: red">Cancle</a>

        </form>
        </div>
      </div>
    </div>

@endsection

@section('scripts')

@endsection
