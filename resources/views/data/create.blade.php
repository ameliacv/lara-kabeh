@extends('layouts.index')

@section('content')
<div class="col-md-10 col-md-offset-2">
  <h2 class="page-header">Add New Data</h2>
    <form class="form-horizontal" action="/data">
        <div class="form-group">
            <label class="control-label col-sm-2" for="nama_data">Data</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="nama_data" placeholder="Enter Data">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="detail_data">Detail</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="detail_data" placeholder="Enter Detail">
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
