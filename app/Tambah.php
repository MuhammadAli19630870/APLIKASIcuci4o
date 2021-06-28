<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tambah extends Model
{
    protected $table        = 'biaya';
    protected $fillable    = ['id_biaya','jenis','biaya'];
    public $timestamps   = false;
}
