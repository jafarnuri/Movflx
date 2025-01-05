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
                        <h2>Add new blog</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">


                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                             <!-- Title -->
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" required>
                                
                            </div>
                            
                            <!-- Slug -->
                            <div class="form-group">
                                <label for="slug">Slug</label>
                                <input type="hidden" name="slug" class="form-control">

                            </div>

                            <!-- Category -->
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Select Category: <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-6">

                                    <select class="select2_multiple form-control" name="category_id">

                                        <option value=""></option>
                                        
                                    </select>
                                </div>
                            </div>
                           
                           

                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea name="content" class="form-control" required></textarea>

                            </div>

                            <div class="form-group">
                                <label for="content">Author</label>
                                <textarea name="author" class="form-control" required></textarea>

                            </div>

                            <!-- Image -->
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control">

                            </div>

                 

                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- /page content -->
@endsection