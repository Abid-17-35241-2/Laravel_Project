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

          <a href="/superadmin/admincreate" class="btn submit" style="background-color: rgb(9, 196, 9)">
            <i class="now-ui-icons ui-1_simple-add"></i>
            ADD</a>
          @if(session('msg'))
          <div class="alert alert-success" role="alert">
            {{session('msg')}}
        </div>
        @endif
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="datatables" class="table table-dark table-borderless">
              <thead >
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">City</th>
                <th scope="col">Country</th>
                <th scope="col">Type</th>
                <th scope="col">Salary</th>
                <th scope="col">Action</th>

               </thead>

           <tbody>
               @foreach ($ad_list as $ad)
               <tr>
                <td> {{$ad->ad_Id}} </td>
                <td> {{$ad->ad_name}} </td>
                <td> {{$ad->ad_email}}</td>
                <td> {{$ad->city}}</td>
                <td> {{$ad->country}} </td>
                <td> {{$ad->type}} </td>
                <td> {{$ad->salary}} </td>
                <td>
                 <a href="/superadmin/adminedit/{{$ad->ad_Id}}" class="btn submit" style="background-color: rgb(9, 196, 9)" >EDIT</a>

                  <a href="/admin/delete/{{$ad->ad_Id}}" class="btn submit" style="background-color: red">Delete</a>
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
 <script>
     $(document).ready( function () {
    $('#datatables').DataTable();
} );
 </script>

 @endsection



