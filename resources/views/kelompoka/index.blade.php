@extends('layout.main')

@section('title', 'Data')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Data</h1>

                <a href="/kelompoka/create" class="btn btn-primary mb-2">Tambah Data</a>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif

                <ul class="list-group mt-3">
                    @foreach( $exams as $exam )
                    <li class="list-group-item d-flex justify-content-between
                    align-items-center">
                    {{$exam->judul_54}}
                    <a href="/students/{{ $exam->id }}" class="badge badge-info">detail</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    
@endsection