<?php

/* __string_template__9f1c8c890cb4aff7d4d6d3b88801d535a5dee87dca78a1912e1cc643d1850f23 */
class __TwigTemplate_0fec70b4c1a105fac6bd03019330a103c4b909e424822712c14d7779c0e41f4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__9f1c8c890cb4aff7d4d6d3b88801d535a5dee87dca78a1912e1cc643d1850f23", 22);
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
        echo "        <script>
        // 並び順を変更
        function fnChangeOrderBy(orderby) {
            eccube.setValue('orderby', orderby);
            eccube.setValue('pageno', 1);
            eccube.submitForm();
        }

        // 表示件数を変更
        function fnChangeDispNumber(dispNumber) {
            eccube.setValue('disp_number', dispNumber);
            eccube.setValue('pageno', 1);
            eccube.submitForm();
        }
        // 商品表示BOXの高さを揃える
        \$(window).load(function() {
            \$('.product_item').matchHeight();
        });
    </script>
";
    }

    // line 48
    public function block_main($context, array $blocks = array())
    {
        // line 49
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["search_form"] ?? null), "category_id", array()), "vars", array()), "errors", array())) == 0)) {
            // line 50
            echo "        <form name=\"form1\" id=\"form1\" method=\"get\" action=\"?\">
            ";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["search_form"] ?? null), 'widget');
            echo "
        </form>
        <div class=\"row\">
            <h1 class=\"page-heading\">CATEGORY</h1>
            <!-- ▼topicpath▼ -->
            <div id=\"topicpath\">
                <ol id=\"list_header_menu\">
                    <li><a href=\"";
            // line 58
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("product_list");
            echo "\">全商品</a></li>
                    ";
            // line 59
            if ( !(null === ($context["Category"] ?? null))) {
                // line 60
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["Category"] ?? null), "path", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["Path"]) {
                    // line 61
                    echo "                            <li><a href=\"";
                    echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("product_list");
                    echo "?category_id=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Path"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Path"], "name", array()), "html", null, true);
                    echo "</a></li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Path'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "                    ";
            }
            // line 64
            echo "                    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["search_form"] ?? null), "vars", array()), "value", array()), "name", array())) {
                // line 65
                echo "                        <li>「";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["search_form"] ?? null), "vars", array()), "value", array()), "name", array()), "html", null, true);
                echo "」の検索結果</li>
                    ";
            }
            // line 67
            echo "                </ol>
            </div><!-- ▲topicpath▲ -->
        </div><!--/row-->

        <div id=\"result_info_box\" class=\"row\">
            <form name=\"page_navi_top\" id=\"page_navi_top\" action=\"?\">
                ";
            // line 73
            if (($this->getAttribute(($context["pagination"] ?? null), "totalItemCount", array()) > 0)) {
                // line 74
                echo "                <p id=\"result_info_box__item_count\" class=\"intro col-sm-6\"><strong><span id=\"productscount\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "totalItemCount", array()), "html", null, true);
                echo "</span>件</strong>の商品がみつかりました。
                </p>

                <div id=\"result_info_box__menu_box\" class=\"col-sm-6 no-padding\">
                    <ul id=\"result_info_box__menu\" class=\"pagenumberarea clearfix\">
                        <li id=\"result_info_box__disp_menu\">
                            ";
                // line 80
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["disp_number_form"] ?? null), 'widget', array("id" => "", "attr" => array("onchange" => "javascript:fnChangeDispNumber(this.value);")));
                echo "
                        </li>
                        <li id=\"result_info_box__order_menu\">
                            ";
                // line 83
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["order_by_form"] ?? null), 'widget', array("id" => "", "attr" => array("onchange" => "javascript:fnChangeOrderBy(this.value);")));
                echo "
                        </li>
                    </ul>
                </div>

                ";
                // line 88
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["disp_number_form"] ?? null), "getIterator", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                    // line 89
                    echo "                    ";
                    if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                        // line 90
                        echo "                        ";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'label');
                        echo "
                        ";
                        // line 91
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'widget');
                        echo "
                        ";
                        // line 92
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'errors');
                        echo "
                    ";
                    }
                    // line 94
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 95
                echo "
                ";
                // line 96
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["order_by_form"] ?? null), "getIterator", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                    // line 97
                    echo "                    ";
                    if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                        // line 98
                        echo "                        ";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'label');
                        echo "
                        ";
                        // line 99
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'widget');
                        echo "
                        ";
                        // line 100
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'errors');
                        echo "
                    ";
                    }
                    // line 102
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
                echo "
                ";
            } else {
                // line 105
                echo "                    <p id=\"result_info_box__item_count\" class=\"intro col-sm-6\"><strong style=\"display: none;\"><span id=\"productscount\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "totalItemCount", array()), "html", null, true);
                echo "</span>件</strong>お探しの商品は見つかりませんでした。</p>
                ";
            }
            // line 107
            echo "            </form>
        </div>

        <!-- ▼item_list▼ -->
        <div id=\"item_list\">
            <div class=\"row\">
                ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
                // line 114
                echo "                    <div id=\"result_list_box--";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
                echo "\" class=\"col-sm-3 col-xs-6\">
                        <div id=\"result_list__item--";
                // line 115
                echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
                echo "\" class=\"product_item\">
                            <a href=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("product_detail", array("id" => $this->getAttribute($context["Product"], "id", array()))), "html", null, true);
                echo "\">
                                <div id=\"result_list__image--";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
                echo "\" class=\"item_photo\">
                                    <img src=\"";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct($this->getAttribute($context["Product"], "main_list_image", array())), "html", null, true);
                echo "\">
                                </div>
                                <dl id=\"result_list__detail--";
                // line 120
                echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
                echo "\">
                                    <dt id=\"result_list__name--";
                // line 121
                echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
                echo "\" class=\"item_name\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "name", array()), "html", null, true);
                echo "</dt>
                                    ";
                // line 122
                if ($this->getAttribute($context["Product"], "hasProductClass", array())) {
                    // line 123
                    echo "                                        ";
                    if (($this->getAttribute($context["Product"], "getPrice02Min", array()) == $this->getAttribute($context["Product"], "getPrice02Max", array()))) {
                        // line 124
                        echo "                                            <dd id=\"result_list__price02_inc_tax--";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
                        echo "\" class=\"item_price\">
                                                ";
                        // line 125
                        echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["Product"], "getPrice02IncTaxMin", array())), "html", null, true);
                        echo "
                                            </dd>
                                            ";
                    } else {
                        // line 128
                        echo "                                            <dd id=\"result_list__price02_inc_tax--";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
                        echo "\" class=\"item_price\">
                                                ";
                        // line 129
                        echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["Product"], "getPrice02IncTaxMin", array())), "html", null, true);
                        echo " ～ ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["Product"], "getPrice02IncTaxMax", array())), "html", null, true);
                        echo "
                                            </dd>
                                        ";
                    }
                    // line 132
                    echo "                                        ";
                } else {
                    // line 133
                    echo "                                        <dd id=\"result_list__price02_inc_tax--";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
                    echo "\" class=\"item_price\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["Product"], "getPrice02IncTaxMin", array())), "html", null, true);
                    echo "</dd>
                                    ";
                }
                // line 135
                echo "                                </dl>
                            </a>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            echo "            </div>

        </div>
        <!-- ▲item_list▲ -->
        ";
            // line 144
            if (($this->getAttribute(($context["pagination"] ?? null), "totalItemCount", array()) > 0)) {
                // line 145
                echo "            ";
                $this->loadTemplate("pagination.twig", "__string_template__9f1c8c890cb4aff7d4d6d3b88801d535a5dee87dca78a1912e1cc643d1850f23", 145)->display(array_merge($context, array("pages" => $this->getAttribute(($context["pagination"] ?? null), "paginationData", array()))));
                // line 146
                echo "        ";
            }
            // line 147
            echo "    ";
        } else {
            // line 148
            echo "        <p class=\"errormsg text-danger\">ご指定のカテゴリは存在しません。</p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__9f1c8c890cb4aff7d4d6d3b88801d535a5dee87dca78a1912e1cc643d1850f23";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 148,  324 => 147,  321 => 146,  318 => 145,  316 => 144,  310 => 140,  300 => 135,  292 => 133,  289 => 132,  281 => 129,  276 => 128,  270 => 125,  265 => 124,  262 => 123,  260 => 122,  254 => 121,  250 => 120,  243 => 118,  239 => 117,  235 => 116,  231 => 115,  226 => 114,  222 => 113,  214 => 107,  208 => 105,  204 => 103,  198 => 102,  193 => 100,  189 => 99,  184 => 98,  181 => 97,  177 => 96,  174 => 95,  168 => 94,  163 => 92,  159 => 91,  154 => 90,  151 => 89,  147 => 88,  139 => 83,  133 => 80,  123 => 74,  121 => 73,  113 => 67,  107 => 65,  104 => 64,  101 => 63,  88 => 61,  83 => 60,  81 => 59,  77 => 58,  67 => 51,  64 => 50,  61 => 49,  58 => 48,  35 => 27,  32 => 26,  28 => 22,  26 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__9f1c8c890cb4aff7d4d6d3b88801d535a5dee87dca78a1912e1cc643d1850f23", "");
    }
}
