<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Thierry test</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <!-- Styles -->


</head>
<body>
<div class="d-flex menu flex-row justify-content-between">
    <span class="p-2 d-none d-md-block">Welcome back, <span id="homename"></span></span>
    <ul class="nav  justify-content-end">
        <li class="nav-item">

        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">Account</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" id="btnlogout">Logout</a>
        </li>
    </ul>
</div>

<div class="container" style="height:calc( 100% - 40px)">
    <div class="d-flex flex-column texthead justify-content-center">
        <h1 class="stfirst">Save Data</h1>
        <span class="stsecond">Team perfectionist for better service</span>
    </div>
    @yield('content')
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Account details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <div class="d-flex flex-column" >
                   <div class="d-flex flex-row detailcpt">
                       <img src="{{asset('img/persone.png')}}" alt="">
                       <div class="d-flex flex-column">
                           <h1 id="detname"></h1>
                           <span id="detbirth"></span>
                           <span id="detemail"></span>
                       </div>
                   </div>
                   <div class="d-flex flex-row align-content-end">
                       <a href="#" data-toggle="collapse" data-target="#collapseExample"><i class="fas fa-pencil-alt"></i></a>
                   </div>
                   <div class="collapse" id="collapseExample">
                       <div class="card card-body">
                           <div class="form-group">
                               <label for="first_name">Fisrt name</label>
                               <input type="text" id="first_name" class="form-control" name="first_name">
                           </div>
                           <div class="form-group">
                               <label for="last_name">Last name</label>
                               <input type="text" id="last_name" class="form-control" name="last_name">
                           </div>
                           <div class="form-group">
                               <label for="birth_date">Birth date</label>
                               <input type="date" id="birth_date" class="form-control" name="birth_date">
                           </div>
                           <div class="form-group">
                               <label for="email">Email</label>
                               <input type="email" id="email" class="form-control" name="email">
                           </div>
                           <div class="form-group">
                               <label for="password">Password</label>
                               <input type="password" class="form-control" id="password" name="password">
                           </div>
                           <a href="#" class="btn btn-primary">Save</a>
                       </div>
               </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{asset('js/home.js')}}"></script>
</body>
</html>
