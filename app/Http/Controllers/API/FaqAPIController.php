<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateFaqAPIRequest;
use App\Http\Requests\API\UpdateFaqAPIRequest;
use App\Models\Faq;
use App\Repositories\FaqRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class FaqController
 * @package App\Http\Controllers\API
 */

class FaqAPIController extends AppBaseController
{
    /** @var  FaqRepository */
    private $faqRepository;

    public function __construct(FaqRepository $faqRepo)
    {
        $this->faqRepository = $faqRepo;
    }

    /**
     * Display a listing of the Faq.
     * GET|HEAD /faqs
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $faqs = $this->faqRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        )->sortBy('sort_order');

        return $this->sendResponse(
            $faqs->toArray(),
            __('messages.retrieved', ['model' => __('models/faqs.plural')])
        );
    }

}
