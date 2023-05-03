<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_category()
    {   
        $response = $this->get(route('newsCategory'));

        $response->assertStatus(200);
    }

    public function test_category_header()
    {
        $response = $this->withHeaders([
            'Header' => 'Value',
        ])->get('/category', ['header' => 'Категории новостей']);

        $response->assertStatus(200);
    }

    public function test_admin_category()
    {   
        $response = $this->get('admin/categories');

        $response->assertStatus(200);
    }

    public function test_admin_category_route()
    {   
        $response = $this->get(route('categories.index'));

        $response->assertStatus(200);
    }
    
    public function test_category_admin_header()
    {
        $response = $this->withHeaders([
            'Header' => 'Value',
        ])->get('/admin/categories', ['header' => 'Список категорий новостей']);

        $response->assertStatus(200);
    }
}

