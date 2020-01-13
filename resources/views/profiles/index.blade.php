@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.flhr4-2.fna.fbcdn.net/v/t51.12442-15/e35/c0.419.1081.1081a/s150x150/43085539_501820643645278_2774091461432844887_n.jpg?_nc_ht=instagram.flhr4-2.fna.fbcdn.net&_nc_cat=110&_nc_ohc=LVg7sgbKOugAX_73PGF&oh=2581fba24d52cd80c4a97d95cd42e9a0&oe=5E17A4B5"
                class="rounded-circle">
        </div>
        <div class="col-9 pt-5 ">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add new post</a>

            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count()}}</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user-> profile -> title}}</div>
            <div>{{ $user-> profile -> description }} </div>
            <div class=""><a href="{{ $user-> profile -> url }}">{{ $user-> profile -> url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{ $post->id }}">
                <img class="w-100" src="/storage/{{$post->image}}">
            </a>

        </div>
        @endforeach



    </div>

</div>
@endsection