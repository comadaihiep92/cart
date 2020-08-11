<?php

/* __string_template__68e2464f9b453f0f5a3efeb697e0667705de6b89d93cb9729bf1c6fb27140583 */
class __TwigTemplate_a90a7faab2048672468d4b975b920da29ca3c44b839795b143f404366d5a3b96 extends Twig_Template
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
        echo "
        ";
        // line 2
        if ((((((($this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_firstname", array()) || $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_lastname", array())) || $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_address", array())) || $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_address_2", array())) || $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_city", array())) || $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_state_descr", array())) || $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_zipcode", array()))) {
            // line 3
            echo "        <h2 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #e8e8e8; margin-bottom: 20px;\">";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "bill_to");
            echo "</h2>
        <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
            <strong>";
            // line 5
            echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_firstname", array());
            echo " ";
            echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_lastname", array());
            echo "</strong>
        </p>
        <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
            ";
            // line 8
            echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_address", array());
            echo " <br>";
            echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_address_2", array());
            echo "
        </p>
        <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
            ";
            // line 11
            echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_city", array());
            echo ", ";
            echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_state_descr", array());
            echo " ";
            echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_zipcode", array());
            echo "
        </p>
        <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
            ";
            // line 14
            echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_country_descr", array());
            echo "
        </p>
        <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
            <bdi>";
            // line 17
            echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "b_phone", array());
            echo "</bdi>
        </p>
        ";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__68e2464f9b453f0f5a3efeb697e0667705de6b89d93cb9729bf1c6fb27140583";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  56 => 14,  46 => 11,  38 => 8,  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/*         {% if u.b_firstname or u.b_lastname or u.b_address or u.b_address_2 or u.b_city or u.b_state_descr or u.b_zipcode %}*/
/*         <h2 style="margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #e8e8e8; margin-bottom: 20px;">{{__("bill_to")}}</h2>*/
/*         <p style="margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;">*/
/*             <strong>{{u.b_firstname}} {{u.b_lastname}}</strong>*/
/*         </p>*/
/*         <p style="margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;">*/
/*             {{u.b_address}} <br>{{u.b_address_2}}*/
/*         </p>*/
/*         <p style="margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;">*/
/*             {{u.b_city}}, {{u.b_state_descr}} {{u.b_zipcode}}*/
/*         </p>*/
/*         <p style="margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;">*/
/*             {{u.b_country_descr}}*/
/*         </p>*/
/*         <p style="margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;">*/
/*             <bdi>{{u.b_phone}}</bdi>*/
/*         </p>*/
/*         {% endif %}*/
/* */
