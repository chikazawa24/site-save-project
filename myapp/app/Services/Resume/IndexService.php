<?php

namespace App\Services\Resume;

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
        $res_flg = config('my.app.FLAG_OFF');
        $res_message = '';
        $req_password = $param['login_password'];

        $resData = $this->_userAuthData->getUserAuthDataByLoginId($param);

        if(isset($resData)){
            if(isset($resData['login_password']) && $resData['login_password'] === $req_password){
                $res_flg = config('my.app.FLAG_ON');
            }else{
                $res_flg = config('my.app.FLAG_OFF');
                $res_message = 'ログインIDまたはパスワードが間違っています。';
            }
        }else{
            $res_flg = config('my.app.FLAG_OFF');
            $res_message = 'データが取得できませんでした。';
        }

        $result = [
            'res_flg' => $res_flg,
            'res_message' => $res_message
        ];
        return $result;
    }

    public function updateUserData($param){
        $result = config('my.app.FLAG_OFF');


        if(isset($param)){
            \DB::beginTransaction();
            \Log::debug($param);
            try{
                $this->_userAuthData->updateUserData($param);
                $result = config('my.app.FLAG_ON');
                \DB::commit();
            }catch (\Exception $e) {

                \DB::rollBack();
                \Log::debug('DB更新失敗');
                return $result;
            }
        }

        return $result;
    }

    public function getUserdataById($param){
        $res_data = [];
        if(isset($param['login_id'])){
            $res_data = $this->_userAuthData->getUserAuthDataByLoginId($param);
        }

        return $res_data;
    }
}