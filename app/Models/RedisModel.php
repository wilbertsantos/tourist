<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redis;

class RedisModel extends Model
{
    protected $guarded = [];

    public static function getValueFromRedis($key)
    {
        return \Redis::get($key);
    }
}
