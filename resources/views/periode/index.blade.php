@extends('main')

@section('title', 'Periode')

@section('content')
    <a href="{{ route('periode.create')}}" class="btn btn-primary">Tambah</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Tahun Akademik</th>
                <th>Semester</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($result as $item)
                <tr><td> {{ $item->tahun_akademik }} </td><td> {{ $item->semester }} </td></tr>
            @endforeach
        </tbody>
    </table>

@endsection