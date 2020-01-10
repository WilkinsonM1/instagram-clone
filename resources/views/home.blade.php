@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
         <img src="https://instagram.flhr4-2.fna.fbcdn.net/v/t51.12442-15/e35/c0.419.1081.1081a/s150x150/43085539_501820643645278_2774091461432844887_n.jpg?_nc_ht=instagram.flhr4-2.fna.fbcdn.net&_nc_cat=110&_nc_ohc=LVg7sgbKOugAX_73PGF&oh=2581fba24d52cd80c4a97d95cd42e9a0&oe=5E17A4B5" class="rounded-circle">
        </div>
        <div class="col-9 pt-5 ">
            <div class="d-flex justify-content-between align-items-baseline">
            <h1>{{ $user->username }}</h1>
            <a href="#">Add new post</a>
            
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user-> profile -> title}}</div>
            <div>{{ $user-> profile -> description }} </div>
           <div class=""><a href="{{ $user-> profile -> url }}">{{ $user-> profile -> url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img  class="w-100"  src="https://instagram.flhr4-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/44564671_557223454690997_1364027594743350404_n.jpg?_nc_ht=instagram.flhr4-2.fna.fbcdn.net&amp;_nc_cat=105&amp;_nc_ohc=c2ouX8KsllMAX_KEbGZ&amp;oh=3c877ef30418d8539cc064df1c9b27b7&amp;oe=5EA5917F">
        </div>
        <div class="col-4">
            <img  class="w-100"  src="https://instagram.flhr4-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.47.1080.1080a/s640x640/44361121_252534355442684_3538020761148952614_n.jpg?_nc_ht=instagram.flhr4-1.fna.fbcdn.net&amp;_nc_cat=108&amp;_nc_ohc=o6hjD47HhRAAX_6uW4h&amp;oh=ee662416ad9048a2e9e704ac679e8f58&amp;oe=5EABD7FD">
        </div>
        <div class="col-4">
            <img  class="w-100"  src="https://instagram.flhr4-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.135.1080.1080a/s640x640/43191818_1110537175791188_3981146869999271368_n.jpg?_nc_ht=instagram.flhr4-1.fna.fbcdn.net&amp;_nc_cat=108&amp;_nc_ohc=ShJR_Ea-JoQAX_b4hIH&amp;oh=8bd464f529a4f41e6b3c791fb1280450&amp;oe=5E905609">
        </div>

    
    </div>
    
</div>
@endsection
