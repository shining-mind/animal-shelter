<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use App\Repositories\Animals\AnimalRepository;
use App\Repositories\Team\TeamRepository;
use App\View\Components\PetFilter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ViewController extends BaseController
{
    protected AnimalRepository $animalRepository;
    protected TeamRepository $teamRepository;

    public function __construct(AnimalRepository $animalRepository, TeamRepository $teamRepository)
    {
        $this->animalRepository = $animalRepository;
        $this->teamRepository = $teamRepository;
    }

    public function home()
    {
        return view('home', [
            'title' => trans('messages.home_title'), 'slider_items' => $this->animalRepository->getAnimalsForHomePage()
        ]);
    }

    public function pets(Request $request)
    {
        $rules = array_map(fn($values) => Rule::in($values), PetFilter::getFilterValues());
        $pets = $this->animalRepository->getAnimalsForPetsPage(Validator::validate($request->all(), $rules));
        return view('pets', [
            'title' => trans('messages.pets_title'),
            'pets' => $pets
        ]);
    }

    public function pet(int $id)
    {
        $pet = $this->animalRepository->getAnimalById($id);
        if (is_null($pet)) {
            abort(404);
        }
        return view('pet', [
            'title' => $pet->getTitle(),
            'pet' => $pet
        ]);
    }

    public function feelingLucky()
    {
        $id = $this->animalRepository->getRandomId();
        if (is_null($id)) {
            abort(404);
        }
        return response()->redirectTo(url('/pets/' . $id));
    }

    public function about()
    {
        return view('about', [
            'title' => trans('messages.about_title'),
            'team' => $this->teamRepository->getTeam(),
        ]);
    }
}
