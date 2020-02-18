@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/pic/monokuma.jpg" class="rounded-circle">
        </div>
        <div class="col-9 p-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">thvu.net</div>
            <div>I am a young web developer who love to tingle with all kind of magic- I mean technologies.</div>
            <div><a href="#">www.thvu.net</a></div>
        </div>

        <div class="row pt-5">
            <div class="col-4">
                <img src="/pic/rido.jpg" class="w-100">
            </div>
            <div class="col-4">
                <img src="/pic/rido.jpg" class="w-100">
            </div>
            <div class="col-4">
                <img src="/pic/rido.jpg" class="w-100" >
            </div>
        </div>
    </div>
</div>
@endsection
