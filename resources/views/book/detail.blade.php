@extends('layouts.main')

@section('content')
                <!-- Detail Book from data -->
                <h1 class="mt-3" align="center">Detail Buku</h1>
                <div class="from">
                    <div class="list-group-item">
                        <label for="Judul">Judul</label>
                        <input type="text" class="form-control" id="Judul" name="Judul" value="{{$book['Judul']}}" readonly>
                    </div>

                    <div class="list-group-item">
                        <label for="judul">Publisher</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="{{$book['publisher']['nama']}}" readonly>
                    </div>

                    <div class="from-group">
                        <label for="Pengarang">Pengarang</label>
                        <input type="text" class="form-control" id="Pengarang" name="Pengarang" value="{{$book['Pengarang']}}" readonly>
                    </div>

                    <div class="from-group">
                        <label for="Harga">Harga</label>
                        <input type="text" class="form-control" id="Harga" name="Harga" value="{{$book['Harga']}}" readonly>
                    </div>

                    <div class="from-group">
                        <label for="release">Release</label>
                        <input type="text" class="form-control" id="release" name="release" value="{{$book['release']}}" readonly>
                    </div>
                    

                    <a href="/book/all" class="btn btn-primary mt-3">Kembali</a>
                </div>
    
@endsection