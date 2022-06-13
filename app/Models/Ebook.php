<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ebook extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'tenebook', 'tacgia', 'tomtat', 'kichhoat', 'slug_ebook', 'hinhanh', 'danhmuc_id', 'docthu'
    ];
    protected $primaryKey = 'id';
    protected $table = 'ebook';

    public function danhmucebook()
    {
        return $this->belongsTo('App\Models\DanhmucEbook', 'danhmuc_id', 'id');
    }

    public function thuocnhieudanhmucebook()
    {
        return $this->belongsToMany(DanhmucEbook::class, 'thuocdanhmuc', 'ebook_id', 'danhmuc_id');
    }
}
