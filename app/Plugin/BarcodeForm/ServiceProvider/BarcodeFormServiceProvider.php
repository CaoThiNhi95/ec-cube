<?php

/*
 * This file is part of the BarcodeForm
 *
 * Copyright (C) 2018 r.hatazawa
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\BarcodeForm\ServiceProvider;

use Eccube\Common\Constant;
use Plugin\BarcodeForm\Form\Type\BarcodeFormConfigType;
use Silex\Application as BaseApplication;
use Silex\ServiceProviderInterface;

require_once(__DIR__.'/../log.php');

class BarcodeFormServiceProvider implements ServiceProviderInterface
{

    public function register(BaseApplication $app)
    {
        // 管理画面定義
        $admin = $app['controllers_factory'];
        // 強制SSL
        if ($app['config']['force_ssl'] == Constant::ENABLED) {
            $admin->requireHttps();
        }

        //　リポジトリマッピング
        $app['barcodeform.repository.barcodeform'] = $app->share(function () use ($app) {
            return $app['orm.em']->getRepository('Plugin\BarcodeForm\Entity\BarcodeForm');
        });

        //　ログ生成
        if (!method_exists('Eccube\Application', 'getInstance')) {
            eccube_log_init($app);
        }
        // ログファイル設定
        $app['monolog.logger.barcodeform'] = $app->share(function ($app) {
            $config = array(
                'name' => 'barcodeform',
                'filename' => 'barcodeform',
                'delimiter' => '_',
                'dateformat' => 'Y-m-d',
                'log_level' => 'INFO',
                'action_level' => 'ERROR',
                'passthru_level' => 'INFO',
                'max_files' => '90',
                'log_dateformat' => 'Y-m-d H:i:s,u',
                'log_format' => '[%datetime%] %channel%.%level_name% [%session_id%] [%uid%] [%user_id%] [%class%:%function%:%line%] - %message% %context% %extra% [%method%, %url%, %ip%, %referrer%, %user_agent%]',
            );
            return $app['eccube.monolog.factory']($config);
        });

    }

    public function boot(BaseApplication $app)
    {
    }

}
