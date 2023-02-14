<?php

namespace App\Services\Signin;

use App\Models\User\Auth\UserAuthData;
use Illuminate\Support\Facades\Auth;

class IndexService{
    protected $_userAuthData;

    public function __construct(
        UserAuthData $userAuthData
    )
    {
        $this->_userAuthData = $userAuthData;
    }


    public function checkData($param){
        $res = 0;

        $resData = $this->_userAuthData->getUserAuthDataByUserId($param);
        dd($resData);

        return $res;
    }
}