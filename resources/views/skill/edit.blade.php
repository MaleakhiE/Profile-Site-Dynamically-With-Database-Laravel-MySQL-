@extends('layouts.app')

@section('title','Data Skill')

@section('content')

<div class="container">
    <a href="/admin/skill" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action= "{{route('skill.update',$skill->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Jumlah Keahlian Skill (Rasio)</label>
                    <input type="range" min="1" max="100" value="50" class="form-control" name="rasio">
                </div>
                @error('rasio')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Keahlian</label>
                    <textarea name="name" id="" cols="30" rows="10" class="form-control" placeholder="Skills Anda"></textarea>
                </div>
                @error('name')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form group"></div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection