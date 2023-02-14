<?php

namespace App\Models\User\Auth;

use Illuminate\Support\Facades\DB;

class UserAuthData
{
    public function getUserAuthDataByUserId($param)
    {
        $login_id = $param['login_id'];
        $login_password = $param['login_password'];

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

}
