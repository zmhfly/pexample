<?php
/**
 * @author: zmh
 * @date: 2018-08-25
 */
namespace App\Api\Controllers\Abstracts;

use App\Services\Abstracts\ServiceTrait;
use Framework\Controllers\Controller;
use Framework\Validator\Validator;

/**
 * Class Base
 * @property Validator $validator
 * @package App\Api\Controllers\Abstracts
 */
class Base extends Controller
{
    use ServiceTrait;
}