<?php

/* __string_template__39e39f0909059afdbefb9bb6bf7bd9e38914486f13f8a5d01e2ced9e4138c18a */
class __TwigTemplate_c355bf1c3ace8a83643a16c11a56d4ad1f5b6bed38d5acecf5b87acf489d2713 extends Twig_Template
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
        echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
<tbody>
<tr>
    <td style=\"width: 100%; height: 100%;vertical-align: top;\" align=\"center\">
        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600px\">
        <tbody style=\"font-family: arial;\">
        <tr>
            <td style=\"padding: 17px 25px 40px; background: #F57171;\" align=\"center\" valign=\"top\" width=\"600px\">
                <h1 style=\"color: #fff; text-transform: uppercase; font-size: 40px; font-weight: bold;margin: 10px 0 0;\">
                ";
        // line 10
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "gift_certificate");
        echo "
                </h1>
                <h2 style=\"font-size: 50px; font-weight: 300; color: #fff; margin: 0px; line-height: 1.2em;\">
                ";
        // line 13
        echo $this->getAttribute((isset($context["gift_certificate"]) ? $context["gift_certificate"] : null), "amount", array());
        echo "
                </h2>
                <p style=\"color: #fff; margin: 0 0 12px; font-size: 12px\">
                    ";
        // line 16
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "gift_cert_code");
        echo "
                </p>
                <span style=\"background: #fff; padding: 5px 20px; font-size: 19px; font-weight: lighter; border-radius: 2px;\">
                ";
        // line 19
        echo $this->getAttribute((isset($context["gift_certificate"]) ? $context["gift_certificate"] : null), "gift_cert_code", array());
        echo "</span>
            </td>
        </tr>
        <tr>
            <td style=\"padding: 30px 0px 80px;\" valign=\"middle\" width=\"600px\">
                <div style=\"padding: 10px;\">";
        // line 24
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "info");
        echo "
                </div>
                <div>";
        // line 26
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "products_table");
        echo "
                </div>
                <div style=\"padding: 30px 20px 0px 20px; text-align: right;\">
                    ";
        // line 29
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "shop_now");
        echo " : <a href=\"";
        echo $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "storefront_url", array());
        echo "\" target=\"_blank\">";
        echo $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "storefront_url", array());
        echo "</a>
                </div>
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
        return "__string_template__39e39f0909059afdbefb9bb6bf7bd9e38914486f13f8a5d01e2ced9e4138c18a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 29,  61 => 26,  56 => 24,  48 => 19,  42 => 16,  36 => 13,  30 => 10,  19 => 1,);
    }
}
/* <table border="0" cellpadding="0" cellspacing="0" width="100%">*/
/* <tbody>*/
/* <tr>*/
/*     <td style="width: 100%; height: 100%;vertical-align: top;" align="center">*/
/*         <table border="0" cellpadding="0" cellspacing="0" width="600px">*/
/*         <tbody style="font-family: arial;">*/
/*         <tr>*/
/*             <td style="padding: 17px 25px 40px; background: #F57171;" align="center" valign="top" width="600px">*/
/*                 <h1 style="color: #fff; text-transform: uppercase; font-size: 40px; font-weight: bold;margin: 10px 0 0;">*/
/*                 {{ __("gift_certificate") }}*/
/*                 </h1>*/
/*                 <h2 style="font-size: 50px; font-weight: 300; color: #fff; margin: 0px; line-height: 1.2em;">*/
/*                 {{ gift_certificate.amount }}*/
/*                 </h2>*/
/*                 <p style="color: #fff; margin: 0 0 12px; font-size: 12px">*/
/*                     {{ __("gift_cert_code") }}*/
/*                 </p>*/
/*                 <span style="background: #fff; padding: 5px 20px; font-size: 19px; font-weight: lighter; border-radius: 2px;">*/
/*                 {{ gift_certificate.gift_cert_code }}</span>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td style="padding: 30px 0px 80px;" valign="middle" width="600px">*/
/*                 <div style="padding: 10px;">{{ snippet("info") }}*/
/*                 </div>*/
/*                 <div>{{ snippet("products_table") }}*/
/*                 </div>*/
/*                 <div style="padding: 30px 20px 0px 20px; text-align: right;">*/
/*                     {{__("shop_now")}} : <a href="{{c.storefront_url}}" target="_blank">{{c.storefront_url}}</a>*/
/*                 </div>*/
/*             </td>*/
/*         </tr>*/
/*         </tbody>*/
/*         </table>*/
/*     </td>*/
/* </tr>*/
/* </tbody>*/
/* </table>*/
