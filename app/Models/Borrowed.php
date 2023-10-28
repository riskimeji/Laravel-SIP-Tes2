<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Borrowed extends Model
{
    use HasFactory;
    protected $table = 'borroweds';

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function book(){
        return $this->belongsTo(Book::class, 'book_id');
    }

    protected $fillable = [
        'borrow_code',
        'book_id',
        'user_id',
        'status',
    ];
}
