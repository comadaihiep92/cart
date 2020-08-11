<?php

/* __string_template__17eb7f4a0b9783eb14099941aba669babfa0bc3f6932a1bbc2906e6c63f03c6b */
class __TwigTemplate_4c71f7f54716c82d75b4174011f0d654c33f2c27e72edb2cb128c7f41b177ec1 extends Twig_Template
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
        echo (isset($context["company_name"]) ? $context["company_name"] : null);
        echo ": ";
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "gift_certificate");
        echo " ";
        echo $this->getAttribute((isset($context["certificate_info"]) ? $context["certificate_info"] : null), "gift_cert_code", array());
        echo " ";
        echo $this->getAttribute((isset($context["certificate_status"]) ? $context["certificate_status"] : null), "email_subj", array());
    }

    public function getTemplateName()
    {
        return "__string_template__17eb7f4a0b9783eb14099941aba669babfa0bc3f6932a1bbc2906e6c63f03c6b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {{ company_name }}: {{ __("gift_certificate") }} {{ certificate_info.gift_cert_code }} {{ certificate_status.email_subj }}*/
