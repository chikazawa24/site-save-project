<?php

namespace App\Services\Signup;

use App\Models\User\Auth\UserAuthData;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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
            \DB::beginTransaction();

            try{
                $this->_userAuthData->registUserData($param);
                $result = config('my.app.FLAG_ON');
                \DB::commit();
            }catch (\Exception $e) {

                \DB::rollBack();
                \Log::debug('DB登録失敗');
                return $result;
            }
        }

        return $result;
    }
}