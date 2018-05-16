@extends('layouts.app')

@section('content')
<div class="container">
     <div class="col-md-12">
         <div class="pull-right">
             <a href="\add"><div class="btn btn-success">Add New Blog Post</div></a>
         </div>

        @if (session('alert'))
            <div class="alert alert-info">
                {{ session('alert') }}
            </div>
        @endif
        
         <table class="table">
             <thead>
                 <tr>
                     <th>BLOG ID</th>
                     <th>USER ID</th>
                     <th>BLOG TITLE</th>
                     <th>BLOG CONTENT</th>
                     <th>EDIT BLOG</th>
                     <th>DELETE BLOG</th>
                 </tr>
             </thead>
             <tbody>
                 @foreach ($posts as $post)
                     <tr>
                         <td>{{ $post->{'id'} }}</td>
                         <td>{{ $post->{'author'} }}</td>
                         <td>{{ $post->{'title'} }}</td>
                         <td>{{ substr( $post->{'content'} , 0, 1024) }}</td>
                         <td><a href="\update\{{ $post->{'id'} }}"><div class="btn btn-primary">Edit Blog</div></a></td>
                         <td><a href="\delete\{{ $post->{'id'} }}"><div class="btn btn-danger">Delete Blog</div></a></td>
                     </tr>
                 @endforeach
             </tbody>
         </table>
     </div>
 </div>
@stop


