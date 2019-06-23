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
            {{-- <label class="mb-0" >Lagos</label>
            <select class="form-control" id="s1" onchange="populate('s1','s2')">
                <option>--Select Class</option>
                <option value="preschool">Preschool</option>
                <option value="primary">Primary</option>
                <option value="junior-secondary">Junior Secondary</option>
                <option value="senior-secondary">Senior Secondary</option>
            </select>
            <label class="mb-0" >Area</label>
            <select class="form-control" id="s2">
               
            </select> --}}
            <input type="file" class="form-control-file mt-3" name="file" placeholder="" aria-describedby="fileHelpId">
            <button type="submit" name="" id="" class="btn btn-success btn-lg btn-block my-3">Submit CV</button>
        </form>

        </div>
        
        <script type="text/javascript">
		function populate(s1,s2){
    var s1 = document.getElementById(s1);
    var s2 = document.getElementById(s2);
    s2.innerHTML = "";

    if(s1.value == "male"){
        var optionArray = [" | ", "1|1","2|2","3|3"];
    }
    for (var option in optionArray){
    	var pair = optionArray[option].split ("|");
    	var newOption = document.createElement("option");
    	newOption.value = pair[0];
    	newOption.innerHTML = pair[1];
    	s2.options.add(newOption);

    }


}

	</script>
    </div>
    
@endsection