<?php
namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RouteTest extends TestCase
{
    public function testHome()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function testArticle()
    {
        $response = $this->get('/articles');
        $response->assertStatus(200);
    }
}
