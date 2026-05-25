@extends('main')

@section('title', 'Mahasiswa')

@section('content')
<a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">Tambah Mahasiswa</a>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NPM</th>
        <th>Foto</th>
        <th>Program Studi</th>
        <th>Aksi</th>
    </tr>

    @foreach($mahasiswa as $key => $mhs)
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $mhs->nama }}</td>
        <td>{{ $mhs->npm }}</td>
        <td>
            @if ($mhs->foto)
                <img src="{{ asset('storage/fotos/' . $mhs->foto) }}" alt="Foto"
                width="100">
            @else 
                <p>Foto Tidak Tersedia</p>
            @endIf
        
        </td>   
        <td>{{ $mhs->prodi->nama_prodi ?? '-' }}</td>
        <td>
            <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="btn btn-smbtn-warning">Edit</a>
        </td>
        <td>
            <a href="{{route('mahasiswa.edit', $mhs->id)}}" class="btn btn-warning btn-rounded">Ubah</a>
                        <form method="POST" action="{{ route('mahasiswa.destroy', $mhs->id) }}">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                            <button type="submit" class="btn btn-xs btn-danger btn-rounded show_confirm"
                                data-toggle="tooltip" title='Delete'
                                data-nama='{{ $mhs->nama }}'>Hapus</button>
        </td>
        
    </tr>
    @endforeach

</table>
@endsection