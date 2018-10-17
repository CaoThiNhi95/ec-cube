<?php

/* Block/facebook.twig */
class __TwigTemplate_495c9477c176b2f5610db88daf4fba8ae4381eafbab3329050a4fe0ae4b5856b extends Twig_Template
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
        echo "<div id = \"fb-root\"> </div>
<script>(function(d, s, id){
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = \"//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.5&appId=9999999999999999\";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>";
    }

    public function getTemplateName()
    {
        return "Block/facebook.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/facebook.twig", "/Applications/MAMP/htdocs/ec-cube/app/template/templatefashion/Block/facebook.twig");
    }
}
