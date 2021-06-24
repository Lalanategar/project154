@extends('layout.main')

@section('title', 'Tampil Data')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Tampil Data</h1>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$exam->judul_54}}</h5>
                        <p class="card-text">{{$exam->abstrak_54}}</p>
                        
                        {{-- <a href="{{ $student->id }}/edit" class="btn btn-primary">Edit</a> --}}
                        <form action="/students/{{ $exam->id_a }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="/students" class="card-link">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection