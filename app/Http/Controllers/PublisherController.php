<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publisher;

class PublisherController extends Controller
{
    public function index(){
        return view('publisher.all', [
            'publishers' => publisher::all()
        ]);
    }

    public function show(Publisher $publishers){
        return view('publisher.detail', [
            'publisher' => $publishers
        ]);
    }
}