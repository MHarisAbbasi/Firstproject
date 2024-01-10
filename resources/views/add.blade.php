@extends('layout')
@section('content')
    <div class="col-sm-6">
        <h1>Add Data in Resturant</h1>

        <form method="POST" type="add">
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
                <label for="">Address</label>
                <input type="text" name="address" class="form-control" placeholder="Enter Address">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </tbody>
    </div>
@stop
