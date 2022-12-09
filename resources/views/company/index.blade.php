@extends('master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card bg-dark text-white">
                        <div class="card-header">
                            <h4>Company Profile</h4>
                            <div class="card-body">
                                <table class="table table-bordered text-white">
                                    <tr>
                                        <th>Company name</th>
                                        <td>{{ $company->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Company Email</th>
                                        <td>{{ $company->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Coin</th>
                                        <td>{{ $company->coin }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection