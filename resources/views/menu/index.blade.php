@extends('layouts.app')

@section('title','Data Menu - Services')

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
                    <th>Name</th>
                    <th>Description</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($menu as $menus)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$menus->judul}}</td>
                    <td>{{$menus->description}}</td>
                    <td>
                        <a href="{{route('menu.edit', $menus->id)}}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection