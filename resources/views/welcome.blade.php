<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ANIMAL BLOG</title>
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="flex-top position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                        <a href="{{ url('/fruits') }}">Tools</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    ANIMAL BLOG
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>

                <div class="row">
                  <div class="blog-body">
                    @foreach ($blogs as $blog)
                        @if($blog->{'id'})
                            <div class="blog-item">
                              <h2>{{ $blog->{'title'} }}</h2>
                              <h5>Submitted in {{ date("F j, Y, g:i a", strtotime($blog->{'created_at'})) }}</h5>
                              <div class="fakeimg" style="height:200px;">Image</div>
                              <p> title of the img </p>
                              <p>{{ $blog->{'content'} }}</p>
                            </div>
                        @endif
                    @endforeach
                    <div class="footer">
                      <h2>Footer</h2>
                    </div>

                </div>
            </div>
        </div>
    </body>
</html>

