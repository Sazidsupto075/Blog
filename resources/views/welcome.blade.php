
<!doctype html>
<html lang="en">
<style>

</style>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Bangla Keys Warriors</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
    integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!--imoji-->
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
     integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
    integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>



    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">
  </head>

  <body>

      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" >
        <a class="navbar-brand" href="/">BKW</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault" >
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{route('public.index')}}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('public.signup')}}">Sign up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('public.signin')}}">Sign in</a>
              </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>

      <main role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron" style="margin-top: 20px; margin-left:-600px; background-color: #e6f2ff">
          <div class="container">
            <h1 class="display-5" >Welcome to Bangladeshi Keyboard Warriors</h1>
                <p2>  Virtually beat the shit out of people using your <i class="em em-keyboard"></i> and make them cry alone later </p2>
          </div>
        </div>

      </main>

    <div class="container">
        <div class="row">
            <div class="my-3 p-3 bg-white rounded box-shadow">
              <h3 class="border-bottom border-gray pb-2 mb-0">Top discussions</h3>

              @foreach($post as $thread)
              <div class="media text-muted pt-3">
                <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
                <p class="media-body pb-3 mb-0 medium lh-125 border-bottom border-gray">
                  <strong class="d-block text-gray-dark">@username</strong>
                    <a href="#"><strong>{{ $thread->post_title }}<br /></strong></a>

                    {{ $thread->post_details}}

                </p>

              </div>

          @endforeach

              <div class="media text-muted pt-3">
                <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
                <p class="media-body pb-3 mb-0 medium lh-125 border-bottom border-gray">
                  <strong class="d-block text-gray-dark">@username</strong>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
              </div>

        </div>
    </div>

    {{-- <footer class="footer">
        <div class="container">
          <span class="text-muted">Place sticky footer content here.</span>
        </div>
  </footer> --}}

      <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
      <script src="../../../../assets/js/vendor/popper.min.js"></script>
      <script src="../../../../dist/js/bootstrap.min.js"></script>
    </body>
  </html>
