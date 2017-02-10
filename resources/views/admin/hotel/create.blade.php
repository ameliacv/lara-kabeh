@extends('layouts.app')

@section('content')
<div class="col-md-10 col-md-offset-2">
  <h2 class="page-header">Add New Hotel</h2>
    <form class="form-horizontal">
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Name</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="hotel-name" placeholder="Enter Name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Address</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="hotel-address" placeholder="Enter Address">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Phone</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="hotel-phone" placeholder="Enter Phone">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Address</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="hotel-address" placeholder="Enter Address">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">City</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="hotel-city" placeholder="Enter City">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection
