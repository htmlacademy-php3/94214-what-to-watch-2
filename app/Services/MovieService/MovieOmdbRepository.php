<?php

namespace App\Services\MovieService;

use App\DTO\FilmData;
use GuzzleHttp\Client;

class MovieOmdbRepository implements MovieRepositoryInterface
{
    private Client $client;
    private string $apiKey;
    private string $baseUrl = 'http://www.omdbapi.com/';

    public function __construct(Client $client)
    {
        $this->client = $client;
        $this->apiKey = config('services.omdb.api_key');
    }

    public function findMovieById(string $imdbId): ?FilmData
    {
        $response = $this->client->request('GET', $this->baseUrl, [
            'query' => [
                'apikey' => $this->apiKey,
                'i' => $imdbId,
            ],
        ]);

        $movieData = json_decode($response->getBody()->getContents(), true);

        $filmData = new FilmData();
        $filmData->name = $movieData['Title'];
        $filmData->poster_image = $movieData['Poster'];
        $filmData->description = $movieData['Plot'];
        $filmData->director = $movieData['Director'];
        $filmData->released = (int) $movieData['Year'];
        $filmData->run_time = (int) $movieData['Runtime'];
        $filmData->rating = (float) $movieData['imdbRating'];
        $filmData->scores_count = (int) str_replace(',', '', $movieData['imdbVotes']);
        $filmData->imdb_id = $movieData['imdbID'];
        $filmData->starring = array_map('trim', explode(',', $movieData['Actors']));
        $filmData->genre = array_map('trim', explode(',', $movieData['Genre']));

        return $filmData;
    }

}
