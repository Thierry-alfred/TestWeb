@extends('base')

@section('content')
<div class="row" id="indexhome">
    <div class="col-xs-12 col-md-6 formulaire">
       <div class="d-flex  p-2 flex-column">
           <div class="d-flex flex-row p-2">
               <img class="p-2" id="imagesave" src="{{asset('img/blank.png')}}" alt="">
               <div class="form-group" style="width: 100%">
                   <label for="title">Title</label>
                   <input type="text" id="title" class="form-control" name="title">
               </div>
           </div>
           <div class="p-2">
               <div class="p-2 form-group">
                   <label for="description">Description</label>
                   <textarea rows="5" cols="3" id="description" class="form-control" name="description"></textarea>
               </div>
           </div>
           <div class="p-4"><a href="#" class="btn btn-primary">Save data</a></div>
       </div>
        <input type="file" id="fileimg" class="hide">
    </div>
    <div class="col-xs-12 col-md-6 list">
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Description</th>
                <th scope="col">User</th>
                <th scope="col">#</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Lorem ipsum dolor sit amet, consectetur
                <td>@mdo</td>
                <td>
                    <a href="#"><i class="fas fa-pencil-alt"></i></a>
                    <a href="#" class="red-text"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection