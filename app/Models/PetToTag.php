<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetToTag extends Model
{
    use HasFactory;

    protected $table = 'pet_to_tag';
}
