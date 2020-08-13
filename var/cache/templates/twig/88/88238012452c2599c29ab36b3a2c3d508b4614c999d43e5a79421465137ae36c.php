<?php

/* __string_template__82e33b6d606b90a651ec3af2a0ffb0af3f80aae0b6edbbb2f30c57c335fab1c2 */
class __TwigTemplate_91b0bd0a440e4b58bcaaafaa209962d189e155a2fe0755bf4d6c886f22db302d extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "change_order_status_i_subj", array("[order]" => $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : null), "order_id", array())));
    }

    public function getTemplateName()
    {
        return "__string_template__82e33b6d606b90a651ec3af2a0ffb0af3f80aae0b6edbbb2f30c57c335fab1c2";
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
/* {{ company_name }}: {{ __("change_order_status_i_subj", {"[order]": order_info.order_id}) }}*/
