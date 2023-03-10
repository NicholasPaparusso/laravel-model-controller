@extends('layout.main')

@section('content')

    <div class="container pt-5">

        <table class="table  table-striped table-hover">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Vote</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($movies as $movie )

                <tr>
                    <td>{{$movie->id}}</td>
                    <td>
                        <a href="{{route('movieDetail' , $movie->id)}}">{{$movie->title}}</a>
                    </td>
                    <td>{{$movie->vote}}</td>
                  </tr>

        @endforeach
        </tbody>
        </table>

    </div>

@endsection
