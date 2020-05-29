<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    // protected function setUp(): void
    // {
    //     parent::setUp();
    //     Event::fake();
    // }

    /** @test */
    public function logged_in_user_can_not_manage_products()
    {
        $response = $this->get('/admin/product')
        ->assertRedirect('/login');
    }

    /** @test */
    public function auth_user_can_manage_products()
    {   
        $this->actingAs(factory(User::class)->create());
        $response = $this->get('/admin/product')
        ->assertOk();
    }
    /** @test */
    public function ProductMandatory()
    {   
        $this->actingAs(factory(User::class)->create());
        $response = $this->post('/admin/product', $this->productTestData());
        $response->assertSessionHasErrors('category_id');

        $response = $this->post('/admin/product', array_merge($this->productTestData(), ['product_name'=>'']));
        $response->assertSessionHasErrors('product_name');
    }

    private function productTestData(){
        return [
            'product_name'  => '123',
            'category_id'   => '',
            'description'   => 'whhishadiady3b'
        ];
    }
}
