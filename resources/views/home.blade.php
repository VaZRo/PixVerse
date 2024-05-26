@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ms-5 text-white">
        <div class="col-3 m-5 d-flex align-content-center justify-content-center">
            <img class="rounded-circle profile-picture" src="https://i.ytimg.com/vi/IMW4vcVQscA/maxresdefault.jpg" alt="">
        </div>
        <div class="col-8 mt-5">
            <div>
                <h3>ProfileName</h1>
            </div>
            <div class="d-flex mt-4 fs-5">
                <div class="pe-5"><strong>153</strong> posts</div>
                <div class="pe-5"><strong>23k</strong> followers</div>
                <div class="pe-5"><strong>80</strong> following</div>
            </div>
        </div>

    </div>
</div>
@endsection
