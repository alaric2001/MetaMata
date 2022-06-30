<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world! | @yield('judul')</title>
    <link rel = "icon" type="image/x-icon" href="assets/favicon.ico" />
    <link rel = "shortcut icon" type = "image/png" href = "{{ asset('logoIREPORT.png') }}">
  </head>
  <body>
    {{-- <h1>Hello, world!</h1> --}}
    @include('partials.navbar')
    @yield('isi')

    {{-- <div class="footer" style="position: absolute;
    width: 1440px;
    height: 58px;
    left: 0px;
    top: 966px; background-color:#C4C4C4">
p
    </div> --}}
    <div class="">
      <footer class="" style="background-color:#C4C4C4; height: 58px;">
        <center>
          <div class="" style="padding-top:20px">
            <p style="font-family: 'Ubuntu'; font-style: normal; font-weight: 400;font-size: 
            14px;line-height: 16px; color:rgb(0, 0, 0); ">
              Made By Alaric
            </p>
          </div>
        </center>
      </footer>
    </div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
