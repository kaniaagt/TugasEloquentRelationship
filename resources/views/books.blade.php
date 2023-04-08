@extends('template')

@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h5 class="text-center my-4">Laravel Eloquent Relationship : One To Many</h5>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Judul Buku</th>
                            <th>Review Buku</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($books as $book)
                            <tr>
                                <td>{{$book->title}}</td>
                                <td>
                                    @foreach($book->reviews()->get() as $review)
                                        <div class="card shadow-sm mb-2">
                                            <div class="card-body">
                                                <i class="fa fa-comments"></i> {{ $review->review }}
                                            </div>
                                        </div>
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
