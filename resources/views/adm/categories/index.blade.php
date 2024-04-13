@extends('layouts.adm')
@section('title', 'Categories Page')
@section('content')
    <div class="container">
        <br><br><br>
        <h3>Categories page</h3>
        <h3><a class=" btn btn-outline-dark" href="{{route('adm.categories.create')}}">Санат қосу</a></h3>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Wallpaper</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $cat)
                <tr>
                    <th scope="row">{{$cat->id}}</th>
                    <td>{{$cat->name}}</td>
                    <td><img src="{{$cat->img}}" alt="..." height="50" width="100"></td>
                    <td>
                        <form action="{{route('adm.categories.destroy', $cat->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary btn-lg">Жою</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
