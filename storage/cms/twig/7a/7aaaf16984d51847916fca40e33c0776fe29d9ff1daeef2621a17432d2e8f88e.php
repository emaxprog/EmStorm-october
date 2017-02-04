<?php

/* /home/alexandr/public_html/octobercms.local/plugins/em/landing/components/listadvantages/default.htm */
class __TwigTemplate_b406969208f043a923dbceec7b6283d813dc5661f7ef644fca3ff853fb520567 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable(($context["advantages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["advantage"]) {
            // line 2
            echo "    <div class=\"col-md-3 col-sm-6 col-xs-6\">
        <div class=\"item\">
            <div class=\"img\"><img src=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advantage"], "img", array()), "getThumb", array(0 => 150, 1 => 150), "method"), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"\"></div>
            <h3 class=\"caption\">";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["advantage"], "caption", array()), "html", null, true);
            echo "</h3>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advantage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/home/alexandr/public_html/octobercms.local/plugins/em/landing/components/listadvantages/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  27 => 4,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for advantage in advantages %}
    <div class=\"col-md-3 col-sm-6 col-xs-6\">
        <div class=\"item\">
            <div class=\"img\"><img src=\"{{ advantage.img.getThumb(150,150) }}\" class=\"img-responsive\" alt=\"\"></div>
            <h3 class=\"caption\">{{ advantage.caption }}</h3>
        </div>
    </div>
{% endfor %}", "/home/alexandr/public_html/octobercms.local/plugins/em/landing/components/listadvantages/default.htm", "");
    }
}
