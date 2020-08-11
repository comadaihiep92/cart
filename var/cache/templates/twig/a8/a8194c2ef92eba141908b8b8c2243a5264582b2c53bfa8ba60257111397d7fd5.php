<?php

/* __string_template__dae30a320d83f3951220a1411e045a3e536655ec4bab0bd0fd9bdc82bb77c439 */
class __TwigTemplate_b5ba2b0254eec55bd33ce22215d444dcc01c7f89a9274f3c83654753830d2b78 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "change_order_status_p_subj", array("[order]" => $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : null), "order_id", array())));
    }

    public function getTemplateName()
    {
        return "__string_template__dae30a320d83f3951220a1411e045a3e536655ec4bab0bd0fd9bdc82bb77c439";
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
/* {{ company_name }}: {{ __("change_order_status_p_subj", {"[order]": order_info.order_id}) }}*/
