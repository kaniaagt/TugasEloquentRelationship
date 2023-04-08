@extends('template')

@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h5 class="text-center my-4">Laravel Eloquent Relationship : One To One</h5>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama Penulis</th>
                            <th>NIK</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            {{-- <td>@foreach($user->nik()->get() as $nik){{$nik->nik}}@endforeach</td> --}}
                            <td>{{$user->nik->nik}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
