@extends('layouts.app')

@section('title','Data Menu - Services')

@section('content')

<div class="container">
    <a href="/admin/menu" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action= "{{route('menu.update',$menu->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Judul</label>
                    <textarea name="judul" id="" cols="30" rows="10" class="form-control" placeholder="Nama Judul">{{$menu->judul}}</textarea>
                </div>
                @error('judul')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Desc Judul">{{$menu->description}}</textarea>
                </div>
                @error('description')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form group"></div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection