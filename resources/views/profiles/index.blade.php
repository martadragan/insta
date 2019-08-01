@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fktw1-1.fna.fbcdn.net/vp/06622e404cb56258056a769b05ec46c9/5DDBC45D/t51.2885-19/s150x150/59381178_2348911458724961_5863612957363011584_n.jpg?_nc_ht=instagram.fktw1-1.fna.fbcdn.net" alt="" class="rounded-circle">
        </div>
    
        <div class="col-9 pt-5">
        <div class="d-flex justify-content-between align-items-baseline">
            <h1>{{ $user->username }}</h1>
        <a href="#">Add new post</a>
        </div>
            <div class="d-flex">
                <div class="pr-5"><strong>265</strong> posts</div>
                <div class="pr-5"><strong>265</strong> followers</div>
                <div class="pr-5"><strong>265</strong> following</div>
            </div>
        <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->desc }}</div>
            <div><a href="www.insta.com">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.fktw1-1.fna.fbcdn.net/vp/eddff23c99fd50c51216f83e33959308/5DDC94AD/t51.2885-15/sh0.08/e35/s640x640/67295626_505194036951669_6168027585601741014_n.jpg?_nc_ht=instagram.fktw1-1.fna.fbcdn.net" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fktw1-1.fna.fbcdn.net/vp/efd8b85d43e09a0b75f6a6386385447e/5DD2955A/t51.2885-15/sh0.08/e35/c0.130.1295.1295a/s640x640/65856042_184165269265880_3703531208137689971_n.jpg?_nc_ht=instagram.fktw1-1.fna.fbcdn.net" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fktw1-1.fna.fbcdn.net/vp/9b6d3d3edd131800170ad1a50b77ef36/5DDD37F4/t51.2885-15/sh0.08/e35/s640x640/66322468_481051589312967_4486150166681190403_n.jpg?_nc_ht=instagram.fktw1-1.fna.fbcdn.net" alt="" class="w-100">
        </div>
    </div>
</div>
@endsection
