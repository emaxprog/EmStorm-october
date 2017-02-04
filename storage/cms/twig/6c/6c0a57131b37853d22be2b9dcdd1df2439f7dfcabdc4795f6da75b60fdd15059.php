<?php

/* /home/alexandr/public_html/octobercms.local/plugins/em/ymap/components/map/default.htm */
class __TwigTemplate_2e5d80020328c7e9a7d3d3ad2d8f3533c89faf53f5fc923d389b58e31cb68168 extends Twig_Template
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
        echo "<script src=\"https://api-maps.yandex.ru/2.1/?lang=ru_RU\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
    ymaps.ready(init);
    var myMap,
        myPlacemark;

    function init() {
        myMap = new ymaps.Map(\"map\", {
            center: [";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["__SELF__"] ?? null), "property", array(0 => "latitude"), "method"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["__SELF__"] ?? null), "property", array(0 => "longitude"), "method"), "html", null, true);
        echo "],
            zoom: ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["__SELF__"] ?? null), "property", array(0 => "zoom"), "method"), "html", null, true);
        echo ",
            type: '";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["__SELF__"] ?? null), "property", array(0 => "mapTypeId"), "method"), "html", null, true);
        echo "'
        });

        myPlacemark = new ymaps.Placemark([";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["__SELF__"] ?? null), "property", array(0 => "latitude"), "method"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["__SELF__"] ?? null), "property", array(0 => "longitude"), "method"), "html", null, true);
        echo "], {
            hintContent: '";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["__SELF__"] ?? null), "property", array(0 => "hintContent"), "method"), "html", null, true);
        echo "',
            balloonContent: '";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["__SELF__"] ?? null), "property", array(0 => "balloonContent"), "method"), "html", null, true);
        echo "'
        });

        myMap.geoObjects.add(myPlacemark);
    }
</script>
<div id=\"map\" style=\"width: ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["__SELF__"] ?? null), "property", array(0 => "width"), "method"), "html", null, true);
        echo "; height: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["__SELF__"] ?? null), "property", array(0 => "height"), "method"), "html", null, true);
        echo "\"></div>
";
    }

    public function getTemplateName()
    {
        return "/home/alexandr/public_html/octobercms.local/plugins/em/ymap/components/map/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 22,  55 => 16,  51 => 15,  45 => 14,  39 => 11,  35 => 10,  29 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script src=\"https://api-maps.yandex.ru/2.1/?lang=ru_RU\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
    ymaps.ready(init);
    var myMap,
        myPlacemark;

    function init() {
        myMap = new ymaps.Map(\"map\", {
            center: [{{ __SELF__.property('latitude') }}, {{ __SELF__.property('longitude') }}],
            zoom: {{ __SELF__.property('zoom') }},
            type: '{{ __SELF__.property('mapTypeId') }}'
        });

        myPlacemark = new ymaps.Placemark([{{ __SELF__.property('latitude') }}, {{ __SELF__.property('longitude') }}], {
            hintContent: '{{ __SELF__.property('hintContent') }}',
            balloonContent: '{{ __SELF__.property('balloonContent') }}'
        });

        myMap.geoObjects.add(myPlacemark);
    }
</script>
<div id=\"map\" style=\"width: {{ __SELF__.property('width') }}; height: {{ __SELF__.property('height') }}\"></div>
", "/home/alexandr/public_html/octobercms.local/plugins/em/ymap/components/map/default.htm", "");
    }
}
