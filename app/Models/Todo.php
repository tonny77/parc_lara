<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Todo extends Model
{
    use softDeletes;

    protected $fillable = [
            'title',
            'content',
            'user_id',
    ];

    public function getAll($id)
    {
        return $this->where('user_id', $id)->get();
    }

}
