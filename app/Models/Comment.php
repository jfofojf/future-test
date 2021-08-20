<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed body
 * @property mixed name
 */
class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'body'];
}
