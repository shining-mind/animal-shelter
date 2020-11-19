<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller as BaseController;
use App\Repositories\Animals\AnimalRepository;

class HomeController extends BaseController
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
}
