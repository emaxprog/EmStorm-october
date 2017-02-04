<?php

/* /home/alexandr/public_html/octobercms.local/themes/emstorm/partials/services.htm */
class __TwigTemplate_92cbfbf6bfeec43f7b380a1f4ad1d13a2f355831645840fd0c2dea322da34b6e extends Twig_Template
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
        echo "<section class=\"services\" id=\"services\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"title\">Услуги</h1>
            </div>
";
        // line 7
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("listServices"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 8
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/home/alexandr/public_html/octobercms.local/themes/emstorm/partials/services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"services\" id=\"services\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"title\">Услуги</h1>
            </div>
{% component 'listServices' %}
        </div>
    </div>
</section>", "/home/alexandr/public_html/octobercms.local/themes/emstorm/partials/services.htm", "");
    }
}
