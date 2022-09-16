@extends('Layout.master')
@include('Layout.navbar')

 <div class="container">
     @if (session('status'))
         <div class="alert alert-success" role="alert">
             <button type="button" class="close" data-dismiss="alert">×</button>
             {{ session('status') }}
         </div>

     @endif
     <div class="card mt-3">
         <h5 class="card-header">Add Friend</h5>
         <div class="card-body">
             <h5 class="card-title">Friend info</h5>
                <form method="post" action="{{route('frd.store')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name"  placeholder="like that Mohannad">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Gender</label>
                        <select class="form-select" aria-label="Default select example" name="gender">
                            <option selected>Male Or Female</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Level</label>
                        <input type="text" class="form-control" name="level"  placeholder="like that five">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address"  placeholder="like that baghdad">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Birthdate</label>
                        <input type="date" class="form-control"  name="birthdate">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="about"></textarea>
                    </div>
                    <button type="submit" name="insert" class="btn btn-info">Save freind</button>
                </form>
         </div>
     </div>
 </div>
