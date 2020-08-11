<?php

/* __string_template__fc0850763a29539f6d883cf02a87aaedfd18d540154485fc58193299f6d5b4f0 */
class __TwigTemplate_d17ca98cf100365f8804c8aa84346e2a7a4f3473c1d80f48a11ae291e8f7cb4a extends Twig_Template
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
        echo "<h2 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; margin-bottom: 15px; line-height: 1.5em; \">";
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "ship_to");
        echo "</h2>
    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        <strong>";
        // line 3
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "firstname", array());
        echo " ";
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "lastname", array());
        echo "</strong>
    </p>
    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        ";
        // line 6
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "s_address", array());
        echo " <br>";
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "s_address_2", array());
        echo "
    </p>
    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        ";
        // line 9
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "s_city", array());
        echo ", ";
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "s_state_descr", array());
        echo " ";
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "s_zipcode", array());
        echo "
    </p>
    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        ";
        // line 12
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "s_country_descr", array());
        echo "
    </p>
    <p style=\"margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;\">
        <bdi>";
        // line 15
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "phone", array());
        echo "</bdi>
    </p>
";
    }

    public function getTemplateName()
    {
        return "__string_template__fc0850763a29539f6d883cf02a87aaedfd18d540154485fc58193299f6d5b4f0";
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
/* <h2 style="margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; margin-bottom: 15px; line-height: 1.5em; ">{{__("ship_to")}}</h2>*/
/*     <p style="margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;">*/
/*         <strong>{{u.firstname}} {{u.lastname}}</strong>*/
/*     </p>*/
/*     <p style="margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;">*/
/*         {{u.s_address}} <br>{{u.s_address_2}}*/
/*     </p>*/
/*     <p style="margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;">*/
/*         {{u.s_city}}, {{u.s_state_descr}} {{u.s_zipcode}}*/
/*     </p>*/
/*     <p style="margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;">*/
/*         {{u.s_country_descr}}*/
/*     </p>*/
/*     <p style="margin: 0px; font-size:14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px;">*/
/*         <bdi>{{u.phone}}</bdi>*/
/*     </p>*/
/* */
