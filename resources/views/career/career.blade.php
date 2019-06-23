@extends('layouts.navbar')

@section('content')
<div class="container justify-content-center mainform">
    <br>
    <br>
    <br>
    <br>
    @include('inc.messages')
    <h1>Career</h1>
    <div>
    <p>If you thrive on challenge, passionate about ideas, love solving problems, and truly enjoy connecting with people, we encourage you to explore job opportunity available through <a href="#">www.365homeimprovement.ng</a>  (Hausworth Nigeria Limited).</p>

    <p>We are interested in receiving CVs from the following professionals </p>
            {{--(CREATE A MEANS OF SUBMITTING AVAILABLE OPENS FROM THE BACK END)--}}
            <ul>
                    <li><strong><a href="/career/accountants">Accountants</a></strong></li>
                    <li><strong><a href="/career/seo">SEO Experts and Marketers</a></strong></li>
                    <li><strong><a href="/career/analyst">Analyst and Economist</a></strong></li>
            </ul>
            
    <p>Career opportunities at <a href="#">www.365homeimprovement.ng</a> are not limited to the aforementioned professions only. We would be glad to receive CVs from applicants in other profession relevant to our core business units.</p>
            
    <p>It is important to state that some of the position would be available on part-time basis or as at when we need such.</p>
            
           
            {{--USE THE FOLLOWING AFTER THE APPLICANTS CLICKS ON THE AVAILABLE JOB.--}}
            
    <p>To help us get started, please do send your CV <strong>by clicking on your preferred job.</strong> It’s the first step to securing a job with us.</p>
    </div>


</div>    
@endsection