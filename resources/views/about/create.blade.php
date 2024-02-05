@extends('layouts.app')

@section('title','Data About')

@section('content')

<div class="container">
    <a href="/admin/about" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action= "{{route('about.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Nama Anda">
                </div>
                @error('title')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Job</label>
                    <input type="text" class="form-control" name="job" placeholder="Pekerjaan Saat Ini">
                </div>
                @error('job')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Description1</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi Anda"></textarea>
                </div>
                @error('description')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Description 2</label>
                    <textarea name="description2" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi Anda"></textarea>
                </div>
                @error('description2')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Description 3</label>
                    <textarea name="description3" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi Anda"></textarea>
                </div>
                @error('description3')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
                @error('image')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form group"></div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection