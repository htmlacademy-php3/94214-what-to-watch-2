<?php

namespace App\Services\MovieService;

interface MovieRepositoryInterface
{
    public function findMovieById(string $imdbId);
}
