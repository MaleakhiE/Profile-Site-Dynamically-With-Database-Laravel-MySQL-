@extends('layouts.app')

@section('title','Data Portofolio')

@section('content')

<div class="container">
    <a href="/admin/portofolios/create" class="btn btn-primary mb-3">Tambah Data</a>
    
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
                @foreach ($portofolios as $portofolio)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$portofolio->name}}</td>
                    <td>{{$portofolio->description}}</td>
                    <td>
                        <img src="/images/fotoporto/{{$portofolio->image}}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                        <a href="{{route('portofolios.edit', $portofolio->id)}}" class="btn btn-warning">Edit</a>

                        <form action="{{route('portofolios.destroy', $portofolio->id)}}" method="POST">
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