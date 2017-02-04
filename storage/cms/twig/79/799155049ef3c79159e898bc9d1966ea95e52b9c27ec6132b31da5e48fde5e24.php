<?php

/* /home/alexandr/public_html/octobercms.local/plugins/rainlab/pages/components/staticmenu/default.htm */
class __TwigTemplate_645b36e31bb9b6e0c3596508b20922d327807dd8e1bd66902225bed5d3b2e98a extends Twig_Template
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
        if ($this->getAttribute(($context["__SELF__"] ?? null), "menuItems", array())) {
            // line 2
            echo "    <ul>
        ";
            // line 3
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['items'] = $this->getAttribute(($context["__SELF__"] ?? null), "menuItems", array())            ;
            echo $this->env->getExtension('CMS')->partialFunction((($context["__SELF__"] ?? null) . "::items")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 4
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/alexandr/public_html/octobercms.local/plugins/rainlab/pages/components/staticmenu/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if __SELF__.menuItems %}
    <ul>
        {% partial __SELF__ ~ \"::items\" items=__SELF__.menuItems %}
    </ul>
{% endif %}", "/home/alexandr/public_html/octobercms.local/plugins/rainlab/pages/components/staticmenu/default.htm", "");
    }
}
