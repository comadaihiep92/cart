<?php

/* __string_template__13b6ce6545bb57fea8da3731d706fc963e91919c5ed5f02bde8341946b2a2073 */
class __TwigTemplate_d8fafc01921a213a5c5b1bbb98d02dbedfdb8588a75b4f50ddf4fc0ac530a53a extends Twig_Template
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
        echo "<table class=\"main-table\" style=\"height: 100%; font-size: 12px; font-family: Helvetica, Arial, sans-serif;\" rel=\"height: 100%; border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
<tbody>
<tr>
    <td style=\"width: 100%; height: 100%; padding: 24px 0; font-family: Helvetica, Arial, sans-serif;\" align=\"center\">
        <div style=\"background-color: #ffffff; margin: 0px auto; padding: 0px 44px 0px 46px; width: 510px; text-align: left; font-family: Helvetica, Arial, sans-serif;\">
            <table style=\"border-collapse: separate; padding-top: 32px; font-family: Helvetica, Arial, sans-serif;\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
            <tbody>
            <tr valign=\"top\">
                <td style=\"border-bottom: 1px dashed #000000; padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\" align=\"center\" width=\"100%\">
                    <h3 style=\"font-size: 17px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; padding: 0px 0px 3px 1px; margin: 0px;\">";
        // line 10
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "ship_to");
        echo ":</h3>
                    <p style=\"margin: 2px 0px 3px 0px; font-size: 12px; font-family: Helvetica, Arial, sans-serif;\">
                        ";
        // line 12
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "firstname", array());
        echo " ";
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "lastname", array());
        echo "
                    </p>
                    <p style=\"margin: 2px 0px 3px 0px; font-size: 12px; font-family: Helvetica, Arial, sans-serif;\">
                        ";
        // line 15
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "s_address", array());
        echo " ";
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "s_address_2", array());
        echo "
                    </p>
                    <p style=\"margin: 2px 0px 3px 0px; font-size: 12px; font-family: Helvetica, Arial, sans-serif;\">
                        ";
        // line 18
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "s_city", array());
        echo " ";
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "s_state_descr", array());
        echo " ";
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "s_zipcode", array());
        echo "
                    </p>
                    <p style=\"margin: 2px 0px 3px 0px; font-size: 12px; font-family: Helvetica, Arial, sans-serif;\">
                        ";
        // line 21
        echo $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "s_country_descr", array());
        echo "
                    </p>
                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["u"]) ? $context["u"] : null), "s_fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 24
            echo "                    <p style=\"font-family: Helvetica, Arial, sans-serif;\">";
            echo $this->getAttribute($context["field"], "name", array());
            echo ": ";
            echo $this->getAttribute($context["field"], "value", array());
            echo "
                    </p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                </td>
            </tr>
            <tr class=\"scissors\" valign=\"top\">
                <td style=\"padding-left: 20px; font-size: 12px; font-family: Helvetica, Arial, sans-serif;\" width=\"100%\">
                    <img style=\"vertical-align: top;\" src=\"";
        // line 31
        echo $this->getAttribute((isset($context["runtime"]) ? $context["runtime"] : null), "images_dir", array());
        echo "/scissors.gif\" border=\"0\">
                </td>
            </tr>
            </tbody>
            </table>
            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
            <tbody>
            <tr>
                <td style=\"width: 50%; padding: 14px 0px 0px 2px;\">
                    <h2 style=\"font-size: 12px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; margin: 0px 0px 3px 0px;\">";
        // line 40
        echo $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "name", array());
        echo "</h2>
                    <p style=\"font-size: 12px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 41
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "company_address");
        echo "
                    </p>
                    <p style=\"font-size: 12px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 43
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "company_info");
        echo "<br>
                    </p>
                </td>
                <td style=\"padding-top: 14px; font-family: Helvetica, Arial, sans-serif;\" valign=\"top\">";
        // line 46
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "order_date");
        echo "
                </td>
            </tr>
            </tbody>
            </table>
            <table style=\"padding: 20px 0px 24px 0px; font-family: Helvetica, Arial, sans-serif;\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
            <tbody>
            <tr valign=\"top\">
                <td style=\"font-family: Helvetica, Arial, sans-serif;\" width=\"54%\">
                    ";
        // line 55
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "bill_to");
        echo "
                </td>
                <td style=\"font-family: Helvetica, Arial, sans-serif;\" width=\"54%\">
                    ";
        // line 58
        if ($this->getAttribute((isset($context["pickup_point"]) ? $context["pickup_point"] : null), "is_selected", array())) {
            // line 59
            echo "                    ";
            echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "pickup_point");
            echo "
                    ";
        } else {
            // line 61
            echo "                    ";
            echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "ship_to");
            echo "
                    ";
        }
        // line 63
        echo "                </td>
            </tr>
            </tbody>
            </table>
            <div style=\"font-family: Helvetica, Arial, sans-serif;\">
                ";
        // line 68
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "order_info");
        echo "
            </div>
            <div style=\"font-family: Helvetica, Arial, sans-serif;\">
                ";
        // line 71
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "products_table");
        echo "
                <br>";
        // line 72
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "notes");
        echo "
            </div>
        </div>
    </td>
</tr>
</tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "__string_template__13b6ce6545bb57fea8da3731d706fc963e91919c5ed5f02bde8341946b2a2073";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 72,  160 => 71,  154 => 68,  147 => 63,  141 => 61,  135 => 59,  133 => 58,  127 => 55,  115 => 46,  109 => 43,  104 => 41,  100 => 40,  88 => 31,  82 => 27,  70 => 24,  66 => 23,  61 => 21,  51 => 18,  43 => 15,  35 => 12,  30 => 10,  19 => 1,);
    }
}
/* <table class="main-table" style="height: 100%; font-size: 12px; font-family: Helvetica, Arial, sans-serif;" rel="height: 100%; border="0" cellpadding="0" cellspacing="0" width="100%">*/
/* <tbody>*/
/* <tr>*/
/*     <td style="width: 100%; height: 100%; padding: 24px 0; font-family: Helvetica, Arial, sans-serif;" align="center">*/
/*         <div style="background-color: #ffffff; margin: 0px auto; padding: 0px 44px 0px 46px; width: 510px; text-align: left; font-family: Helvetica, Arial, sans-serif;">*/
/*             <table style="border-collapse: separate; padding-top: 32px; font-family: Helvetica, Arial, sans-serif;" border="0" cellpadding="0" cellspacing="0" width="100%">*/
/*             <tbody>*/
/*             <tr valign="top">*/
/*                 <td style="border-bottom: 1px dashed #000000; padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;" align="center" width="100%">*/
/*                     <h3 style="font-size: 17px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; padding: 0px 0px 3px 1px; margin: 0px;">{{ __("ship_to") }}:</h3>*/
/*                     <p style="margin: 2px 0px 3px 0px; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">*/
/*                         {{ u.firstname }} {{ u.lastname }}*/
/*                     </p>*/
/*                     <p style="margin: 2px 0px 3px 0px; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">*/
/*                         {{ u.s_address  }} {{ u.s_address_2 }}*/
/*                     </p>*/
/*                     <p style="margin: 2px 0px 3px 0px; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">*/
/*                         {{ u.s_city }} {{ u.s_state_descr }} {{ u.s_zipcode }}*/
/*                     </p>*/
/*                     <p style="margin: 2px 0px 3px 0px; font-size: 12px; font-family: Helvetica, Arial, sans-serif;">*/
/*                         {{ u.s_country_descr }}*/
/*                     </p>*/
/*                     {% for field in u.s_fields %}*/
/*                     <p style="font-family: Helvetica, Arial, sans-serif;">{{ field.name }}: {{ field.value }}*/
/*                     </p>*/
/*                     {% endfor %}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr class="scissors" valign="top">*/
/*                 <td style="padding-left: 20px; font-size: 12px; font-family: Helvetica, Arial, sans-serif;" width="100%">*/
/*                     <img style="vertical-align: top;" src="{{ runtime.images_dir }}/scissors.gif" border="0">*/
/*                 </td>*/
/*             </tr>*/
/*             </tbody>*/
/*             </table>*/
/*             <table border="0" cellpadding="0" cellspacing="0" width="100%">*/
/*             <tbody>*/
/*             <tr>*/
/*                 <td style="width: 50%; padding: 14px 0px 0px 2px;">*/
/*                     <h2 style="font-size: 12px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; margin: 0px 0px 3px 0px;">{{ c.name }}</h2>*/
/*                     <p style="font-size: 12px; font-family: Helvetica, Arial, sans-serif;">{{ snippet("company_address") }}*/
/*                     </p>*/
/*                     <p style="font-size: 12px; font-family: Helvetica, Arial, sans-serif;">{{ snippet("company_info") }}<br>*/
/*                     </p>*/
/*                 </td>*/
/*                 <td style="padding-top: 14px; font-family: Helvetica, Arial, sans-serif;" valign="top">{{ snippet("order_date") }}*/
/*                 </td>*/
/*             </tr>*/
/*             </tbody>*/
/*             </table>*/
/*             <table style="padding: 20px 0px 24px 0px; font-family: Helvetica, Arial, sans-serif;" border="0" cellpadding="0" cellspacing="0" width="100%">*/
/*             <tbody>*/
/*             <tr valign="top">*/
/*                 <td style="font-family: Helvetica, Arial, sans-serif;" width="54%">*/
/*                     {{snippet("bill_to")}}*/
/*                 </td>*/
/*                 <td style="font-family: Helvetica, Arial, sans-serif;" width="54%">*/
/*                     {% if pickup_point.is_selected %}*/
/*                     {{ snippet("pickup_point") }}*/
/*                     {% else %}*/
/*                     {{ snippet("ship_to") }}*/
/*                     {% endif %}*/
/*                 </td>*/
/*             </tr>*/
/*             </tbody>*/
/*             </table>*/
/*             <div style="font-family: Helvetica, Arial, sans-serif;">*/
/*                 {{ snippet("order_info") }}*/
/*             </div>*/
/*             <div style="font-family: Helvetica, Arial, sans-serif;">*/
/*                 {{ snippet("products_table") }}*/
/*                 <br>{{ snippet("notes") }}*/
/*             </div>*/
/*         </div>*/
/*     </td>*/
/* </tr>*/
/* </tbody>*/
/* </table>*/
