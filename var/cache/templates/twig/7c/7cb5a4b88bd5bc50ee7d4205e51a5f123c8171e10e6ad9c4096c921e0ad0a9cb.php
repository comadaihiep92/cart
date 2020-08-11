<?php

/* __string_template__3115f8c86223e9bf06aa3d7a461da77ab491f99c98c124f7650fd55ee17b0bd1 */
class __TwigTemplate_d72ace847c5c83c8ddb0c5be91816b0b1f72de740469f20f3ed6efd36c24da0e extends Twig_Template
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
        echo "<h2 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #e8e8e8; margin-bottom: 20px;\">";
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "ship_to");
        echo "</h2>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        <strong>";
        // line 3
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "firstname", array());
        echo " ";
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "lastname", array());
        echo "</strong>
    </p>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        ";
        // line 6
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "s_address", array());
        echo " <br>";
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "s_address_2", array());
        echo "
    </p>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        ";
        // line 9
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "s_city", array());
        echo ", ";
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "s_state_descr", array());
        echo " ";
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "s_zipcode", array());
        echo "
    </p>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        ";
        // line 12
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "s_country_descr", array());
        echo "
    </p>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        <bdi>";
        // line 15
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "phone", array());
        echo "</bdi>
    </p>
";
    }

    public function getTemplateName()
    {
        return "__string_template__3115f8c86223e9bf06aa3d7a461da77ab491f99c98c124f7650fd55ee17b0bd1";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 15,  51 => 12,  41 => 9,  33 => 6,  25 => 3,  19 => 1,);
    }
}
/* <h2 style="margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #e8e8e8; margin-bottom: 20px;">{{__("ship_to")}}</h2>*/
/*     <p style="margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;">*/
/*         <strong>{{u.firstname}} {{u.lastname}}</strong>*/
/*     </p>*/
/*     <p style="margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;">*/
/*         {{u.s_address}} <br>{{u.s_address_2}}*/
/*     </p>*/
/*     <p style="margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;">*/
/*         {{u.s_city}}, {{u.s_state_descr}} {{u.s_zipcode}}*/
/*     </p>*/
/*     <p style="margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;">*/
/*         {{u.s_country_descr}}*/
/*     </p>*/
/*     <p style="margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;">*/
/*         <bdi>{{u.phone}}</bdi>*/
/*     </p>*/
/* */
