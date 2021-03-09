@extends('layouts.main')


@section('title')
    List
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Admin Table</h4>
          @if(session('msg'))
          <div class="alert alert-success" role="alert">
            {{session('msg')}}
        </div>
        @endif
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Country</th>
                <th>Type</th>
                <th>EDIT</th>
                <th>DELETE</th>
               </thead>

           <tbody>
               @foreach ($ad_list as $ad)
               <tr>
                <td> {{$ad->ad_Id}} </td>
                <td> {{$ad->ad_name}} </td>
                <td> {{$ad->ad_email}}</td>
                <td> {{$ad->country}} </td>
                <td> {{$ad->usertype}} </td>
                <td>
                 <a href="/superadmin/adminedit/{{$ad->ad_Id}}" class="btn submit" style="background-color: rgb(9, 196, 9)" >EDIT</a>
              </td>
                <td>
                  <a href="#" class="btn submit" style="background-color: red">Delete</a>
                </td>
              </tr>
               @endforeach

              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>

@endsection

@section('scripts')

@endsection
