<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table = 'books';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'author',
        'genre',
        'description',
        'isbn',
        'image',
        'published',
        'publisher',
    ];
    use HasFactory;
}