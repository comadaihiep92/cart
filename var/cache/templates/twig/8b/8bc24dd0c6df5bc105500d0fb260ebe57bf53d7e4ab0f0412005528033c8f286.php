<?php

/* __string_template__96cc2d5243b32e7c8c4e21d2db9a34b2fc29c555b7207294675044b3972aa755 */
class __TwigTemplate_6228d6b7a20ea31f7c44552f81344916e21e9998e82925505c00b3f9f3b00479 extends Twig_Template
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
        ob_start();
        // line 2
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "gift_certificate");
        echo " ";
        echo $this->getAttribute((isset($context["certificate_info"]) ? $context["certificate_info"] : null), "gift_cert_code", array());
        echo " ";
        echo $this->getAttribute((isset($context["certificate_status"]) ? $context["certificate_status"] : null), "email_subj", array());
        echo "
";
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 4
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "header", array("title" => (isset($context["title"]) ? $context["title"] : null)));
        echo "

<p>
                     ";
        // line 7
        if ($this->getAttribute((isset($context["gift_cert_data"]) ? $context["gift_cert_data"] : null), "recipient", array())) {
            // line 8
            echo "                     ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "hello_name", array("[name]" => $this->getAttribute((isset($context["gift_cert_data"]) ? $context["gift_cert_data"] : null), "recipient", array())));
            echo "
                     ";
        } else {
            // line 10
            echo "                     ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "hello");
            echo ",
                     ";
        }
        // line 11
        echo "<br/>
                      ";
        // line 12
        echo $this->getAttribute((isset($context["certificate_status"]) ? $context["certificate_status"] : null), "email_header", array());
        echo "<br />
                     ";
        // line 13
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "gift_cert_from");
        echo ": ";
        echo $this->getAttribute((isset($context["gift_cert_data"]) ? $context["gift_cert_data"] : null), "sender", array());
        echo "    ";
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "gift_cert_to");
        echo ": ";
        echo $this->getAttribute((isset($context["gift_cert_data"]) ? $context["gift_cert_data"] : null), "recipient", array());
        echo "<br />
                     </p>
                </td>
           </tr>

           <tr>
                <td width=\"600px\" valign=\"top\" align=\"center\" >
                  ";
        // line 20
        echo $this->env->getExtension('tygh.core')->includeDocFunction($this->env, $context, "gift_certificate.default", $this->getAttribute((isset($context["gift_cert_data"]) ? $context["gift_cert_data"] : null), "gift_cert_id", array()));
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__96cc2d5243b32e7c8c4e21d2db9a34b2fc29c555b7207294675044b3972aa755";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  57 => 13,  53 => 12,  50 => 11,  44 => 10,  38 => 8,  36 => 7,  30 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% set title %}*/
/* {{__("gift_certificate")}} {{ certificate_info.gift_cert_code }} {{ certificate_status.email_subj }}*/
/* {% endset %}*/
/* {{ snippet("header", {"title": title }  ) }}*/
/* */
/* <p>*/
/*                      {% if gift_cert_data.recipient %}*/
/*                      {{__("hello_name", {"[name]" : gift_cert_data.recipient})}}*/
/*                      {% else %}*/
/*                      {{ __("hello") }},*/
/*                      {% endif %}<br/>*/
/*                       {{ certificate_status.email_header }}<br />*/
/*                      {{__("gift_cert_from")}}: {{gift_cert_data.sender}}    {{__("gift_cert_to")}}: {{gift_cert_data.recipient}}<br />*/
/*                      </p>*/
/*                 </td>*/
/*            </tr>*/
/* */
/*            <tr>*/
/*                 <td width="600px" valign="top" align="center" >*/
/*                   {{ include_doc("gift_certificate.default", gift_cert_data.gift_cert_id) }}{{ snippet("footer") }}*/
