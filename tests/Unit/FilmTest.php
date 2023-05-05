<?php

namespace Tests\Unit;

use App\Models\User;
use App\Models\Film;
use App\Models\Comment;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FilmTest extends TestCase
{
    use RefreshDatabase;

    public function testFilmRating(): void
    {
        $usersCount = 3;
        $sumOfRatings = 0;

        $film = Film::factory()->create();
        $users = User::factory()->count($usersCount)->create();

        foreach ($users as $index => $user) {
            $rating = rand(1, 5);
            Comment::factory()->create([
                'film_id' => $film->id,
                'user_id' => $user->id,
                'rating' => $rating,
            ]);
            $sumOfRatings += $rating;
        }

        $averageRating = $sumOfRatings / $usersCount;

        $this->assertEquals($averageRating, $film->calculateRating());
    }
}