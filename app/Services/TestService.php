<?php
/**
 * Created by PhpStorm.
 * User: chencheng
 * Date: 16-3-8
 * Time: 下午10:31
 */

namespace App\Services;

use App\Contracts\TestContract;

class TestService implements TestContract
{

    public function __construct()
    {
        //echo "11\n";
    }

    public function callMe($controller)
    {
        dd('Call Me From TestServiceProvider In '.$controller);
    }
}