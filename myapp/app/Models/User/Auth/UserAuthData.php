<?php

namespace App\Models\User\Auth;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserAuthData
{
    // テーブル名
    const TABLE = 'user_data';

    public function getUserAuthDataByLoginId($param)
    {
        $login_id = $param['login_id'];

        $sql = <<< End_of_sql
        SELECT *
        FROM user_data AS UD
        WHERE
            UD.login_id = :loginId
End_of_sql;

        $bind = [
            'loginId' => $login_id,
        ];
        return (array) DB::selectOne($sql, $bind);
    }

    public function registUserData($param){

        $now = Carbon::now();

        $insert_param = [
            'user_last_name' => $param['last_name'],
            'user_first_name' => $param['first_name'],
            'regist_datetime' => $now,
            'login_id' => $param['login_id'],
            'login_password' => $param['login_password'],
        ];
        return DB::table(self::TABLE)->insert($insert_param);
    }

    public function updateUserData($param){
        $now = Carbon::now();

        $sql = <<< End_of_sql
        UPDATE user_data
        SET
        login_id = :new_login_id
        ,user_last_name = :user_last_name
        ,user_first_name = :user_first_name
        ,update_datetime = :update_datetime
        ,login_password = :login_password
        WHERE
            login_id = :login_id
End_of_sql;

        $update_param = [
                            'new_login_id' => $param['new_login_id'],
                            'login_id' => $param['login_id'],
                            'user_last_name' => $param['last_name'],
                            'user_first_name' => $param['first_name'],
                            'update_datetime' => $now,
                            'login_password' => $param['login_password'],
                        ];
        
        return DB::update($sql, $update_param);
    }
}
