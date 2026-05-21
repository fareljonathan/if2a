@extends('main')

@section('title', 'Ubah Prodi')

@section('content')
    <form action="{{ route('prodi.update',  $prodi->id) }}" method="post">
        @method('PUT')

        <div class="form-group">
            <label for="">Nama Prodi</label>
            <input type="text" name="nama_prodi" class="form-control" value="{{ old('nama_prodi') ?? $prodi->nama_prodi }}">
        </div>
        @error('nama_prodi')
            <div class="text-danger"> {{ $message }} </div>
        @enderror

        <div class="form-group">
            <label for="">Singkatan</label>
            <input type="text" name="singkatan" class="form-control" value="{{ old('singkatan') ?? $prodi->singkatan }}">
        </div>
        @error('singkatan')
            <div class="text-danger"> {{ $message }} </div>
        @enderror

        <div class="form-group">
            <label for="">Kaprodi</label>
            <input type="text" name="kaprodi" class="form-control" value="{{ old('kaprodi') ?? $prodi->kaprodi }}">
        </div>
        @error('kaprodi')
            <div class="text-danger"> {{ $message }} </div>
        @enderror

        <div class="form-group">
            <label for="">Semester</label>
            <input type="text" name="fakultas_id" class="form-control" value="{{ old('fakultas_id') ?? $prodi->fakultas_id }}">
        </div>
        @error('semester')
            <div class="text-danger"> {{ $message }} </div>
        @enderror

        <button type="submit" class="btn btn-primary mt-2">Simpan</button>
    </form>
@endsection