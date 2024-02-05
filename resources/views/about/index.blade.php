@extends('layouts.app')

@section('title','Data About')

@section('content')

<div class="container">    
    @if ($message = Session::get('message'))
        <div class="alert alert-success">
            <strong>Berhasil</strong>
            <p>{{$message}}</p>
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Job</th>
                    <th>Description</th>
                    <th>Description 2</th>
                    <th>Description 3</th>
                    <th>Image</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($about as $abouts)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$abouts->title}}</td>
                    <td>{{$abouts->job}}</td>
                    <td>{{$abouts->description}}</td>
                    <td>{{$abouts->description2}}</td>
                    <td>{{$abouts->description3}}</td>
                    <td>
                        <img src="/images/fotoabout/{{$abouts->image}}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                        <a href="{{route('about.edit', $abouts->id)}}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection