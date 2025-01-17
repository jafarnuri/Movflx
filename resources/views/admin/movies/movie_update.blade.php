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
            <h2>Blog Update</h2>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">

          <form action="{{route('admin.mov_edit', $movie->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                               
                               <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" value="{{$movie->title}}" class="form-control"  required>
                         
                            </div>
                            
                            <!-- Slug -->
                            <div class="form-group">
                                <label for="slug">Subtitle</label>
                                <input type="text" name="subtitle" value="{{$movie->subtitle}}" class="form-control">

                            </div>

                         <!-- Category -->
                         <div class="form-group">
        <label for="category_id">Select Category</label>
        <select name="category_id" class="form-control">
            <option value="">-- Select Category --</option>
            @foreach($category as $categories)
                <option value="{{ $categories->id }}" 
                    {{ $categories->id == $movie->category_id ? 'selected' : '' }}>
                    {{ $categories->name }}
                </option>
            @endforeach
        </select>
    </div>
                           
<!-- Release -->
<div class="form-group">
    <label for="release_year">Release Year</label>
    <input type="number" name="release_year" value="{{$movie->release_year}}"  class="form-control" required min="1900" max="2100">
</div>
<!-- Quality -->
<div class="form-group">
    <label for="quality">Quality</label>
    <input type="text" name="quality" value="{{$movie->quality}}" class="form-control" required>
</div>


                            <div class="form-group">
    <label for="duration">Duration (in minutes)</label>
    <input type="number" name="duration" value="{{$movie->duration}}" class="form-control" required min="1">
</div>
                            <div class="form-group">
    <label for="trailer_url">Trailer URL</label>
    <input type="url" name="trailer_url" value="{{$movie->trailer_url}}" class="form-control" required>
</div>
<div class="form-group">
    <label for="movie_url">Movie URL</label>
    <input type="url" name="movie_url" value="{{$movie->movie_url}}" class="form-control" required>
</div>
                  
                            <div class="form-group">
                                <label for="content">Description</label>
                     
                                <input type="text" value="{{$movie->description}}" name="description" class="form-control" required>
                                
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
                            <!-- Image -->
                            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="file" id="first-name" name="poster_image" class="form-control col-md-7 col-xs-12">
                </div>
              </div>


              @if($movie->poster_image)
          <div class="col-md-6 col-sm-6 col-xs-12">
          <img src="{{ Storage::url($movie->poster_image) }}" alt="Car Image" style="max-width: 100%; height: auto;">
          </div>
        @endif


        <div class="ln_solid"></div>
              <div class="form-group">
                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button type="submit" name="" class="btn btn-success">Update</button>
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