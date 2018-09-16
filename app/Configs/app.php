<?php
/**
 * @author: zmh
 * @date: 2018-07-13
 */
return [
  "default"=>[
      'providers'           => [
          /**
           * 框架服务
           */
          \App\Providers\AppServiceProvider::class,
          /**
           * 验证服务
           */
          \App\Providers\ValidatorProvider::class,
      ],
  ]
];