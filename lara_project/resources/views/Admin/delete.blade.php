@extends('layouts.main')


@section('title')
    Edit Admin
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            <h3>Are you sure?</h3>

        </div>
        <div class="card-body">
        <form method="post">
             @csrf

              </div>
              <button type="submit" class="btn submit" style="background-color: rgb(9, 196, 9)">Confirm</button>
             <a href="/superadmin/adminlist" class="btn submit" style="background-color: red">Cancle</a>

        </form>
        </div>
      </div>
    </div>

@endsection

@section('scripts')

@endsection
