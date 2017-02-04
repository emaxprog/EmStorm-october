<?php

/* /home/alexandr/public_html/octobercms.local/themes/emstorm/pages/index.htm */
class __TwigTemplate_ec1f9d6e5fcb4a073ca8d8129b00093049b7ee3b5128b56d801a6043bfb0f5b8 extends Twig_Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("services"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("projects"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("advantages"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/home/alexandr/public_html/octobercms.local/themes/emstorm/pages/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  27 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial \"header\" %}
{% partial \"services\" %}
{% partial \"projects\" %}
{% partial \"advantages\" %}", "/home/alexandr/public_html/octobercms.local/themes/emstorm/pages/index.htm", "");
    }
}
