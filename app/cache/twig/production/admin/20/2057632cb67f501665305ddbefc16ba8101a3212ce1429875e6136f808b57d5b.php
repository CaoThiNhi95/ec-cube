<?php

/* __string_template__1956c6100d9eec82fdb06cdb238f4410a2dfce26b07598fd6f2105ba2538ad25 */
class __TwigTemplate_9d6d2cd7f738e48eff2e4ddb6f1760c7b6b573be8028de0ac604dd75867588a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__1956c6100d9eec82fdb06cdb238f4410a2dfce26b07598fd6f2105ba2538ad25", 22);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
            'javascript' => array($this, 'block_javascript'),
            'main' => array($this, 'block_main'),
            '__internal_c37abbfeb9cdbc7e21b494cf3ecb548f0044197e838c86d49fbe9f580124b7b7' => array($this, 'block___internal_c37abbfeb9cdbc7e21b494cf3ecb548f0044197e838c86d49fbe9f580124b7b7'),
            '__internal_2a4c5b1e4a4c5f92e2e158c5d95634dfd4779e7dfab734af674097b6fd2284c3' => array($this, 'block___internal_2a4c5b1e4a4c5f92e2e158c5d95634dfd4779e7dfab734af674097b6fd2284c3'),
            'modal' => array($this, 'block_modal'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 24
        $context["menus"] = array(0 => "order", 1 => "order_edit");
        // line 29
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 30
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["searchCustomerModalForm"] ?? null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 31
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["searchProductModalForm"] ?? null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        echo "受注管理";
    }

    // line 27
    public function block_sub_title($context, array $blocks = array())
    {
        echo "受注登録・編集";
    }

    // line 33
    public function block_javascript($context, array $blocks = array())
    {
        // line 34
        echo "<script src=\"//ajaxzip3.github.io/ajaxzip3.js\" charset=\"UTF-8\"></script>
<script>
\$(function() {
    \$('#zip-search').click(function() {
        AjaxZip3.zip2addr('order[zip][zip01]', 'order[zip][zip02]', 'order[address][pref]', 'order[address][addr01]');
    });

    // 注文者情報をコピー
    \$('.copyCustomerToShippingButton').on('click', function() {
        var data = \$(this).data();
        var idx = data.idx;
        \$('#order_Shippings_' + idx + '_name_name01').val(\$('#order_name_name01').val());
        \$('#order_Shippings_' + idx + '_name_name02').val(\$('#order_name_name02').val());
        \$('#order_Shippings_' + idx + '_kana_kana01').val(\$('#order_kana_kana01').val());
        \$('#order_Shippings_' + idx + '_kana_kana02').val(\$('#order_kana_kana02').val());
        \$('#order_Shippings_' + idx + '_zip_zip01').val(\$('#order_zip_zip01').val());
        \$('#order_Shippings_' + idx + '_zip_zip02').val(\$('#order_zip_zip02').val());
        \$('#order_Shippings_' + idx + '_address_pref').val(\$('#order_address_pref').val());
        \$('#order_Shippings_' + idx + '_address_addr01').val(\$('#order_address_addr01').val());
        \$('#order_Shippings_' + idx + '_address_addr02').val(\$('#order_address_addr02').val());
        \$('#order_Shippings_' + idx + '_email').val(\$('#order_email').val());
        \$('#order_Shippings_' + idx + '_tel_tel01').val(\$('#order_tel_tel01').val());
        \$('#order_Shippings_' + idx + '_tel_tel02').val(\$('#order_tel_tel02').val());
        \$('#order_Shippings_' + idx + '_tel_tel03').val(\$('#order_tel_tel03').val());
        \$('#order_Shippings_' + idx + '_fax_fax01').val(\$('#order_fax_fax01').val());
        \$('#order_Shippings_' + idx + '_fax_fax02').val(\$('#order_fax_fax02').val());
        \$('#order_Shippings_' + idx + '_fax_fax03').val(\$('#order_fax_fax03').val());
        \$('#order_Shippings_' + idx + '_company_name').val(\$('#order_company_name').val());
    });
    // 会員検索
    \$('#searchCustomerModalButton').on('click', function() {
        var list = \$('#searchCustomerModalList');
        list.children().remove();

        \$.ajax({
            type: 'POST',
            dataType: 'html',
            data: { 'search_word' : \$('#admin_search_customer_multi').val() },
            url: '";
        // line 72
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_order_search_customer_html");
        echo "',
            success: function(data) {
                // モーダルに結果を書き出し.
                \$('#searchCustomerModalList').html(data);
            },
            error: function() {
                alert('search customer failed.');
            }
        });
    });
    \$('#searchProductModal').on('show.bs.modal', function (event) {
        var button = \$(event.relatedTarget);
        var idx = button.data('idx');
        var modal = \$(this);
        modal.find('#searchProductModalButton').attr('data-idx', idx);
    });


    // 商品検索
    \$('#searchProductModalButton').on('click', function() {
        var list = \$('#searchProductModalList');
        list.children().remove();

        var data = \$(this).data();
        shipment_idx = data.idx;

        shipmentItem_idx = 0;
        for(i = 0; i < shipping_details_count.length; i++) { 
            if (shipping_details_count[i].idx == shipment_idx) {
                shipmentItem_idx = shipping_details_count[i].cnt;
            }
        }
        
        \$.ajax({
            type: 'POST',
            dataType: 'html',
            data: {
                'id' : \$('#admin_search_product_id').val(),
                'category_id' : \$('#admin_search_product_category_id').val()
            },
            url: '";
        // line 112
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_order_search_product");
        echo "',
            success: function(data) {
                // モーダルに結果を書き出し.
                \$('#searchProductModalList').html(data);
            },
            error: function() {
                alert('search product failed.');
            }
        });
    });

    // 受注明細行の行数カウンタ.
    // 受注登録・編集画面上でグローバルな変数.
    // search_product.twig/order_detail_prototype.twigで利用しています.
    ";
        // line 126
        if (twig_test_empty($this->getAttribute(($context["form"] ?? null), "OrderDetails", array()))) {
            // line 127
            echo "        ";
            $context["maxIndex"] = 0;
            // line 128
            echo "    ";
        } else {
            // line 129
            echo "        ";
            $context["maxIndex"] = (max(twig_get_array_keys_filter($this->getAttribute(($context["form"] ?? null), "OrderDetails", array()))) + 1);
            // line 130
            echo "    ";
        }
        // line 131
        echo "    order_details_count = '";
        echo twig_escape_filter($this->env, ($context["maxIndex"] ?? null), "html", null, true);
        echo "';
    
    var shipping_details_count = [];
    ";
        // line 134
        if ($this->getAttribute(($context["BaseInfo"] ?? null), "optionMultipleShipping", array())) {
            // line 135
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "Shippings", array()));
            foreach ($context['_seq'] as $context["shippingKey"] => $context["shippingForm"]) {
                // line 136
                echo "            ";
                if (twig_test_empty($this->getAttribute($context["shippingForm"], "ShipmentItems", array()))) {
                    // line 137
                    echo "                shipping_details_count.push({idx:";
                    echo twig_escape_filter($this->env, $context["shippingKey"], "html", null, true);
                    echo ", cnt:0});
            ";
                } else {
                    // line 139
                    echo "                shipping_details_count.push({idx:";
                    echo twig_escape_filter($this->env, $context["shippingKey"], "html", null, true);
                    echo ", cnt:";
                    echo twig_escape_filter($this->env, (max(twig_get_array_keys_filter($this->getAttribute($context["shippingForm"], "ShipmentItems", array()))) + 1), "html", null, true);
                    echo " });
            ";
                }
                // line 141
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['shippingKey'], $context['shippingForm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    // 項目数が多く、入力している項目によってEnter押下時に期待する動作が変わるので、いったん禁止
    \$(\"input\").on(\"keydown\", function(e) {
        if ((e.which && e.which === 13) || (e.keyCode && e.keyCode === 13)) {
            return false;
        } else {
            return true;
        }
    });

    \$(\".delete-item\").on(\"click\", function(){
        \$(this).parents(\".item_box\").remove();

        onChangeOrderDetailCount(order_details_count);
    });
    
    \$(\".delete_delivery\").on(\"click\", function(){
       var data = \$(this).data();
       \$(\"#shipping_info_box--\" + data.idx ).remove();
       document.form1.modal.value = \"calc\";
       document.form1.submit();
    });
    
    \$(\".delete_shipping_product\").on(\"click\", function(){
       var data = \$(this).data();
       var idKey = \"order_Shippings_\"+ data.idx.replace(\"--\",\"_ShipmentItems_\") +\"_quantity\";
       \$(\"#\" + idKey ).val(0);
       document.form1.modal.value = \"calc\";
       document.form1.submit();
    });

    var onChangeOrderDetailCount = function(order_details_count) {
        if (order_details_count == 1) {
            \$(\".delete-item\").attr(\"disabled\", \"disabled\");
        } else {
            \$(\".delete-item\").removeAttr(\"disabled\");
        }
    };

    onChangeOrderDetailCount();


    // 配送業者選択時にお届け時間を設定
    var times = ";
        // line 186
        echo ($context["shippingDeliveryTimes"] ?? null);
        echo ";

    \$('.shipping-delivery').change(function(){
        var data = \$(this).data();
        setShippingDeliveryTime(\$(this).val(), data.idx);
    });

    function setShippingDeliveryTime(val, idx){
        var \$shippingDeliveryTime = \$('.shipping-delivery-time[data-idx=\"' + idx + '\"]');
        \$shippingDeliveryTime.find('option').remove();
        \$shippingDeliveryTime.append(\$('<option></option>').val('').text('指定なし'));

        if (typeof(times[val]) !== 'undefined') {
            for (var key in times[val]){
                text = times[val][key];
                \$shippingDeliveryTime.append(\$('<option></option>')
                    .val(key)
                    .text(text));
            }
        }
    }

});
var setModeAndSubmit = function(mode, keyname, keyid) {
    document.form1.modal.value = mode;
    if(keyname !== undefined && keyname !== \"\" && keyid !== undefined && keyid !== \"\") {
        document.form1[keyname].value = keyid;
    }
    document.form1.submit();
};

</script>
";
    }

    // line 220
    public function block_main($context, array $blocks = array())
    {
        // line 221
        echo "<div class=\"row\" id=\"aside_wrap\">
    <form name=\"form1\" method=\"post\" action=\"?\">
    <input type=\"hidden\" name=\"modal\" value=\"\">
    ";
        // line 224
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'widget');
        echo "
        <div id=\"detail_wrap\" class=\"col-md-12\">
            <div class=\"col_inner\">
                <div id=\"number_info_box\" class=\"box no-header\">
                    <div id=\"number_info_box__body\" class=\"box-body\">
                        <div class=\"row\">
                            <div id=\"number_info_box__order_status\" class=\"col-sm-4\">
                                <h4>注文ID <span class=\"number\">";
        // line 231
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Order"] ?? null), "id", array()), "html", null, true);
        echo "</span></h4><h4>注文番号 <span class=\"number\">";
        echo twig_escape_filter($this->env, ($context["OrderNumber"] ?? null), "html", null, true);
        echo "</span></h4>
                                <div class=\"form-group\">
                                    ";
        // line 233
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "OrderStatus", array()), 'widget');
        echo "
                                    ";
        // line 234
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "OrderStatus", array()), 'errors');
        echo "
                                </div>
                                <div id=\"number_info_box__order_status_info\" class=\"small text-danger\">キャンセルの場合は在庫数を手動で戻してください</div>
                            </div>
                            <div class=\"col-sm-6 col-sm-offset-2\">
                                <p id=\"number_info_box__order_date\"><svg class=\"cb cb-clock\"> <use xlink:href=\"#cb-clock\" /></svg>受注日：";
        // line 239
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["Order"] ?? null), "order_date", array())) ? (twig_date_format_filter($this->env, $this->getAttribute(($context["Order"] ?? null), "order_date", array()), "Y/m/d H:i:s")) : ("")), "html", null, true);
        echo "</p>
                                <p id=\"number_info_box__payment_date\"><svg class=\"cb cb-clock\"> <use xlink:href=\"#cb-clock\" /></svg>入金日：";
        // line 240
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["Order"] ?? null), "payment_date", array())) ? (twig_date_format_filter($this->env, $this->getAttribute(($context["Order"] ?? null), "payment_date", array()), "Y/m/d H:i:s")) : ("")), "html", null, true);
        echo "</p>
                                <p id=\"number_info_box__commit_date\"><svg class=\"cb cb-clock\"> <use xlink:href=\"#cb-clock\" /></svg>発送日：";
        // line 241
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["Order"] ?? null), "commit_date", array())) ? (twig_date_format_filter($this->env, $this->getAttribute(($context["Order"] ?? null), "commit_date", array()), "Y/m/d H:i:s")) : ("")), "html", null, true);
        echo "</p>
                                <p id=\"number_info_box__update_date\"><svg class=\"cb cb-clock\"> <use xlink:href=\"#cb-clock\" /></svg>更新日：";
        // line 242
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["Order"] ?? null), "update_date", array())) ? (twig_date_format_filter($this->env, $this->getAttribute(($context["Order"] ?? null), "update_date", array()), "Y/m/d H:i:s")) : ("")), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
            <div id=\"customer_info_box\"  class=\"box accordion\">
                <div id=\"customer_info_box__toggle\" class=\"box-header toggle active\">
                    <h3 class=\"box-title\">注文者情報<svg class=\"cb cb-angle-down icon_down\"> <use xlink:href=\"#cb-angle-down\" /></svg></h3>
                </div><!-- /.box-header -->
                <div id=\"customer_info_box__body\" class=\"box-body accpanel\" style=\"display: block;\">
                    <div id=\"customer_info_list\" class=\"order_list form-horizontal\">
                        ";
        // line 254
        if (twig_test_empty($this->getAttribute(($context["Order"] ?? null), "id", array()))) {
            // line 255
            echo "                        <div id=\"customer_info_list__button_search\" class=\"btn_area\">
                            <ul>
                                <li><a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#searchCustomerModal\">会員検索</a></li>
                            </ul>
                        </div>
                        ";
        }
        // line 261
        echo "                        <div id=\"customer_info_list__customer\" class=\"form-group\">
                            <div class=\"col-sm-3 col-lg-2\">会員ID</div>
                            <div class=\"col-sm-9 col-lg-10\">
                                <p id=\"order_CustomerId\">";
        // line 264
        echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "Customer", array()), "vars", array()), "value", array()))) ? ("非会員") : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "Customer", array()), "vars", array()), "value", array()))), "html", null, true);
        echo "</p>
                                ";
        // line 265
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "Customer", array()), 'widget');
        echo "
                                ";
        // line 266
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "Customer", array()), 'errors');
        echo "
                            </div>

                        </div>
                        <div id=\"customer_info_list__name\" class=\"form-group\">
                            ";
        // line 271
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'label');
        echo "
                            <div class=\"col-sm-9 col-lg-10 input_name form-inline\">
                                ";
        // line 273
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "name", array()), "name01", array()), 'widget', array("attr" => array("placeholder" => "姓")));
        echo "
                                ";
        // line 274
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "name", array()), "name02", array()), 'widget', array("attr" => array("placeholder" => "名")));
        echo "
                                ";
        // line 275
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "name", array()), "name01", array()), 'errors');
        echo "
                                ";
        // line 276
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "name", array()), "name02", array()), 'errors');
        echo "
                            </div>
                        </div>
                        <div id=\"customer_info_list__kana\" class=\"form-group\">
                            ";
        // line 280
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "kana", array()), 'label');
        echo "
                            <div class=\"col-sm-9 col-lg-10 input_name form-inline\">
                                ";
        // line 282
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "kana", array()), "kana01", array()), 'widget', array("attr" => array("placeholder" => "セイ")));
        echo "
                                ";
        // line 283
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "kana", array()), "kana02", array()), 'widget', array("attr" => array("placeholder" => "メイ")));
        echo "
                                ";
        // line 284
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "kana", array()), "kana01", array()), 'errors');
        echo "
                                ";
        // line 285
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "kana", array()), "kana02", array()), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 289
        echo "                        <div id=\"customer_info_list__address\" class=\"form-group\">
                            ";
        // line 290
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "address", array()), 'label');
        echo "
                            <div id=\"customer_info_list__zip\" class=\"col-sm-9 col-lg-10 input_zip form-inline\">
                                〒";
        // line 292
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "zip", array()), "zip01", array()), 'widget');
        echo "-";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "zip", array()), "zip02", array()), 'widget');
        echo "
                                ";
        // line 293
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "zip", array()), "zip01", array()), 'errors');
        echo "
                                ";
        // line 294
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "zip", array()), "zip02", array()), 'errors');
        echo "
                                <span><button type=\"button\" id=\"zip-search\" class=\"btn btn-default btn-sm\">郵便番号から自動入力</button></span>
                            </div>
                        </div>
                        ";
        // line 299
        echo "                        <div class=\"form-group\">
                            <div id=\"customer_info_list__pref\" class=\"col-sm-offset-2 col-sm-9 col-lg-10 form-inline\">
                                ";
        // line 301
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "address", array()), "pref", array()), 'widget');
        echo "
                                ";
        // line 302
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "address", array()), "pref", array()), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 306
        echo "                        <div class=\"form-group\">
                            <div id=\"customer_info_list__addr01\" class=\"col-sm-offset-2 col-sm-9 col-lg-10\">
                                ";
        // line 308
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "address", array()), "addr01", array()), 'widget', array("attr" => array("placeholder" => "市区町村名（例：千代田区神田神保町）")));
        echo "
                                ";
        // line 309
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "address", array()), "addr01", array()), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 313
        echo "                        <div class=\"form-group\">
                            <div id=\"customer_info_list__addr02\" class=\"col-sm-offset-2 col-sm-9 col-lg-10\">
                                ";
        // line 315
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "address", array()), "addr02", array()), 'widget', array("attr" => array("placeholder" => "番地・ビル名（例：1-3-5）")));
        echo "
                                ";
        // line 316
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "address", array()), "addr02", array()), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 320
        echo "                        <div id=\"customer_info_list__email\" class=\"form-group\">
                            ";
        // line 321
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'label');
        echo "
                            <div class=\"col-sm-9 col-lg-10\">
                                ";
        // line 323
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'widget');
        echo "
                                ";
        // line 324
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 328
        echo "                        <div id=\"customer_info_list__tel\" class=\"form-group\">
                            ";
        // line 329
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "tel", array()), 'label');
        echo "
                            <div class=\"col-sm-9 col-lg-10 input_tel form-inline\">
                                ";
        // line 331
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "tel", array()), "tel01", array()), 'widget');
        echo "-";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "tel", array()), "tel02", array()), 'widget');
        echo "-";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "tel", array()), "tel03", array()), 'widget');
        echo "
                                ";
        // line 332
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "tel", array()), "tel01", array()), 'errors');
        echo "
                                ";
        // line 333
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "tel", array()), "tel02", array()), 'errors');
        echo "
                                ";
        // line 334
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "tel", array()), "tel03", array()), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 338
        echo "                        <div id=\"customer_info_list__fax\" class=\"form-group\">
                            ";
        // line 339
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fax", array()), 'label');
        echo "
                            <div class=\"col-sm-9 col-lg-10 input_tel form-inline\">
                                ";
        // line 341
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "fax", array()), "fax01", array()), 'widget');
        echo "-";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "fax", array()), "fax02", array()), 'widget');
        echo "-";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "fax", array()), "fax03", array()), 'widget');
        echo "
                                ";
        // line 342
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fax", array()), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 346
        echo "                        <div id=\"customer_info_list__company_name\" class=\"form-group\">
                            ";
        // line 347
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "company_name", array()), 'label');
        echo "
                            <div class=\"col-sm-9 col-lg-10\">
                                ";
        // line 349
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "company_name", array()), 'widget');
        echo "
                                ";
        // line 350
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "company_name", array()), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 354
        echo "                        <div id=\"customer_info_list__message\" class=\"form-group\">
                            ";
        // line 355
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "message", array()), 'label');
        echo "
                            <div class=\"col-sm-9 col-lg-10\">
                                ";
        // line 357
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "message", array()), 'widget', array("attr" => array("placeholder" => "3000文字まで入力可能")));
        echo "
                                ";
        // line 358
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "message", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

            <div id=\"product_info_box\" class=\"box accordion\">
                <div id=\"product_info_box__toggle\" class=\"box-header toggle active\">
                    <h3 class=\"box-title\">受注商品情報<svg class=\"cb cb-angle-down icon_down\"> <use xlink:href=\"#cb-angle-down\" /></svg></h3>
                </div><!-- /.box-header -->
                <div id=\"product_info_box__body\" class=\"box-body accpanel\" style=\"display: block;\">
                    <div id=\"product_info_list\" class=\"order_list\">
                        <div class=\"btn_area\">
                            <ul id=\"product_info_list__search_menu\">
                                ";
        // line 373
        if (($this->getAttribute(($context["BaseInfo"] ?? null), "optionMultipleShipping", array()) != 1)) {
            // line 374
            echo "                                <li><a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#searchProductModal\">商品の追加</a></li>
                                ";
        }
        // line 376
        echo "                                <li><button type=\"submit\" class=\"btn btn-default\" name=\"mode\" value=\"calc\">計算結果の更新</button></li>
                            </ul>
                        </div>
                        <div class=\"tableish\"
                             id=\"order_detail_list\"
                             data-prototype=\"
                                ";
        // line 382
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_c37abbfeb9cdbc7e21b494cf3ecb548f0044197e838c86d49fbe9f580124b7b7", $context, $blocks));
        // line 384
        echo "\">

                            ";
        // line 386
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "OrderDetails", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["orderDetailForm"]) {
            // line 387
            echo "                                <div id=\"product_info_list__item--";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_box\">
                                    ";
            // line 388
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "Product", array()), 'widget');
            echo "
                                    ";
            // line 389
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "ProductClass", array()), 'widget');
            echo "
                                    ";
            // line 390
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "product_name", array()), 'widget');
            echo "
                                    ";
            // line 391
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "product_code", array()), 'widget');
            echo "
                                    ";
            // line 392
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "class_name1", array()), 'widget');
            echo "
                                    ";
            // line 393
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "class_name2", array()), 'widget');
            echo "
                                    ";
            // line 394
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "class_category_name1", array()), 'widget');
            echo "
                                    ";
            // line 395
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "class_category_name2", array()), 'widget');
            echo "
                                    ";
            // line 396
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "tax_rule", array()), 'widget');
            echo "
                                    <div id=\"product_info_list__item_detail--";
            // line 397
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_detail\">
                                        <div id=\"product_info_list__detail_name--";
            // line 398
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_name_area\">
                                            <strong id=\"product_info_list__product_name--";
            // line 399
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_name\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "product_name", array()), "html", null, true);
            echo "</strong><br>
                                            <span id=\"product_info_list__product_code--";
            // line 400
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_id small\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "product_code", array()), "html", null, true);
            echo "</span>
                                            <span id=\"product_info_list__class_category_name--";
            // line 401
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_pattern small\">
                                                ";
            // line 402
            if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "class_category_name1", array()))) {
                // line 403
                echo "                                                / (
                                                    ";
                // line 404
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "class_name1", array()), "html", null, true);
                echo "：
                                                    ";
                // line 405
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "class_category_name1", array()), "html", null, true);
                echo "
                                                    ";
                // line 406
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "class_category_name2", array()))) {
                    // line 407
                    echo "                                                        /
                                                        ";
                    // line 408
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "class_name2", array()), "html", null, true);
                    echo "：
                                                        ";
                    // line 409
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "class_category_name2", array()), "html", null, true);
                    echo "
                                                    ";
                }
                // line 411
                echo "                                                    )
                                                ";
            }
            // line 413
            echo "                                            </span>
                                        </div>
                                        <div class=\"row\">
                                            <div id=\"product_info_list__price--";
            // line 416
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"col-md-4 col-lg-3 form-group form-inline text-right\">
                                                <span class=\"input-group item_price col-xs-8 col-sm-6 col-md-12\">
                                                    ";
            // line 418
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "price", array()), 'widget');
            echo "
                                                    ";
            // line 419
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "price", array()), 'errors');
            echo "
                                                </span>
                                            </div>
                                            <div class=\"col-md-4 col-lg-3 form-group form-inline text-right\">
                                                <span id=\"product_info_list__quantity--";
            // line 423
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_quantity\">
                                                    ";
            // line 424
            $context["detail_id"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "id", array());
            // line 425
            echo "                                                    ";
            if ($this->getAttribute($this->getAttribute(($context["arrOldOrder"] ?? null), "OrderDetails", array(), "any", false, true), ($context["detail_id"] ?? null), array(), "array", true, true)) {
                // line 426
                echo "                                                        ";
                $context["prev_quantity"] = ($this->getAttribute($this->getAttribute($this->getAttribute(($context["arrOldOrder"] ?? null), "OrderDetails", array()), ($context["detail_id"] ?? null), array(), "array"), "quantity", array()) . " ");
                // line 427
                echo "                                                    ";
            } else {
                // line 428
                echo "                                                        ";
                $context["prev_quantity"] = "";
                // line 429
                echo "                                                    ";
            }
            // line 430
            echo "                                                    ";
            if ($this->getAttribute(($context["BaseInfo"] ?? null), "optionMultipleShipping", array())) {
                // line 431
                echo "                                                        数量：";
                echo twig_escape_filter($this->env, ($context["prev_quantity"] ?? null), "html", null, true);
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "quantity", array()), 'widget', array("read_only" => "readonly"));
                echo "
                                                    ";
            } else {
                // line 433
                echo "                                                        数量：";
                echo twig_escape_filter($this->env, ($context["prev_quantity"] ?? null), "html", null, true);
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "quantity", array()), 'widget');
                echo "
                                                    ";
            }
            // line 435
            echo "                                                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "quantity", array()), 'errors');
            echo "
                                                </span>
                                            </div>
                                            <div class=\"col-md-4 col-lg-3 form-group form-inline text-right\">
                                                <span id=\"product_info_list__tax_rate--";
            // line 439
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"item_tax\">
                                                    税率：
                                                    <span class=\"input-group\">
                                                    ";
            // line 442
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "tax_rate", array()), 'widget');
            echo "
                                                    ";
            // line 443
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["orderDetailForm"], "tax_rate", array()), 'errors');
            echo "
                                                    <span class=\"input-group-addon\">%</span>
                                                    </span>
                                                </span>
                                            </div>
                                            <div id=\"product_info_list__total_price--";
            // line 448
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"col-md-12 col-lg-3 item_subtotal text-right\">
                                                <span>小計：</span> ";
            // line 449
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($this->getAttribute($this->getAttribute($context["orderDetailForm"], "vars", array()), "value", array()), "total_price", array())), "html", null, true);
            echo "
                                            </div>
                                        </div>

                                    </div>
                                    ";
            // line 454
            if ($this->getAttribute(($context["BaseInfo"] ?? null), "optionMultipleShipping", array())) {
                // line 455
                echo "                                    ";
            } else {
                // line 456
                echo "                                    <div id=\"product_info_list__button_multiple_shipping_delete--";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"icon_edit\">
                                        <button type=\"button\" class=\"btn btn-default btn-sm delete-item\">削除</button>
                                    </div>
                                    ";
            }
            // line 460
            echo "                                </div><!-- /.item_box -->
                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderDetailForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 462
        echo "                        </div>

                        <div id=\"product_info_result_box__sub_price\" class=\"row with-border2 no-margin text-right\">
                            <div class=\"col-lg-7 col-lg-offset-5\">
                                <dl id=\"product_info_result_box__body_sub_price\" class=\"dl-horizontal\">
                                    <dt id=\"product_info_result_box__subtotal\">小計：</dt>
                                    <dd>";
        // line 468
        echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Order"] ?? null), "subtotal", array())), "html", null, true);
        echo "</dd>
                                    <dt id=\"product_info_result_box__discount\">値引き：</dt>
                                    <dd class=\"form-group form-inline\">
                                        ";
        // line 471
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "discount", array()), 'widget');
        echo "
                                        ";
        // line 472
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "discount", array()), 'errors');
        echo "
                                    </dd>
                                    <dt id=\"product_info_result_box__delivery_fee_total\">送料：</dt>
                                    <dd class=\"form-group form-inline\">
                                        ";
        // line 476
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "delivery_fee_total", array()), 'widget');
        echo "
                                        ";
        // line 477
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "delivery_fee_total", array()), 'errors');
        echo "
                                    </dd>
                                    <dt id=\"product_info_result_box__charge\">手数料：</dt>
                                    <dd class=\"form-group form-inline\">
                                        ";
        // line 481
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "charge", array()), 'widget');
        echo "
                                        ";
        // line 482
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "charge", array()), 'errors');
        echo "
                                    </dd>
                                </dl>
                            </div>
                        </div>

                        <div id=\"product_info_result_box__summary\" class=\"row with-border2 no-margin text-right  ta\">
                            <div class=\"col-lg-7 col-lg-offset-5\">
                                <dl id=\"product_info_result_box__body_summary\" class=\"dl-horizontal\">
                                    <dt id=\"product_info_result_box__total\">合計：</dt>
                                    <dd>";
        // line 492
        echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Order"] ?? null), "total", array())), "html", null, true);
        echo "</dd>
                                    <dt id=\"product_info_result_box__payment_total\">お支払合計：</dt>
                                    <dd>";
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Order"] ?? null), "payment_total", array())), "html", null, true);
        echo "</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 503
        echo "            <div id=\"payment_info_box\" class=\"box accordion\">
                <div id=\"payment_info_box__toggle\" class=\"box-header toggle active\">
                    <h3 class=\"box-title\">お支払情報<svg class=\"cb cb-angle-down icon_down\"> <use xlink:href=\"#cb-angle-down\" /></svg></h3>
                </div><!-- /.box-header -->
                <div id=\"payment_info_box__body\" class=\"box-body accpanel\" style=\"display: block;\">
                    <dl id=\"payment_info_box__payment_method\" class=\"dl-horizontal\">
                        <dt>お支払方法</dt>
                        <dd class=\"form-group form-inline\">
                            ";
        // line 511
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "payment_method", array()), "html", null, true);
        echo "<br/>
                            ";
        // line 512
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "Payment", array()), 'widget');
        echo "
                            ";
        // line 513
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "Payment", array()), 'errors');
        echo "
                            <p class=\"small\">お支払方法の変更に伴う手数料の変更は手動にてお願いします。</p>
                        </dd>
                    </dl>
                </div>
            </div>

            ";
        // line 521
        echo "            ";
        if ($this->getAttribute(($context["BaseInfo"] ?? null), "optionMultipleShipping", array())) {
            // line 522
            echo "            <div id=\"shipping_info__button_new\"><button type=\"submit\" class=\"btn btn-default\" name=\"mode\" value=\"add_delivery\">お届け先を新規追加</button></div>
            ";
        }
        // line 524
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "Shippings", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["shippingForm"]) {
            // line 525
            echo "            ";
            $context["shippingIndex"] = $this->getAttribute($this->getAttribute($context["shippingForm"], "vars", array()), "name", array());
            // line 526
            echo "            <div id=\"shipping_info_box--";
            echo twig_escape_filter($this->env, ($context["shippingIndex"] ?? null), "html", null, true);
            echo "\" class=\"box accordion\">
                <div id=\"shipping_info_box__toggle--";
            // line 527
            echo twig_escape_filter($this->env, ($context["shippingIndex"] ?? null), "html", null, true);
            echo "\" class=\"box-header toggle active\">
                    <h3 class=\"box-title\">お届け先情報";
            // line 528
            if ((twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "Shippings", array())) > 1)) {
                echo "(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ")";
            }
            echo "<svg class=\"cb cb-angle-down icon_down\"> <use xlink:href=\"#cb-angle-down\" /></svg></h3>
                </div><!-- /.box-header -->
                    <div id=\"shipping_info_box__body--";
            // line 530
            echo twig_escape_filter($this->env, ($context["shippingIndex"] ?? null), "html", null, true);
            echo "\" class=\"box-body accpanel\" style=\"display: block;\">
                    <div id=\"shipping_info_list--";
            // line 531
            echo twig_escape_filter($this->env, ($context["shippingIndex"] ?? null), "html", null, true);
            echo "\" class=\"order_list\">
                        <div class=\"btn_area\">
                            <ul id=\"shipping_info_list__menu--";
            // line 533
            echo twig_escape_filter($this->env, ($context["shippingIndex"] ?? null), "html", null, true);
            echo "\">
                                <li><a class=\"btn btn-default copyCustomerToShippingButton\" data-idx=\"";
            // line 534
            echo twig_escape_filter($this->env, ($context["shippingIndex"] ?? null), "html", null, true);
            echo "\">注文者情報をコピー</a></li>
                                ";
            // line 535
            if ($this->getAttribute(($context["BaseInfo"] ?? null), "optionMultipleShipping", array())) {
                // line 536
                echo "                                <li><a class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#searchProductModal\" data-idx=\"";
                echo twig_escape_filter($this->env, ($context["shippingIndex"] ?? null), "html", null, true);
                echo "\">商品の追加</a></li>
                                ";
                // line 537
                if ((twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "Shippings", array())) > 1)) {
                    // line 538
                    echo "                                    <li><button type=\"button\" class=\"btn btn-default delete_delivery\" data-idx=\"";
                    echo twig_escape_filter($this->env, ($context["shippingIndex"] ?? null), "html", null, true);
                    echo "\">お届け先情報を削除</button></li>
                                ";
                }
                // line 540
                echo "                                ";
            }
            // line 541
            echo "                            </ul>
                        </div>

                        ";
            // line 544
            if ($this->getAttribute(($context["BaseInfo"] ?? null), "optionMultipleShipping", array())) {
                // line 545
                echo "                        <div class=\"tableish\"
                             id=\"shipment_item_list";
                // line 546
                echo twig_escape_filter($this->env, ($context["shippingIndex"] ?? null), "html", null, true);
                echo "\"
                             data-prototype=\"
                             ";
                // line 548
                echo twig_escape_filter($this->env,                 $this->renderBlock("__internal_2a4c5b1e4a4c5f92e2e158c5d95634dfd4779e7dfab734af674097b6fd2284c3", $context, $blocks));
                // line 550
                echo "\">

                        ";
                // line 552
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["shippingForm"], "ShipmentItems", array()));
                foreach ($context['_seq'] as $context["shippingItemkey"] => $context["shipmentItemForm"]) {
                    // line 553
                    echo "                            <div id=\"shipment_item__id--";
                    echo twig_escape_filter($this->env, ($context["shippingIndex"] ?? null), "html", null, true);
                    echo "--";
                    echo twig_escape_filter($this->env, $context["shippingItemkey"], "html", null, true);
                    echo "\" class=\"item_box shipment_item_idx";
                    echo twig_escape_filter($this->env, ($context["shippingIndex"] ?? null), "html", null, true);
                    echo "\">
                                ";
                    // line 554
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "Product", array()), 'widget');
                    echo "
                                ";
                    // line 555
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "ProductClass", array()), 'widget');
                    echo "
                                ";
                    // line 556
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "Product", array()), 'widget');
                    echo "
                                ";
                    // line 557
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "ProductClass", array()), 'widget');
                    echo "
                                ";
                    // line 558
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "product_name", array()), 'widget');
                    echo "
                                ";
                    // line 559
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "product_code", array()), 'widget');
                    echo "
                                ";
                    // line 560
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "class_name1", array()), 'widget');
                    echo "
                                ";
                    // line 561
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "class_name2", array()), 'widget');
                    echo "
                                ";
                    // line 562
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "class_category_name1", array()), 'widget');
                    echo "
                                ";
                    // line 563
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "class_category_name2", array()), 'widget');
                    echo "
                                <div id=\"shipment_item__detail--";
                    // line 564
                    echo twig_escape_filter($this->env, ($context["shippingIndex"] ?? null), "html", null, true);
                    echo "--";
                    echo twig_escape_filter($this->env, $context["shippingItemkey"], "html", null, true);
                    echo "\" class=\"item_detail\">
                                    <div id=\"shipment_item__name_detail--";
                    // line 565
                    echo twig_escape_filter($this->env, ($context["shippingIndex"] ?? null), "html", null, true);
                    echo "--";
                    echo twig_escape_filter($this->env, $context["shippingItemkey"], "html", null, true);
                    echo "\" class=\"item_name_area\">
                                        <strong id=\"shipment_item__product_name--";
                    // line 566
                    echo twig_escape_filter($this->env, ($context["shippingIndex"] ?? null), "html", null, true);
                    echo "--";
                    echo twig_escape_filter($this->env, $context["shippingItemkey"], "html", null, true);
                    echo "\" class=\"item_name\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItemForm"], "vars", array()), "value", array()), "product_name", array()), "html", null, true);
                    echo "</strong><br>
                                        <span id=\"shipment_item__product_code--";
                    // line 567
                    echo twig_escape_filter($this->env, ($context["shippingIndex"] ?? null), "html", null, true);
                    echo "--";
                    echo twig_escape_filter($this->env, $context["shippingItemkey"], "html", null, true);
                    echo "\" class=\"item_id small\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItemForm"], "vars", array()), "value", array()), "product_code", array()), "html", null, true);
                    echo "</span>
                                            <span id=\"shipment_item__class_category_name--";
                    // line 568
                    echo twig_escape_filter($this->env, ($context["shippingIndex"] ?? null), "html", null, true);
                    echo "--";
                    echo twig_escape_filter($this->env, $context["shippingItemkey"], "html", null, true);
                    echo "\" class=\"item_pattern small\">
                                                ";
                    // line 569
                    if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItemForm"], "vars", array()), "value", array()), "class_category_name1", array()))) {
                        // line 570
                        echo "                                                    / (
                                                    ";
                        // line 571
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItemForm"], "vars", array()), "value", array()), "class_name1", array()), "html", null, true);
                        echo "：
                                                    ";
                        // line 572
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItemForm"], "vars", array()), "value", array()), "class_category_name1", array()), "html", null, true);
                        echo "
                                                    ";
                        // line 573
                        if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItemForm"], "vars", array()), "value", array()), "class_category_name2", array()))) {
                            // line 574
                            echo "                                                        /
                                                        ";
                            // line 575
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItemForm"], "vars", array()), "value", array()), "class_name2", array()), "html", null, true);
                            echo "：
                                                        ";
                            // line 576
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItemForm"], "vars", array()), "value", array()), "class_category_name2", array()), "html", null, true);
                            echo "
                                                    ";
                        }
                        // line 578
                        echo "                                                    )
                                                ";
                    }
                    // line 580
                    echo "                                            </span>
                                    </div>
                                    <div id=\"shipment_item__info_item--";
                    // line 582
                    echo twig_escape_filter($this->env, ($context["shippingIndex"] ?? null), "html", null, true);
                    echo "--";
                    echo twig_escape_filter($this->env, $context["shippingItemkey"], "html", null, true);
                    echo "\" class=\"row\">
                                        <div id=\"shipment_item__price--";
                    // line 583
                    echo twig_escape_filter($this->env, ($context["shippingIndex"] ?? null), "html", null, true);
                    echo "--";
                    echo twig_escape_filter($this->env, $context["shippingItemkey"], "html", null, true);
                    echo "\" class=\"col-md-4 col-lg-3 form-group form-inline text-right\">
                                            ";
                    // line 584
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "price", array()), 'widget', array("read_only" => "readonly"));
                    echo "
                                        </div>
                                        <div id=\"shipment_item__quantity--";
                    // line 586
                    echo twig_escape_filter($this->env, ($context["shippingIndex"] ?? null), "html", null, true);
                    echo "--";
                    echo twig_escape_filter($this->env, $context["shippingItemkey"], "html", null, true);
                    echo "\" class=\"col-md-4 col-lg-3 form-group form-inline text-right\">
                                            <span class=\"item_quantity\">
                                                ";
                    // line 588
                    $context["item_id"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["shipmentItemForm"], "vars", array()), "value", array()), "id", array());
                    // line 589
                    echo "                                                ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["arrOldOrder"] ?? null), "Shippings", array(), "any", false, true), ($context["shippingIndex"] ?? null), array(), "array", false, true), "ShipmentItems", array(), "any", false, true), ($context["item_id"] ?? null), array(), "array", true, true)) {
                        // line 590
                        echo "                                                    ";
                        $context["prev_quantity"] = ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["arrOldOrder"] ?? null), "Shippings", array()), ($context["shippingIndex"] ?? null), array(), "array"), "ShipmentItems", array()), ($context["item_id"] ?? null), array(), "array"), "quantity", array()) . " ");
                        // line 591
                        echo "                                                ";
                    } else {
                        // line 592
                        echo "                                                    ";
                        $context["prev_quantity"] = "";
                        // line 593
                        echo "                                                ";
                    }
                    // line 594
                    echo "                                                数量：";
                    echo twig_escape_filter($this->env, ($context["prev_quantity"] ?? null), "html", null, true);
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "quantity", array()), 'widget', array("attr" => array("class" => "shipment_quantity")));
                    echo "
                                                ";
                    // line 595
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shipmentItemForm"], "quantity", array()), 'errors');
                    echo "
                                            </span>
                                        </div>
                                            <div id=\"shipment_item__delete--";
                    // line 598
                    echo twig_escape_filter($this->env, ($context["shippingIndex"] ?? null), "html", null, true);
                    echo "--";
                    echo twig_escape_filter($this->env, $context["shippingItemkey"], "html", null, true);
                    echo "\" class=\"col-md-4 col-lg-3 form-group form-inline text-right\">
                                                <button type=\"button\" class=\"btn btn-default delete_shipping_product\" data-idx=\"";
                    // line 599
                    echo twig_escape_filter($this->env, ($context["shippingIndex"] ?? null), "html", null, true);
                    echo "--";
                    echo twig_escape_filter($this->env, $context["shippingItemkey"], "html", null, true);
                    echo "\">削除</button>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.item_box -->
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['shippingItemkey'], $context['shipmentItemForm'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 605
                echo "                            </div>
                        ";
            }
            // line 607
            echo "
                        <hr>
                        <div id=\"shipment_item_detail--";
            // line 609
            echo twig_escape_filter($this->env, ($context["shippingIndex"] ?? null), "html", null, true);
            echo "\" class=\"form-horizontal\">
                            <div id=\"shipment_item_detail__name--";
            // line 610
            echo twig_escape_filter($this->env, ($context["shippingIndex"] ?? null), "html", null, true);
            echo "\" class=\"form-group\">
                                ";
            // line 611
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "name", array()), 'label');
            echo "
                                <div class=\"col-sm-9 col-lg-10 input_name form-inline\">
                                    ";
            // line 613
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "name", array()), "name01", array()), 'widget', array("attr" => array("placeholder" => "姓")));
            echo "
                                    ";
            // line 614
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "name", array()), "name02", array()), 'widget', array("attr" => array("placeholder" => "名")));
            echo "
                                    ";
            // line 615
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "name", array()), "name01", array()), 'errors');
            echo "
                                    ";
            // line 616
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "name", array()), "name02", array()), 'errors');
            echo "
                                </div>
                            </div>
                            <div id=\"shipment_item_detail__kana--";
            // line 619
            echo twig_escape_filter($this->env, ($context["shippingIndex"] ?? null), "html", null, true);
            echo "\" class=\"form-group\">
                                ";
            // line 620
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "kana", array()), 'label');
            echo "
                                <div class=\"col-sm-9 col-lg-10 input_name form-inline\">
                                    ";
            // line 622
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "kana", array()), "kana01", array()), 'widget', array("attr" => array("placeholder" => "セイ")));
            echo "
                                    ";
            // line 623
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "kana", array()), "kana02", array()), 'widget', array("attr" => array("placeholder" => "メイ")));
            echo "
                                    ";
            // line 624
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "kana", array()), "kana01", array()), 'errors');
            echo "
                                    ";
            // line 625
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "kana", array()), "kana02", array()), 'errors');
            echo "
                                </div>
                            </div>
                            <div id=\"shipment_item_detail__company_name--";
            // line 628
            echo twig_escape_filter($this->env, ($context["shippingIndex"] ?? null), "html", null, true);
            echo "\" class=\"form-group\">
                                ";
            // line 629
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "company_name", array()), 'label');
            echo "
                                <div class=\"col-sm-9 col-lg-10\">
                                    ";
            // line 631
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "company_name", array()), 'widget');
            echo "
                                    ";
            // line 632
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "company_name", array()), 'errors');
            echo "
                                </div>
                            </div>
                            ";
            // line 636
            echo "                            <div id=\"shipment_item_detail__address--";
            echo twig_escape_filter($this->env, ($context["shippingIndex"] ?? null), "html", null, true);
            echo "\" class=\"form-group\">
                                ";
            // line 637
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "address", array()), 'label');
            echo "
                                <div id=\"shipment_item_detail__zip--";
            // line 638
            echo twig_escape_filter($this->env, ($context["shippingIndex"] ?? null), "html", null, true);
            echo "\" class=\"col-sm-9 col-lg-10 input_zip form-inline\">
                                    〒";
            // line 639
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "zip", array()), "zip01", array()), 'widget');
            echo "-";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "zip", array()), "zip02", array()), 'widget');
            echo "
                                    ";
            // line 640
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "zip", array()), "zip01", array()), 'errors');
            echo "
                                    ";
            // line 641
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "zip", array()), "zip02", array()), 'errors');
            echo "
                                </div>
                            </div>
                            ";
            // line 645
            echo "                            <div class=\"form-group\">
                                <div id=\"shipment_item_detail__pref--";
            // line 646
            echo twig_escape_filter($this->env, ($context["shippingIndex"] ?? null), "html", null, true);
            echo "\" class=\"col-sm-offset-2 col-sm-9 col-lg-10 form-inline\">
                                    ";
            // line 647
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "address", array()), "pref", array()), 'widget');
            echo "
                                    ";
            // line 648
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "address", array()), "pref", array()), 'errors');
            echo "
                                </div>
                            </div>
                            ";
            // line 652
            echo "                            <div class=\"form-group\">
                                <div id=\"shipment_item_detail__addr01--";
            // line 653
            echo twig_escape_filter($this->env, ($context["shippingIndex"] ?? null), "html", null, true);
            echo "\" class=\"col-sm-offset-2 col-sm-9 col-lg-10\">
                                    ";
            // line 654
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "address", array()), "addr01", array()), 'widget', array("attr" => array("placeholder" => "市区町村名（例：千代田区神田神保町）")));
            echo "
                                    ";
            // line 655
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "address", array()), "addr01", array()), 'errors');
            echo "
                                </div>
                            </div>
                            ";
            // line 659
            echo "                            <div class=\"form-group\">
                                <div id=\"shipment_item_detail__addr02--";
            // line 660
            echo twig_escape_filter($this->env, ($context["shippingIndex"] ?? null), "html", null, true);
            echo "\" class=\"col-sm-offset-2 col-sm-9 col-lg-10\">
                                    ";
            // line 661
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "address", array()), "addr02", array()), 'widget', array("attr" => array("placeholder" => "番地・ビル名（例：1-3-5）")));
            echo "
                                    ";
            // line 662
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "address", array()), "addr02", array()), 'errors');
            echo "
                                </div>
                            </div>
                            ";
            // line 666
            echo "                            <div id=\"shipment_item_detail__tel--";
            echo twig_escape_filter($this->env, ($context["shippingIndex"] ?? null), "html", null, true);
            echo "\" class=\"form-group\">
                                ";
            // line 667
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "tel", array()), 'label');
            echo "
                                <div class=\"col-sm-9 col-lg-10 input_tel form-inline\">
                                    ";
            // line 669
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "tel", array()), "tel01", array()), 'widget');
            echo "-";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "tel", array()), "tel02", array()), 'widget');
            echo "-";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "tel", array()), "tel03", array()), 'widget');
            echo "
                                    ";
            // line 670
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "tel", array()), "tel01", array()), 'errors');
            echo "
                                    ";
            // line 671
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "tel", array()), "tel02", array()), 'errors');
            echo "
                                    ";
            // line 672
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "tel", array()), "tel03", array()), 'errors');
            echo "
                                </div>
                            </div>
                            ";
            // line 676
            echo "                            <div id=\"shipment_item_detail__fax--";
            echo twig_escape_filter($this->env, ($context["shippingIndex"] ?? null), "html", null, true);
            echo "\" class=\"form-group\">
                                ";
            // line 677
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "fax", array()), 'label');
            echo "
                                <div class=\"col-sm-9 col-lg-10 input_tel form-inline\">
                                    ";
            // line 679
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "fax", array()), "fax01", array()), 'widget');
            echo "-";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "fax", array()), "fax02", array()), 'widget');
            echo "-";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["shippingForm"], "fax", array()), "fax03", array()), 'widget');
            echo "
                                    ";
            // line 680
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "fax", array()), 'errors');
            echo "
                                </div>
                            </div>
                            ";
            // line 684
            echo "                            <div id=\"shipment_item_detail__delivery--";
            echo twig_escape_filter($this->env, ($context["shippingIndex"] ?? null), "html", null, true);
            echo "\" class=\"form-group\">
                                ";
            // line 685
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "Delivery", array()), 'label');
            echo "
                                <div id=\"shipment_item_detail__delivery_name--";
            // line 686
            echo twig_escape_filter($this->env, ($context["shippingIndex"] ?? null), "html", null, true);
            echo "\" class=\"col-sm-9 col-lg-10\">
                                    ";
            // line 687
            if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($context["shippingForm"], "vars", array()), "value", array()), "shipping_delivery_name", array()))) {
                // line 688
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shippingForm"], "vars", array()), "value", array()), "shipping_delivery_name", array()), "html", null, true);
                echo "<br/>
                                    ";
            }
            // line 690
            echo "                                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "Delivery", array()), 'widget', array("attr" => array("style" => "width:auto", "class" => "shipping-delivery", "data-idx" => ($context["shippingIndex"] ?? null))));
            echo "
                                    ";
            // line 691
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "Delivery", array()), 'errors');
            echo "
                                </div>
                            </div>
                            ";
            // line 695
            echo "                            <div id=\"shipment_item_detail__delivery_time--";
            echo twig_escape_filter($this->env, ($context["shippingIndex"] ?? null), "html", null, true);
            echo "\" class=\"form-group\">
                                ";
            // line 696
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "DeliveryTime", array()), 'label');
            echo "
                                <div class=\"col-sm-9 col-lg-10\">
                                    ";
            // line 698
            if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($context["shippingForm"], "vars", array()), "value", array()), "shipping_delivery_time", array()))) {
                // line 699
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["shippingForm"], "vars", array()), "value", array()), "shipping_delivery_time", array()), "html", null, true);
                echo "<br/>
                                    ";
            } else {
                // line 701
                echo "                                        指定なし
                                    ";
            }
            // line 703
            echo "                                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "DeliveryTime", array()), 'widget', array("attr" => array("style" => "width:auto", "class" => "shipping-delivery-time", "data-idx" => ($context["shippingIndex"] ?? null))));
            echo "
                                    ";
            // line 704
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "DeliveryTime", array()), 'errors');
            echo "
                                </div>
                            </div>
                            ";
            // line 708
            echo "                            <div id=\"shipment_item_detail__shipping_delivery_date--";
            echo twig_escape_filter($this->env, ($context["shippingIndex"] ?? null), "html", null, true);
            echo "\" class=\"form-group\">
                                ";
            // line 709
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "shipping_delivery_date", array()), 'label');
            echo "
                                <div class=\"col-sm-9 col-lg-10\">
                                    ";
            // line 711
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["arrOldOrder"] ?? null), "Shippings", array(), "any", false, true), ($context["shippingIndex"] ?? null), array(), "array", false, true), "shipping_delivery_date", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["arrOldOrder"] ?? null), "Shippings", array()), ($context["shippingIndex"] ?? null), array(), "array"), "shipping_delivery_date", array())))) {
                // line 712
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["arrOldOrder"] ?? null), "Shippings", array()), ($context["shippingIndex"] ?? null), array(), "array"), "shipping_delivery_date", array()), "Y-m-d"), "html", null, true);
                echo "<br/>
                                    ";
            } else {
                // line 714
                echo "                                        指定なし
                                    ";
            }
            // line 716
            echo "                                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "shipping_delivery_date", array()), 'widget');
            echo "
                                    ";
            // line 717
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["shippingForm"], "shipping_delivery_date", array()), 'errors');
            echo "
                                </div>
                            </div>
                            <div class=\"extra-form\">
                                ";
            // line 721
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "getIterator", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 722
                echo "                                    ";
                if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                    // line 723
                    echo "                                        ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'row');
                    echo "
                                    ";
                }
                // line 725
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 726
            echo "                            </div>
                        </div>
                    </div>
                </div><!-- /.box-body -->
           </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shippingForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 732
        echo "
            <div id=\"shop_info_box\" class=\"box\">
                <div id=\"shop_info_box__header\" class=\"box-header\">
                    <h3 class=\"box-title\">ショップ用メモ欄</h3>
                </div><!-- /.box-header -->
                <div id=\"shop_info_box__note\" class=\"box-body\">";
        // line 737
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "note", array()), 'widget');
        echo "</div>
            </div><!-- /.box -->

            <div id=\"detail__insert_button\" class=\"row btn_area\">
                <p class=\"col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 text-center\">
                    <button type=\"submit\" class=\"btn btn-primary btn-block btn-lg\" name=\"mode\" value=\"register\">受注情報を登録</button>
                </p>
                <!-- /.col -->
            </div>

            <div id=\"detail__back_button\" class=\"row hidden-xs hidden-sm\">
                <div class=\"col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 text-center btn_area\">
                    ";
        // line 749
        if ( !(null === ($context["id"] ?? null))) {
            // line 750
            echo "                        <p><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_order_page", array("page_no" => (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array(), "any", false, true), "get", array(0 => "eccube.admin.order.search.page_no"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array(), "any", false, true), "get", array(0 => "eccube.admin.order.search.page_no"), "method"), "1")) : ("1")))), "html", null, true);
            echo "?resume=1\">戻る</a></p>
                    ";
        }
        // line 752
        echo "                </div>
            </div>

        </div><!-- /.col -->

    </form>
</div>
";
    }

    // line 382
    public function block___internal_c37abbfeb9cdbc7e21b494cf3ecb548f0044197e838c86d49fbe9f580124b7b7($context, array $blocks = array())
    {
        // line 383
        echo "                                     ";
        echo twig_include($this->env, $context, "Order/order_detail_prototype.twig", array("orderDetailForm" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "OrderDetails", array()), "vars", array()), "prototype", array())));
        echo "
                                ";
    }

    // line 548
    public function block___internal_2a4c5b1e4a4c5f92e2e158c5d95634dfd4779e7dfab734af674097b6fd2284c3($context, array $blocks = array())
    {
        // line 549
        echo "                                     ";
        echo twig_include($this->env, $context, "Order/shipment_item_prototype.twig", array("shipmentItemForm" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["shippingForm"] ?? null), "ShipmentItems", array()), "vars", array()), "prototype", array())));
        echo "
                             ";
    }

    // line 761
    public function block_modal($context, array $blocks = array())
    {
        // line 762
        echo "
";
        // line 764
        echo "<div class=\"modal fade\" id=\"searchCustomerModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div id=\"search_customer_modal_box\" class=\"modal-content\">
            <div id=\"search_customer_modal_box__header\" class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span class=\"modal-close\" aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">会員検索</h4>
            </div>
            <div id=\"search_customer_modal_box__body\" class=\"modal-body\">
                <div class=\"form-group\">
                    ";
        // line 773
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["searchCustomerModalForm"] ?? null), "multi", array()), 'widget', array("attr" => array("placeholder" => "会員ID・メールアドレス・お名前")));
        echo "
                </div>
                <div class=\"extra-form form-group\">
                    ";
        // line 776
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["searchCustomerModalForm"] ?? null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 777
            echo "                        ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 778
                echo "                            ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'label');
                echo "
                            ";
                // line 779
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'widget');
                echo "
                            ";
                // line 780
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'errors');
                echo "
                        ";
            }
            // line 782
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 783
        echo "                </div>
                <div id=\"search_customer_modal_box__button_search\" class=\"form-group\">
                    <button type=\"button\" id=\"searchCustomerModalButton\" class=\"btn btn-primary\" >検索</button>
                </div>
                <div class=\"form-group\" id=\"searchCustomerModalList\">
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 795
        echo "<div class=\"modal fade\" id=\"searchProductModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div id=\"search_product_modal_box\" class=\"modal-content\">
            <div id=\"search_product_modal_box__header\" class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span class=\"modal-close\" aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">商品検索</h4>
            </div>
            <div id=\"search_product_modal_box__body\" class=\"modal-body\">
                <div id=\"search_product_modal_box__id\" class=\"form-group\">
                    ";
        // line 804
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["searchProductModalForm"] ?? null), "id", array()), 'widget', array("attr" => array("placeholder" => "商品名・ID・コード")));
        echo "
                </div>
                <div id=\"search_product_modal_box__category_id\" class=\"form-group\">
                    ";
        // line 807
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["searchProductModalForm"] ?? null), "category_id", array()), 'widget');
        echo "
                </div>
                <div class=\"extra-form form-group\">
                    ";
        // line 810
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["searchProductModalForm"] ?? null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 811
            echo "                        ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 812
                echo "                            ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'label');
                echo "
                            ";
                // line 813
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'widget');
                echo "
                            ";
                // line 814
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'errors');
                echo "
                        ";
            }
            // line 816
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 817
        echo "                </div>
                <div id=\"search_product_modal_box__button_search\" class=\"form-group\">
                    <button type=\"button\" id=\"searchProductModalButton\" class=\"btn btn-primary\">検索</button>
                </div>
                <div class=\"form-group\" id=\"searchProductModalList\">
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__1956c6100d9eec82fdb06cdb238f4410a2dfce26b07598fd6f2105ba2538ad25";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1805 => 817,  1799 => 816,  1794 => 814,  1790 => 813,  1785 => 812,  1782 => 811,  1778 => 810,  1772 => 807,  1766 => 804,  1755 => 795,  1742 => 783,  1736 => 782,  1731 => 780,  1727 => 779,  1722 => 778,  1719 => 777,  1715 => 776,  1709 => 773,  1698 => 764,  1695 => 762,  1692 => 761,  1685 => 549,  1682 => 548,  1675 => 383,  1672 => 382,  1661 => 752,  1655 => 750,  1653 => 749,  1638 => 737,  1631 => 732,  1612 => 726,  1606 => 725,  1600 => 723,  1597 => 722,  1593 => 721,  1586 => 717,  1581 => 716,  1577 => 714,  1571 => 712,  1569 => 711,  1564 => 709,  1559 => 708,  1553 => 704,  1548 => 703,  1544 => 701,  1538 => 699,  1536 => 698,  1531 => 696,  1526 => 695,  1520 => 691,  1515 => 690,  1509 => 688,  1507 => 687,  1503 => 686,  1499 => 685,  1494 => 684,  1488 => 680,  1480 => 679,  1475 => 677,  1470 => 676,  1464 => 672,  1460 => 671,  1456 => 670,  1448 => 669,  1443 => 667,  1438 => 666,  1432 => 662,  1428 => 661,  1424 => 660,  1421 => 659,  1415 => 655,  1411 => 654,  1407 => 653,  1404 => 652,  1398 => 648,  1394 => 647,  1390 => 646,  1387 => 645,  1381 => 641,  1377 => 640,  1371 => 639,  1367 => 638,  1363 => 637,  1358 => 636,  1352 => 632,  1348 => 631,  1343 => 629,  1339 => 628,  1333 => 625,  1329 => 624,  1325 => 623,  1321 => 622,  1316 => 620,  1312 => 619,  1306 => 616,  1302 => 615,  1298 => 614,  1294 => 613,  1289 => 611,  1285 => 610,  1281 => 609,  1277 => 607,  1273 => 605,  1259 => 599,  1253 => 598,  1247 => 595,  1241 => 594,  1238 => 593,  1235 => 592,  1232 => 591,  1229 => 590,  1226 => 589,  1224 => 588,  1217 => 586,  1212 => 584,  1206 => 583,  1200 => 582,  1196 => 580,  1192 => 578,  1187 => 576,  1183 => 575,  1180 => 574,  1178 => 573,  1174 => 572,  1170 => 571,  1167 => 570,  1165 => 569,  1159 => 568,  1151 => 567,  1143 => 566,  1137 => 565,  1131 => 564,  1127 => 563,  1123 => 562,  1119 => 561,  1115 => 560,  1111 => 559,  1107 => 558,  1103 => 557,  1099 => 556,  1095 => 555,  1091 => 554,  1082 => 553,  1078 => 552,  1074 => 550,  1072 => 548,  1067 => 546,  1064 => 545,  1062 => 544,  1057 => 541,  1054 => 540,  1048 => 538,  1046 => 537,  1041 => 536,  1039 => 535,  1035 => 534,  1031 => 533,  1026 => 531,  1022 => 530,  1013 => 528,  1009 => 527,  1004 => 526,  1001 => 525,  983 => 524,  979 => 522,  976 => 521,  966 => 513,  962 => 512,  958 => 511,  948 => 503,  937 => 494,  932 => 492,  919 => 482,  915 => 481,  908 => 477,  904 => 476,  897 => 472,  893 => 471,  887 => 468,  879 => 462,  864 => 460,  856 => 456,  853 => 455,  851 => 454,  843 => 449,  839 => 448,  831 => 443,  827 => 442,  821 => 439,  813 => 435,  806 => 433,  799 => 431,  796 => 430,  793 => 429,  790 => 428,  787 => 427,  784 => 426,  781 => 425,  779 => 424,  775 => 423,  768 => 419,  764 => 418,  759 => 416,  754 => 413,  750 => 411,  745 => 409,  741 => 408,  738 => 407,  736 => 406,  732 => 405,  728 => 404,  725 => 403,  723 => 402,  719 => 401,  713 => 400,  707 => 399,  703 => 398,  699 => 397,  695 => 396,  691 => 395,  687 => 394,  683 => 393,  679 => 392,  675 => 391,  671 => 390,  667 => 389,  663 => 388,  658 => 387,  641 => 386,  637 => 384,  635 => 382,  627 => 376,  623 => 374,  621 => 373,  603 => 358,  599 => 357,  594 => 355,  591 => 354,  585 => 350,  581 => 349,  576 => 347,  573 => 346,  567 => 342,  559 => 341,  554 => 339,  551 => 338,  545 => 334,  541 => 333,  537 => 332,  529 => 331,  524 => 329,  521 => 328,  515 => 324,  511 => 323,  506 => 321,  503 => 320,  497 => 316,  493 => 315,  489 => 313,  483 => 309,  479 => 308,  475 => 306,  469 => 302,  465 => 301,  461 => 299,  454 => 294,  450 => 293,  444 => 292,  439 => 290,  436 => 289,  430 => 285,  426 => 284,  422 => 283,  418 => 282,  413 => 280,  406 => 276,  402 => 275,  398 => 274,  394 => 273,  389 => 271,  381 => 266,  377 => 265,  373 => 264,  368 => 261,  360 => 255,  358 => 254,  343 => 242,  339 => 241,  335 => 240,  331 => 239,  323 => 234,  319 => 233,  312 => 231,  302 => 224,  297 => 221,  294 => 220,  257 => 186,  212 => 143,  209 => 142,  203 => 141,  195 => 139,  189 => 137,  186 => 136,  181 => 135,  179 => 134,  172 => 131,  169 => 130,  166 => 129,  163 => 128,  160 => 127,  158 => 126,  141 => 112,  98 => 72,  58 => 34,  55 => 33,  49 => 27,  43 => 26,  39 => 22,  37 => 31,  35 => 30,  33 => 29,  31 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__1956c6100d9eec82fdb06cdb238f4410a2dfce26b07598fd6f2105ba2538ad25", "");
    }
}
