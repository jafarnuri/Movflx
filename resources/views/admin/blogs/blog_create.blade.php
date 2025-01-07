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


                        <form action="{{route('admin.blog_store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                               
                               <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" value="" required>
                         
                            </div>
                            
                            <!-- Slug -->
                            <div class="form-group">
                                <label for="slug">Slug</label>
                                <input type="hidden" name="slug" class="form-control">

                            </div>

                         <!-- Category -->
                           <div class="form-group">
                                <label for="category_id">Select Category</label>
                                <select name="category_id" class="form-control">
                                    <option value="">-- Select Category --</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>

                            </div>
                           
<!-- Content -->
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea name="content" class="form-control" required></textarea>

                            </div>
<!-- Author -->
                            <div class="form-group">
                                <label for="content">Author</label>
                     
                                <input type="text" name="author" class="form-control" required>
                                
                            </div>
                   
                            <!-- Image -->
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" required name="image" class="form-control">

                            </div>

                 

                            <button type="submit" name="" class="btn btn-primary">Save</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- /page content -->
@endsection