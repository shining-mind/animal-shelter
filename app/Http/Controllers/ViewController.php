<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use App\Repositories\Animals\AnimalRepository;

class ViewController extends BaseController
{
    protected AnimalRepository $animalRepository;

    public function __construct(AnimalRepository $animalRepository)
    {
        $this->animalRepository = $animalRepository;
    }

    public function home()
    {
        return view('home', [
            'title' => trans('messages.home_title'), 'slider_items' => $this->animalRepository->getAnimalsForHomePage()
        ]);
    }

    public function pets()
    {
        return view('pets', [
            'title' => trans('messages.pets_title'),
            'pets' => $this->animalRepository->getAnimalsForPetsPage()
        ]);
    }
}
