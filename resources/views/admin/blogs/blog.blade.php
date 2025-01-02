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
                            <a href="{{route('admin.blog_create')}}"><button class="btn btn-success btn-xs">Add
                                    New</button></a>

                        </div>
                    </div>
                    <div class="x_content">




                        <!-- Div İçerik Başlangıç -->
                        <input type="hidden" {{$say = '1'}}>

                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap"
                            cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Nomber</th>
                                    <th>Image</th>
                                    <th>Category</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Action</th>


                                </tr>
                            </thead>

                            <tbody>


                                <tr>

                                    <td width="20"></td>
                                    <td><img src="" alt="Blog Image"> </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>


                                    <td>
                                        <a href="" class="btn btn-info">Edit</a>
                                        <a href="" class="btn btn-danger"
                                            onclick="confirm('Are You Sure To Delete This Item?')">Delete</a>
                                    </td>
                                </tr>
                                <input type="hidden" {{$say++}}>

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