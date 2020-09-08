<?php

namespace App\Http\Controllers;

use App\Http\Requests\FaqRequest;
use App\Repositories\FaqRepository;
use Illuminate\Http\Request;
use Flash;
use Response;

class FaqController extends AppBaseController
{
    /** @var  FaqRepository */
    private $faqRepository;

    public function __construct(FaqRepository $faqRepo)
    {
        $this->faqRepository = $faqRepo;
    }

    /**
     * Display a listing of the Faq.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $faqs = $this->faqRepository->all();

        return view('backend.faqs.index')
            ->with('faqs', $faqs);
    }

    /**
     * Show the form for creating a new Faq.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.faqs.create');
    }

    /**
     * Store a newly created Faq in storage.
     *
     * @param FaqRequest $request
     *
     * @return Response
     */
    public function store(FaqRequest $request)
    {
        $input = $request->all();

        $faq = $this->faqRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/faqs.singular')]));

        return redirect(route('admin.faqs.index'));
    }

    /**
     * Display the specified Faq.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $faq = $this->faqRepository->find($id);

        if (empty($faq)) {
            Flash::error(__('messages.not_found', ['model' => __('models/faqs.singular')]));

            return redirect(route('admin.faqs.index'));
        }

        return view('backend.faqs.show')->with('faq', $faq);
    }

    /**
     * Show the form for editing the specified Faq.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $faq = $this->faqRepository->find($id);

        if (empty($faq)) {
            Flash::error(__('messages.not_found', ['model' => __('models/faqs.singular')]));

            return redirect(route('admin.faqs.index'));
        }

        return view('backend.faqs.edit')->with('faq', $faq);
    }

    /**
     * Update the specified Faq in storage.
     *
     * @param int $id
     * @param FaqRequest $request
     *
     * @return Response
     */
    public function update($id, FaqRequest $request)
    {
        $faq = $this->faqRepository->find($id);

        if (empty($faq)) {
            Flash::error(__('messages.not_found', ['model' => __('models/faqs.singular')]));

            return redirect(route('admin.faqs.index'));
        }

        $faq = $this->faqRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/faqs.singular')]));

        return redirect(route('admin.faqs.index'));
    }

    /**
     * Remove the specified Faq from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $faq = $this->faqRepository->find($id);

        if (empty($faq)) {
            Flash::error(__('messages.not_found', ['model' => __('models/faqs.singular')]));

            return redirect(route('admin.faqs.index'));
        }

        $this->faqRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/faqs.singular')]));

        return redirect(route('admin.faqs.index'));
    }
}
