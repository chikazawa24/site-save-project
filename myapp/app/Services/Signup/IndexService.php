<?php

namespace App\Services\Signup;

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

    public function registUserData($param){
        $result = config('my.app.FLAG_OFF');

        if(isset($param)){
            $result = $this->_userAuthData->registUserData($param);
        }

        return $result;
    }
}