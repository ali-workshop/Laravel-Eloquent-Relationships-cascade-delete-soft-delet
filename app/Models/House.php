<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class House extends Model
{
    use HasFactory;



    #declare the relationship
    public function user() :BelongsTo {

        return $this->belongsTo(User::class,);

    }

}
