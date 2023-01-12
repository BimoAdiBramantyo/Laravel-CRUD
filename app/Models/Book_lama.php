<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book
{

    private static $book = [
        [
            'id' => '01',
            'nama' => 'Buku 01',
            'pengarang' => 'Nama 01',
            'harga' => '10000'
        ],
        [
            'id' => '02',
            'nama' => 'Buku 02',
            'pengarang' => 'Nama 02',
            'harga' => '20000'
        ],
        [
            'id' => '03',
            'nama' => 'Buku 03',
            'pengarang' => 'Nama 03',
            'harga' => '30000'
        ],
        [
            'id' => '04',
            'nama' => 'Buku 04',
            'pengarang' => 'Nama 04',
            'harga' => '40000'
        ],
        [
            'id' => '05',
            'nama' => 'Buku 05',
            'pengarang' => 'Nama 05',
            'harga' => '50000'
        ]
    ];
    
    //method
    public static function all(){
        return collect(self::$book);
    }

    public static function find($id){
        $book = static::all();
        return $book->firstWhere('id', $id);
    }
}


