<?php

/* /home/alexandr/public_html/octobercms.local/plugins/em/landing/components/listprojects/default.htm */
class __TwigTemplate_2a0084c16c1c7c6c34a3d4092f8b5a2ddc74bad49c6c2684cc10c92f1db8da1e extends Twig_Template
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
        echo "<div class=\"owl-carousel zoom-gallery\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["projects"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["project"], "img", array()), "getPath", array()), "html", null, true);
            echo "\">
            <div class=\"item\">
                <div class=\"img\"><img src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["project"], "img", array()), "getThumb", array(0 => 250, 1 => 300, 2 => "landscape"), "method"), "html", null, true);
            echo "\" class=\"img-responsive\"
                                      alt=\"\"></div>
                <div class=\"item-content\"><i class=\"fa fa-search-plus fa-2x\"></i></div>
            </div>
        </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/alexandr/public_html/octobercms.local/plugins/em/landing/components/listprojects/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 11,  32 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"owl-carousel zoom-gallery\">
    {% for project in projects %}
        <a href=\"{{ project.img.getPath }}\">
            <div class=\"item\">
                <div class=\"img\"><img src=\"{{ project.img.getThumb(250,300,'landscape') }}\" class=\"img-responsive\"
                                      alt=\"\"></div>
                <div class=\"item-content\"><i class=\"fa fa-search-plus fa-2x\"></i></div>
            </div>
        </a>
    {% endfor %}
</div>", "/home/alexandr/public_html/octobercms.local/plugins/em/landing/components/listprojects/default.htm", "");
    }
}
