
@extends('layout')
@section('content')
<div class="row justify-content-center">
    <div  class="col-lg-8 p-4 m-5">
        <h2>Contact Us</h2>
        <form action="/contact-us" class="justify-content-center" method="post">
           {{ csrf_field() }}
            <div class="form-group">
                <label>Full Name: </label><!-- comment -->
                <input name="name" type="text" class="form-control" placeholder="Enter your Name">
                <span class="text-danger">{{ $errors->first('email') }}</span>
            </div> 
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" name='email' class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="email">Message</label>
                <textarea name="comment" class="form-control" rows="5"  placeholder="Enter your message"> </textarea>
            </div> 

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection