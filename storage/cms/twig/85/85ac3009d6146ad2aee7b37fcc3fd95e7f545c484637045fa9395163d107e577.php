<?php

/* /home/alexandr/public_html/octobercms.local/themes/emstorm/partials/header.htm */
class __TwigTemplate_183df5a34942c492fd6081baa7a7b7b526d17616d0f4c1150fb4e9881b6e6676 extends Twig_Template
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
        echo "<header class=\"header\" id=\"main\">
    <div class=\"top-line\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-2 col-sm-6 col-xs-3 \">
                    <div class=\"logo\">
                        <img src=\"";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/favicon/apple-touch-icon.png");
        echo "\" alt=\"EmStorm\"
                             class=\"img-responsive\">
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6 col-xs-9 col-md-push-7\">
                    <div class=\"phone-wrap\">
                        <i class=\"fa fa-mobile fa-2x\" aria-hidden=\"true\"></i> ";
        // line 13
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("phone.txt"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 14
        echo "                    </div>
                    <a href=\"#\" class=\"toggle-mnu hidden-lg hidden-md\"><span></span></a>
                </div>
                <div class=\"col-md-7 col-sm-12 col-xs-12 col-md-pull-3\">
                    <nav class=\"top-menu\">
                        ";
        // line 19
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("staticMenu"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 20
        echo "                    </nav>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 25
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("listSlides"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 26
        echo "</header>";
    }

    public function getTemplateName()
    {
        return "/home/alexandr/public_html/octobercms.local/themes/emstorm/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 26,  58 => 25,  51 => 20,  47 => 19,  40 => 14,  36 => 13,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header class=\"header\" id=\"main\">
    <div class=\"top-line\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-2 col-sm-6 col-xs-3 \">
                    <div class=\"logo\">
                        <img src=\"{{ 'assets/img/favicon/apple-touch-icon.png'|theme }}\" alt=\"EmStorm\"
                             class=\"img-responsive\">
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6 col-xs-9 col-md-push-7\">
                    <div class=\"phone-wrap\">
                        <i class=\"fa fa-mobile fa-2x\" aria-hidden=\"true\"></i> {% content \"phone.txt\" %}
                    </div>
                    <a href=\"#\" class=\"toggle-mnu hidden-lg hidden-md\"><span></span></a>
                </div>
                <div class=\"col-md-7 col-sm-12 col-xs-12 col-md-pull-3\">
                    <nav class=\"top-menu\">
                        {% component 'staticMenu' %}
                    </nav>
                </div>
            </div>
        </div>
    </div>
    {% component 'listSlides' %}
</header>", "/home/alexandr/public_html/octobercms.local/themes/emstorm/partials/header.htm", "");
    }
}
