<?php
namespace Plugin\BarcodeForm;

use Eccube\Application;
use Eccube\Event\EventArgs;
use Eccube\Event\TemplateEvent;
use Eccube\Entity\Product;
use Plugin\BarcodeForm\Entity\BarcodeForm;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Doctrine\ORM\EntityManager;

/*
 * This file is part of the BarcodeForm
 *
 * Copyright (C) 2018 r.hatazawa
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
class BarcodeFormEvent
{
    /** @var  \Eccube\Application $app */
    private $app;

    const BARCODE_FORM_TEXT_NAME = 'plg_barcord';

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function onAdminProductEditInit(EventArgs $event)
    {
        //対象の商品idを取得
        $Product = $event->getArgument('Product');
        $product_id = $Product->getId();

        $BarcodeForm = null;

        // IDの有無で対応を変更
        if ($product_id) {

            // 初期値を取得
            $BarcodeForm = $this->app['barcodeform.repository.barcodeform']->find($product_id);
        }
         // 新規登録or未登録の場合
        if (is_null($BarcodeForm)) {
            $BarcodeForm = new BarcodeForm();
        }

        //フォームの追加
        /** @var FormInterface $builder */
        $builder = $event->getArgument('builder');
        // 項目の追加
        $builder->add(
            self::BARCODE_FORM_TEXT_NAME,
            'integer',
            array(
                'required' => false,
                'label' => "バーコード番号",
                'mapped' => false
            )
        );
        //初期値の表示
        $builder->get(self::BARCODE_FORM_TEXT_NAME)->setData($BarcodeForm->getcode());
    }

    public function onAdminProductEditComp(EventArgs $event)
    {
        /** @var Application $app */
        $app = $this->app;
        /** @var Product $Product */
        $Product = $event->getArgument('Product');
        /** @var FormInterface $form */
        $form = $event->getArgument('form');

        //登録済みバーコード情報を取得
        $Product_id = $Product->getId();
        $BarcodeForm = $app['barcodeform.repository.barcodeform']->find($Product_id);
        if (is_null($BarcodeForm)) {
            $BarcodeForm = new BarcodeForm();
        }

        //エンティティ更新
        $BarcodeForm->setProductId($Product_id)->setcode($form[self::BARCODE_FORM_TEXT_NAME]->getData());

        //DB更新
        $app['orm.em']->persist($BarcodeForm);
        $app['orm.em']->flush($BarcodeForm);
    }

    public function onAdminProductProductRender(TemplateEvent $event)
    {
        //追加するパーツ
        //$parts = '<div id="bcTarget"></div>';

        //検索内容
        $search = '<div class="extra-form">';

        $tag = <<< EOT

<script src="{{ app.config.admin_urlpath }}/assets/js/jquery-barcode.js"></script>
<script>
    $(function() {
        var code = $("#admin_product_plg_barcord").val();
        $("#admin_product_plg_barcord").after("<div id='bcTarget' />");
        $("#bcTarget").barcode(code, "code39");
        $("#bcTarget").css("overflow", "");
    });
</script>
EOT;
        $replace = $tag.$search;
        $source = str_replace($search, $replace, $event->getSource());
        $event->setSource($source);

    }
}
