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
                        <h2>Contact Message</h2>

                        <div class="clearfix"></div>

                    </div>
                    <div class="x_content">


                        @if(Session::has("status"))
                            <br>
                            <div class="alert alert-success">
                                {{Session::get('status')}}

                            </div>
                        @endif


                        <!-- Div İçerik Başlangıç -->
                        <input type="hidden" {{$say = '1'}}>

                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap"
                            cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Nomber</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>
                                        <center></center>
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
                                    <td>
                                        <center><a href=""><button class="btn btn-primary btn-xs"><i
                                                        class="fa fa-rotate-right"></i></button></a></center>
                                    </td>
                                    <td>
                                        <center><a href=""><button class="btn btn-danger btn-xs"><i
                                                        class="fa fa-trash"></i></button></a>
                                        </center>
                                    </td>
                                </tr>
                                <input type="hidden">

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