<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class RegisterControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Тестирование успешной регистрации пользователя.
     */
    public function testSuccessfulRegistration(): void
    {
        Storage::fake('local');

        $data = [
            'name' => 'Имя пользователя',
            'email' => 'email@mail.ru',
            'password' => 'password123',
            'avatar' => UploadedFile::fake()->image('avatar.jpg'),
        ];

        $user = User::where('email', $data['email'])->first();
        $response = $this->postJson('/api/register', $data);

        $response->assertStatus(Response::HTTP_OK);
        $response->assertJsonStructure(['data' => ['token']]);

        $this->assertNotNull($user);
        $this->assertTrue(Hash::check($data['password'], $user->password));
        $this->assertEquals('avatars/' . $data['avatar']->hashName(), $user->avatar);
        Storage::disk('local')->assertExists('avatars/' . $data['avatar']->hashName());
    }

    /**
     * Тестирование валидации при регистрации.
     */
    public function testRegistrationValidationError(): void
    {
        $data = [
            'name' => '',
            'email' => 'not-valid-email',
            'password' => 'short',
            'avatar' => UploadedFile::fake()->create('document.pdf', 20480),
        ];

        $response = $this->postJson("/api/register", $data);

        $response->assertStatus(Response::HTTP_UNPROCESSABLE_ENTITY);
        $response->assertJsonValidationErrors(['name', 'email', 'password', 'avatar']);
    }
}
