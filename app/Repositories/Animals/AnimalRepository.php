<?php

namespace App\Repositories\Animals;

use App\Models\Pet;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class AnimalRepository
{
    public function getAnimalsForHomePage(): array
    {
        $pets = Pet::query()->select('name')->with('images')->limit(3)->inRandomOrder()->get();
        return $pets->map(function ($pet) {
            return (object) [
                'title' => $pet->name,
                'image' => $pet->images[0]
            ];
        })->all();
    }

    public function getAnimalsForPetsPage(array $filter = []): LengthAwarePaginator
    {
        $query = Pet::query();
        if (isset($filter['type']) && $filter['type'] !== 'all') {
            if ($filter['type'] !== 'other') {
                $query->where('type_id', function ($builder) use ($filter) {
                    $builder->select('t.id')->from('pet_type as t')->where('t.name', $filter['type']);
                });
            } else {
                $query->whereNotIn('type_id', function ($builder) use ($filter) {
                    $builder->select('t.id')->from('pet_type as t')->whereIn('t.name', ['cat', 'dog']);
                });
            }
        }
        if (isset($filter['age'])) {
            switch ($filter['age']) {
                case 'junior':
                    $query->where('age', '<', 12);
                    break;
                case 'young':
                    $query->whereBetween('age', [12, 36]);
                    break;
                case 'senior':
                    $query->where('age', '>', 36);
                    break;
            }
        }
        if (isset($filter['sex']) && $filter['sex'] !== 'any') {
            $query->where('sex', strtoupper($filter['sex']));
        }
        return $query->with('images')->paginate();
    }
}
