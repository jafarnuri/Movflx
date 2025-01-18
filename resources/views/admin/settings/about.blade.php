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
                        <h2>About</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">


                        <!-- / => en kök dizine çık ... ../ bir üst dizine çık -->
                        <form action="{{route('admin.about_update')}}" method="POST" id="demo-form2" data-parsley-validate enctype="multipart/form-data"
                            class="form-horizontal form-label-left">

                            @csrf
@method('PUT')
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" name="title" value="{{$about->title}}" 
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Vidio Link
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" name="video_link" value="{{$about->video_link}}" 
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Release Date
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" name="release_date" value="{{$about->release_date}}" 
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Duration
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" name="duration" value="{{$about->duration}}" 
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
        <label for="category_id">Select Category</label>
        <select name="category_id" class="form-control">
            <option value="">-- Select Category --</option>
            @foreach($category as $categories)
                <option value="{{ $categories->id }}" 
                    {{ $categories->id == $about->category_id ? 'selected' : '' }}>
                    {{ $categories->name }}
                </option>
            @endforeach
        </select>
    </div>

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