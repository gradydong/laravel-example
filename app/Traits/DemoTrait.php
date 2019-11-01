<?php
/**
 * Created by PhpStorm.
 * User: gradydong
 * Date: 2019/11/1
 * Time: 15:45
 */

namespace App\Traits;

trait DemoTrait
{
    /**
     * demo示例
     */
    public static function getData()
    {
        try{
            $data = [];
            return $data;
        }catch (\Exception $exception){
            app_error_log(
                $exception,
                func_get_args()
            );
            return [];
        }
    }
}