<?php

namespace ES\Models\User\Auth;

use Illuminate\Support\Facades\DB;

class UserAuthData
{
    public function getUserAuthDataByUserId($param)
    {
        $user_id = $param['user_id'];
        $password = $param['password'];

        $sql = <<< End_of_sql
        SELECT *
        FROM user_data AS UD
        WHERE
            UD.user_id = :userId
End_of_sql;

        $bind = [
            'userId' => $user_id,
            'password' => $password
        ];
        return (array) DB::selectOne($sql, $bind);
    }

}
