@extends('layouts.main')

@section('content')
    <h2 align="center">Data Buku</h2>
    <div class="container container-fluid">
        <table class="table table-dark table-striped">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Pengarang</th>
                <th scope="col">Harga</th>
                <th scope="col">Release</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($books as $book): ?>
            <tr>
                <th scope="row"><?= $book['id']; ?></th>
                <td><?= $book['Judul']; ?></td>
                <td><?= $book['Pengarang']; ?></td>
                <td><?= $book['Harga']; ?></td>
                <td><?= $book['release']; ?></td>
                <td>
                    <a class="btn btn-primary" href="/book/detail/{{$book->Judul}}">Detail</a>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
@endsection