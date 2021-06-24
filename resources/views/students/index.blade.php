@extends('layout.main')

@section('title', 'Daftar Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Daftar Mahasiswa</h1>

                <a href="/students/create" class="btn btn-primary mb-2">Tambah Data Mahasiswa</a>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif

                <ul class="list-group mt-3">
                    @foreach( $students as $student )
                    <li class="list-group-item d-flex justify-content-between
                    align-items-center">
                    {{$student->nama}}
                    <a href="/students/{{ $student->id }}" class="badge badge-info">detail</a>
                    </li>
                    @endforeach
                </ul>

                {{-- <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Email</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $std)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $std->nama }}</td>
                            <td>{{ $std->nim }}</td>
                            <td>{{ $std->email }}</td>
                            <td>{{ $std->jurusan }}</td>
                            <td>
                                <a href="" class="btn btn-success">edit</a>
                                <a href="" class="btn btn-danger">delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table> --}}
            </div>
        </div>
    </div>
    
@endsection