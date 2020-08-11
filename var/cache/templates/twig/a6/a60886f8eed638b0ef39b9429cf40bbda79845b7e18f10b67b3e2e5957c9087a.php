<?php

/* __string_template__6e367a820fce1aab6035279a43d80f21750b1bb846eea63fce29c4138fffbd10 */
class __TwigTemplate_8243d1fbfee4932ae857797ba98fe2291c5336b5156b5a789981fa9a6b20ccb4 extends Twig_Template
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
        echo "<table width=\"100%;\" style=\"min-width: 800px; font-family: Helvetica, Arial, sans-serif; border-collapse: separate;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
<tbody>
<tr style=\"vertical-align: top;\">
    <td>
        <table width=\"100%;\" cellspacing=\"0\" border=\"0\" style=\"border-collapse: separate; font-family: Helvetica, Arial, sans-serif;\">
        <tbody>
        <tr>
            <td width=\"66%\" style=\"padding-bottom: 40px; vertical-align: top; font-family: Helvetica, Arial, sans-serif;\"><img src=\"";
        // line 8
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "logos", array()), "mail", array()), "image", array()), "image_path", array());
        echo "\" width=\"";
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "logos", array()), "mail", array()), "image", array()), "image_x", array());
        echo "\" height=\"";
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "logos", array()), "mail", array()), "image", array()), "image_y", array());
        echo "\" alt=\"";
        echo $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "name", array());
        echo "\">
            </td>
            <td width=\"34%\" style=\"padding-bottom: 40px; -webkit-print-color-adjust: exact; font-family: Helvetica, Arial, sans-serif;\">
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 3px; margin: 0px;\">
                    <span style=\"color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; line-height: 20px;\">";
        // line 12
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "invoice_id_text", array());
        echo "</span>
                </p>

                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        // line 16
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "order_date");
        echo "</span>  ";
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "timestamp", array());
        echo "
                </p>
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        // line 19
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "payment");
        echo "</span>  ";
        echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "payment", array());
        echo "
                </p>
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        // line 22
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "shipping");
        echo "</span>  ";
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "shippings_method", array());
        echo "
                </p>
                ";
        // line 24
        if ($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "tracking_number", array())) {
            // line 25
            echo "                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
            // line 26
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "tracking_number");
            echo "</span>  ";
            echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "tracking_number", array());
            echo "
                </p>
                ";
        }
        // line 29
        echo "            </td>
        </tr>
        </tbody>
        </table>
    </td>
</tr>
<tr>
    <td colspan=\"2\">
        <table width=\"100%;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\" border-collapse: separate; font-family: Helvetica, Arial, sans-serif;\">
        <tbody>
        <tr>
            <td style=\"vertical-align: top; background-color: #f7f7f7; color: #444444; padding: 20px 10px; color: #444444; font-size: 14px; font-family: Helvetica, Arial, sans-serif; -webkit-print-color-adjust: exact;\" width=\"30%\">
                <h1 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #444444; margin-bottom: 20px;\">";
        // line 41
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "store");
        echo "</h1>
                <p style=\"margin: 0px; padding-bottom: 10px;\"><strong>";
        // line 42
        echo $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "name", array());
        echo "</strong>
                </p>
                ";
        // line 44
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "company_address");
        echo "
            </td>
            <td style=\"vertical-align: top; padding: 20px 30px; color: #444444; font-size: 14px; font-family: Helvetica, Arial, sans-serif;\" width=\"36%\">
                ";
        // line 47
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "bill_to");
        echo "
            </td>
            <td style=\"vertical-align: top; padding: 20px 0px; color: #444444; font-size: 14px; font-family: Helvetica, Arial, sans-serif;\" width=\"34%\">
                ";
        // line 50
        if ($this->getAttribute((isset($context["pickup_point"]) ? $context["pickup_point"] : null), "is_selected", array())) {
            // line 51
            echo "                ";
            echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "pickup_point");
            echo "
                ";
        } else {
            // line 53
            echo "                ";
            echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "ship_to");
            echo "
                ";
        }
        // line 55
        echo "            </td>
        </tr>
        </tbody>
        </table>
    </td>
</tr>
<tr>
    <td style=\"font-family: Helvetica, Arial, sans-serif;\">
        ";
        // line 63
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "products_table");
        echo "
    </td>
</tr>
<tr>
    <td style=\"border-top: 3px solid #444444; padding-top: 10px; font-family: Helvetica, Arial, sans-serif;\">
        <table width=\"100%\" style=\"border-collapse: separate; font-family: Helvetica, Arial, sans-serif;\">
        <tbody>
        <tr>
            <td width=\"66%\" style=\"font-size: 14px; font-family: Helvetica, Arial, sans-serif; line-height: 21px; color: #444444; padding-right: 30px; vertical-align:top;\">
                ";
        // line 72
        if ($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "notes", array())) {
            // line 73
            echo "                <h2 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #e8e8e8; margin-bottom: 10px;\">";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "customer_notes");
            echo "</h2>
                ";
            // line 74
            echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "notes", array());
            echo "
                                ";
        }
        // line 76
        echo "            </td>
            <td width=\"34%\" style=\"vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                <table width=\"100%;\" style=\"font-size: 14px; color: #444; font-family: Helvetica, Arial, sans-serif;\">
                <tbody>
                <tr style=\" vertical-align: top;\">
                    <td align=\"left\" style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 81
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "subtotal");
        echo "
                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 83
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "display_subtotal", array());
        echo "
                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\" style=\"padding-bottom: 20px; text-transform: uppercase; font-family: Helvetica, Arial, sans-serif;\">";
        // line 87
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "tax_name", array());
        echo "
                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 89
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "tax_total", array());
        echo "
                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\" style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 93
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "shipping");
        echo "
                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 95
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "display_shipping_cost", array());
        echo "
                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 99
        if ($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "payment_surcharge", array())) {
            // line 100
            echo "                        <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "payment_surcharge");
            echo " </div> ";
        }
        // line 101
        echo "                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 102
        if ($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "payment_surcharge", array())) {
            echo " ";
            echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "payment_surcharge", array());
            echo " ";
        }
        echo "<br>
                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\">";
        // line 106
        if ($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "coupon_code", array())) {
            echo " <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "coupon");
            echo " </div> ";
        }
        // line 107
        echo "                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 108
        if ($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "coupon_code", array())) {
            echo " ";
            echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "coupon_code", array());
            echo " ";
        }
        // line 109
        echo "                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 112
        if ($this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "raw", array()), "discount", array())) {
            echo " <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "including_discount");
            echo " </div> ";
        }
        // line 113
        echo "                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 114
        if ($this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "raw", array()), "discount", array())) {
            echo " ";
            echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "discount", array());
            echo " ";
        }
        // line 115
        echo "                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 118
        if ($this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "raw", array()), "subtotal_discount", array())) {
            echo " <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "order_discount");
            echo " </div> ";
        }
        // line 119
        echo "                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 120
        if ($this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "raw", array()), "subtotal_discount", array())) {
            echo " ";
            echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "subtotal_discount", array());
            echo " ";
        }
        // line 121
        echo "                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-size: 22px; font-family: Helvetica, Arial, sans-serif; font-weight: 600;\">
                    <td align=\"left\" style=\"padding-top: 20px; border-top: 1px solid #e8e8e8; font-size: 22px; font-family: Helvetica, Arial, sans-serif; \">";
        // line 124
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "total");
        echo "
                    </td>
                    <td align=\"right\" style=\"padding-top: 20px; border-top: 1px solid #e8e8e8; font-size: 22px; font-family: Helvetica, Arial, sans-serif; \">";
        // line 126
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
        return "__string_template__6e367a820fce1aab6035279a43d80f21750b1bb846eea63fce29c4138fffbd10";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 126,  291 => 124,  286 => 121,  280 => 120,  277 => 119,  271 => 118,  266 => 115,  260 => 114,  257 => 113,  251 => 112,  246 => 109,  240 => 108,  237 => 107,  231 => 106,  220 => 102,  217 => 101,  212 => 100,  210 => 99,  203 => 95,  198 => 93,  191 => 89,  186 => 87,  179 => 83,  174 => 81,  167 => 76,  162 => 74,  157 => 73,  155 => 72,  143 => 63,  133 => 55,  127 => 53,  121 => 51,  119 => 50,  113 => 47,  107 => 44,  102 => 42,  98 => 41,  84 => 29,  76 => 26,  73 => 25,  71 => 24,  64 => 22,  56 => 19,  48 => 16,  41 => 12,  28 => 8,  19 => 1,);
    }
}
/* <table width="100%;" style="min-width: 800px; font-family: Helvetica, Arial, sans-serif; border-collapse: separate;" cellspacing="0" cellpadding="0" border="0">*/
/* <tbody>*/
/* <tr style="vertical-align: top;">*/
/*     <td>*/
/*         <table width="100%;" cellspacing="0" border="0" style="border-collapse: separate; font-family: Helvetica, Arial, sans-serif;">*/
/*         <tbody>*/
/*         <tr>*/
/*             <td width="66%" style="padding-bottom: 40px; vertical-align: top; font-family: Helvetica, Arial, sans-serif;"><img src="{{c.logos.mail.image.image_path}}" width="{{c.logos.mail.image.image_x}}" height="{{c.logos.mail.image.image_y}}" alt="{{ c.name }}">*/
/*             </td>*/
/*             <td width="34%" style="padding-bottom: 40px; -webkit-print-color-adjust: exact; font-family: Helvetica, Arial, sans-serif;">*/
/*                 <p style="color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 3px; margin: 0px;">*/
/*                     <span style="color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; line-height: 20px;">{{ o.invoice_id_text }}</span>*/
/*                 </p>*/
/* */
/*                 <p style="color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;">*/
/*                     <span style="color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;">{{__("order_date")}}</span>  {{o.timestamp}}*/
/*                 </p>*/
/*                 <p style="color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;">*/
/*                     <span style="color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;">{{__("payment")}}</span>  {{p.payment}}*/
/*                 </p>*/
/*                 <p style="color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;">*/
/*                     <span style="color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;">{{__("shipping")}}</span>  {{o.shippings_method}}*/
/*                 </p>*/
/*                 {% if o.tracking_number %}*/
/*                 <p style="color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;">*/
/*                     <span style="color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;">{{__("tracking_number")}}</span>  {{o.tracking_number}}*/
/*                 </p>*/
/*                 {% endif %}*/
/*             </td>*/
/*         </tr>*/
/*         </tbody>*/
/*         </table>*/
/*     </td>*/
/* </tr>*/
/* <tr>*/
/*     <td colspan="2">*/
/*         <table width="100%;" cellspacing="0" cellpadding="0" border="0" style=" border-collapse: separate; font-family: Helvetica, Arial, sans-serif;">*/
/*         <tbody>*/
/*         <tr>*/
/*             <td style="vertical-align: top; background-color: #f7f7f7; color: #444444; padding: 20px 10px; color: #444444; font-size: 14px; font-family: Helvetica, Arial, sans-serif; -webkit-print-color-adjust: exact;" width="30%">*/
/*                 <h1 style="margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #444444; margin-bottom: 20px;">{{__("store")}}</h1>*/
/*                 <p style="margin: 0px; padding-bottom: 10px;"><strong>{{c.name}}</strong>*/
/*                 </p>*/
/*                 {{ snippet("company_address") }}*/
/*             </td>*/
/*             <td style="vertical-align: top; padding: 20px 30px; color: #444444; font-size: 14px; font-family: Helvetica, Arial, sans-serif;" width="36%">*/
/*                 {{ snippet("bill_to") }}*/
/*             </td>*/
/*             <td style="vertical-align: top; padding: 20px 0px; color: #444444; font-size: 14px; font-family: Helvetica, Arial, sans-serif;" width="34%">*/
/*                 {% if pickup_point.is_selected %}*/
/*                 {{ snippet("pickup_point") }}*/
/*                 {% else %}*/
/*                 {{ snippet("ship_to") }}*/
/*                 {% endif %}*/
/*             </td>*/
/*         </tr>*/
/*         </tbody>*/
/*         </table>*/
/*     </td>*/
/* </tr>*/
/* <tr>*/
/*     <td style="font-family: Helvetica, Arial, sans-serif;">*/
/*         {{ snippet("products_table") }}*/
/*     </td>*/
/* </tr>*/
/* <tr>*/
/*     <td style="border-top: 3px solid #444444; padding-top: 10px; font-family: Helvetica, Arial, sans-serif;">*/
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
/*                 <table width="100%;" style="font-size: 14px; color: #444; font-family: Helvetica, Arial, sans-serif;">*/
/*                 <tbody>*/
/*                 <tr style=" vertical-align: top;">*/
/*                     <td align="left" style="padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;">{{ __("subtotal") }}*/
/*                     </td>*/
/*                     <td align="right" style="font-family: Helvetica, Arial, sans-serif;">{{o.display_subtotal}}*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr style=" vertical-align: top; font-family: Helvetica, Arial, sans-serif;">*/
/*                     <td align="left" style="padding-bottom: 20px; text-transform: uppercase; font-family: Helvetica, Arial, sans-serif;">{{o.tax_name}}*/
/*                     </td>*/
/*                     <td align="right" style="font-family: Helvetica, Arial, sans-serif;">{{o.tax_total}}*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr style=" vertical-align: top; font-family: Helvetica, Arial, sans-serif;">*/
/*                     <td align="left" style="padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;">{{ __("shipping") }}*/
/*                     </td>*/
/*                     <td align="right" style="font-family: Helvetica, Arial, sans-serif;">{{ o.display_shipping_cost }}*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr style=" vertical-align: top; font-family: Helvetica, Arial, sans-serif;">*/
/*                     <td align="left" style="font-family: Helvetica, Arial, sans-serif;">{% if o.payment_surcharge %}*/
/*                         <div style="padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;"> {{__("payment_surcharge")}} </div> {% endif %}*/
/*                     </td>*/
/*                     <td align="right" style="font-family: Helvetica, Arial, sans-serif;">{% if o.payment_surcharge %} {{o.payment_surcharge}} {% endif %}<br>*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr style=" vertical-align: top; font-family: Helvetica, Arial, sans-serif;">*/
/*                     <td align="left">{% if o.coupon_code %} <div style="padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;"> {{ __("coupon") }} </div> {% endif %}*/
/*                     </td>*/
/*                     <td align="right" style="font-family: Helvetica, Arial, sans-serif;">{% if o.coupon_code %} {{o.coupon_code}} {% endif %}*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr style=" vertical-align: top; font-family: Helvetica, Arial, sans-serif;">*/
/*                     <td align="left" style="font-family: Helvetica, Arial, sans-serif;">{% if o.raw.discount %} <div style="padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;"> {{ __("including_discount") }} </div> {% endif %}*/
/*                     </td>*/
/*                     <td align="right" style="font-family: Helvetica, Arial, sans-serif;">{% if o.raw.discount %} {{o.discount}} {% endif %}*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr style=" vertical-align: top; font-family: Helvetica, Arial, sans-serif;">*/
/*                     <td align="left" style="font-family: Helvetica, Arial, sans-serif;">{% if o.raw.subtotal_discount %} <div style="padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;"> {{ __("order_discount") }} </div> {% endif %}*/
/*                     </td>*/
/*                     <td align="right" style="font-family: Helvetica, Arial, sans-serif;">{% if o.raw.subtotal_discount %} {{o.subtotal_discount}} {% endif %}*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr style=" vertical-align: top; font-size: 22px; font-family: Helvetica, Arial, sans-serif; font-weight: 600;">*/
/*                     <td align="left" style="padding-top: 20px; border-top: 1px solid #e8e8e8; font-size: 22px; font-family: Helvetica, Arial, sans-serif; ">{{ __("total") }}*/
/*                     </td>*/
/*                     <td align="right" style="padding-top: 20px; border-top: 1px solid #e8e8e8; font-size: 22px; font-family: Helvetica, Arial, sans-serif; ">{{o.total}}*/
/*                     </td>*/
/*                 </tr>*/
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
