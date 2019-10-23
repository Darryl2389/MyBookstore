@extends('layouts.app')
# @Date:   2019-10-23T12:54:00+01:00
# @Last modified time: 2019-10-23T12:54:31+01:00




@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as an admin!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
