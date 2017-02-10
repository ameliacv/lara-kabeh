@extends('layouts.blank')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="centering text-center error-container">
                <div class="text-center">
                    <h2 class="without-margin">
                      <span class="text-danger"><big>Access Denied</big></span></h2>
                    <h4 class="text-danger">You do not have permission for this page</h4>

                    <div class="pager">
                        <ul class="pager">
                            <li><a href="/home"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Go Back</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
