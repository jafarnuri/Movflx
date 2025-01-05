@extends('admin_layout.master')

@section('contect')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <br>
            <br>
            <h2>Users</h2>

            <div class="clearfix"></div>

            <div align="right">
              <a href="{{route('admin.register')}}"><button class="btn btn-success btn-xs">Add New</button></a>

            </div>
          </div>
          <div class="x_content">


          
        <br>
        <div class="alert alert-success">
      

        </div>
 


            <!-- Div İçerik Başlangıç -->
            <input type="hidden" {{$say = '1'}}>

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap"
              cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Nomber</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>
                    <center>Delete</center>
                  </th>
                </tr>
              </thead>

              <tbody>

             @foreach ($users as $user)
             <tr>
            <td width="20">{{$say}}</td>
            <td><img src="" alt=""> </td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
       
            <td>
            <center><a href="{{ route('admin.user.send_confirmation_email', $user->id) }}"><button
                class="btn btn-danger btn-xs"><i></i></button></a>
            </center>
            </td>
          </tr>
          <input type="hidden" {{$say++}}>
      
             @endforeach
   
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- /page content -->
@endsection