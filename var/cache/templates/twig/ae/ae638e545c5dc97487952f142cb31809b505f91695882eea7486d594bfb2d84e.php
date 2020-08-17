<?php

/* __string_template__a378dc4d5623a28017cada49bff8abd427beedd4eecbbf42b287ce7751b74ddc */
class __TwigTemplate_a11765990a20b9c7435c61627d547385034feadd82136f24885a208ccc6dcf1d extends Twig_Template
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
        echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
    <tbody>
    <tr valign=\"top\">
        <td style=\"font-size: 12px; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;\">";
        // line 4
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "status");
        echo ":
        </td>
        <td style=\"font-size: 12px; font-family: Helvetica, Arial, sans-serif;\" width=\"100%\">";
        // line 6
        echo $this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "status", array()), "description", array());
        echo "
        </td>
    </tr>
    <tr valign=\"top\">
        <td style=\"font-size: 12px; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;\">";
        // line 10
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "payment_method");
        echo ":
        </td>
        <td style=\"font-size: 12px; font-family: Helvetica, Arial, sans-serif;\" valign=\"bottom\">";
        // line 12
        echo (($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "payment", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "payment", array()), "-")) : ("-"));
        echo "
        </td>
    </tr>
    ";
        // line 15
        if ($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "shipment", array())) {
            // line 16
            echo "        ";
            if ($this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "shipment", array()), "shipping", array())) {
                // line 17
                echo "        <tr valign=\"top\">
            <td style=\"font-size: 12px; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;\">";
                // line 18
                echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "shipping_method");
                echo ":
            </td>
            <td style=\"font-size: 12px; font-family: Helvetica, Arial, sans-serif;\" valign=\"bottom\">";
                // line 20
                echo $this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "shipment", array()), "shipping", array());
                echo "
            </td>
        </tr>
        ";
            }
            // line 24
            echo "        ";
            if ($this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "shipment", array()), "tracking_number", array())) {
                // line 25
                echo "        <tr valign=\"top\">
            <td style=\"font-size: 12px; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;\">";
                // line 26
                echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "tracking_number");
                echo ":
            </td>
            <td style=\"font-size: 12px; font-family: Helvetica, Arial, sans-serif;\" valign=\"bottom\">";
                // line 28
                echo $this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "shipment", array()), "tracking_number", array());
                echo "
            </td>
        </tr>
        ";
            }
            // line 32
            echo "    ";
        } else {
            // line 33
            echo "        ";
            if ($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "shippings_method", array())) {
                // line 34
                echo "        <tr valign=\"top\">
            <td style=\"font-size: 12px; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;\">";
                // line 35
                echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "shipping_method");
                echo ":
            </td>
            <td style=\"font-size: 12px; font-family: Helvetica, Arial, sans-serif;\" valign=\"bottom\">";
                // line 37
                echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "shippings_method", array());
                echo "
            </td>
        </tr>
        ";
            }
            // line 41
            echo "        ";
            if ($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "tracking_number", array())) {
                // line 42
                echo "        <tr valign=\"top\">
            <td style=\"font-size: 12px; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;\">";
                // line 43
                echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "tracking_number");
                echo ":
            </td>
            <td style=\"font-size: 12px; font-family: Helvetica, Arial, sans-serif;\" valign=\"bottom\">";
                // line 45
                echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "tracking_number", array());
                echo "
            </td>
        </tr>
        ";
            }
            // line 49
            echo "    ";
        }
        // line 50
        echo "
    </tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "__string_template__a378dc4d5623a28017cada49bff8abd427beedd4eecbbf42b287ce7751b74ddc";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 50,  124 => 49,  117 => 45,  112 => 43,  109 => 42,  106 => 41,  99 => 37,  94 => 35,  91 => 34,  88 => 33,  85 => 32,  78 => 28,  73 => 26,  70 => 25,  67 => 24,  60 => 20,  55 => 18,  52 => 17,  49 => 16,  47 => 15,  41 => 12,  36 => 10,  29 => 6,  24 => 4,  19 => 1,);
    }
}
/* <table border="0" cellpadding="0" cellspacing="0">*/
/*     <tbody>*/
/*     <tr valign="top">*/
/*         <td style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;">{{ __("status") }}:*/
/*         </td>*/
/*         <td style="font-size: 12px; font-family: Helvetica, Arial, sans-serif;" width="100%">{{ o.status.description }}*/
/*         </td>*/
/*     </tr>*/
/*     <tr valign="top">*/
/*         <td style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;">{{ __("payment_method") }}:*/
/*         </td>*/
/*         <td style="font-size: 12px; font-family: Helvetica, Arial, sans-serif;" valign="bottom">{{ p.payment|default("-") }}*/
/*         </td>*/
/*     </tr>*/
/*     {% if o.shipment %}*/
/*         {% if o.shipment.shipping %}*/
/*         <tr valign="top">*/
/*             <td style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;">{{ __("shipping_method") }}:*/
/*             </td>*/
/*             <td style="font-size: 12px; font-family: Helvetica, Arial, sans-serif;" valign="bottom">{{ o.shipment.shipping }}*/
/*             </td>*/
/*         </tr>*/
/*         {% endif %}*/
/*         {% if o.shipment.tracking_number %}*/
/*         <tr valign="top">*/
/*             <td style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;">{{ __("tracking_number") }}:*/
/*             </td>*/
/*             <td style="font-size: 12px; font-family: Helvetica, Arial, sans-serif;" valign="bottom">{{ o.shipment.tracking_number }}*/
/*             </td>*/
/*         </tr>*/
/*         {% endif %}*/
/*     {% else %}*/
/*         {% if o.shippings_method %}*/
/*         <tr valign="top">*/
/*             <td style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;">{{ __("shipping_method") }}:*/
/*             </td>*/
/*             <td style="font-size: 12px; font-family: Helvetica, Arial, sans-serif;" valign="bottom">{{ o.shippings_method }}*/
/*             </td>*/
/*         </tr>*/
/*         {% endif %}*/
/*         {% if o.tracking_number %}*/
/*         <tr valign="top">*/
/*             <td style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;">{{ __("tracking_number") }}:*/
/*             </td>*/
/*             <td style="font-size: 12px; font-family: Helvetica, Arial, sans-serif;" valign="bottom">{{ o.tracking_number }}*/
/*             </td>*/
/*         </tr>*/
/*         {% endif %}*/
/*     {% endif %}*/
/* */
/*     </tbody>*/
/* </table>*/
