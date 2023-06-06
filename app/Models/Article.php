<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table = 'Articles';
    protected $primaryKey = 'id';
    protected $fillable = ['title','description','publish','trash'];
}
