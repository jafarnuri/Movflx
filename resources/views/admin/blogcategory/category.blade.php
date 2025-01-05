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
            <h2>Blogs Category</h2>

            <div class="clearfix"></div>

            <div align="right">
              <a href="{{route('admin.blogcategory_create')}}"><button class="btn btn-success btn-xs">Add New</button></a>

            </div>
          </div>
          <div class="x_content">




            <!-- Div İçerik Başlangıç -->
            <input type="hidden" {{$say = '1'}}>

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Number</th>
                  <th>Name</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
              @foreach ($category as $categories )
             
            
             <tr>
               <td width="20">{{$say}}</td>
               <td>{{$categories->name}}</td>
               <td>{{$categories->status}}</td>
               <td>
               
               <a href="" class="btn btn-danger" >Delete</a>
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