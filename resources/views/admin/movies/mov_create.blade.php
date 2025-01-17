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
                        <h2>Add new movie</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">


                        <form action="{{route('admin.mov_store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                               
                               <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control"  required>
                         
                            </div>
                            
                            <!-- Slug -->
                            <div class="form-group">
                                <label for="slug">Subtitle</label>
                                <input type="text" name="subtitle" class="form-control">

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
                           
<!-- Release -->
<div class="form-group">
    <label for="release_year">Release Year</label>
    <input type="number" name="release_year" class="form-control" required min="1900" max="2100">
</div>
<!-- Quality -->
<div class="form-group">
    <label for="quality">Quality</label>
    <input type="text" name="quality" class="form-control" required>
</div>


                            <div class="form-group">
    <label for="duration">Duration (in minutes)</label>
    <input type="number" name="duration" class="form-control" required min="1">
</div>
                            <div class="form-group">
    <label for="trailer_url">Trailer URL</label>
    <input type="url" name="trailer_url" class="form-control" required>
</div>
<div class="form-group">
    <label for="movie_url">Movie URL</label>
    <input type="url" name="movie_url" class="form-control" required>
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
                            <div class="form-group">
                                <label for="content">Description</label>
                     
                                <input type="text" name="description" class="form-control" required>
                                
                            </div>
                            <!-- Image -->
                            <div class="form-group">
                                <label for="image">Poster_image</label>
                                <input type="file" required name="poster_image" class="form-control">

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