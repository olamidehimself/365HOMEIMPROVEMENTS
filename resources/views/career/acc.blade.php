@extends('layouts.navbar')

@section('content')
<div class="card">
    
</div><br>
<br>
<br>
<br>
    <div class="row">
        <div class="col-sm-4 offset-sm-3">
        <h4 class="card-title">Please upload your CV</h4>
        @include('inc.messages')
        <hr>

        <form action="#" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
            <label for="name" class="mb-0">Name</label>
            <input type="text" name="name" class="form-control">
            <label for="email" class="mt-3 mb-0">eMail</label>
            <input type="email" name="email" class="form-control">
            <input type="file" class="form-control-file mt-3" name="file" placeholder="" aria-describedby="fileHelpId">
            <button type="submit" name="" id="" class="btn btn-success btn-lg btn-block my-3">Submit CV</button>
        </form>

        </div>
    </div>

@endsection