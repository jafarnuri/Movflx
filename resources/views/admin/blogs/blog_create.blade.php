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



                            <!-- Category -->
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kategori
                                    Seç<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-6">

                                    <select class="select2_multiple form-control" name="category_id">

                                        <option value=""></option>

                                    </select>
                                </div>
                            </div>
                            <!-- Title (Languages) -->
                            <div class="form-group">
                                <label for="title_en">{{__('msg.title')}} (English)</label>
                                <input type="text" name="" class="form-control" required>

                            </div>

                            <div class="form-group">
                                <label for="title_az">{{__('msg.title')}} (Azerbaijani)</label>
                                <input type="text" name="" class="form-control" required>

                            </div>

                            <!-- Description -->
                            <div class="form-group">
                                <label for="description_en">{{__('msg.description')}} (English)</label>
                                <textarea name="" class="form-control" required></textarea>

                            </div>

                            <div class="form-group">
                                <label for="description_az">{{__('msg.description')}} (Azerbaijani)</label>
                                <textarea name="" class="form-control" required></textarea>

                            </div>

                            <!-- Slug -->
                            <div class="form-group">
                                <label for="slug">{{__('msg.slug')}}@lang('slug')</label>
                                <input type="hidden" name="slug" class="form-control">

                            </div>

                            <!-- Image -->
                            <div class="form-group">
                                <label for="image">{{__('msg.image')}}</label>
                                <input type="file" name="image" class="form-control">

                            </div>

                            <!-- Status -->
                            <div class="form-group">
                                <label for="status">{{__('msg.status')}}</label>
                                <select name="status" class="form-control" required>
                                    <option value="1">@lang('active')</option>
                                    <option value="0">@lang('inactive')</option>
                                </select>

                            </div>

                            <button type="submit" class="btn btn-primary">{{__('msg.save')}}</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- /page content -->
@endsection