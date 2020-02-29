<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengolahan extends Model
{
    protected $fillable = [
        'nama_kopi', 'gambar', 'penjelasan'];
    public $timestamps = true;
}
