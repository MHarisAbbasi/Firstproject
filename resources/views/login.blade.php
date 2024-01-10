@extends('layout')
@section('content')
    <div class="col-sm-6">
        <h1>Login form</h1>

        <form method="POST" type="">
            @csrf

            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Enter Email">
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter password">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </tbody>
    </div>
@stop
