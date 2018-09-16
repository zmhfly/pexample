<?php
/**
 * @author: zmh
 * @date: 2018-07-13
 */
namespace App\Providers;

use App\Services\Index\IndexService;
use Framework\Container;
use Framework\Providers\Abstracts\ServiceProviderInterface;

class AppServiceProvider implements ServiceProviderInterface
{
    public function register(Container $di)
    {
        // TODO: 遍历services文件夹下所有service 进行注册
        $di->set("indexService",function(){
           return new IndexService();
        });
    }
}