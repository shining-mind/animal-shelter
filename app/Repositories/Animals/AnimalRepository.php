<?php

namespace App\Repositories\Animals;

class AnimalRepository
{
    public function getAnimalsForHomePage(): array
    {
        return [
            (object) ['title' => 'Маня', 'image' => 'https://pet-uploads.adoptapet.com/2/6/4/294541558.jpg'],
            (object) ['title' => 'Дог', 'image' => 'https://pet-uploads.adoptapet.com/2/6/4/294541558.jpg'],
            (object) ['title' => 'Альбус', 'image' => 'https://pet-uploads.adoptapet.com/2/6/4/294541558.jpg'],
        ];
    }
}
