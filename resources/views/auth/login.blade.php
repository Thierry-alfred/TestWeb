@extends("auth.base")

@section('content')
   <div class="col-12">
       <div class="row justify-content-center">
           <div class="col-4 col-xs-12 col-sm-12 col-md-6 col-lg-4">
               <div class="card bllogin">
                   <div class="card-header">
                       <h3 class="" ><span>Log in ...</span></h3>
                   </div>

                   <div class="card-body">
                       <div class="form-group">
                           <label for="email">Email</label>
                           <input type="email" id="email" class="form-control" name="email">
                       </div>
                       <div class="form-group">
                           <label for="password">Email</label>
                           <input type="password" class="form-control" id="password" name="password">
                       </div>
                       <button class="btn btn-primary">Log In</button>
                       <a href="{{route('signup')}}">Sing Up</a>
                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection