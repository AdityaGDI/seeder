<?php

use Illuminate\Support\Facades\Route;
use App\Models\Profile;
use App\Models\Book;
use App\Models\Jurnal;
use App\Models\FYP;
use App\Models\CD;
use App\Models\Newspapers;

Route::get('/', function () {
    $query = request()->get('query');

    // Perform the search across multiple models
    $profiles = Profile::where('name', 'like', "%{$query}%")
                        ->orWhere('username', 'like', "%{$query}%")
                        ->orWhere('email', 'like', "%{$query}%")
                        ->get();

    $books = Book::where('Judul_Buku', 'like', "%{$query}%")
                 ->orWhere('Penulis', 'like', "%{$query}%")
                 ->orWhere('Penerbit', 'like', "%{$query}%")
                 ->orWhere('Sinopsis', 'like', "%{$query}%")
                 ->get();

    $journals = Jurnal::where('Judul_Jurnal', 'like', "%{$query}%")
                      ->orWhere('Penulis', 'like', "%{$query}%")
                      ->orWhere('Penerbit', 'like', "%{$query}%")
                      ->get();

    $fyps = FYP::where('Judul_FYP', 'like', "%{$query}%")
               ->get();

    $cds = CD::where('Judul_CD', 'like', "%{$query}%")
             ->orWhere('Genre', 'like', "%{$query}%")
             ->get();

    $newspapers = Newspapers::where('Judul_Newspapers', 'like', "%{$query}%")
                            ->orWhere('Isi', 'like', "%{$query}%")
                            ->get();

    return view('welcome', compact('profiles', 'books', 'journals', 'fyps', 'cds', 'newspapers'));
});
