@extends('layout.main')

@section('content')
    <div class="container">
        <table class="table  table-striped table-hover">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Original Title</th>
                <th scope="col">Nationality</th>
                <th scope="col">Date</th>
                <th scope="col">Vote</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>{{$movie->id}}</td>
                        <td>{{$movie->title}}</td>
                        <td>{{$movie->original_title}}</td>
                        <td>{{$movie->nationality}}</td>
                        <td>{{$movie->date}}</td>
                        <td>{{$movie->vote}}</td>
                    </tr>
            </tbody>
            </table>
    </div>
@endsection
