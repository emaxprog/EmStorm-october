<?php

/* /home/alexandr/public_html/octobercms.local/plugins/em/landing/components/listservices/default.htm */
class __TwigTemplate_e41278b196dd2c172f2bcabe41b3b0cfe4932b805b37cd3f5887b2e5264373ad extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["services"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 2
            echo "    <div class=\"col-md-4 col-sm-4\">
        <div class=\"item\">
            <div class=\"img\"><img src=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["service"], "img", array()), "getThumb", array(0 => 200, 1 => 200), "method"), "html", null, true);
            echo "\" alt=\"\" class=\"img-responsive\"></div>
            <h3 class=\"caption\">";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "caption", array()), "html", null, true);
            echo "</h3>
            <div class=\"description\">
                ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "description", array()), "html", null, true);
            echo "
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/home/alexandr/public_html/octobercms.local/plugins/em/landing/components/listservices/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  31 => 5,  27 => 4,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for service in services %}
    <div class=\"col-md-4 col-sm-4\">
        <div class=\"item\">
            <div class=\"img\"><img src=\"{{ service.img.getThumb(200,200) }}\" alt=\"\" class=\"img-responsive\"></div>
            <h3 class=\"caption\">{{ service.caption }}</h3>
            <div class=\"description\">
                {{ service.description }}
            </div>
        </div>
    </div>
{% endfor %}", "/home/alexandr/public_html/octobercms.local/plugins/em/landing/components/listservices/default.htm", "");
    }
}
