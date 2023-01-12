@extends('layouts.main')

@section('content')
                <!-- Detail Book from data -->
                <h1 class="mt-3" align="center">Detail Publisher</h1>
                <div class="from">
                    <div class="list-group-item">
                        <label for="nama">nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{$publisher['nama']}}" readonly>
                    </div>

                    <div class="from-group">
                        <label for="email">email</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{$publisher['email']}}" readonly>
                    </div>

                    <div class="from-group">
                        <label for="alamat">alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{$publisher['alamat']}}" readonly>
                    </div>

                    <a href="/publisher" class="btn btn-primary mt-3">Kembali</a>
                </div>
    
@endsection