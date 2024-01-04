<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

  protected $table = 'books';

  protected $fillable = [
    'kode_buku',
    'judul_buku',
    'tahun_terbit',
    'nama_penerbit',
    'nama_pengarang',
  ];
}
