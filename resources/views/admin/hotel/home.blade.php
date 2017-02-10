@extends('layouts.app')

@section('content')
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome Admin {{ Auth::user()->name }}</div>

                <div class="panel-body">
                    Hotel Page, Admin Only
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
