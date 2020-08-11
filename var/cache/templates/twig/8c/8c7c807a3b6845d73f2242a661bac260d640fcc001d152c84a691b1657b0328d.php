<?php

/* __string_template__66d84ca919c5a8fb3fe1af4be7a00b0cb758c8703f46b9d8624fc211ed68bd2f */
class __TwigTemplate_efc596bd7f232aa44f3d5fe6a48d689965a407a886b3e740fe77be382d794eb3 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "header", array("title" => $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "change_order_status_default_subj", array("[order]" => $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : null), "order_id", array()), "[status]" => $this->getAttribute((isset($context["order_status"]) ? $context["order_status"] : null), "description", array())))));
        echo "
    ";
        // line 2
        if ($this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : null), "firstname", array())) {
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "hello_name", array("[name]" => $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : null), "firstname", array())));
            echo " ";
        } else {
            echo " ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "hello");
            echo ",  ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "customer");
            echo " ";
        }
        // line 3
        echo "    <br />
    ";
        // line 4
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "change_order_status_default_text", array("[status]" => $this->getAttribute((isset($context["order_status"]) ? $context["order_status"] : null), "description", array())));
        echo "
    <br />
    <br /> ";
        // line 6
        echo $this->env->getExtension('tygh.core')->includeDocFunction($this->env, $context, "order.summary", $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : null), "order_id", array()));
        echo "
  ";
        // line 7
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__66d84ca919c5a8fb3fe1af4be7a00b0cb758c8703f46b9d8624fc211ed68bd2f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  42 => 6,  37 => 4,  34 => 3,  23 => 2,  19 => 1,);
    }
}
/* {{ snippet("header", {"title": __("change_order_status_default_subj", {"[order]": order_info.order_id, "[status]": order_status.description}) } ) }}*/
/*     {% if order_info.firstname %}{{__("hello_name", {"[name]" : order_info.firstname})}} {% else %} {{ __("hello") }},  {{ __("customer") }} {% endif %}*/
/*     <br />*/
/*     {{ __("change_order_status_default_text", {"[status]": order_status.description}) }}*/
/*     <br />*/
/*     <br /> {{ include_doc("order.summary", order_info.order_id) }}*/
/*   {{ snippet("footer") }}*/
