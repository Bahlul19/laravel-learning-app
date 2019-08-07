    <!--Bootstrap nav bar default-->
    <!--Main Container-->

    @extends('main') <!--Added the main file into there-->
    @section('content') <!--Start the content section-->

      <div class="row">
        <div class="col-md-12">
              <div class="jumbotron">
                <h1>Welcome to my blog</h1>
                <p class="lead">Thank you so much for visiting my blog. This is my website made with laravel.</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
              </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8">

          <h3>Post Title</h3>
          <p>Lorem ipsum Lorem ipsum.Lorem ipsum Lorem ipsum.Lorem ipsum Lorem ipsum.Lorem ipsum Lorem ipsum.
              Lorem ipsum Lorem ipsum.Lorem ipsum Lorem ipsum.Lorem ipsum Lorem ipsum.Lorem ipsum Lorem ipsum.
          </p>
          <a href="#" class="btn btn-primary">Read More</a>

          <h3>Post Title</h3>
          <p>Lorem ipsum Lorem ipsum.Lorem ipsum Lorem ipsum.Lorem ipsum Lorem ipsum.Lorem ipsum Lorem ipsum.
              Lorem ipsum Lorem ipsum.Lorem ipsum Lorem ipsum.Lorem ipsum Lorem ipsum.Lorem ipsum Lorem ipsum.
          </p>
          <a href="#" class="btn btn-primary">Read More</a>

          <h3>Post Title</h3>
          <p>Lorem ipsum Lorem ipsum.Lorem ipsum Lorem ipsum.Lorem ipsum Lorem ipsum.Lorem ipsum Lorem ipsum.
              Lorem ipsum Lorem ipsum.Lorem ipsum Lorem ipsum.Lorem ipsum Lorem ipsum.Lorem ipsum Lorem ipsum.
          </p>
          <a href="#" class="btn btn-primary">Read More</a>

          <h3>Post Title</h3>
          <p>Lorem ipsum Lorem ipsum.Lorem ipsum Lorem ipsum.Lorem ipsum Lorem ipsum.Lorem ipsum Lorem ipsum.
              Lorem ipsum Lorem ipsum.Lorem ipsum Lorem ipsum.Lorem ipsum Lorem ipsum.Lorem ipsum Lorem ipsum.
          </p>
          <a href="#" class="btn btn-primary">Read More</a>

        </div>
      
          <div class="col-md-3 col-md-offset-1">
            <h2>Sidebar</h2>
          </div>
        </div>
    @endsection <!--End the content section area-->       