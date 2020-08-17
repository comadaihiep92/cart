<?php

/* __string_template__5968a757983e852defe0b0b886bad97afa6e28c3ae1211ca1989f3fd715da6a6 */
class __TwigTemplate_ba1e0f523e426cc1ba4e42f7010394675547b6c79eee127f278e1927bd531ac1 extends Twig_Template
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
        echo "<h2 style=\"font-size: 17px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; margin: 0px;\">";
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "packing_slip_for_order");
        echo " #";
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "order_id", array());
        echo "</h2>
";
        // line 2
        if ($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "shipment", array())) {
            // line 3
            echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
    <tbody>
        <tr valign=\"top\">
            <td style=\"font-size: 12px; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;\">";
            // line 6
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "order_date");
            echo ":
            </td>
            <td style=\"font-size: 12px; font-family: Helvetica, Arial, sans-serif;\">";
            // line 8
            echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "timestamp", array());
            echo "
            </td>
        </tr>
        <tr valign=\"top\">
            <td style=\"font-size: 12px; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;\">";
            // line 12
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "shipment_date");
            echo ":
            </td>
            <td style=\"font-size: 12px; font-family: Helvetica, Arial, sans-serif;\">";
            // line 14
            echo $this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "shipment", array()), "shipment_timestamp", array());
            echo "
            </td>
        </tr>
    </tbody>
</table>
";
        } else {
            // line 20
            echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
    <tbody>
        <tr valign=\"top\">
            <td style=\"font-size: 12px; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;\">";
            // line 23
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "date");
            echo ":
            </td>
            <td style=\"font-size: 12px; font-family: Helvetica, Arial, sans-serif;\">";
            // line 25
            echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "timestamp", array());
            echo "
            </td>
        </tr>
    </tbody>
</table>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__5968a757983e852defe0b0b886bad97afa6e28c3ae1211ca1989f3fd715da6a6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 25,  64 => 23,  59 => 20,  50 => 14,  45 => 12,  38 => 8,  33 => 6,  28 => 3,  26 => 2,  19 => 1,);
    }
}
/* <h2 style="font-size: 17px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; margin: 0px;">{{ __("packing_slip_for_order") }} #{{ o.order_id }}</h2>*/
/* {% if o.shipment %}*/
/* <table border="0" cellpadding="0" cellspacing="0">*/
/*     <tbody>*/
/*         <tr valign="top">*/
/*             <td style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;">{{ __("order_date") }}:*/
/*             </td>*/
/*             <td style="font-size: 12px; font-family: Helvetica, Arial, sans-serif;">{{ o.timestamp }}*/
/*             </td>*/
/*         </tr>*/
/*         <tr valign="top">*/
/*             <td style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;">{{ __("shipment_date") }}:*/
/*             </td>*/
/*             <td style="font-size: 12px; font-family: Helvetica, Arial, sans-serif;">{{ o.shipment.shipment_timestamp }}*/
/*             </td>*/
/*         </tr>*/
/*     </tbody>*/
/* </table>*/
/* {% else %}*/
/* <table border="0" cellpadding="0" cellspacing="0">*/
/*     <tbody>*/
/*         <tr valign="top">*/
/*             <td style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;">{{ __("date") }}:*/
/*             </td>*/
/*             <td style="font-size: 12px; font-family: Helvetica, Arial, sans-serif;">{{ o.timestamp }}*/
/*             </td>*/
/*         </tr>*/
/*     </tbody>*/
/* </table>*/
/* {% endif %}*/
