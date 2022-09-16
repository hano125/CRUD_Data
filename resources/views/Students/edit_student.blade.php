@extends('Layout.master')
@include('Layout.navbar')

 <div class="container">
     @if (session('status'))
         <div class="alert alert-success" role="alert">
             {{ session('status') }}
         </div>
     @endif
   <table class="table table-bordered mt-3" style="text-align: center">
       <tr>
           <th>ID</th>
           <th>Name</th>
           <th>Gender</th>
           <th>Level</th>
           <th>Address</th>
           <th>Birthdate</th>
           <th>About</th>
           <th>Operation</th>
       </tr>
       @foreach($frd as $data)
       <tr>
           <td> {{$data->id}}</td>
           <td> {{$data->Name}}</td>
           <td> {{$data->gender}}</td>
           <td> {{$data->level}}</td>
           <td> {{$data->address}}</td>
           <td> {{$data->birthdate}}</td>
           <td> {{$data->about}}</td>
           <td>
               <a href="{{route('frd.edit',$data->id)}}" class="btn btn-dark">Edit</a>
               <a href="{{route('frd.delete',$data->id)}}" class="btn btn-danger">Delete</a>
           </td>







       </tr>
       @endforeach
   </table>

</div>
