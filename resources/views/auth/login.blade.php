@extends("auth.base")

@section('content')
   <div class="col-12" id="login">
       <div class="row justify-content-center">
           <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
               <div class="card bllogin">
                   <div class="card-header">
                       <h3 class="" ><span>Log in ...</span></h3>
                   </div>
                   <div id="alert"></div>
                   <div class="card-body">
                       <div class="form-group">
                           <label for="email">Email</label>
                           <input type="email" id="email" class="form-control" name="email">
                       </div>
                       <div class="form-group">
                           <label for="password">Email</label>
                           <input type="password" class="form-control" id="password" name="password">
                       </div>
                       <a href="#" id="btnlogin" class="btn btn-primary">Log In</a>
                       <a href="/signup">Sing Up</a>
                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection