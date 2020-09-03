<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Faq;

class FaqApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_faq()
    {
        $faq = factory(Faq::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/admin/faqs', $faq
        );

        $this->assertApiResponse($faq);
    }

    /**
     * @test
     */
    public function test_read_faq()
    {
        $faq = factory(Faq::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/admin/faqs/'.$faq->id
        );

        $this->assertApiResponse($faq->toArray());
    }

    /**
     * @test
     */
    public function test_update_faq()
    {
        $faq = factory(Faq::class)->create();
        $editedFaq = factory(Faq::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/admin/faqs/'.$faq->id,
            $editedFaq
        );

        $this->assertApiResponse($editedFaq);
    }

    /**
     * @test
     */
    public function test_delete_faq()
    {
        $faq = factory(Faq::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/admin/faqs/'.$faq->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/admin/faqs/'.$faq->id
        );

        $this->response->assertStatus(404);
    }
}
