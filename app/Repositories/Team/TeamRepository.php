<?php

namespace App\Repositories\Team;

class TeamRepository
{
    public function getTeam()
    {
        return [
            (object) ['image' => asset('/images/team/1.jfif'), 'name' => 'Василий', 'position' => 'менеджер по работе с приютами'],
            (object) ['image' => asset('/images/team/2.jfif'), 'name' => 'Маргарита', 'position' => 'менеджер по связям с общественностью'],
            (object) ['image' => asset('/images/team/3.jfif'), 'name' => 'Юлия', 'position' => 'дизайнер'],
            (object) ['image' => asset('/images/team/4.jfif'), 'name' => 'Герман', 'position' => 'директор'],
            (object) ['image' => asset('/images/team/5.jfif'), 'name' => 'Егор', 'position' => 'менеджер по социальным сетям'],
        ];
    }
}
