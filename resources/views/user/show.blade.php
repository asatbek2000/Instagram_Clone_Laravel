@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><img width="50px" height="50px" style="border-radius:50%"
                            src="{{ asset(str_replace('public', 'storage', $user->photo)) }}" alt="">
                        {{ $user->username }}
                        <a style="float:right" href="" class="btn btn-info">Unfollow <i class="fa fa-undo"></i></a>
                        <a style="float:right;margin-right:0.2rem" href="" class="btn btn-success">Follow <i
                                class="fa fa-users"></i></a>
                        <a style="float:right;margin-right:0.2rem" href=""
                            class="btn btn-warning">{{ $user->posts->count() }} Posts</a>
                    </div>
                </div>
                <div class="card-body">
                    <p style="float:right" href="" class="btn btn-info">Following 122 </p>
                    <p style="float:right;margin-right:0.2rem" href="" class="btn btn-success">Followers 125 </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" style="padding-top:2rem">
            @if ($user->posts->count() > 0)
                @foreach ($user->posts as $key => $post)
                    <div class="col-md-4" style="padding-top:2rem">
                        <div class="card-deck">

                            <div class="card">
                                <a href="{{ route('posts.show', $post->id) }}"><img
                                        src="{{ asset(str_replace('public', 'storage', $post->photo)) }}"
                                        class="card-img-top" alt="..." style="height:230px"></a>
                                <div class="card-body">
                                    <p class="card-text">Created at : {{ $post->created_at }} <i
                                            class="fa fa-calendar"></i>
                                    </p>
                                    <span class="btn btn-danger">{{$post->likes_count}} likes</span><span style="margin-left:0.2rem"
                                        class="btn btn-info">{{$post->comments->count()}}
                                        Comments</span>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            @else
                <h1 style="text-align:center"><button class="btn btn-info">No Post Yet</button></h1>
            @endif
        </div>
    </div>


@endsection
