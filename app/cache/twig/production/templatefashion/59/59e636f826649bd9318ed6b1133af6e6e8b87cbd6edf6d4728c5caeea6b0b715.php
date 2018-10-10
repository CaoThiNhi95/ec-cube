<?php

/* Block/garally.twig */
class __TwigTemplate_4301dc801de16657f96076fc446470fefd4759832d71677610bce2c1d16f1228 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 22
        echo "<style>
.img-item{
height: 100px;
width: 60px;
}
</style>
<div class=\"row\">
    <div class=\"category_header col-xs-12\">
        <h2 class=\"heading01\">GALLERY</h2>
    </div>
    <div class=\"item_gallery col-xs-12\">
        <ul class=\"item_gallery_list row\">
            <li class=\"col-sm-2 col-xs-4\"><a href=\"#\" class=\"item_photo\"><img class=\"img-item\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/gallery-img01.png\"></a></li>
            <li class=\"col-sm-2 col-xs-4\"><a href=\"#\" class=\"item_photo\"><img class=\"img-item\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/gallery-img02.png\"></a></li>
            <li class=\"col-sm-2 col-xs-4\"><a href=\"#\" class=\"item_photo\"><img  class=\"img-item\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/gallery-img03.png\"></a></li>
            <li class=\"col-sm-2 col-xs-4\"><a href=\"#\" class=\"item_photo\"><img  class=\"img-item\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/gallery-img04.png\"></a></li>
            <li class=\"col-sm-2 col-xs-4\"><a href=\"#\" class=\"item_photo\"><img class=\"img-item\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/gallery-img05.png\"></a></li>
            <li class=\"col-sm-2 col-xs-4\"><a href=\"#\" class=\"item_photo\"><img class=\"img-item\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/gallery-img06.png\"></a></li>
            <li class=\"col-sm-2 col-xs-4\"><a href=\"#\" class=\"item_photo\"><img  class=\"img-item\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/gallery-img07.png\"></a></li>
            <li class=\"col-sm-2 col-xs-4\"><a href=\"#\" class=\"item_photo\"><img class=\"img-item\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/gallery-img08.png\"></a></li>
            <li class=\"col-sm-2 col-xs-4\"><a href=\"#\" class=\"item_photo\"><img class=\"img-item\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/gallery-img09.png\"></a></li>
            <li class=\"col-sm-2 col-xs-4\"><a href=\"#\" class=\"item_photo\"><img  class=\"img-item\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/gallery-img10.png\"></a></li>
            <li class=\"col-sm-2 col-xs-4\"><a href=\"#\" class=\"item_photo\"><img  class=\"img-item\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/gallery-img11.png\"></a></li>
            <li class=\"col-sm-2 col-xs-4\"><a href=\"#\" class=\"item_photo\"><img class=\"img-item\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/gallery-img12.png\"></a></li>
        </ul>
    </div><!--item_gallery-->
</div><!--row-->";
    }

    public function getTemplateName()
    {
        return "Block/garally.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 45,  73 => 44,  69 => 43,  65 => 42,  61 => 41,  57 => 40,  53 => 39,  49 => 38,  45 => 37,  41 => 36,  37 => 35,  33 => 34,  19 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/garally.twig", "/Applications/MAMP/htdocs/ec-cube/app/template/templatefashion/Block/garally.twig");
    }
}
