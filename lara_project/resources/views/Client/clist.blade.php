@extends('layouts.main')


@section('title')
    List
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Client List</h4>
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
                <th>Type</th>
                <th>Address</th>
                <th>Country</th>
                <th>Salary</th>
                <th>EDIT</th>
                <th>DELETE</th>
               </thead>
            <tbody>
                @foreach ($client as $client)
                  <tr>
                   <td> {{$client->client_Id}} </td>
                   <td> {{$client->clientname}} </td>
                   <td> {{$client->clientemail}} </td>
                   <td> {{$client->type}}</td>
                   <td> {{$client->address}}</td>
                   <td> {{$client->country}}</td>
                   <td> {{$client->salary}}</td>

                   <td>
                    <a href="/superadmin/clientedit/{{$client->client_Id}}" class="btn submit" style="background-color: rgb(9, 196, 9)" >EDIT</a>
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

      <a href="/superadmin/clientcreate" class="btn submit" style="background-color: rgb(9, 196, 9)">
        <i class="now-ui-icons ui-1_simple-add"></i>
        Create Client</a>
    </div>

@endsection

@section('scripts')

@endsection
