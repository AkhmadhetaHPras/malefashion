<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use WithoutMiddleware;
    // use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_product_show()
    {
        // $admin = User::factory()->create();
        $admin = User::find(1);

        $response = $this->actingAs($admin)->get('/products/listall');

        $response->assertSeeText('Products');
        $response->assertSeeText('#ID');
        $response->assertSeeText('Products');
        $response->assertSeeText('Category');
        $response->assertSeeText('Brand');
        $response->assertSeeText('Price');
        $response->assertSeeText('Actions');

        $response->assertStatus(200);
    }

    public function test_product_create()
    {
        $admin = User::find(1);

        $product1 =
            [
                'brand_id' => '1',
                'category_id' => '1',
                'product_name' => 'Bucket Hat',
                'slug' => 'bucket-hat',
                'yt_link' => 'http://www.youtube.com/watch?v=BJJxOiQdSXg',
                'description' => '<div class="product__details__tab__content"><p class="note">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa molestiae doloremque eius tempore debitis maiores voluptate quasi accusantium commodi laboriosam?</p><div class="product__details__tab__content__item"><h5>Products Infomation</h5><p>A FUZZY  FAUX FUR BUCKET HAT WITH A METALLIC-GOLD SIGNOFF.The bucket hat has been making an impression since the 90s  and the style isnt going anywhere. This adidas version makes that extra clear in faux fur for a statement look. </p></div><div class="product__details__tab__content__item"><h5>Spesification</h5><p>100% polyester fur</p></div></div>',
                'short_desc' => 'The bucket hat has been making an impression since the 90s, and the style isnt going anywhere. This adidas version makes that extra clear in faux fur for a statement look.',
                'price' => 279500,
                'tags' => 'Unisex, Lifestyle',
                'rating' => 0,
                'thumbnail' => 'bucket-hat_thumbnail.jpg',
                'display1' => 'bucket-hat_display1.png',
                'display2' => 'bucket-hat_display2.png',
                'display3' => 'bucket-hat_display3.png',
                'display4' => 'bucket-hat_display4.png',
            ];

        $response = $this->actingAs($admin)->post('/products/add', $product1);

        $response->assertStatus(302);
    }
}
