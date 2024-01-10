@extends('layout')
@section('content')
    <div class="col-sm-6">
        <h1>Registration form</h1>

        <form method="POST" type="register">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Name">
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Enter Email">
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter password">
            </div>

            <div class="form-group">
                <label for="">Contact</label>
                <input type="text" name="contact" class="form-control" placeholder="Enter Contact number">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </tbody>
    </div>
@stop
