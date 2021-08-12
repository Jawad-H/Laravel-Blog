@extends('layouts.app')

@section('content')

    <section>
        <div class="container" id="blog">
            <h2 class="text-center my-5" id="blogheading">
                <strong> Update Post </strong>
            </h2>

            <div class="row align-items-center justify-content-center">
                @if ($errors->any())
                    <div class="col-lg-6 col-md-12 ">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="text-center my-2" style="background-color: red; list-style: none; border-radius: 10px;font-size: 15px; color: white;padding: 10px">
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>



            <form
                action="/blog/{{$post->slug}}"
                method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-12 ">
                        <input class="form-control form-control-lg" type="text" name="title" value="{{$post->title}}" >
                        <textarea
                            name="description"

                            class="form-control form-control-lg my-5" cols="30" rows="10"> {{$post->description}}</textarea>
                    </div>
                </div>

                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-12 ">


                        <input class="form-control-lg" type="file" id="file" value="{{$post->image}}}" name="image">



                    </div>
                </div>


                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-12 ">
                        <button
                            type="submit"
                            class="btn btn-primary btn-lg my-5">
                            Submit Post
                        </button>

                    </div>
                </div>





            </form>
        </div>
    </section>


@endsection
