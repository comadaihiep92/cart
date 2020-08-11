<?php

/* __string_template__d34a4e05bfd87afe893f37c272ce50613689d8186c6537e76afc9ff3be6c2019 */
class __TwigTemplate_ff1e3384482a84f7d006bcbe612bf0bd90956a27f66ee277c0fa903c91d60841 extends Twig_Template
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
        echo "<table width=\"600\" style=\" font-family: Helvetica, Arial, sans-serif; border-collapse: separate;\" rel=\"min-width: 800px; font-family: Helvetica, Arial, sans-serif; border-collapse: separate;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
<tbody>
<tr style=\"vertical-align: top;\">
    <td>
        <table width=\"100%;\" cellspacing=\"0\" border=\"0\" style=\"border-collapse: separate; font-family: Helvetica, Arial, sans-serif;\">
        <tbody>
        <tr>
            <td width=\"50%\" style=\"padding: 0px; padding-bottom: 10px; padding-right: 40px; vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                ";
        // line 9
        if ($this->getAttribute((isset($context["pickup_point"]) ? $context["pickup_point"] : null), "is_selected", array())) {
            // line 10
            echo "                ";
            echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "pickup_point");
            echo "
                ";
        } else {
            // line 12
            echo "                ";
            echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "ship_to");
            echo "
                ";
        }
        // line 14
        echo "            </td>
            <td width=\"50%\" style=\"padding: 0px; padding-bottom: 10px; padding-left: 40px; -webkit-print-color-adjust: exact; vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #444444; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        // line 17
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "order_date");
        echo "</span>  ";
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "timestamp", array());
        echo "
                </p>
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #444444; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        // line 20
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "payment");
        echo "</span>  ";
        echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "payment", array());
        echo "
                </p>
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #444444; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        // line 23
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "shipping");
        echo "</span>  ";
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "shippings_method", array());
        echo "
                </p>
                ";
        // line 25
        if ($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "tracking_number", array())) {
            // line 26
            echo "                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #444444; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
            // line 27
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "tracking_number");
            echo "</span>  ";
            echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "tracking_number", array());
            echo "
                </p>
                ";
        }
        // line 30
        echo "            </td>
        </tr>
        </tbody>
        </table>
    </td>
</tr>
<tr>
    <td style=\"padding: 0px;\">
        ";
        // line 38
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "products_table");
        echo "
    </td>
</tr>
<tr>
    <td style=\"padding: 0px; border-top: 2px solid #f5f5f5; padding-top: 10px; font-family: Helvetica, Arial, sans-serif;\">
        <table width=\"100%\" style=\"border-collapse: separate; font-family: Helvetica, Arial, sans-serif;\">
        <tbody>
        <tr>
            <td width=\"66%\" style=\"font-size: 14px; font-family: Helvetica, Arial, sans-serif; line-height: 21px; color: #444444; padding-right: 30px; vertical-align:top;\">
                ";
        // line 47
        if ($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "notes", array())) {
            // line 48
            echo "                <h2 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #e8e8e8; margin-bottom: 10px;\">";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "customer_notes");
            echo "</h2>
                ";
            // line 49
            echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "notes", array());
            echo "
                                ";
        }
        // line 51
        echo "            </td>
            <td width=\"34%\" style=\"vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                <table width=\"100%;\" style=\"font-size: 14px; font-family: Helvetica, Arial, sans-serif; color: #444;\">
                <tbody>
                    <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                        <td align=\"left\" style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 56
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "subtotal");
        echo "
                        </td>
                        <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 58
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "display_subtotal", array());
        echo "
                        </td>
                    </tr>
                    <tr style=\" vertical-align: top;\">
                        <td align=\"left\" style=\"padding-bottom: 20px; text-transform: uppercase; font-family: Helvetica, Arial, sans-serif;\">";
        // line 62
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "tax_name", array());
        echo "
                        </td>
                        <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 64
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "tax_total", array());
        echo "
                        </td>
                    </tr>
                    <tr style=\" vertical-align: top;\">
                        <td align=\"left\" style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 68
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "shipping");
        echo "
                        </td>
                        <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 70
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "display_shipping_cost", array());
        echo "
                        </td>
                    </tr>
                    <tr style=\" vertical-align: top;\">
                        <td style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\" align=\"left\">";
        // line 74
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "payment_surcharge");
        echo "
                        </td>
                        <td style=\"font-family: Helvetica, Arial, sans-serif;\" align=\"right\">";
        // line 76
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "payment_surcharge", array());
        echo "
                        </td>
                    </tr>
                    <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                        <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 80
        if ($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "coupon_code", array())) {
            echo " <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "coupon");
            echo " </div> ";
        }
        // line 81
        echo "                        </td>
                        <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 82
        if ($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "coupon_code", array())) {
            echo " ";
            echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "coupon_code", array());
            echo " ";
        }
        // line 83
        echo "                        </td>
                    </tr>
                    <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                        <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 86
        if ($this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "raw", array()), "discount", array())) {
            echo " <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "including_discount");
            echo " </div> ";
        }
        // line 87
        echo "                        </td>
                        <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 88
        if ($this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "raw", array()), "discount", array())) {
            echo " ";
            echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "discount", array());
            echo " ";
        }
        // line 89
        echo "                        </td>
                    </tr>
                    <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                        <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 92
        if ($this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "raw", array()), "subtotal_discount", array())) {
            echo " <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "order_discount");
            echo " </div> ";
        }
        // line 93
        echo "                        </td>
                        <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 94
        if ($this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "raw", array()), "subtotal_discount", array())) {
            echo " ";
            echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "subtotal_discount", array());
            echo " ";
        }
        // line 95
        echo "                        </td>
                    </tr>
                    <tr style=\" vertical-align: top; font-size: 22px; font-weight: 600; font-family: Helvetica, Arial, sans-serif;\">
                        <td align=\"left\" style=\"padding-top: 20px; border-top: 1px solid #e8e8e8; font-size: 22px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 98
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "total");
        echo "
                        </td>
                        <td align=\"right\" style=\"padding-top: 20px; border-top: 1px solid #e8e8e8; font-size: 22px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 100
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "total", array());
        echo "
                        </td>
                    </tr>
                </tbody>
                </table>
            </td>
        </tr>
        </tbody>
        </table>
    </td>
</tr>
</tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "__string_template__d34a4e05bfd87afe893f37c272ce50613689d8186c6537e76afc9ff3be6c2019";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 100,  233 => 98,  228 => 95,  222 => 94,  219 => 93,  213 => 92,  208 => 89,  202 => 88,  199 => 87,  193 => 86,  188 => 83,  182 => 82,  179 => 81,  173 => 80,  166 => 76,  161 => 74,  154 => 70,  149 => 68,  142 => 64,  137 => 62,  130 => 58,  125 => 56,  118 => 51,  113 => 49,  108 => 48,  106 => 47,  94 => 38,  84 => 30,  76 => 27,  73 => 26,  71 => 25,  64 => 23,  56 => 20,  48 => 17,  43 => 14,  37 => 12,  31 => 10,  29 => 9,  19 => 1,);
    }
}
/* <table width="600" style=" font-family: Helvetica, Arial, sans-serif; border-collapse: separate;" rel="min-width: 800px; font-family: Helvetica, Arial, sans-serif; border-collapse: separate;" cellspacing="0" cellpadding="0" border="0">*/
/* <tbody>*/
/* <tr style="vertical-align: top;">*/
/*     <td>*/
/*         <table width="100%;" cellspacing="0" border="0" style="border-collapse: separate; font-family: Helvetica, Arial, sans-serif;">*/
/*         <tbody>*/
/*         <tr>*/
/*             <td width="50%" style="padding: 0px; padding-bottom: 10px; padding-right: 40px; vertical-align: top; font-family: Helvetica, Arial, sans-serif;">*/
/*                 {% if pickup_point.is_selected %}*/
/*                 {{ snippet("pickup_point") }}*/
/*                 {% else %}*/
/*                 {{ snippet("ship_to") }}*/
/*                 {% endif %}*/
/*             </td>*/
/*             <td width="50%" style="padding: 0px; padding-bottom: 10px; padding-left: 40px; -webkit-print-color-adjust: exact; vertical-align: top; font-family: Helvetica, Arial, sans-serif;">*/
/*                 <p style="color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;">*/
/*                     <span style="color: #444444; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;">{{__("order_date")}}</span>  {{o.timestamp}}*/
/*                 </p>*/
/*                 <p style="color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;">*/
/*                     <span style="color: #444444; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;">{{__("payment")}}</span>  {{p.payment}}*/
/*                 </p>*/
/*                 <p style="color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;">*/
/*                     <span style="color: #444444; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;">{{__("shipping")}}</span>  {{o.shippings_method}}*/
/*                 </p>*/
/*                 {% if o.tracking_number %}*/
/*                 <p style="color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;">*/
/*                     <span style="color: #444444; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;">{{__("tracking_number")}}</span>  {{o.tracking_number}}*/
/*                 </p>*/
/*                 {% endif %}*/
/*             </td>*/
/*         </tr>*/
/*         </tbody>*/
/*         </table>*/
/*     </td>*/
/* </tr>*/
/* <tr>*/
/*     <td style="padding: 0px;">*/
/*         {{ snippet("products_table") }}*/
/*     </td>*/
/* </tr>*/
/* <tr>*/
/*     <td style="padding: 0px; border-top: 2px solid #f5f5f5; padding-top: 10px; font-family: Helvetica, Arial, sans-serif;">*/
/*         <table width="100%" style="border-collapse: separate; font-family: Helvetica, Arial, sans-serif;">*/
/*         <tbody>*/
/*         <tr>*/
/*             <td width="66%" style="font-size: 14px; font-family: Helvetica, Arial, sans-serif; line-height: 21px; color: #444444; padding-right: 30px; vertical-align:top;">*/
/*                 {% if o.notes %}*/
/*                 <h2 style="margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #e8e8e8; margin-bottom: 10px;">{{ __("customer_notes") }}</h2>*/
/*                 {{ o.notes }}*/
/*                                 {% endif %}*/
/*             </td>*/
/*             <td width="34%" style="vertical-align: top; font-family: Helvetica, Arial, sans-serif;">*/
/*                 <table width="100%;" style="font-size: 14px; font-family: Helvetica, Arial, sans-serif; color: #444;">*/
/*                 <tbody>*/
/*                     <tr style=" vertical-align: top; font-family: Helvetica, Arial, sans-serif;">*/
/*                         <td align="left" style="padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;">{{ __("subtotal") }}*/
/*                         </td>*/
/*                         <td align="right" style="font-family: Helvetica, Arial, sans-serif;">{{o.display_subtotal}}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr style=" vertical-align: top;">*/
/*                         <td align="left" style="padding-bottom: 20px; text-transform: uppercase; font-family: Helvetica, Arial, sans-serif;">{{o.tax_name}}*/
/*                         </td>*/
/*                         <td align="right" style="font-family: Helvetica, Arial, sans-serif;">{{o.tax_total}}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr style=" vertical-align: top;">*/
/*                         <td align="left" style="padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;">{{ __("shipping") }}*/
/*                         </td>*/
/*                         <td align="right" style="font-family: Helvetica, Arial, sans-serif;">{{ o.display_shipping_cost }}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr style=" vertical-align: top;">*/
/*                         <td style="padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;" align="left">{{ __("payment_surcharge") }}*/
/*                         </td>*/
/*                         <td style="font-family: Helvetica, Arial, sans-serif;" align="right">{{ o.payment_surcharge }}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr style=" vertical-align: top; font-family: Helvetica, Arial, sans-serif;">*/
/*                         <td align="left" style="font-family: Helvetica, Arial, sans-serif;">{% if o.coupon_code %} <div style="padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;"> {{ __("coupon") }} </div> {% endif %}*/
/*                         </td>*/
/*                         <td align="right" style="font-family: Helvetica, Arial, sans-serif;">{% if o.coupon_code %} {{o.coupon_code}} {% endif %}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr style=" vertical-align: top; font-family: Helvetica, Arial, sans-serif;">*/
/*                         <td align="left" style="font-family: Helvetica, Arial, sans-serif;">{% if o.raw.discount %} <div style="padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;"> {{ __("including_discount") }} </div> {% endif %}*/
/*                         </td>*/
/*                         <td align="right" style="font-family: Helvetica, Arial, sans-serif;">{% if o.raw.discount %} {{o.discount}} {% endif %}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr style=" vertical-align: top; font-family: Helvetica, Arial, sans-serif;">*/
/*                         <td align="left" style="font-family: Helvetica, Arial, sans-serif;">{% if o.raw.subtotal_discount %} <div style="padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;"> {{ __("order_discount") }} </div> {% endif %}*/
/*                         </td>*/
/*                         <td align="right" style="font-family: Helvetica, Arial, sans-serif;">{% if o.raw.subtotal_discount %} {{o.subtotal_discount}} {% endif %}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr style=" vertical-align: top; font-size: 22px; font-weight: 600; font-family: Helvetica, Arial, sans-serif;">*/
/*                         <td align="left" style="padding-top: 20px; border-top: 1px solid #e8e8e8; font-size: 22px; font-family: Helvetica, Arial, sans-serif;">{{ __("total") }}*/
/*                         </td>*/
/*                         <td align="right" style="padding-top: 20px; border-top: 1px solid #e8e8e8; font-size: 22px; font-family: Helvetica, Arial, sans-serif;">{{o.total}}*/
/*                         </td>*/
/*                     </tr>*/
/*                 </tbody>*/
/*                 </table>*/
/*             </td>*/
/*         </tr>*/
/*         </tbody>*/
/*         </table>*/
/*     </td>*/
/* </tr>*/
/* </tbody>*/
/* </table>*/
