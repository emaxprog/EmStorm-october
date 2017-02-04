<?php

/* /home/alexandr/public_html/octobercms.local/themes/emstorm/layouts/default.htm */
class __TwigTemplate_82040eb8699dc9392e3843f286c5dee9679691fea489f3bb52223b6bcf833dc8 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"ru\">

<head>

    <meta charset=\"utf-8\">

    <title>Title</title>
    <meta name=\"description\" content=\"\">

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

    <meta property=\"og:image\" content=\"path/to/image.jpg\">
    <link rel=\"shortcut icon\" href=\"img/favicon/favicon.ico\" type=\"image/x-icon\">
    <link rel=\"apple-touch-icon\" href=\"img/favicon/apple-touch-icon.png\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"img/favicon/apple-touch-icon-72x72.png\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"img/favicon/apple-touch-icon-114x114.png\">

    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/main.min.css");
        echo "\">
    <!-- Chrome, Firefox OS and Opera -->
    <meta name=\"theme-color\" content=\"#000\">
    <!-- Windows Phone -->
    <meta name=\"msapplication-navbutton-color\" content=\"#000\">
    <!-- iOS Safari -->
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"#000\">

</head>

<body>
";
        // line 31
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 32
        echo "<footer class=\"footer\" id=\"contacts\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\"><h1 class=\"title\">Контакты</h1></div>
            <div class=\"col-md-8\">
                <div class=\"contacts\">
                    <span class=\"phone\"><i class=\"fa fa-mobile-phone fa-2x\"></i> ";
        // line 38
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("phone.txt"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</span>
                    <span class=\"address\"><i class=\"fa fa-map-marker fa-2x\"></i> ";
        // line 39
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("address.txt"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</span>
                </div>
                <div class=\"map\">
                    ";
        // line 42
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("map"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 43
        echo "                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"form\">
                    <h2>Оставить заявку</h2>
                    ";
        // line 48
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("contactForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 49
        echo "                </div>
            </div>
        </div>
    </div>
    <div class=\"copy\">
        &copy; ";
        // line 54
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("copyright.txt"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 55
        echo "    </div>
</footer>
<script type=\"text/javascript\" src=\"";
        // line 57
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/scripts.min.js");
        echo "\"></script>
";
        // line 58
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 59
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/alexandr/public_html/octobercms.local/themes/emstorm/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 59,  112 => 58,  108 => 57,  104 => 55,  100 => 54,  93 => 49,  89 => 48,  82 => 43,  78 => 42,  70 => 39,  64 => 38,  56 => 32,  54 => 31,  40 => 20,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"ru\">

<head>

    <meta charset=\"utf-8\">

    <title>Title</title>
    <meta name=\"description\" content=\"\">

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

    <meta property=\"og:image\" content=\"path/to/image.jpg\">
    <link rel=\"shortcut icon\" href=\"img/favicon/favicon.ico\" type=\"image/x-icon\">
    <link rel=\"apple-touch-icon\" href=\"img/favicon/apple-touch-icon.png\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"img/favicon/apple-touch-icon-72x72.png\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"img/favicon/apple-touch-icon-114x114.png\">

    <link rel=\"stylesheet\" href=\"{{ 'assets/css/main.min.css'|theme }}\">
    <!-- Chrome, Firefox OS and Opera -->
    <meta name=\"theme-color\" content=\"#000\">
    <!-- Windows Phone -->
    <meta name=\"msapplication-navbutton-color\" content=\"#000\">
    <!-- iOS Safari -->
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"#000\">

</head>

<body>
{% page %}
<footer class=\"footer\" id=\"contacts\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\"><h1 class=\"title\">Контакты</h1></div>
            <div class=\"col-md-8\">
                <div class=\"contacts\">
                    <span class=\"phone\"><i class=\"fa fa-mobile-phone fa-2x\"></i> {% content \"phone.txt\" %}</span>
                    <span class=\"address\"><i class=\"fa fa-map-marker fa-2x\"></i> {% content \"address.txt\" %}</span>
                </div>
                <div class=\"map\">
                    {% component 'map' %}
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"form\">
                    <h2>Оставить заявку</h2>
                    {% component 'contactForm' %}
                </div>
            </div>
        </div>
    </div>
    <div class=\"copy\">
        &copy; {% content \"copyright.txt\" %}
    </div>
</footer>
<script type=\"text/javascript\" src=\"{{ 'assets/js/scripts.min.js'|theme }}\"></script>
{% framework extras %}
</body>
</html>", "/home/alexandr/public_html/octobercms.local/themes/emstorm/layouts/default.htm", "");
    }
}
