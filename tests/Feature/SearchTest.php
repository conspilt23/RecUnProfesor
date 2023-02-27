<?php

namespace Tests\Feature;

use App\Models\Teacher;
use Database\Seeders\ScheduleSeeder;
use Database\Seeders\SubjectSeeder;
use Database\Seeders\TeacherSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SearchTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Run a specific seeder before each test.
     *
     * @var array
     */
    protected $seeder = [
        TeacherSeeder::class,
        SubjectSeeder::class,
        ScheduleSeeder::class
    ];

    public function test_if_the_page_is_accesible()
    {
        $response = $this->get('/result?search_query=Jose');

        $response->assertStatus(200);
    }

    public function test_if_the_page_is_accesible_even_the_query_is_incorrect()
    {
        $teacher = Teacher::inRandomOrder()->first();

        $response = $this->get('/result?search_query=' . $teacher->name);
        
        $response->assertStatus(200);
        
        $response = $this->get('/result?search_query=Maria Antonieta Perez Ferrera De Lima Gonzales De Leon');
        
        $response->assertStatus(404);
        
        $response = $this->get('/result?search_query=');
        
        $response->assertStatus(404);

    }
}
