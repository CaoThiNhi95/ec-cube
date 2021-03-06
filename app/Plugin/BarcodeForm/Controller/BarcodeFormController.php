<?php

/*
 * This file is part of the BarcodeForm
 *
 * Copyright (C) 2018 r.hatazawa
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\BarcodeForm\Controller;

use Eccube\Application;
use Symfony\Component\HttpFoundation\Request;

class BarcodeFormController
{

    /**
     * BarcodeForm画面
     *
     * @param Application $app
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Application $app, Request $request)
    {

        // add code...

        return $app->render('BarcodeForm/Resource/template/index.twig', array(
            // add parameter...
        ));
    }

}
