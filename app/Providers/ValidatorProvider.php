<?php
/**
 * @author: zmh
 * @date: 2018-08-28
 */
namespace App\Providers;

use Framework\Container;
use Framework\Providers\Abstracts\ServiceProviderInterface;
use Framework\Validator\Validator;

class ValidatorProvider implements ServiceProviderInterface
{
    public function register(Container $di)
    {
        $di->set("validator",function(){
            $validator = new Validator();
            $validator->addRule("aa",function($a){
               throw new \Exception("addd");
            });
            return $validator;
        });
    }
}