<?php

/* Block/plg_shiro8_gallary_block.twig */
class __TwigTemplate_852b0dd157ea8e884952762b697005876f05a185df70792550cf04f6ec80f53a extends Twig_Template
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
        echo "<!-- ▼shiro8_gallary▼ -->
<div class=\"item_gallary\">
    <ul class=\"row\">
    ";
        // line 25
        if ((twig_length_filter($this->env, ($context["Products"] ?? null)) > 0)) {
            // line 26
            echo "    \t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["Products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
                // line 27
                echo "    \t\t<li class=\"col-sm-2 col-xs-4\">
    \t\t\t<a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("product_detail", array("id" => $this->getAttribute($context["Product"], "id", array()))), "html", null, true);
                echo "\" class=\"item_photo\">
    \t\t\t\t<img src=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct($this->getAttribute($context["Product"], "main_list_image", array())), "html", null, true);
                echo "\"></a>
    \t\t</li>
    \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    ";
        }
        // line 33
        echo "    </ul>
</div>
<!-- ▲shiro8_gallary▲ -->";
    }

    public function getTemplateName()
    {
        return "Block/plg_shiro8_gallary_block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 33,  49 => 32,  38 => 29,  34 => 28,  31 => 27,  26 => 26,  24 => 25,  19 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/plg_shiro8_gallary_block.twig", "/Applications/MAMP/htdocs/ec-cube/app/template/templatefashion/Block/plg_shiro8_gallary_block.twig");
    }
}
