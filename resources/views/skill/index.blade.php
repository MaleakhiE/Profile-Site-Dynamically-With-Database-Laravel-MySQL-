@extends('layouts.app')

@section('title','Data Skill')

@section('content')

<div class="container">
    <a href="/admin/skill/create" class="btn btn-primary mb-3">Tambah Data</a>
    
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
                    <th>Rasio</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($skill as $skills)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$skills->name}}</td>
                    <td>{{$skills->rasio}}</td>
                    <td>
                        <a href="{{route('skill.edit', $skills->id)}}" class="btn btn-warning">Edit</a>

                        <form action="{{route('skill.destroy', $skills->id)}}" method="POST">
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