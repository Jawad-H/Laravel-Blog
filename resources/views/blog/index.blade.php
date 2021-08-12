@extends('layouts.app')

@section('content')

    <section>
            <div class="container" id="blog">
            <h2 class="text-center my-5" id="blogheading">
              <strong> Blog Posts </strong>
            </h2>


            @if(session()->has('message'))
                <p  class="text-center message" style="background-color: green; font-size: 20px; color: white; border-radius: 10px; padding: 10px ">
                    {{session()->get('message')}}
                </p>

                @endif




                @if(Auth::check())
                    <a
                        href="/blog/create"
                        class="btn btn-info"
                        style="border-radius: 10px">
                        Create Post
                    </a>

                @endif

                @foreach($posts as $post)
            <div class="row" style="margin-top: 5rem">
                {{--            Image        --}}
                <div class="col-md-6">
                    <img src="{{asset('images/'.$post->image_path)}}"
                         alt=""
                         width="500"
                         height="300"
                         style="border-radius: 25px 10px"
                    >
                </div>
                {{--          Content      --}}
                <div class="col-md-6 my-2">
                    <h4>
                     <strong>{{$post->title}}</strong>
                    </h4>
                    <span>
                         By<span style="font-weight: bold; color:gray">
                        {{$post->user->name}}
                      </span>, Created on {{ date('Y-m-d') }}
                    </span>

                    <p class="description" style="margin-top: 14px; font-size: large">
                       {{substr_replace($post->description,'...',300)}}
                    </p>
                    <a href="/blog/{{$post->slug}}" class="btn btn-outline-primary">
                        Keep Reading
                    </a>

                    @if(isset(Auth::user()->id) && Auth::user()->id==$post->user_id)
                        <a href="/blog/{{$post->slug}}/edit" class="mx-2 btn btn-secondary">
                            Edit
                        </a>
                        <form
                            action="/blog/{{$post->slug}}"
                            method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit" style="margin-top: 7rem; margin-left: 15rem; border-radius: 20px">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>
                            </button>
                        </form>

                    @endif
                </div>
            </div>
                @endforeach

        </div>






    </section>


@endsection
