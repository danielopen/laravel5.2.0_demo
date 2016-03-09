<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * 加载模板
     * @param $tpl
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    protected function view($tpl)
    {
        return view($tpl);
    }
}
