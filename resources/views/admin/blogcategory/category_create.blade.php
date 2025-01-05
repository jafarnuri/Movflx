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
                        <h2>Blog Category</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">




                        <!-- / => en kök dizine çık ... ../ bir üst dizine çık -->
                        <form action="{{route('admin.blogcategory_store')}}" method="POST" id="demo-form2" data-parsley-validate
                            class="form-horizontal form-label-left" enctype="multipart/form-data">
                            @csrf

                            <!-- Title Field -->

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name<span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" name="name" required="required"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Status</label>
                                    <select name="status" class="form-control">
                                        <option value="1" selected>Active</option>
                                        <option value="0">Passive</option>
                                    </select>

                                </div>
                            </div>
                            <div class="ln_solid"></div>

                            <!-- Submit Button -->
                            <div class="form-group">
                                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" name="" class="btn btn-success">Save</button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- /page content -->
@endsection