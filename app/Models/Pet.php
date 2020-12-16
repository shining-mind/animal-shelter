<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $table = 'pet';

    public function images()
    {
        return $this->hasMany(PetImage::class);
    }

    public function tags()
    {
        return $this->hasManyThrough(
            PetTag::class,
            PetToTag::class,
            'pet_id', // Foreign key on the PetToTag
            'id', // Foreign key on the PetTag
            'id', // Local key on the Pet
            'tag_id' // Local key on the PetToTag
        );
    }

    public function type()
    {
        return $this->hasOne(PetType::class);
    }
}
