@extends('layouts.app')

@section('content')

    <div class="container" id="blog">


        <div class="row text-center" style="margin-top: 5rem">
            {{--            Image        --}}
            <div class="col-md-12">
                <img src="{{asset('images/'.$post->image_path)}}"
                     alt=""
                     width="700px"
                     height="400px"

                     style="border-radius: 25px 10px">
            </div>
        </div>




            {{--          Content      --}}
            <div class="row text-center" style="margin-top: 2rem">
            <div class="col-md-12">
                <h4 class="text-center">
                    <strong>{{$post->title}}</strong>
                </h4>
                <span style="font-size: 13px; margin-left: 1rem">
                         By<span style="font-weight: bold; color:gray">
                        {{$post->user->name}}
                      </span>, Created on {{date('js M Y', strtotime($post->updated_at))}}
                    </span>

                <p class="description" style="margin-top: 14px; font-size: large; max-lines: 3">
                    {{$post->description}}
                </p>

            </div>
            </div>


        </div>


@endsection
