<?php

/* /home/alexandr/public_html/octobercms.local/themes/emstorm/partials/projects.htm */
class __TwigTemplate_0fc77eb4bbd046ebd540f0f10a621e7ab4b67b2151979019bbf1b2e06cdba9c8 extends Twig_Template
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
        echo "<section class=\"projects\" id=\"projects\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"title\">Проекты</h1>
            </div>
            <div class=\"col-md-12\">
";
        // line 8
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("listProjects"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 9
        echo "            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/home/alexandr/public_html/octobercms.local/themes/emstorm/partials/projects.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 9,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"projects\" id=\"projects\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"title\">Проекты</h1>
            </div>
            <div class=\"col-md-12\">
{% component 'listProjects' %}
            </div>
        </div>
    </div>
</section>", "/home/alexandr/public_html/octobercms.local/themes/emstorm/partials/projects.htm", "");
    }
}
