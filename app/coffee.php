<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coffee extends Model
{
    protected $fillable = [
        'nama_kopi', 'manfaat', 'efek', 'kategori', 'gambar'];
    public $timestamps = true;
}
