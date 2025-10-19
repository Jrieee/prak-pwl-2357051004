<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class MataKuliah extends Model
{
    use HasFactory;

    protected $table = 'mata_kuliah';

    protected $fillable = [
        'nama_mk',
        'sks',
    ];

    // Use auto-incrementing integer id (match existing DB schema)
    // If your DB uses UUID primary keys, revert these changes and ensure the
    // database column type is uuid. Current setup assumes integer id.
    public $incrementing = true;
    protected $keyType = 'int';

    public function getAllMK()
    {
        return $this->all();
    }
}