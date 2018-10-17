<?php return array (
  'BarcodeForm' => 
  array (
    'config' => 
    array (
      'name' => 'ピピっとコードプラグイン無償版',
      'code' => 'BarcodeForm',
      'version' => '1.0.0',
      'event' => 'BarcodeFormEvent',
      'service' => 
      array (
        0 => 'BarcodeFormServiceProvider',
      ),
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
      ),
    ),
    'event' => 
    array (
      'admin.product.edit.initialize' => 
      array (
        0 => 
        array (
          0 => 'onAdminProductEditInit',
          1 => 'NORMAL',
        ),
      ),
      'admin.product.edit.complete' => 
      array (
        0 => 
        array (
          0 => 'onAdminProductEditComp',
          1 => 'NORMAL',
        ),
      ),
      'Admin/Product/product.twig' => 
      array (
        0 => 
        array (
          0 => 'onAdminProductProductRender',
          1 => 'NORMAL',
        ),
      ),
    ),
  ),
  'ContactProduct' => 
  array (
    'config' => 
    array (
      'name' => '商品お問い合わせ',
      'code' => 'ContactProduct',
      'event' => 'Event',
      'version' => '1.0.1',
    ),
    'event' => 
    array (
      'eccube.event.render.product_detail.before' => 
      array (
        0 => 
        array (
          0 => 'insertContactButton',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.contact.before' => 
      array (
        0 => 
        array (
          0 => 'setContents',
          1 => 'NORMAL',
        ),
      ),
    ),
  ),
  'OrderNumber' => 
  array (
    'config' => 
    array (
      'name' => '注文番号設定',
      'code' => 'OrderNumber',
      'version' => '1.1.1',
      'event' => 'OrderNumberEvent',
      'service' => 
      array (
        0 => 'OrderNumberServiceProvider',
      ),
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
      ),
    ),
    'event' => 
    array (
      'Admin/Order/index.twig' => 
      array (
        0 => 
        array (
          0 => 'onAdminOrderSearchRender',
          1 => 'NORMAL',
        ),
      ),
      'Admin/Order/edit.twig' => 
      array (
        0 => 
        array (
          0 => 'onAdminOrderEditRender',
          1 => 'NORMAL',
        ),
      ),
      'Admin/Order/mail_confirm.twig' => 
      array (
        0 => 
        array (
          0 => 'onAdminOrderMailConfirmRender',
          1 => 'NORMAL',
        ),
      ),
      'Admin/Order/mail_all_confirm.twig' => 
      array (
        0 => 
        array (
          0 => 'onAdminOrderMailAllConfirmRender',
          1 => 'NORMAL',
        ),
      ),
      'front.shopping.index.initialize' => 
      array (
        0 => 
        array (
          0 => 'onShoppingInitialize',
          1 => 'NORMAL',
        ),
      ),
      'front.shopping.confirm.complete' => 
      array (
        0 => 
        array (
          0 => 'onShoppingConfirm',
          1 => 'NORMAL',
        ),
      ),
      'Mypage/index.twig' => 
      array (
        0 => 
        array (
          0 => 'onMypageIndexRender',
          1 => 'NORMAL',
        ),
      ),
      'Mypage/history.twig' => 
      array (
        0 => 
        array (
          0 => 'onMypageHistoryRender',
          1 => 'NORMAL',
        ),
      ),
      'mail.order' => 
      array (
        0 => 
        array (
          0 => 'onMailOrder',
          1 => 'NORMAL',
        ),
      ),
      'mail.admin.order' => 
      array (
        0 => 
        array (
          0 => 'onMailAdminOrder',
          1 => 'NORMAL',
        ),
      ),
    ),
  ),
  'Recommend' => 
  array (
    'config' => 
    array (
      'name' => 'おすすめ商品管理プラグイン',
      'code' => 'Recommend',
      'version' => '2.0.1',
      'service' => 
      array (
        0 => 'RecommendServiceProvider',
      ),
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
      ),
    ),
    'event' => NULL,
  ),
  'Shiro8GallaryBlock3' => 
  array (
    'config' => 
    array (
      'name' => 'ギャラリーブロックプラグイン',
      'version' => 1.1,
      'event' => 'Shiro8GallaryBlock3Event',
      'service' => 
      array (
        0 => 'Shiro8GallaryBlock3ServiceProvider',
      ),
      'code' => 'Shiro8GallaryBlock3',
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
      ),
    ),
    'event' => 
    array (
      'admin.product.edit.initialize' => 
      array (
        0 => 
        array (
          0 => 'onAdminProductFormInitialize',
          1 => 'NORMAL',
        ),
      ),
      'admin.product.edit.complete' => 
      array (
        0 => 
        array (
          0 => 'onAdminProductEditComplete',
          1 => 'NORMAL',
        ),
      ),
    ),
  ),
);