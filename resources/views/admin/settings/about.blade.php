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
                        <h2>About Update</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        @if(Session::has("status"))
                            <br>
                            <div class="alert alert-success">
                                {{Session::get('status')}}

                            </div>
                        @endif


                        <!-- / => en kök dizine çık ... ../ bir üst dizine çık -->
                        <form action="{{ route('admin.about_update') }}" method="POST" id="demo-form2"
                            data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <!-- Title Field -->
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title <span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" name="title" value="{{ $aboutSetting->title }}"
                                        placeholder="" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <!-- Description Fields -->
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                    for="description_az">Description_Az</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea id="description_az" name="description[az]"
                                        class="form-control">{{ old('description.az', $aboutSetting->description['az'] ?? '') }}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                    for="description_en">Description (English)</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea id="description_en" name="description[en]" class="form-control">
                                <!-- {{ old('description.en', $aboutSetting->description ? json_decode($aboutSetting->description, true)['en'] ?? '' : '') }} -->
{!!$aboutSetting->description ? json_decode($aboutSetting->description, true)['en'] : '' !!}
                </textarea>
                                </div>
                            </div>


                            <!-- Image Upload -->
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image">Image</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file" id="image" name="image" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <!-- Display Existing Image -->
                            @if($aboutSetting->image)
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <img src="{{ Storage::url($aboutSetting->image) }}" alt="About Image"
                                        style="max-width: 100%; height: auto;">
                                </div>
                            @endif

                            <div class="ln_solid"></div>

                            <!-- Submit Button -->
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