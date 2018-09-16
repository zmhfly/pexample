<?php
/**
 * @author: zmh
 * @date: 2018-08-25
 */
namespace App\Api\Controllers;

use App\Api\Controllers\Abstracts\Base;
use Framework\Validator\Validator;

class IndexController extends Base
{
    public function index(){
        $res = $this->request->getJsonRawBody();
//        $this->session->set("aa","aa");
//       echo $this->session->get("aa");
       $this->logger->aa()->info("abbbb");
        $this->logger->a1a()->info("abbbb");
        $this->logger->a2a()->info("abbbb");
        $this->logger->a3a()->info("abbbb");
        $this->logger->a4a()->info("abbbb");
        $this->logger->a5a()->info("abbbb");
        $this->logger->a6a()->info("abbbb");
        $this->logger->a7a()->info("abbbb");
       exit();
//        $rule = [
//          "id"=>[
//              "string",
//              "minLength"=>12,
//              "aa"
//          ]
//        ];

        // 验证数据
//        Validator::check($res,$rule);
//$v = new Validator();
//$v::check($res,$rule);
//$v->checkData($res,$rule);
//        $res = $this->validator->checkData($res,$rule);
//        print_R($res);
//        $this->indexService->aa();
    }
}