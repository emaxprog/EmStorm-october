<?php

/* /home/alexandr/public_html/octobercms.local/plugins/em/landing/components/listslides/default.htm */
class __TwigTemplate_eb7e9a688a07358dc1fc7a381d5136270bc7e73efdc684387693741578fa982f extends Twig_Template
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
        echo "<div class=\"owl-carousel\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slides"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 3
            echo "        <div class=\"item\">
            <img src=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["slide"], "slide", array()), "getThumb", array(0 => 1280, 1 => 850), "method"), "html", null, true);
            echo "\">
            <div class=\"item-content\">
                <h1>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "title", array()), "html", null, true);
            echo "</h1>
                <h3>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "caption", array()), "html", null, true);
            echo "</h3>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/alexandr/public_html/octobercms.local/plugins/em/landing/components/listslides/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 11,  38 => 7,  34 => 6,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"owl-carousel\">
    {% for slide in slides %}
        <div class=\"item\">
            <img src=\"{{ slide.slide.getThumb(1280,850) }}\">
            <div class=\"item-content\">
                <h1>{{ slide.title }}</h1>
                <h3>{{ slide.caption }}</h3>
            </div>
        </div>
    {% endfor %}
</div>", "/home/alexandr/public_html/octobercms.local/plugins/em/landing/components/listslides/default.htm", "");
    }
}
