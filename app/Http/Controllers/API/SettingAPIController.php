<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateSettingAPIRequest;
use App\Http\Requests\API\UpdateSettingAPIRequest;
use App\Models\Setting;
use App\Repositories\SettingRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class SettingController
 * @package App\Http\Controllers\API
 */

class SettingAPIController extends AppBaseController
{
    /** @var  SettingRepository */
    private $settingRepository;

    public function __construct(SettingRepository $settingRepo)
    {
        $this->settingRepository = $settingRepo;
    }

    /**
     * Display a listing of the Setting.
     * GET|HEAD /settings
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $settings = $this->settingRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(
            $settings->toArray(),
            __('messages.retrieved', ['model' => __('models/settings.plural')])
        );
    }
}
