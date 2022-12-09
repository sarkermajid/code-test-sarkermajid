@extends('master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card bg-dark text-white">
                        <div class="card-header">
                            <h4>Login Company</h4>
                        </div>
                        <div class="card-body">
                            <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="">Email</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="">Password</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for=""></label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" name="add_company" value="Login">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection