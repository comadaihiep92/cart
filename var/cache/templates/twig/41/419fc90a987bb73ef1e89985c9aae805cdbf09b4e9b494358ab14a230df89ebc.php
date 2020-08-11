<?php

/* __string_template__ab7dd999e4eebd92101407247573fbba9724df3a56f0ffea42db0b4d68e8b9d6 */
class __TwigTemplate_f3d8b1d1ec53186268703f72419adbf2e9555300d5b3cf82f8f7e8084329f856 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "new_profile_notification");
    }

    public function getTemplateName()
    {
        return "__string_template__ab7dd999e4eebd92101407247573fbba9724df3a56f0ffea42db0b4d68e8b9d6";
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
/* {{ company_name }}: {{ __("new_profile_notification") }}*/
