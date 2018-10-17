<?php

/*
 * This file is part of the BarcodeForm
 *
 * Copyright (C) 2018 r.hatazawa
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\BarcodeForm;

use Eccube\Application;
use Eccube\Plugin\AbstractPluginManager;
use Symfony\Component\Filesystem\Filesystem;

class PluginManager extends AbstractPluginManager
{
    /**
     * プラグインインストール時の処理
     *
     * @param $config
     * @param Application $app
     * @throws \Exception
     */
    public function install($config, Application $app)
    {
    }

    /**
     * プラグイン削除時の処理
     *
     * @param $config
     * @param Application $app
     */
    public function uninstall($config, Application $app)
    {
        $this->migrationSchema($app, __DIR__.'/Resource/doctrine/migration', $config['code'], 0);
    }

    /**
     * プラグイン有効時の処理
     *
     * @param $config
     * @param Application $app
     * @throws \Exception
     */
    public function enable($config, Application $app)
    {
        //プラグイン用DBテーブル追加
        $this->migrationSchema($app, __DIR__.'/Resource/doctrine/migration', $config['code']);

        //リソースファイルをコピー
        try {
            $file = new Filesystem();
            $file->copy($app['config']['plugin_realdir'].'/BarcodeForm/Resource/assets/jquery-barcode.js', $app['config']['template_admin_html_realdir'].'/assets/js/jquery-barcode.js', true);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * プラグイン無効時の処理
     *
     * @param $config
     * @param Application $app
     * @throws \Exception
     */
    public function disable($config, Application $app)
    {
        //追加分DBテーブル削除
        $this->migrationSchema($app, __DIR__.'/Resource/doctrine/migration', $config['code'], 0);

        //コピーしたリソースファイルの削除
        try {
            $file = new Filesystem();
            $file->remove($app['config']['template_admin_html_realdir'].'/assets/js/jquery-barcode.js');
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * プラグイン更新時の処理
     *
     * @param $config
     * @param Application $app
     * @throws \Exception
     */
    public function update($config, Application $app)
    {
    }

}
