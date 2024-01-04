<?php

namespace App\Models;

use Database\Factories\BookFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

  use HasFactory;

  protected $table = 'books';

  protected $fillable = [
    'kode_buku',
    'judul_buku',
    'tahun_terbit',
    'nama_penerbit',
    'nama_pengarang',
  ];
}
