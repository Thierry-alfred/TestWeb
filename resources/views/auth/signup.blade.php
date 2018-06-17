@extends("auth.base")

@section('content')
   <div class="col-12">
       <div class="row justify-content-center">
           <div class=" col-xs-12 col-sm-12 col-md-6 col-lg-4">
               <div class="card bllsignup">
                   <div class="card-header">
                       <h3 class="" ><span>SIGN UP ...</span></h3>
                   </div>

                   <div class="card-body">
                       <div class="form-group">
                           <label for="first_name">First name</label>
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
                       <a href="/home" class="btn btn-primary">Sign UP</a>
                       <a href="/">Log In</a>
                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection