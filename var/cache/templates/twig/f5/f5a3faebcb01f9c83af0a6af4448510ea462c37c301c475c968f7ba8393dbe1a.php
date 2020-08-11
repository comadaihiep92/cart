<?php

/* __string_template__7803ae268455836a569832a5bb9ad26b1c3586596d5a2b71cf209ae6205fc901 */
class __TwigTemplate_a90312e9a7a38712bee2ad459a5b0b1cc720ef7af6b1552229a28d586f20ddb3 extends Twig_Template
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
        if (($this->getAttribute((isset($context["gift_certificate"]) ? $context["gift_certificate"] : null), "send_via", array()) == "P")) {
            // line 2
            echo "<p>
    ";
            // line 3
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "gift_cert_from");
            echo ": ";
            echo $this->getAttribute((isset($context["gift_certificate"]) ? $context["gift_certificate"] : null), "sender", array());
            echo "
</p>
<p>
    ";
            // line 6
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "gift_cert_to");
            echo ": ";
            echo $this->getAttribute((isset($context["gift_certificate"]) ? $context["gift_certificate"] : null), "recipient", array());
            echo "
</p>
<p>
    ";
            // line 9
            echo $this->getAttribute((isset($context["gift_certificate"]) ? $context["gift_certificate"] : null), "address", array());
            echo "<br />
    ";
            // line 10
            if ($this->getAttribute((isset($context["gift_certificate"]) ? $context["gift_certificate"] : null), "address_2", array())) {
                // line 11
                echo "        ";
                echo $this->getAttribute((isset($context["gift_certificate"]) ? $context["gift_certificate"] : null), "address_2", array());
                echo "<br />
    ";
            }
            // line 13
            echo "    ";
            if ($this->getAttribute((isset($context["gift_certificate"]) ? $context["gift_certificate"] : null), "phone", array())) {
                // line 14
                echo "        ";
                echo $this->getAttribute((isset($context["gift_certificate"]) ? $context["gift_certificate"] : null), "phone", array());
                echo "<br />
    ";
            }
            // line 16
            echo "    ";
            echo $this->getAttribute((isset($context["gift_certificate"]) ? $context["gift_certificate"] : null), "city", array());
            echo ",&nbsp;";
            echo $this->getAttribute((isset($context["gift_certificate"]) ? $context["gift_certificate"] : null), "descr_country", array());
            echo ",&nbsp;";
            echo $this->getAttribute((isset($context["gift_certificate"]) ? $context["gift_certificate"] : null), "descr_state", array());
            echo "<br />
    ";
            // line 17
            echo $this->getAttribute((isset($context["gift_certificate"]) ? $context["gift_certificate"] : null), "zipcode", array());
            echo "
</p>
";
        }
        // line 20
        echo "
";
        // line 21
        if ($this->getAttribute((isset($context["gift_certificate"]) ? $context["gift_certificate"] : null), "message", array())) {
            // line 22
            echo "<div>";
            echo $this->getAttribute((isset($context["gift_certificate"]) ? $context["gift_certificate"] : null), "message", array());
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__7803ae268455836a569832a5bb9ad26b1c3586596d5a2b71cf209ae6205fc901";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 22,  79 => 21,  76 => 20,  70 => 17,  61 => 16,  55 => 14,  52 => 13,  46 => 11,  44 => 10,  40 => 9,  32 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if gift_certificate.send_via == 'P' %}*/
/* <p>*/
/*     {{ __("gift_cert_from") }}: {{ gift_certificate.sender }}*/
/* </p>*/
/* <p>*/
/*     {{ __("gift_cert_to") }}: {{ gift_certificate.recipient }}*/
/* </p>*/
/* <p>*/
/*     {{ gift_certificate.address }}<br />*/
/*     {% if gift_certificate.address_2 %}*/
/*         {{ gift_certificate.address_2 }}<br />*/
/*     {% endif %}*/
/*     {% if gift_certificate.phone %}*/
/*         {{ gift_certificate.phone }}<br />*/
/*     {% endif %}*/
/*     {{ gift_certificate.city }},&nbsp;{{ gift_certificate.descr_country }},&nbsp;{{ gift_certificate.descr_state }}<br />*/
/*     {{ gift_certificate.zipcode }}*/
/* </p>*/
/* {% endif %}*/
/* */
/* {% if gift_certificate.message %}*/
/* <div>{{ gift_certificate.message }}</div>*/
/* {% endif %}*/
