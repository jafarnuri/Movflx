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
            <h2>Cars</h2>

            <div class="clearfix"></div>

            <div align="right">
              <a href=""><button class="btn btn-success btn-xs">Add New</button></a>

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
                  <th>Make</th>
                  <th>Model</th>
                  <th>Price_per_day</th>
                  <th>Year</th>
                  <th>Mileage</th>
                  <th>Transmission</th>
                  <th>Seats</th>
                  <th>Luggage</th>
                  <th>Fuel</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Image</th>

                  <th>
                    <center>Update</center>
                  </th>
                  <th>
                    <center>Delete</center>
                  </th>
                </tr>
              </thead>

              <tbody>

             
          <tr>
            <td width="20"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><img src="" alt=""> </td>
            <td>
            <center><a href=""><button
                class="btn btn-primary btn-xs"><i></i></button></a></center>
            </td>
            <td>
            <center><a href=""><button
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