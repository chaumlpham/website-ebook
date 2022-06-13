<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhmucEbook extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'tendanhmuc', 'mota', 'kichhoat', 'slug_danhmuc'
    ];
    protected $primaryKey = 'id';
    protected $table = 'danhmuc';

    public function ebook()
    {

        return $this->hasMany('App\Models\Ebook','danhmuc_id','id');
    }
}

