@extends('layouts.main')

@section('content')
    <h2 align="center">Data Publisher</h2>
    <div class="container container-fluid">
        <table class="table table-dark table-striped">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Alamat</th>
                <th scope="col">Buku</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($publishers as $publisher): ?>
            <tr>
                <th scope="row"><?= $publisher['id']; ?></th>
                <td><?= $publisher['nama']; ?></td>
                <td><?= $publisher['email']; ?></td>
                <td><?= $publisher['alamat']; ?></td>
                <td>
                    <?php foreach($publisher->book as $book): ?>
                        <li><?= $book->Judul; ?></li>
                    <?php endforeach; ?>
                </td>
                <td>
                    <a class="btn btn-primary" href="publisher/detail/{{$publisher->id}}">Detail</a>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
@endsection