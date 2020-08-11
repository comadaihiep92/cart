<?php

/* __string_template__6a89f4915df50a4757e6cf63d1f32696b8da47a85e603eddfdf493b83719b7a1 */
class __TwigTemplate_8148287a614ee7d47c1fc51818e845294171413001686c232f69e29cd703add7 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "header", array("title" => $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "change_order_status_p_subj", array("[order]" => $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : null), "order_id", array())))));
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
        return "__string_template__6a89f4915df50a4757e6cf63d1f32696b8da47a85e603eddfdf493b83719b7a1";
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
/* {{ snippet("header", {"title": __("change_order_status_p_subj", {"[order]": order_info.order_id}) } ) }}*/
/*     {% if order_info.firstname %}{{__("hello_name", {"[name]" : order_info.firstname})}} {% else %} {{ __("hello") }},  {{ __("customer") }} {% endif %}*/
/*     <br />*/
/*     {{ __("change_order_status_default_text", {"[status]": order_status.description}) }}*/
/*     <br />*/
/*     <br /> {{ include_doc("order.summary", order_info.order_id) }}*/
/*   {{ snippet("footer") }}*/
