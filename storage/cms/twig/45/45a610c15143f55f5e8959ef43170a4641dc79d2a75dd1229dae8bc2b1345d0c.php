<?php

/* /home/alexandr/public_html/octobercms.local/plugins/em/callback/components/contactform/default.htm */
class __TwigTemplate_0c3f5444576755570f672e88c0a40f22c805d1012c578751877dba3cc820edbe extends Twig_Template
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
        echo "<form id=\"callback_form\" data-request=\"";
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onSend\" data-request-validate data-request-flash>
    <label for=\"name\">Имя</label>
    <input type=\"text\" name=\"name\" placeholder=\"Ваше имя...\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\" id=\"name\">
    <span data-validate-for=\"name\" class=\"error\"></span>
    <label for=\"email\">Email</label>
    <input type=\"email\" name=\"email\" placeholder=\"Ваш E-mail...\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "\" id=\"email\">
    <span data-validate-for=\"email\" class=\"error\"></span>
    <label for=\"phone\">Телефон</label>
    <input type=\"text\" name=\"phone\" placeholder=\"Ваш телефон...\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["phone"] ?? null), "html", null, true);
        echo "\" id=\"phone\">
    <span data-validate-for=\"phone\" class=\"error\"></span>
    <label for=\"message\">Сообщение</label>
    <textarea name=\"message\" placeholder=\"Ваше сообщение...\" id=\"message\">";
        // line 12
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "</textarea>
    <span data-validate-for=\"message\" class=\"error\"></span>
    <button type=\"submit\" data-attach-loading class=\"btn\">Отправить</button>
</form>";
    }

    public function getTemplateName()
    {
        return "/home/alexandr/public_html/octobercms.local/plugins/em/callback/components/contactform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 12,  37 => 9,  31 => 6,  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form id=\"callback_form\" data-request=\"{{__SELF__}}::onSend\" data-request-validate data-request-flash>
    <label for=\"name\">Имя</label>
    <input type=\"text\" name=\"name\" placeholder=\"Ваше имя...\" value=\"{{ name }}\" id=\"name\">
    <span data-validate-for=\"name\" class=\"error\"></span>
    <label for=\"email\">Email</label>
    <input type=\"email\" name=\"email\" placeholder=\"Ваш E-mail...\" value=\"{{ email }}\" id=\"email\">
    <span data-validate-for=\"email\" class=\"error\"></span>
    <label for=\"phone\">Телефон</label>
    <input type=\"text\" name=\"phone\" placeholder=\"Ваш телефон...\" value=\"{{ phone }}\" id=\"phone\">
    <span data-validate-for=\"phone\" class=\"error\"></span>
    <label for=\"message\">Сообщение</label>
    <textarea name=\"message\" placeholder=\"Ваше сообщение...\" id=\"message\">{{ message }}</textarea>
    <span data-validate-for=\"message\" class=\"error\"></span>
    <button type=\"submit\" data-attach-loading class=\"btn\">Отправить</button>
</form>", "/home/alexandr/public_html/octobercms.local/plugins/em/callback/components/contactform/default.htm", "");
    }
}
