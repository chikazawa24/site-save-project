<?php

namespace App\Services\Signin;

use App\Models\User\Auth\UserAuthData;

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

        $res = $this->_userAuthData->getUserAuthDataByUserId($param);

        return $res;
    }
}