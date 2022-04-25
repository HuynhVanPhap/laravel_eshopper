<?php

namespace App\Services;

use App\Traits\CommonTrait;
use Illuminate\Http\Request;
use App\Traits\StringTrait;

abstract class BaseService
{
    use StringTrait, CommonTrait;
}
