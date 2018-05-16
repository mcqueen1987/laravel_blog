
@extends('layouts.app')
 
@if (session('alert'))
    <div class="alert alert-info">
        {{ session('alert') }}
    </div>
@endif

@section('content')
    <div class="container-fluid">
        <div class="row">
            <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
                <h1> Edit Your Blog </h1>
                <div class="col-md-6">
                    <form method="post" action="{{ action('BlogController@create') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Title</label>
                            <input type="text" class="form-control" id="id_title" name="title"
                                   aria-describedby="title" value="{{ $post['title'] }}">
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea class="form-control" id="id_content" rows="5" name="content">{{ $post['content'] }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary"> ADD </button>
                    </form>
                </div>
            </main>
        </div>
    </div>
@endsection