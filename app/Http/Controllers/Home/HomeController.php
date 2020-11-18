<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller as BaseController;
use App\Repositories\Animals\AnimalRepository;
use Illuminate\Http\Request;

class HomeController extends BaseController
{
    protected AnimalRepository $animalRepository;

    public function __construct(AnimalRepository $animalRepository)
    {
        $this->animalRepository = $animalRepository;
    }

    public function home()
    {
        return view('home', ['slider_items' => $this->animalRepository->getAnimalsForHomePage()]);
    }
}
