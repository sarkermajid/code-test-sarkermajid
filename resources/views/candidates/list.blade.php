@extends('master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card bg-dark text-white">
                        <div class="card-header"><h4>All Candidates Information</h4></div>
                        @if(isset(Auth::user()->id))
                        <a href="{{ route('company.profile',['id'=>Auth::id()]) }}" class="btn btn-info float-end">Profile</a>
                            <a href="" onclick="event.preventDefault(); document.getElementById('logoutForm').submit()" class="btn btn-danger">Logout</a>
                            <form action="{{ route('logout') }}" method="post" id="logoutForm">
                                @csrf
                            </form>
                        @endif
                        <div class="card-body text-white">
                            <h3 class="text-success text-center">{{ Session::get('message') }}</h3>
                            <h3 class="text-danger text-center">{{ Session::get('message_delete') }}</h3>
                            <table class="table table-bordered text-white ">
                                <thead>
                                <tr>
                                    <th>SL No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Description</th>
                                    <th>Skills</th>
                                    @if(isset(Auth::user()->id))
                                    <th>Action</th>
                                    @endif
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($candidates as $candidate)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $candidate->name }}</td>
                                        <td>{{ $candidate->email }}</td>
                                        <td>{{ $candidate->description }}</td>
                                        <td>{{ $candidate->skills }}</td>
                                        @if(isset(Auth::user()->id))
                                        <td>
                                            <a href="{{ route('candidate.contact',['id'=>Auth::id()]) }}" class="btn btn-outline-info">Contact</a>
                                            <a href="{{ route('candidate.hire',['id'=>Auth::id()]) }}" class="btn btn-outline-success">Hire</a>
                                        </td>
                                        @endif
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection