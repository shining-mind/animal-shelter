<?php

namespace App\Repositories\Animals;

class AnimalRepository
{
    public function getAnimalsForHomePage(): array
    {
        return [
            (object) ['title' => 'Маня', 'image' => 'https://pet-uploads.adoptapet.com/5/8/7/352561196.jpg'],
            (object) ['title' => 'Дог', 'image' => 'https://pet-uploads.adoptapet.com/2/6/4/294541558.jpg'],
            (object) ['title' => 'Альбус', 'image' => 'https://pet-uploads.adoptapet.com/3/f/6/491945943.jpg'],
        ];
    }

    public function getAnimalsForPetsPage(): array
    {
        return array_merge(
            $this->getAnimalsForHomePage(),
            [
                (object) ['title' => 'Фрэнки', 'image' => 'https://pet-uploads.adoptapet.com/2/7/5/352566761.jpg'],
                (object) ['title' => 'Лаки', 'image' => 'https://pet-uploads.adoptapet.com/4/5/8/292474124.jpg'],
                (object) ['title' => 'Луна', 'image' => 'https://pet-uploads.adoptapet.com/e/6/0/513893246.jpg'],
            ]
        );
    }
}
