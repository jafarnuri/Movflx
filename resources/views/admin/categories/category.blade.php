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
            <h2>{{__('msg.categories')}}</h2>

            <div class="clearfix"></div>

            <div align="right">
              <a href=""><button class="btn btn-success btn-xs">Add New</button></a>

            </div>
          </div>
          <div class="x_content">




            <!-- Div İçerik Başlangıç -->
            <input type="hidden" {{$say = '1'}}>

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>{{__('msg.number')}}</th>
                  <th>{{__('msg.name')}}</th>
                  <th>{{__('msg.status')}}</th>
                  <th>{{__('msg.action')}}</th>
                </tr>
              </thead>

              <tbody>
              
          <tr>
            <td width="20">{{$say}}</td>
            <td></td>
            <td></td>
            <td>
            <a href="" class="btn btn-info">Edit</a>
            <a href="" class="btn btn-danger" onclick="confirm('Are You Sure To Delete This Item?')">Delete</a>
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