@extends('Layout.master')
@include("Layout.navbar")
<div class="container" style="max-width: 720px">
    <div class="shadow p-3 mb-5 bg-white rounded mt-3 " style="text-align: center">{{__('messages.Add New Post')}} </div>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <form method="post" action="{{route('post.store')}}" >
        @csrf
            <label for="name">{{__('messages.Enter The post name')}}</label>
        <input type="text" name="post_name" class="form-control mb-3" placeholder="Enter The Post name Like Mohannad">
            @error('post_name')
                <small class="form-text text-danger">{{$message}}</small>
            @enderror
        <label for="name">{{__('messages.Enter The post no')}}</label>
        <input type="text" name="post_no" class="form-control mb-3" placeholder="Enter The Post number Like 57241">
        @error('post_no')
        <small class="form-text text-danger">{{$message}}</small>
        @enderror
        <label for="name">{{__('messages.Enter The Content')}}</label>
        <input type="text" name="post_content" class="form-control mb-3" placeholder="Enter The Post content like that post">
        @error('post_content')
        <small class="form-text text-danger">{{$message}}</small>
        @enderror
        <button type="submit" class="btn btn-info mb-2 w-100">{{__('messages.Save data')}} </button>
    </form>

</div>
