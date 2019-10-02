@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">

            <img src="https://pbs.twimg.com/profile_images/843511681905033216/uK-HR5g1_400x400.jpg" class="rounded-circle" height="150"  >
        </div>

            <div class="col-9 pt-5">
             <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                 <a href="/p/create">Add New Post</a>

             </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>2.81m</strong> followers</div>
                <div class="pr-5"><strong>0</strong> following</div>
            </div>
                <div class="pt-4"><strong>{{$user->profile->title}}</strong></div>
                <div>{{$user->profile->description}}</div>
              <!-- hide hugh jackman url and link
                <div><a href="https://l.instagram.com/?u=http%3A%2F%2FHughJackmanTheShow.com%2F&e=ATOTKXczIOy6Qem-YGb261KGmw_rgAlu8E9QpYp23gaM7NWBFiVaoUtQ0_i2-69L_cE31QE83t18YcPQ_Q">HughJackmanTheShow.com</a></div>
              -->
                <div><a href="#">{{$user->profile->url }}</a></div>
            </div>
    </div>

        <div class="row pt-5">

            @foreach($user->posts as $post)
                <div class="col-4 pb-4">
                    <img src="/storage/{{ $post->image }}" class="w-100" >

                </div>

            @endforeach



        </div>
    </div>


        </div>
    </div>
</div>
@endsection
