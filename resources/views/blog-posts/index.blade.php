@extends('layouts.navbar')
  

@section('content')

<div class="container justify-content-center mainform">
        <br>
        <br>
        <br>
        <br>
        <br>
        @if (!Auth::guest())
              <a href="/blog-posts/create"><button  class="btn btn-default">Create Post</button></a>
        @endif

   <h1>Blog Posts</h1>
   
   @if(count($posts)>0)
        @foreach($posts as $post)
            <div>
            <h3><a href="/blog-posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small> Written by {{$post->user->username}} at {{$post->created_at->format ('D d, M, Y, h:i')}}</small>
            </div>
            <hr>
        @endforeach

        {{$posts->links()}}
   @else
        <p>No posts.</p>
   @endif
</div>
@endsection


  