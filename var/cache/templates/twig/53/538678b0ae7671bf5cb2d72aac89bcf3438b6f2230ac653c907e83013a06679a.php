<?php

/* __string_template__f9449f7b23a5acef3af6f16b75603395b90330eb9c03527850971f289bb29e8e */
class __TwigTemplate_8ea9c529c01445deca8d388441c3f80507e691c5cc2946d2f66e3d4bce09d969 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "change_order_status_c_subj", array("[order]" => $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : null), "order_id", array())));
    }

    public function getTemplateName()
    {
        return "__string_template__f9449f7b23a5acef3af6f16b75603395b90330eb9c03527850971f289bb29e8e";
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
/* {{ company_name }}: {{ __("change_order_status_c_subj", {"[order]": order_info.order_id}) }}*/
