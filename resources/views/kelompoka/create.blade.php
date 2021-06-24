@extends('layout.main')

@section('title', 'Form Tambah Data')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Form Tambah Data</h1>

                <form method="POST" action="/kelompoka">
                @csrf
                <div class="form-group">
                    <label for="judul_54">Judul</label>
                    <input type="text" class="form-control @error ('judul_54') is-invalid
                    @enderror" id="judul_54" 
                    placeholder="Masukkan Judul" name="judul_54" value="{{ old('judul_54') }}">

                    @error('judul_54')
                    <div class="invalid-feedback">{{ $message }}</div>    
                    @enderror                    
                </div>
                <div class="form-group">
                    <label for="abstrak_54">Abstrak</label>
                    <input type="text" class="form-control @error ('abstrak_54') is-invalid
                    @enderror" id="abstrak_54" 
                    placeholder="Masukkan Abstrak" name="abstrak_54" value="{{ old('abstrak_54') }}">

                    @error('abstrak_54')
                    <div class="invalid-feedback">{{ $message }}</div>    
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>

            </div>
        </div>
    </div>
    
@endsection