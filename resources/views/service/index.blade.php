@extends('layouts.app')

@section('title','Data Service')

@section('content')

<div class="container">
    <a href="/admin/service/create" class="btn btn-primary mb-3">Tambah Data</a>
    
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
                    <th>Image</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($service as $services)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$services->name}}</td>
                    <td>{{$services->description}}</td>
                    <td>
                        <img src="/images/fotoservice/{{$services->image}}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                        <a href="{{route('service.edit', $services->id)}}" class="btn btn-warning">Edit</a>

                        <form action="{{route('service.destroy', $services->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection