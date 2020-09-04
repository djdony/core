<?php namespace Tests\Repositories;

use App\Models\CarType;
use App\Repositories\CarTypeRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class CarTypeRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var CarTypeRepository
     */
    protected $carTypeRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->carTypeRepo = \App::make(CarTypeRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_car_type()
    {
        $carType = factory(CarType::class)->make()->toArray();

        $createdCarType = $this->carTypeRepo->create($carType);

        $createdCarType = $createdCarType->toArray();
        $this->assertArrayHasKey('id', $createdCarType);
        $this->assertNotNull($createdCarType['id'], 'Created CarType must have id specified');
        $this->assertNotNull(CarType::find($createdCarType['id']), 'CarType with given id must be in DB');
        $this->assertModelData($carType, $createdCarType);
    }

    /**
     * @test read
     */
    public function test_read_car_type()
    {
        $carType = factory(CarType::class)->create();

        $dbCarType = $this->carTypeRepo->find($carType->id);

        $dbCarType = $dbCarType->toArray();
        $this->assertModelData($carType->toArray(), $dbCarType);
    }

    /**
     * @test update
     */
    public function test_update_car_type()
    {
        $carType = factory(CarType::class)->create();
        $fakeCarType = factory(CarType::class)->make()->toArray();

        $updatedCarType = $this->carTypeRepo->update($fakeCarType, $carType->id);

        $this->assertModelData($fakeCarType, $updatedCarType->toArray());
        $dbCarType = $this->carTypeRepo->find($carType->id);
        $this->assertModelData($fakeCarType, $dbCarType->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_car_type()
    {
        $carType = factory(CarType::class)->create();

        $resp = $this->carTypeRepo->delete($carType->id);

        $this->assertTrue($resp);
        $this->assertNull(CarType::find($carType->id), 'CarType should not exist in DB');
    }
}
