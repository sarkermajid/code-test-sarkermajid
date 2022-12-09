@extends('master')


@section('body')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card text-center bg-dark p-5">
                    <h3 class="text-white">Choose options ?</h3>
                    <div class="card-body">
                        <a href="{{ route('register') }}" class="btn btn-primary">Company</a>
                        <a href="{{ route('candidate.add') }}" class="btn btn-info">Candidate</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection