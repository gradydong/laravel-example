<?php
/**
 * Created by PhpStorm.
 * User: gradydong
 * Date: 2019/10/29
 * Time: 11:57
 */

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Log;

class UserRepository
{
    public static function get()
    {
        try {

            return [];
        } catch (\Exception $exception) {
            Log::error(__CLASS__ . " | " . __FUNCTION__, [
                "params" => func_get_args(),
                "err_msg" => $exception->getMessage()
            ]);
            return [];
        }
    }

    public static function gets($params)
    {
        try {
            $query = User::query();
            if (!empty($params['username'])) {
                $query->where('username', 'like', '%' . $params['username'] . '%');
            }
            if (!empty($params['page'])) {
                $limit = 30;
                if (!empty($params['perPage'])) {
                    $limit = $params['perPage'];
                }
                $orders = $query->paginate($limit)->toArray();
            } else {
                $orders = $query->get()->toArray();
            }
            return $orders;
        } catch (\Exception $exception) {
            Log::error(__CLASS__ . " | " . __FUNCTION__, [
                "params" => func_get_args(),
                "err_msg" => $exception->getMessage()
            ]);
            return [];
        }
    }

    public static function create()
    {
        try {

            return true;
        } catch (\Exception $exception) {
            Log::error(__CLASS__ . " | " . __FUNCTION__, [
                "params" => func_get_args(),
                "err_msg" => $exception->getMessage()
            ]);
            return false;
        }
    }

    public static function batchCreate()
    {
        try {

            return true;
        } catch (\Exception $exception) {
            Log::error(__CLASS__ . " | " . __FUNCTION__, [
                "params" => func_get_args(),
                "err_msg" => $exception->getMessage()
            ]);
            return false;
        }
    }

    public static function update()
    {
        try {

            return true;
        } catch (\Exception $exception) {
            Log::error(__CLASS__ . " | " . __FUNCTION__, [
                "params" => func_get_args(),
                "err_msg" => $exception->getMessage()
            ]);
            return false;
        }
    }

    public static function batchUpdate()
    {
        try {

            return true;
        } catch (\Exception $exception) {
            Log::error(__CLASS__ . " | " . __FUNCTION__, [
                "params" => func_get_args(),
                "err_msg" => $exception->getMessage()
            ]);
            return false;
        }
    }

    public static function delete()
    {
        try {

            return true;
        } catch (\Exception $exception) {
            Log::error(__CLASS__ . " | " . __FUNCTION__, [
                "params" => func_get_args(),
                "err_msg" => $exception->getMessage()
            ]);
            return false;

        }
    }

    public static function batchDelete()
    {
        try {

            return true;
        } catch (\Exception $exception) {
            Log::error(__CLASS__ . " | " . __FUNCTION__, [
                "params" => func_get_args(),
                "err_msg" => $exception->getMessage()
            ]);
            return false;
        }
    }
}