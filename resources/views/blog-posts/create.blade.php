<html lang="en">
<head>
    @include('layouts.header')
</head>
<body id="forshow">
    <div class="container justify-content-center mainform">
        <br>
        <br>
        <br>
      @include('layouts.navbar')
        <a href="/blog-posts"><button class="btn btn-default">Go Back</button></a>
      <div>
      @include('inc.messages')
      <div>
            <h1>Create Post</h1>
            <form action="{!! action('PostsController@store') !!}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title" >
                  </div>
                  <div class="form-group">
                      <label for="">Body</label>
                      <textarea name='body' id="article-ckeditor" class="form-control" rows= "7" placeholder="Body" id='content'></textarea>
                    </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
            </form>
      
      </div>
    </div>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
</html>