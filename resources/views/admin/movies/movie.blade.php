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
                        <h2>Movies</h2>

                        <div class="clearfix"></div>

                        <div align="right">
                            <a href="{{route('admin.mov_create')}}"><button class="btn btn-success btn-xs">Add
                                    New</button></a>

                        </div>
                    </div>
                    <div class="table-responsive">




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
                                    <th>Release_year</th>
                                    <th>Quality</th>
                                    <th>Duration</th>
                                    <th>Description</th>
                                    <th>Trailer_url</th>
                                    <th>Movie_url</th>
                                    <th>Status</th>
                                    <th>Action</th>


                                </tr>
                            </thead>

                            <tbody>
                            @foreach ($movies as $movie )

<tr>

<td width="20">{{$say}}</td>
<td><img src="{{ Storage::url($movie->poster_image) }}" alt="Movie Image" class="custom-image"> </td>
<td>{{$movie->title}}</td>
<td>{{$movie->category->name}}</td>
<td>{{$movie->release_year}}</td>
<td>{{$movie->quality}}</td>
<td>{{$movie->duration}}</td>
<td>{{$movie->description}}</td>
<td>{{$movie->trailer_url}}</td>
<td>{{$movie->movie_url}}</td>
<td>{{$movie->status}}</td>

<td class="action-column">
    <a href="{{ route('admin.mov_update', $movie->id) }}" class="btn btn-info">Edit</a>
    <a href="{{ route('admin.mov_delete', $movie->id) }}" class="btn btn-danger"
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