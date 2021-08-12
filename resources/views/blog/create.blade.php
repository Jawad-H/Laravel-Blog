@extends('layouts.app')

@section('content')

    <section>
        <div class="container" id="blog">
            <h2 class="text-center my-5" id="blogheading">
                <strong> Create Post </strong>
            </h2>

            <div class="row align-items-center justify-content-center">
                @if ($errors->any())
                <div class="col-lg-6 col-md-12 ">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-center my-2" style="background-color: red; list-style: none; border-radius: 10px;font-size: 15px; color: white">
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>



            <form
                action="/blog"
                method="POST"
                enctype="multipart/form-data">
                @csrf


            <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-12 ">
                <input class="form-control form-control-lg" type="text" name="title" placeholder="Enter Title" aria-label=".form-control-lg example">
                <textarea
                    name="description"
                    placeholder="Description..."
                    class="form-control form-control-lg my-5" cols="30" rows="10"></textarea>
            </div>
            </div>

            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-12 ">


                        <input class="form-control-lg" type="file" id="file" name="image">



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
