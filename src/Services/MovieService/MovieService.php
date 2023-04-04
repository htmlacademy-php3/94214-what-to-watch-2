<?php

namespace WhatToWatch\Services\MovieService;

class MovieService 
{
    private MovieRepository $repository;

    /**
     * Конструктор класса MovieService
     * 
     * @param MovieRepository $repository Задаёт репозиторий для работы с фильмами
     */
    public function __construct(MovieRepository $repository) 
    {
        $this->repository = $repository;
    }

    /**
     * Осуществляет получение информации о фильме по его IMDB ID через репозиторий
     *
     * @param string $imdbId IMDB ID фильма
     * @return array|null Возвращает массив с информацией о фильме или null, если фильм не найден
     */
    public function getMovie(string $imdbId): ?array
    {
        return $this->repository->findMovieById($imdbId);
    }
}