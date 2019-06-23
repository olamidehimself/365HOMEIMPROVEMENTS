<!-- @extends('layouts.navbar') -->

@section('content')
<div class="container justify-content-center mainform">
    <br>
    <br>
    <br>
    
<a href="/blog-posts"><button  class="btn btn-default">Go Back</button></a>
        <h1>{{$post->title}}</h1>
            <br>
                <p>{!!$post->body!!}</p>
            <br>
            <hr>
                <small>Written by <a href="#">{{$post->user->username}}</a> on {{$post->created_at->format('D d, M, Y, h:i')}}</small>
                <hr>

        @if (!Auth::guest())

            @if (Auth::user()->id == $post->user_id)
                <a href="/blog-posts/{{$post->id}}/edit"><button class="btn btn-default">Edit</button></a>
                <form action="{!! action('PostsController@destroy', $post->id) !!}" method="POST" class="pull-right">
                    <input type="hidden" name="_method" value="DELETE">
                        {{csrf_field()}}
                    <input type="submit" class="btn btn-danger" value="Delete"/>
                </form>
            @endif
        @endif



</div>
@endsection
    
     