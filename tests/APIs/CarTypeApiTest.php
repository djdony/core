<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\CarType;

class CarTypeApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_car_type()
    {
        $carType = factory(CarType::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/admin/car_types', $carType
        );

        $this->assertApiResponse($carType);
    }

    /**
     * @test
     */
    public function test_read_car_type()
    {
        $carType = factory(CarType::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/admin/car_types/'.$carType->id
        );

        $this->assertApiResponse($carType->toArray());
    }

    /**
     * @test
     */
    public function test_update_car_type()
    {
        $carType = factory(CarType::class)->create();
        $editedCarType = factory(CarType::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/admin/car_types/'.$carType->id,
            $editedCarType
        );

        $this->assertApiResponse($editedCarType);
    }

    /**
     * @test
     */
    public function test_delete_car_type()
    {
        $carType = factory(CarType::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/admin/car_types/'.$carType->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/admin/car_types/'.$carType->id
        );

        $this->response->assertStatus(404);
    }
}
