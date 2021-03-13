@extends('layouts.main')


@section('title')
    Edit Client
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            <h3>Edit Client Info</h3>

        </div>
        <div class="card-body">
        <form method="post">
             @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="clientname" value="{{$client['clientname']}}">
            </div>

            <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" name="clientemail" value="{{$client['clientemail']}}">
            </div>

            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="address" value="{{$client['address']}}">
            </div>
            <div class="form-group">
                <label>Country</label>
                <input type="text" class="form-control" name="country" value="{{$client['country']}}">
            </div>
            <div class="form-group">
                <label>Salary</label>
                <input type="text" class="form-control" name="salary" value="{{$client['salary']}}">
            </div>



              <div class="form-group">
                <label>Role </label>
                <select name="type">
                    <option value="admin" @if ($client['type'] == 'admin') selected @endif >ADMIN</option>
                    <option value="client" @if ($client['type'] == 'Client') selected @endif >Client</option>

                </select>
              </div>
              <button type="submit" class="btn submit" style="background-color: rgb(9, 196, 9)">Update</button>
             <a href="/superadmin/clientlist" class="btn submit" style="background-color: red">Cancle</a>

        </form>
        </div>
      </div>
    </div>

@endsection

@section('scripts')

@endsection
