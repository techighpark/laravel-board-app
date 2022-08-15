<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

      /**
     * Get all of the tasks for the user.
     */
    public function tasks()
    {
        return $this->hasMany(Board::class);
    }

}
