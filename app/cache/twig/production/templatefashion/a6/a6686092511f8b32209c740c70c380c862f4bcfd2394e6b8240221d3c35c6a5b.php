<?php

/* __string_template__ad115886d50e9ca4ff511329c6e96b8775ec95aa58d4a97028a79c6a54ba14e9 */
class __TwigTemplate_5403570a334c4381f19902b8ef4aaa6d54d843e358717670b775739ec0a909ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__ad115886d50e9ca4ff511329c6e96b8775ec95aa58d4a97028a79c6a54ba14e9", 22);
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
        $context["body_class"] = "front_page";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_javascript($context, array $blocks = array())
    {
        // line 27
        echo "        <script>
            \$(function(){
                \$('.main_visual').slick({
                    dots: true,
                    arrows: false,
                    autoplay: true,
                    speed: 100
                });
            });
        </script>
    ";
    }

    // line 39
    public function block_main($context, array $blocks = array())
    {
        // line 40
        echo "        <div class=\"container\">

            <div class=\"main_visual col-xs-12\">
                <div class=\"item\">
                  <img  class=\"item-image\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/main-visual-img01.jpg\">
              </div>
              <div class=\"item\">
                  <img class=\"item-image\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/main-visual-img02.jpg\">
              </div>
             <div class=\"item\">
                  <img  class=\"item-image\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/main-visual-img03.jpg\">
            </div>
            <div class=\"item\">
                  <img  class=\"item-image\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/main-visual-img04.jpg\">
            </div>
          </div>

      </div>
  ";
    }

    public function getTemplateName()
    {
        return "__string_template__ad115886d50e9ca4ff511329c6e96b8775ec95aa58d4a97028a79c6a54ba14e9";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 53,  70 => 50,  64 => 47,  58 => 44,  52 => 40,  49 => 39,  35 => 27,  32 => 26,  28 => 22,  26 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__ad115886d50e9ca4ff511329c6e96b8775ec95aa58d4a97028a79c6a54ba14e9", "");
    }
}
