@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
                @role('staff')
                  <li><a href="/staff/book">Book</a></li>
                @endrole
                @role('admin')
                <li><a href="/admin/room">Room</a></li>
                <li><a href="/admin/hotel">Hotel</a></li>
                <li><a href="/admin/staff">Staff</a></li>
                @endrole
            </ul>
        </div>
        <div class="col-sm-8 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Dashboard</h1>

            <div class="row placeholders">
                <div class="col-xs-6 col-sm-3 placeholder">
                    <img src="/images/bed.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                    <h4>Furniture and Household</h4>
                </div>
                <div class="col-xs-6 col-sm-3 placeholder">
                    <img src="/images/chef.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                    <h4>Food</h4>
                </div>
                <div class="col-xs-6 col-sm-3 placeholder">
                    <img src="/images/cutlery.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                    <h4>Tools and Utensils</h4>
                </div>
                <div class="col-xs-6 col-sm-3 placeholder">
                    <img src="images/shirt.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                    <h4>Fashion</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
