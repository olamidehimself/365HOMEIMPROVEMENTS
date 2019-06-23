@extends('layouts.navbar')

@section('content')
<div class="container justify-content-center mainform">
  <div  class="col-md-6"> @include('inc.messages')</div>   


      <h1>Edit Post</h1>
      <form action="{!! action('PostsController@update', $post->id) !!}" method="POST">
        <input type="hidden" name="_method" value="PUT">
          {{csrf_field()}}
          <div class="form-group">
              <label for="title">Title</label>
              <input type="text" value="{{$post->title}}" class="form-control" name="title" placeholder="Title" >
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea name='body' id="article-ckeditor" value="{{$post->body}}" class="form-control" rows= "7" placeholder="Body" id='content'></textarea>
              </div>
              
            <button type="submit" class="btn btn-primary">Submit</button>  
      </form>

</div>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
  CKEDITOR.replace( 'article-ckeditor' );
</script>


@endsection
