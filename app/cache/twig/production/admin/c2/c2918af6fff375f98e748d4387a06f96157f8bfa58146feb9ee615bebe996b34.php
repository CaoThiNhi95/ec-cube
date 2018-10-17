<?php

/* __string_template__976db80c3093a270dc69568cd669efe7916fb8478fe498f663ea4d3d30ba376a */
class __TwigTemplate_91b46cfce76b343fc187d93427fbc114cde032a542a035f5091c4fa4fc743dc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__976db80c3093a270dc69568cd669efe7916fb8478fe498f663ea4d3d30ba376a", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
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
        // line 3
        $context["menus"] = array(0 => "setting", 1 => "shop", 2 => "order_number_id");
        // line 8
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "注文番号設定";
    }

    // line 6
    public function block_sub_title($context, array $blocks = array())
    {
        echo "注文番号設定";
    }

    // line 10
    public function block_javascript($context, array $blocks = array())
    {
        // line 11
        echo "<script>
\$(function () {
  if (\$('#ordernumber_config_front_format_type').val() != \"\") {
    if(\$(\"#ordernumber_config_rear_format_type option[value=2]\").length == 0) {
      \$(\"#ordernumber_config_rear_format_type option[value=1]\").after(\$(\"<option>\").val(\"2\").text(\"注文番号前部分でリセット\"));
    }
  } else {
    \$('#ordernumber_config_rear_format_type option[value=2]').remove();
  }

  if (\$('#ordernumber_config_rear_format_type').val() == 3) {
    \$('#ordernumber_config_digit').val(\"\");
    \$('#ordernumber_config_digit').attr(\"disabled\",\"disabled\");
  }

  \$('#ordernumber_config_front_format_type').change(function() {
    if (\$(this).val() != \"\") {
      if(\$(\"#ordernumber_config_rear_format_type option[value=2]\").length == 0) {
        \$(\"#ordernumber_config_rear_format_type option[value=1]\").after(\$(\"<option>\").val(\"2\").text(\"注文番号前部分でリセット\"));
      }
    } else {
      \$('#ordernumber_config_rear_format_type option[value=2]').remove();
    }
  });

  \$('#ordernumber_config_rear_format_type').change(function() {
    if (\$(this).val() == 3) {
      \$('#ordernumber_config_digit').val(\"\");
      \$('#ordernumber_config_digit').attr(\"disabled\",\"disabled\");
    } else {
      \$('#ordernumber_config_digit').removeAttr(\"disabled\");
    }
  });

});
</script>
";
    }

    // line 49
    public function block_main($context, array $blocks = array())
    {
        // line 50
        echo "    <form class=\"form-horizontal\" method=\"post\" action=\"";
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("plugin_OrderNumber_config");
        echo "\">
        ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'widget');
        echo "
        <div class=\"row\" id=\"aside_wrap\">
            <div class=\"col-md-9\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">注文番号設定</h3>
                        <h5>※注文番号の前部分のみまたは後ろ部分のみの設定も可能です</h5>
                    </div><!-- /.box-header -->
                    <div class=\"box-body\">
                      <div class=\"form-group\">
                        <div class=\"col-sm-10 col-lg-10 form-inline\">
                          <label class=\"col-sm-4 control-label\">注文番号前部分</label>
                          ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "front_format_type", array()), 'widget');
        echo "
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <div class=\"col-sm-10 col-lg-10 form-inline\">
                          <label class=\"col-sm-4 control-label\">注文番号後ろ部分</label>
                          ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "rear_format_type", array()), 'widget');
        echo "
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <div class=\"col-sm-10 col-lg-10 form-inline\">
                          <label class=\"col-sm-4 control-label\">桁数</label>
                          ";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "digit", array()), 'widget');
        echo "
                          ";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "digit", array()), 'errors');
        echo "
                        </div>
                      </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
            <div class=\"col-md-3\" id=\"aside_column\">
                <div id=\"common_box\" class=\"col_inner\">
                    <div id=\"common_button_box\" class=\"box no-header\">
                        <div id=\"common_button_box__body\" class=\"box-body\">
                            <div id=\"common_button_box__edit_button\" class=\"row text-center\">
                                <div class=\"col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0\">
                                    <button class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">設定</button>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
            </div><!-- /.col -->
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "__string_template__976db80c3093a270dc69568cd669efe7916fb8478fe498f663ea4d3d30ba376a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 76,  132 => 75,  123 => 69,  114 => 63,  99 => 51,  94 => 50,  91 => 49,  51 => 11,  48 => 10,  42 => 6,  36 => 5,  32 => 1,  30 => 8,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__976db80c3093a270dc69568cd669efe7916fb8478fe498f663ea4d3d30ba376a", "");
    }
}
