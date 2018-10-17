<?php

/* Order/order_detail_prototype.twig */
class __TwigTemplate_64b11d8bf6756b05ca31c41b2dbad393cc2bc01c6bff173744827a201094169b extends Twig_Template
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
        // line 1
        echo "<div style=\"display: none\">
    ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["orderDetailForm"] ?? null), "new", array()), 'widget');
        echo "
    ";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["orderDetailForm"] ?? null), "Product", array()), 'widget');
        echo "
    ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["orderDetailForm"] ?? null), "ProductClass", array()), 'widget');
        echo "
    ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["orderDetailForm"] ?? null), "price", array()), 'widget');
        echo "
    ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["orderDetailForm"] ?? null), "quantity", array()), 'widget', array("type" => "hidden"));
        echo "
    ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["orderDetailForm"] ?? null), "tax_rate", array()), 'widget', array("type" => "hidden"));
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "Order/order_detail_prototype.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  38 => 6,  34 => 5,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Order/order_detail_prototype.twig", "/Applications/MAMP/htdocs/ec-cube/src/Eccube/Resource/template/admin/Order/order_detail_prototype.twig");
    }
}
