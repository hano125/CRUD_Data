@extends('Layout.master')
@include('Layout.navbar')

 <div class="container">
     <div class="card mt-3">
         <h5 class="card-header">Add Friend</h5>
         <div class="card-body">
             <h5 class="card-title">Friend info</h5>
             <form method="post" action="{{route('frd.update',$editData->id)}}">
                 @csrf
                 @method('PUT')
                 <div class="mb-3">
                     <label for="name" class="form-label">Name</label>
                     <input type="text" class="form-control" name="name" value="{{$editData->Name}}" >
                 </div>
                 <div class="mb-3">
                     <label for="name" class="form-label">Gender</label>
                     <select class="form-select" aria-label="Default select example" name="gender" >
                         <option value="{{$editData->gender}}">Male</option>
                         <option value="{{$editData->gender}}">Female</option>
                     </select>
                 </div>
                 <div class="mb-3">
                     <label for="name" class="form-label">Level</label>
                     <input type="text" class="form-control" name="level"  value="{{$editData->level}}">
                 </div>
                 <div class="mb-3">
                     <label for="name" class="form-label">Address</label>
                     <input type="text" class="form-control" name="address"  value="{{$editData->address}}">
                 </div>
                 <div class="mb-3">
                     <label for="name" class="form-label">Birthdate</label>
                     <input type="date" class="form-control"  name="birthdate" value="{{$editData->birthdate}}">
                 </div>

                 <div class="mb-3">
                     <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                     <textarea class="form-control" rows="3" name="about">{{$editData->about}}</textarea>
                 </div>
                 <button type="submit" name="insert" class="btn btn-info">Save freind</button>
             </form>
         </div>
     </div>
 </div>

</div>
