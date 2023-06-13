<?php

namespace App\Services;

use App\Models\Actor;
use App\Models\Film;

class ActorService
{
    /**
     * Синхронизирует актеров фильма.
     *
     * @param Film $film Фильм, для которого необходимо синхронизировать актеров.
     * @param array $actorsNames Массив имен актеров.
     * @return void
     */
    public function syncActors(Film $film, array $actorsNames): void
    {
        $film->actors()->detach();
        foreach ($actorsNames as $actorName) {
            $actor = Actor::firstOrCreate(['name' => $actorName]);
            $film->actors()->attach($actor);
        }
    }
}
