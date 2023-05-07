<?php

namespace Tests\Feature;

use App\Models\Film;
use App\Models\Genre;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class FilmControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndexAllFilms()
    {
        Film::factory()->count(10)->create(['status' => Film::STATUS_READY]);

        $response = $this->get('/api/films');

        $response->assertStatus(Response::HTTP_OK);
        $responseData = json_decode($response->getContent(), true);
        $response->assertJsonCount(8, 'data.data');

        $expectedStructure = [
            'id',
            'name',
            'poster_image',
            'preview_image',
            'background_image',
            'background_color',
            'video_link',
            'preview_video_link',
            'description',
            'director',
            'released',
            'run_time',
            'rating',
            'scores_count',
            'imdb_id',
            'status',
            'starring',
            'genre',
        ];

        foreach ($responseData['data']['data'] as $film) {
            $response->assertJsonStructure($expectedStructure, $film);
        }
    }

    public function testIndexFilteredByGenre()
    {
        $genre = Genre::factory()->create();
        Film::factory()->count(5)->create(['status' => Film::STATUS_READY])->each(function ($film) use ($genre) {
            $film->genres()->attach($genre);
        });

        $response = $this->get('/api/films?genre=' . $genre->name);

        $response->assertStatus(Response::HTTP_OK);
        $response->assertJsonCount(5, 'data.data');
    }

    public function testIndexFilteredByStatusForUser()
    {
        $user = User::factory()->create();

        Film::factory()->count(3)->create(['status' => Film::STATUS_PENDING]);
        Film::factory()->count(3)->create(['status' => Film::STATUS_MODERATE]);

        $response = $this->actingAs($user)->get('/api/films?status=' . Film::STATUS_PENDING);
        $response->assertStatus(Response::HTTP_FORBIDDEN);
        $response->assertJson([
            'message' => 'У вас нет разрешения на просмотр фильмов статусе ' . Film::STATUS_PENDING,
        ]);

        $response = $this->actingAs($user)->get('/api/films?status=' . Film::STATUS_MODERATE);
        $response->assertStatus(Response::HTTP_FORBIDDEN);
        $response->assertJson([
            'message' => 'У вас нет разрешения на просмотр фильмов статусе ' . Film::STATUS_MODERATE,
        ]);
    }

    public function testIndexFilteredByStatusForModerator()
    {
        $moderator = User::factory()->moderator()->create();

        Film::factory()->count(3)->create(['status' => Film::STATUS_PENDING]);
        Film::factory()->count(3)->create(['status' => Film::STATUS_MODERATE]);

        $response = $this->actingAs($moderator)->get('/api/films?status=' . Film::STATUS_PENDING);
        $response->assertStatus(Response::HTTP_OK);
        $response->assertJsonCount(3, 'data.data');

        $response = $this->actingAs($moderator)->get('/api/films?status=' . Film::STATUS_MODERATE);
        $response->assertStatus(Response::HTTP_OK);
        $response->assertJsonCount(3, 'data.data');
    }

    public function testIndexFilmsOrderedByReleased()
    {
        Film::factory()->count(5)->create(['status' => Film::STATUS_READY]);

        $response = $this->get('/api/films?order_by=' . Film::ORDER_BY_RELEASED . '&order_to=desc');

        $response->assertStatus(Response::HTTP_OK);
        $responseData = json_decode($response->getContent(), true)['data']['data'];

        for ($i = 1; $i < count($responseData); $i++) {
            $this->assertTrue($responseData[$i - 1][Film::ORDER_BY_RELEASED] >= $responseData[$i][Film::ORDER_BY_RELEASED]);
        }
    }

    public function testIndexFilmsOrderedByRating()
    {
        Film::factory()->count(5)->create(['status' => Film::STATUS_READY]);

        $response = $this->get('/api/films?order_by=' . Film::ORDER_BY_RATING . '&order_to=desc');

        $response->assertStatus(Response::HTTP_OK);
        $responseData = json_decode($response->getContent(), true)['data']['data'];

        for ($i = 1; $i < count($responseData); $i++) {
            $this->assertTrue($responseData[$i - 1][Film::ORDER_BY_RATING] >= $responseData[$i][Film::ORDER_BY_RATING]);
        }
    }

}
