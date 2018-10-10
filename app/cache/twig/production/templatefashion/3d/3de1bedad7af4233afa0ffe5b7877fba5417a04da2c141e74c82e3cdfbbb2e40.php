<?php

/* __string_template__579707bc59739bdcb90f97cae10589b3f92963252c19982282b909fdedf8d4f2 */
class __TwigTemplate_82f4e19e6e724b4d1ba4792474550b809b04525ac6e4c032c767a7a0c902c004 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__579707bc59739bdcb90f97cae10589b3f92963252c19982282b909fdedf8d4f2", 22);
        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 24
        $context["body_class"] = "product_page";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_javascript($context, array $blocks = array())
    {
        // line 27
        echo "<script>
    eccube.classCategories = ";
        // line 28
        echo twig_jsonencode_filter($this->getAttribute(($context["Product"] ?? null), "class_categories", array()));
        echo ";

    // 規格2に選択肢を割り当てる。
    function fnSetClassCategories(form, classcat_id2_selected) {
        var \$form = \$(form);
        var product_id = \$form.find('input[name=product_id]').val();
        var \$sele1 = \$form.find('select[name=classcategory_id1]');
        var \$sele2 = \$form.find('select[name=classcategory_id2]');
        eccube.setClassCategories(\$form, product_id, \$sele1, \$sele2, classcat_id2_selected);
    }

    ";
        // line 39
        if ($this->getAttribute(($context["form"] ?? null), "classcategory_id2", array(), "any", true, true)) {
            // line 40
            echo "    fnSetClassCategories(
            document.form1, ";
            // line 41
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "classcategory_id2", array()), "vars", array()), "value", array()));
            echo "
    );
    ";
        } elseif ($this->getAttribute(        // line 43
($context["form"] ?? null), "classcategory_id1", array(), "any", true, true)) {
            // line 44
            echo "        eccube.checkStock(document.form1, ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "id", array()), "html", null, true);
            echo ", ";
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "classcategory_id1", array()), "vars", array()), "value", array()));
            echo ", null);
    ";
        }
        // line 46
        echo "</script>

<script>
\$(function(){
    \$('.carousel').slick({
        infinite: false,
        speed: 300,
        prevArrow:'<button type=\"button\" class=\"slick-prev\"><span class=\"angle-circle\"><svg class=\"cb cb-angle-right\"><use xlink:href=\"#cb-angle-right\" /></svg></span></button>',
        nextArrow:'<button type=\"button\" class=\"slick-next\"><span class=\"angle-circle\"><svg class=\"cb cb-angle-right\"><use xlink:href=\"#cb-angle-right\" /></svg></span></button>',
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            }
        ]
    });

    \$('.slides').slick({
        dots: true,
        arrows: false,
        speed: 300,
        customPaging: function(slider, i) {
            return '<button class=\"thumbnail\">' + \$(slider.\$slides[i]).find('img').prop('outerHTML') + '</button>';
        }
    });

    \$('#favorite').click(function() {
        \$('#mode').val('add_favorite');
    });

    \$('#add-cart').click(function () {
        \$('#mode').val('add_cart');
    });

    // bfcache無効化
    \$(window).bind('pageshow', function(event) {
        if (event.originalEvent.persisted) {
            location.reload(true);
        }
    });
});
</script>

";
    }

    // line 96
    public function block_main($context, array $blocks = array())
    {
        // line 97
        echo "    ";
        // line 110
        echo "
    <!-- ▼item_detail▼ -->
    <div id=\"item_detail\">
        <div id=\"detail_wrap\" class=\"row\">
            <!--★画像★-->
            <div id=\"item_photo_area\" class=\"col-xs-12 col-sm-6\">
                <div id=\"detail_image_box__slides\" class=\"slides\">
                    ";
        // line 117
        if ((twig_length_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "ProductImage", array())) > 0)) {
            // line 118
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["Product"] ?? null), "ProductImage", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["ProductImage"]) {
                // line 119
                echo "                        <div id=\"detail_image_box__item--";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct($context["ProductImage"]), "html", null, true);
                echo "\"/></div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductImage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "                    ";
        } else {
            // line 122
            echo "                        <div id=\"detail_image_box__item\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "image_save_urlpath", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct(""), "html", null, true);
            echo "\"/></div>
                    ";
        }
        // line 124
        echo "                </div>
            </div>

            <section id=\"item_detail_area\" class=\"col-xs-12 col-sm-6\">

                <!--★商品名★-->
                <h1 id=\"detail_description_box__name\" class=\"item_name col-xs-12\">";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "name", array()), "html", null, true);
        echo "</h1>


                <div id=\"detail_description_box__body\" class=\"item_detail col-xs-12\">
                    ";
        // line 134
        if ( !twig_test_empty($this->getAttribute(($context["Product"] ?? null), "ProductTag", array()))) {
            // line 135
            echo "                        <!--▼商品タグ-->
                        <div id=\"product_tag_box\" class=\"product_tag\">
                            ";
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["Product"] ?? null), "ProductTag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ProductTag"]) {
                // line 138
                echo "                                <span id=\"product_tag_box__product_tag--";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ProductTag"], "Tag", array()), "id", array()), "html", null, true);
                echo "\" class=\"product_tag_list\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ProductTag"], "Tag", array()), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductTag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            echo "                        </div>
                        <!--▲商品タグ-->
                    ";
        }
        // line 143
        echo "
                    <!--▼商品コード-->
                    <p id=\"detail_description_box__item_range_code\" class=\"item_code\">商品コード： <span id=\"item_code_default\">
                        ";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "code_min", array()), "html", null, true);
        echo "
                        ";
        // line 147
        if (($this->getAttribute(($context["Product"] ?? null), "code_min", array()) != $this->getAttribute(($context["Product"] ?? null), "code_max", array()))) {
            echo " ～ ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "code_max", array()), "html", null, true);
        }
        // line 148
        echo "                        </span> </p>
                    <!--▲商品コード-->

                    <!--★通常価格★-->
                    ";
        // line 152
        if ($this->getAttribute(($context["Product"] ?? null), "hasProductClass", array())) {
            // line 153
            if (( !(null === $this->getAttribute(($context["Product"] ?? null), "getPrice01Min", array())) && ($this->getAttribute(($context["Product"] ?? null), "getPrice01IncTaxMin", array()) == $this->getAttribute(($context["Product"] ?? null), "getPrice01IncTaxMax", array())))) {
                // line 154
                echo "                        <p id=\"detail_description_box__class_normal_price\" class=\"normal_price\"> 通常価格：<span class=\"price01_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice01IncTaxMin", array())), "html", null, true);
                echo "</span> <span class=\"small\">税込</span></p>
                        ";
            } elseif (( !(null === $this->getAttribute(            // line 155
($context["Product"] ?? null), "getPrice01Min", array())) &&  !(null === $this->getAttribute(($context["Product"] ?? null), "getPrice01Max", array())))) {
                // line 156
                echo "                            <p id=\"detail_description_box__class_normal_range_price\" class=\"normal_price\"> 通常価格：<span class=\"price01_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice01IncTaxMin", array())), "html", null, true);
                echo " ～ ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice01IncTaxMax", array())), "html", null, true);
                echo "</span> <span class=\"small\">税込</span></p>
                        ";
            }
            // line 158
            echo "                    ";
        } else {
            // line 159
            if ( !(null === $this->getAttribute(($context["Product"] ?? null), "getPrice01Max", array()))) {
                // line 160
                echo "                        <p id=\"detail_description_box__normal_price\" class=\"normal_price\"> 通常価格：<span class=\"price01_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice01IncTaxMin", array())), "html", null, true);
                echo "</span> <span class=\"small\">税込</span></p>
                        ";
            }
            // line 162
            echo "                    ";
        }
        // line 164
        echo "<!--★販売価格★-->
                    ";
        // line 165
        if ($this->getAttribute(($context["Product"] ?? null), "hasProductClass", array())) {
            // line 166
            if (($this->getAttribute(($context["Product"] ?? null), "getPrice02IncTaxMin", array()) == $this->getAttribute(($context["Product"] ?? null), "getPrice02IncTaxMax", array()))) {
                // line 167
                echo "                        <p id=\"detail_description_box__class_sale_price\" class=\"sale_price text-primary\"> <span class=\"price02_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice02IncTaxMin", array())), "html", null, true);
                echo "</span> <span class=\"small\">税込</span></p>
                        ";
            } else {
                // line 169
                echo "                            <p id=\"detail_description_box__class_range_sale_price\" class=\"sale_price text-primary\"> <span class=\"price02_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice02IncTaxMin", array())), "html", null, true);
                echo " ～ ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice02IncTaxMax", array())), "html", null, true);
                echo "</span> <span class=\"small\">税込</span></p>
                        ";
            }
            // line 171
            echo "                    ";
        } else {
            // line 172
            echo "<p id=\"detail_description_box__sale_price\" class=\"sale_price text-primary\"> <span class=\"price02_default\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice02IncTaxMin", array())), "html", null, true);
            echo "</span> <span class=\"small\">税込</span></p>
                    ";
        }
        // line 177
        echo "<!-- ▼関連カテゴリ▼ -->
                    <div id=\"relative_category_box\" class=\"relative_cat\">
                        <p>関連カテゴリ</p>
                          ";
        // line 180
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["Product"] ?? null), "ProductCategories", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["ProductCategory"]) {
            // line 181
            echo "                        <ol id=\"relative_category_box__relative_category--";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ProductCategory"], "product_id", array()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">
                            ";
            // line 182
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["ProductCategory"], "Category", array()), "path", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
                // line 183
                echo "                            <li><a id=\"relative_category_box__relative_category--";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ProductCategory"], "product_id", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "id", array()), "html", null, true);
                echo "\" href=\"";
                echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("product_list");
                echo "?category_id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "name", array()), "html", null, true);
                echo "</a></li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "                        </ol>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "                    </div>
                    <!-- ▲関連カテゴリ▲ -->

                    <form action=\"?\" method=\"post\" id=\"form1\" name=\"form1\">
                        <!--▼買い物かご-->
                        <div id=\"detail_cart_box\" class=\"cart_area\">
                            ";
        // line 193
        if ($this->getAttribute(($context["Product"] ?? null), "stock_find", array())) {
            // line 194
            echo "
                                ";
            // line 196
            echo "                                ";
            if ($this->getAttribute(($context["form"] ?? null), "classcategory_id1", array(), "any", true, true)) {
                // line 197
                echo "                                <ul id=\"detail_cart_box__cart_class_category_id\" class=\"classcategory_list\">
                                    ";
                // line 199
                echo "                                    <li>
                                        ";
                // line 200
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "classcategory_id1", array()), 'widget');
                echo "
                                        ";
                // line 201
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "classcategory_id1", array()), 'errors');
                echo "
                                    </li>
                                    ";
                // line 204
                echo "                                    ";
                if ($this->getAttribute(($context["form"] ?? null), "classcategory_id2", array(), "any", true, true)) {
                    // line 205
                    echo "                                        <li>
                                            ";
                    // line 206
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "classcategory_id2", array()), 'widget');
                    echo "
                                            ";
                    // line 207
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "classcategory_id2", array()), 'errors');
                    echo "
                                        </li>
                                     ";
                }
                // line 210
                echo "                                </ul>
                                ";
            }
            // line 212
            echo "
                                ";
            // line 214
            echo "                                <dl id=\"detail_cart_box__cart_quantity\" class=\"quantity\">
                                    <dt>数量</dt>
                                    <dd>
                                        ";
            // line 217
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantity", array()), 'widget');
            echo "
                                        ";
            // line 218
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantity", array()), 'errors');
            echo "
                                    </dd>
                                </dl>

                                <div class=\"extra-form\">
                                    ";
            // line 223
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "getIterator", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 224
                echo "                                        ";
                if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                    // line 225
                    echo "                                            ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'row');
                    echo "
                                        ";
                }
                // line 227
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 228
            echo "                                </div>

                                ";
            // line 231
            echo "                                <div id=\"detail_cart_box__button_area\" class=\"row btn_area\">
                                    <ul id=\"detail_cart_box__insert_button\" class=\"col-xs-12\">
                                        <li>
                                            <button type=\"submit\" id=\"add-cart\" class=\"btn btn-success btn-block-md prevention-btn prevention-mask\">カートに入れる</button>
                                        </li>
                                    </ul>
                                    ";
            // line 237
            if (($this->getAttribute(($context["BaseInfo"] ?? null), "option_favorite_product", array()) == 1)) {
                // line 238
                echo "                                    <ul id=\"detail_cart_box__favorite_button\" class=\"col-xs-12\">
                                        ";
                // line 239
                if ((($context["is_favorite"] ?? null) == false)) {
                    // line 240
                    echo "                                            <li>
                                                <button type=\"submit\" id=\"favorite\" class=\"btn btn-info btn-block-md prevention-btn prevention-mask\">お気に入りに追加</button>
                                            </li>
                                        ";
                } else {
                    // line 244
                    echo "                                            <li>
                                                <button type=\"submit\" id=\"favorite\" class=\"btn btn-info btn-block-md prevention-btn prevention-mask\" disabled=\"disabled\">お気に入りに追加済みです</button>
                                            </li>
                                        ";
                }
                // line 248
                echo "                                    </ul>
                                    ";
            }
            // line 250
            echo "                                </div>
                            ";
        } else {
            // line 252
            echo "                                ";
            // line 253
            echo "                                <div id=\"detail_cart_box__button_area\" class=\"row btn_area\">
                                    <ul class=\"col-xs-12\">
                                        <li><button type=\"button\" class=\"btn btn-default btn-block-md\" disabled=\"disabled\">ただいま品切れ中です</button>
                                        </li>
                                    </ul>
                                    ";
            // line 258
            if (($this->getAttribute(($context["BaseInfo"] ?? null), "option_favorite_product", array()) == 1)) {
                // line 259
                echo "                                        <ul id=\"detail_cart_box__favorite_button\" class=\"col-xs-12\">
                                            ";
                // line 260
                if ((($context["is_favorite"] ?? null) == false)) {
                    // line 261
                    echo "                                                <li>
                                                    <button type=\"submit\" id=\"favorite\" class=\"btn btn-info btn-block-md prevention-btn prevention-mask\">お気に入りに追加</button>
                                                </li>
                                            ";
                } else {
                    // line 265
                    echo "                                                <li>
                                                    <button type=\"submit\" id=\"favorite\" class=\"btn btn-info btn-block-md prevention-btn prevention-mask\" disabled=\"disabled\">お気に入りに追加済みです</button>
                                                </li>
                                            ";
                }
                // line 269
                echo "                                        </ul>
                                    ";
            }
            // line 271
            echo "                                </div>
                            ";
        }
        // line 273
        echo "                        </div>
                        <!--▲買い物かご-->
                        ";
        // line 275
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
                    </form>

                    <!--★商品説明★-->
                    <div class=\"row\">
                        <div class=\"category_header\">
                            <h2 class=\"heading02\">商品について</h2>
                        </div>
                        <div class=\"item_comment-area\">
                            <p id=\"detail_not_stock_box__description_detail\" class=\"item_comment\">";
        // line 284
        echo nl2br($this->getAttribute(($context["Product"] ?? null), "description_detail", array()));
        echo "</p>
                        </div>
                    </div>
                </div><!-- /.item_detail -->
            </section>
            <!--詳細ここまで-->
        </div>

        ";
        // line 293
        echo "        ";
        if ($this->getAttribute(($context["Product"] ?? null), "freearea", array())) {
            // line 294
            echo "        <div id=\"sub_area\" class=\"row\">
            <div class=\"col-sm-10\">
                <div id=\"detail_free_box__freearea\" class=\"freearea\">";
            // line 296
            echo twig_include($this->env, $context, twig_template_from_string($this->env, $this->getAttribute(($context["Product"] ?? null), "freearea", array())));
            echo "</div>
            </div>
        </div>
        ";
        }
        // line 300
        echo "    </div>
    <!-- ▲item_detail▲ -->
";
    }

    public function getTemplateName()
    {
        return "__string_template__579707bc59739bdcb90f97cae10589b3f92963252c19982282b909fdedf8d4f2";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  608 => 300,  601 => 296,  597 => 294,  594 => 293,  583 => 284,  571 => 275,  567 => 273,  563 => 271,  559 => 269,  553 => 265,  547 => 261,  545 => 260,  542 => 259,  540 => 258,  533 => 253,  531 => 252,  527 => 250,  523 => 248,  517 => 244,  511 => 240,  509 => 239,  506 => 238,  504 => 237,  496 => 231,  492 => 228,  486 => 227,  480 => 225,  477 => 224,  473 => 223,  465 => 218,  461 => 217,  456 => 214,  453 => 212,  449 => 210,  443 => 207,  439 => 206,  436 => 205,  433 => 204,  428 => 201,  424 => 200,  421 => 199,  418 => 197,  415 => 196,  412 => 194,  410 => 193,  402 => 187,  387 => 185,  360 => 183,  343 => 182,  336 => 181,  319 => 180,  314 => 177,  308 => 172,  305 => 171,  297 => 169,  291 => 167,  289 => 166,  287 => 165,  284 => 164,  281 => 162,  275 => 160,  273 => 159,  270 => 158,  262 => 156,  260 => 155,  255 => 154,  253 => 153,  251 => 152,  245 => 148,  240 => 147,  236 => 146,  231 => 143,  226 => 140,  215 => 138,  211 => 137,  207 => 135,  205 => 134,  198 => 130,  190 => 124,  182 => 122,  179 => 121,  158 => 119,  140 => 118,  138 => 117,  129 => 110,  127 => 97,  124 => 96,  72 => 46,  64 => 44,  62 => 43,  57 => 41,  54 => 40,  52 => 39,  38 => 28,  35 => 27,  32 => 26,  28 => 22,  26 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__579707bc59739bdcb90f97cae10589b3f92963252c19982282b909fdedf8d4f2", "");
    }
}
