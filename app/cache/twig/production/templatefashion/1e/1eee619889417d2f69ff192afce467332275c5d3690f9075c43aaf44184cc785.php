<?php

/* Block/logo.twig */
class __TwigTemplate_7a3a3036628dde5a3e21b6d5d541dd049ceaced356d8a99e7a8c17ca0b62813d extends Twig_Template
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
        echo "<div class=\"col-xs-12\">
    <div class=\"header_logo_area\">
        <a href=\"";
        // line 24
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("homepage");
        echo "\">
            <p class=\"copy\">くらしを楽しむライフスタイルグッズ</p>
            <h1 class=\"header_logo\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["BaseInfo"] ?? null), "shop_name", array()), "html", null, true);
        echo "</h1>
        </a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "Block/logo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 26,  23 => 24,  19 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/logo.twig", "/Applications/MAMP/htdocs/ec-cube/app/template/templatefashion/Block/logo.twig");
    }
}
