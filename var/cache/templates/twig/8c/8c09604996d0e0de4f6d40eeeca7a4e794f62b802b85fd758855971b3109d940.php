<?php

/* __string_template__043789447df94e96d8e46177e8ac4013311b606fb946203f3df9f68f7a61390c */
class __TwigTemplate_9de148264cdfa1c86d584476740b4c5ece5f409da545c95ef3943a2f481bc51a extends Twig_Template
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
\t<tbody>
\t\t";
        // line 3
        if ($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "phone", array())) {
            // line 4
            echo "\t\t<tr valign=\"top\">
\t\t\t<td style=\"font-size: 12px; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;\">";
            // line 5
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "phone1_label");
            echo ":</td>
\t\t\t<td style=\"font-size: 12px; font-family: Helvetica, Arial, sans-serif;\" width=\"100%\"><bdi>";
            // line 6
            echo $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "phone", array());
            echo "</bdi></td>
\t\t</tr>
\t\t";
        }
        // line 9
        echo "\t\t";
        if ($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "phone_2", array())) {
            // line 10
            echo "\t\t<tr valign=\"top\">
\t\t\t<td style=\"font-size: 12px; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;\">";
            // line 11
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "phone2_label");
            echo ":</td>
\t\t\t<td style=\"font-size: 12px; font-family: Helvetica, Arial, sans-serif;\" width=\"100%\"><bdi>";
            // line 12
            echo $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "phone_2", array());
            echo "</bdi></td>
\t\t</tr>
\t\t";
        }
        // line 15
        echo "\t\t";
        if ($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "website", array())) {
            // line 16
            echo "\t\t<tr valign=\"top\">
\t\t\t<td style=\"font-size: 12px; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;\">";
            // line 17
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "web_site");
            echo ":</td>
\t\t\t<td style=\"font-size: 12px; font-family: Helvetica, Arial, sans-serif;\" width=\"100%\">";
            // line 18
            echo $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "website", array());
            echo "</td>
\t\t</tr>
\t\t";
        }
        // line 21
        echo "\t\t";
        if ($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "orders_department", array())) {
            // line 22
            echo "\t\t<tr valign=\"top\">
\t\t\t<td style=\"font-size: 12px; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;\">";
            // line 23
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "email");
            echo ":</td>
\t\t\t<td style=\"font-size: 12px; font-family: Helvetica, Arial, sans-serif;\" width=\"100%\"><a href=\"mailto:";
            // line 24
            echo $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "orders_department", array());
            echo "\">";
            echo $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "orders_department_display", array());
            echo "</a></td>
\t\t</tr>
\t\t";
        }
        // line 27
        echo "\t</tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "__string_template__043789447df94e96d8e46177e8ac4013311b606fb946203f3df9f68f7a61390c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 27,  80 => 24,  76 => 23,  73 => 22,  70 => 21,  64 => 18,  60 => 17,  57 => 16,  54 => 15,  48 => 12,  44 => 11,  41 => 10,  38 => 9,  32 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <table border="0" cellpadding="0" cellspacing="0">*/
/* 	<tbody>*/
/* 		{% if c.phone %}*/
/* 		<tr valign="top">*/
/* 			<td style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;">{{ __("phone1_label") }}:</td>*/
/* 			<td style="font-size: 12px; font-family: Helvetica, Arial, sans-serif;" width="100%"><bdi>{{ c.phone }}</bdi></td>*/
/* 		</tr>*/
/* 		{% endif %}*/
/* 		{% if c.phone_2 %}*/
/* 		<tr valign="top">*/
/* 			<td style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;">{{ __("phone2_label") }}:</td>*/
/* 			<td style="font-size: 12px; font-family: Helvetica, Arial, sans-serif;" width="100%"><bdi>{{ c.phone_2 }}</bdi></td>*/
/* 		</tr>*/
/* 		{% endif %}*/
/* 		{% if c.website %}*/
/* 		<tr valign="top">*/
/* 			<td style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;">{{ __("web_site") }}:</td>*/
/* 			<td style="font-size: 12px; font-family: Helvetica, Arial, sans-serif;" width="100%">{{ c.website }}</td>*/
/* 		</tr>*/
/* 		{% endif %}*/
/* 		{% if c.orders_department %}*/
/* 		<tr valign="top">*/
/* 			<td style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; color: #000000; padding-right: 10px; white-space: nowrap;">{{ __("email") }}:</td>*/
/* 			<td style="font-size: 12px; font-family: Helvetica, Arial, sans-serif;" width="100%"><a href="mailto:{{ c.orders_department }}">{{ c.orders_department_display }}</a></td>*/
/* 		</tr>*/
/* 		{% endif %}*/
/* 	</tbody>*/
/* </table>*/
