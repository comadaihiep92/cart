<?php

/* __string_template__a4df0555aa354973ef4f69267af11394f96c7ba08054d4a7420707d87aded835 */
class __TwigTemplate_58d3aefaa814153c877b337588bd63c0fcd069df7246dafa381542375402e34c extends Twig_Template
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
        echo "<h3 style=\"padding: 0px 0px 10px 1px; font-weight: 600; font-size: 15px; font-family: Helvetica, Arial, sans-serif; border-bottom: 1px solid #ededed;\">";
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "ship_to");
        echo ":</h3>
    <p style=\"font-family: Helvetica, Arial, sans-serif;\">
        ";
        // line 3
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "firstname", array());
        echo " ";
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "lastname", array());
        echo "
    </p>
    <p style=\"font-family: Helvetica, Arial, sans-serif;\">
        ";
        // line 6
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "s_address", array());
        echo " <br>";
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "s_address_2", array());
        echo "
    </p>
    <p style=\"font-family: Helvetica, Arial, sans-serif;\">
        ";
        // line 9
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "s_city", array());
        echo ", ";
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "s_state_descr", array());
        echo " ";
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "s_zipcode", array());
        echo "
    </p>
    <p style=\"font-family: Helvetica, Arial, sans-serif;\">
        ";
        // line 12
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "s_country_descr", array());
        echo "
    </p>
    <p style=\"font-family: Helvetica, Arial, sans-serif;\">
        <bdi>";
        // line 15
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "phone", array());
        echo "</bdi>
    </p>
";
    }

    public function getTemplateName()
    {
        return "__string_template__a4df0555aa354973ef4f69267af11394f96c7ba08054d4a7420707d87aded835";
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
/* <h3 style="padding: 0px 0px 10px 1px; font-weight: 600; font-size: 15px; font-family: Helvetica, Arial, sans-serif; border-bottom: 1px solid #ededed;">{{__("ship_to")}}:</h3>*/
/*     <p style="font-family: Helvetica, Arial, sans-serif;">*/
/*         {{u.firstname}} {{u.lastname}}*/
/*     </p>*/
/*     <p style="font-family: Helvetica, Arial, sans-serif;">*/
/*         {{u.s_address}} <br>{{u.s_address_2}}*/
/*     </p>*/
/*     <p style="font-family: Helvetica, Arial, sans-serif;">*/
/*         {{u.s_city}}, {{u.s_state_descr}} {{u.s_zipcode}}*/
/*     </p>*/
/*     <p style="font-family: Helvetica, Arial, sans-serif;">*/
/*         {{u.s_country_descr}}*/
/*     </p>*/
/*     <p style="font-family: Helvetica, Arial, sans-serif;">*/
/*         <bdi>{{u.phone}}</bdi>*/
/*     </p>*/
/* */
