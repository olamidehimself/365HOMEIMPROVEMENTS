@extends('layouts.navbar')

@section('content')
<div class="container justify-content-center mainform">
        <h3>My Posts</h3>
        @if(count($posts) > 0)
        <table class="table table-stripped">
            <tr>
                <th>Title</th>
                <th></th>
                <th></th>
            </tr>
            @foreach ($posts as $post)
                <tr>
                <td>{{$post->title}}</td>
                </tr>
                
            @endforeach
            @else
                <p>You have no posts</p>
        @endif
        </table>

</div>
    
@endsection