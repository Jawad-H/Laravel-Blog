@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluid" id="header">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                    <div class="col-md-6">
                       <h7 class="display-4">Blog</h7>
                          <p class="lead">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris id consequat leo, eget fringilla mi.
                              Proin porta vel lectus ut dictum.
                              In et gravida eros. Pellentesque nec volutpat urna, sit amet pharetra ligula.
                          </p>
                    </div>

                    <div class="col-md-6">
                        <img src="https://images.unsplash.com/photo-1592772874383-d08932d29db7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=399&q=80"
                              class="img-fluid"
                             style="border-radius: 10px"
                             width="500px"
                             height="200px">

                    </div>

        </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,128L40,138.7C80,149,160,171,240,170.7C320,171,400,149,480,122.7C560,96,640,64,720,85.3C800,107,880,181,960,213.3C1040,245,1120,235,1200,208C1280,181,1360,139,1400,117.3L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
        </svg>
    </div>


<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="https://images.unsplash.com/photo-1484807352052-23338990c6c6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80"
                     style="border-radius: 20px 50px 30px 5px;"
                width="500px"
                height="400px">
            </div>
            <div class="col-md-6">
                <h2><strong>Want to Learn Programming</strong></h2>
                <p style="font-size: 15px;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris id consequat leo, eget fringilla mi. Proin porta vel lectus ut dictum.
                    In et gravida eros.
                    Pellentesque nec volutpat urna, sit amet pharetra ligula.
                </p>
                <a
                    href="/blog"
                    class="btn btn-outline-primary btn-lg">
                    Find out More
                </a>
            </div>
        </div>

    </div>
</section>

{{-- About me   --}}
<section>
<div class="container-fluid" id="aboutme">
    <div class="container">
    <h3 class="text-center"><strong>About me</strong></h3>
<div class="row">
    <div class="col-md-6 text-center">
        <img src="https://images.unsplash.com/photo-1552058544-f2b08422138a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=344&q=80"
            height="300px"
             width="300px"
             class="rounded-circle"

            >
        <p><strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris id consequat leo, eget fringilla mi. Proin porta vel lectus ut dictum.
                In et gravida eros.</strong></p>
    </div>

    <div class="col-md-6 mt-5">
        HTML:
        <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                100%
            </div>
        </div>


        CSS:
        <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                100%
            </div>
        </div>


        TAILWIND CSS:
        <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                80%
            </div>
        </div>

        BOOTSTRAP5:
        <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                100%
            </div>
        </div>


        MATERIAL DESIGN:
        <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                80%
            </div>
        </div>

        JAVASCRIPT:
        <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                80%
            </div>
        </div>



        REACT.JS:
        <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                80%
            </div>
        </div>

    </div>
</div>
</div>
</div>
</section>

{{-- Contact me   --}}
    <section>
        <div class="container" id="Contact">
            <h3 class="text-center"><strong>Contact me</strong></h3>
            <div class="row">


                    <label for="message" class="form-label">Email address:</label>
                    <input type="email" class="form-control" id="message" placeholder="name@example.com">


                    <label for="message" class="form-label">Message:</label>
                    <textarea class="form-control" id="message" rows="3"></textarea>

                <button type="submit" class="btn btn-primary my-5"> Submit</button>





            </div>
        </div>


    </section>

@endsection
