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
                        <h2>Blogs</h2>

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
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Content</th>
                                    <th>Author</th>
                                    <th>Likes</th>
                                    <th>Comments_count</th>
                                    <th>Action</th>


                                </tr>
                            </thead>

                            <tbody>
 
@foreach ($blogs as $blog )
<tr>

<td width="20">{{$say}}</td>
<td><img src="{{ Storage::url($blog->image) }}" alt="Blog Image" class="custom-image"> </td>
<td>{{$blog->title}}</td>
<td>{{$blog->category->name}}</td>
<td>{{$blog->content}}</td>
<td>{{$blog->author}}</td>
<td>{{$blog->likes}}</td>
<td>{{$blog->comments_count}}</td>

<td>
    <a href="{{ route('admin.blog_edit', $blog->id) }}" class="btn btn-info">Edit</a>
    <a href="{{ route('admin.blog_delete', $blog->id) }}" class="btn btn-danger"
        onclick="confirm('Are You Sure To Delete This Item?')">Delete</a>
</td>
</tr>
<input type="hidden" {{$say++}}>

@endforeach
  
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