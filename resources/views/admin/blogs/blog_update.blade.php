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

            <form action="{{ route('admin.blog_update', $blogs->id) }}" method="POST" id="demo-form2"
              enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
              @csrf
              @method('PUT')
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="title" value="{{$blogs->title}}"
                    class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Content
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="content" value="{{$blogs->content}}"
                    class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Description
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="description" value="{{$blogs->description}}"
                    class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Author
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="author" value="{{$blogs->author}}"
                    class="form-control col-md-7 col-xs-12">
                </div>
              </div>
        
    <div class="form-group">
        <label for="category_id">Select Category</label>
        <select name="category_id" class="form-control">
            <option value="">-- Select Category --</option>
            @foreach($blogcategories as $category)
                <option value="{{ $category->id }}" 
                    {{ $category->id == $blogs->category_id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>
 

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="file" id="first-name" name="image" class="form-control col-md-7 col-xs-12">
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

              @if($blogs->image)
          <div class="col-md-6 col-sm-6 col-xs-12">
          <img src="{{ Storage::url($blogs->image) }}" alt="Car Image" style="max-width: 100%; height: auto;">
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