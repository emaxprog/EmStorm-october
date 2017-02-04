<?php

/* /home/alexandr/public_html/octobercms.local/themes/emstorm/partials/advantages.htm */
class __TwigTemplate_e89e8633484ef9acf54d8a3abd77e0792b9d170a30cfc07ea1d6340c74366922 extends Twig_Template
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
        echo "<section class=\"advantages\" id=\"advantages\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\"><h1 class=\"title\">Преимущества</h1></div>
";
        // line 5
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("listAdvantages"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 6
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/home/alexandr/public_html/octobercms.local/themes/emstorm/partials/advantages.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"advantages\" id=\"advantages\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\"><h1 class=\"title\">Преимущества</h1></div>
{% component 'listAdvantages' %}
        </div>
    </div>
</section>", "/home/alexandr/public_html/octobercms.local/themes/emstorm/partials/advantages.htm", "");
    }
}
