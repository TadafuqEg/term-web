<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Term</title>
    <style>
        .navbar {
            border: 0;
            z-index: 9999;
            letter-spacing: 4px;

        }
        .logo {
            display: block;
            height: auto;
            width: 52px;
            padding-top: 5px;
            margin-right: 15px;
        }

        .navbar-brand>img {
            height: 100%;
            padding: 15px; /* firefox bug fix */
            width: auto;
        }
        .navbar .nav > li > a {
            line-height: 50px;
        }

        .navbar-header h1 {
            letter-spacing: 1px;
            color: black !important;
            font-family: 'Lobster Two', cursive;
        }

        .navbar li a, .navbar {
            color: white !important;
            background: black;
            font-size: 12px;
            transition: all 0.6s 0s;
        }

        .navbar-toggle {
            background-color: transparent !important;
            border: 0;
        }

        .navbar-nav li a:hover, .navbar-nav li.active a {
            color: red !important;
        }


    </style>
  </head>
  <body>
      <!-- <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse"
                          data-target="#myNavbar">
                      <span class="glyphicon glyphicon-menu-hamburger"></span>
                  </button>
                 
                
               <div class="navbar-left logo"> 
                  <img src="{{asset("assets\imgs\logo.png")}}" alt="">
                </div>
              </div>
              {{-- <div class="collapse navbar-collapse navbar-right" id="myNavbar">
                  <ul class="nav navbar-nav">
                      <li><a href="#intro">Home</a></li>
                         <li><a href="#about">About</a></li>
                         <li><a href="#portfolio">Menu</a></li>
                      <li><a href="#contact">Reserve</a></li>
                  </ul>
              </div> --}}
          </div>
      </nav> -->
      <div class="container-fluid">
        <div class="container">
            <h2 class="py-5">Conatct Us</h2>
            <table class="table table-bordered ">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Company</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">message</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($contactUs as $contact)
                        <tr>
                        <th scope="row">{{$contact->id}}</th>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->company}}</td>
                        <td>{{$contact->phone_number}}</td>
                        <td>{{$contact->message}}</td>
                        </tr>
                    @endforeach
                 
                </tbody>
            </table>
            {{ $contactUs->links() }}
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>