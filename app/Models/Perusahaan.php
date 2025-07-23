<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_perusahaan',
        'alamat',
        'slogan',
        'logo'
    ];

    public function kontak()
    {
        return $this->hasOne(Contact::class);
    }

    public function loker()
    {
        return $this->hasMany(Loker::class);
    }
}
