<?php

/* __string_template__a21aea599c59e23f5b3d17bab157ba91caf1c071af25525709c34d0b0c7df7ad */
class __TwigTemplate_502a47057a38dc7604ce7536c298e0b8324c3cb2f9135b98b0239c63c9a44757 extends Twig_Template
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
        $context["parts"] = array(0 => $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "city", array()));
        // line 2
        if ($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "state_descr", array())) {
            // line 3
            echo "    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">";
            $context["parts"] = twig_array_merge((isset($context["parts"]) ? $context["parts"] : null), array(0 => $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "state_descr", array())));
            echo "</p>
";
        }
        // line 5
        echo "
<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 6
        echo $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "address", array());
        echo "</p>
<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 7
        echo twig_join_filter((isset($context["parts"]) ? $context["parts"] : null), ", ");
        echo " ";
        echo $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "zipcode", array());
        echo "</p>
<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 8
        echo $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "country_descr", array());
        echo " </p>
<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\"><bdi>";
        // line 9
        echo $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "phone", array());
        echo " </bdi></p>
<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 10
        echo $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "users_department", array());
        echo " </p>
<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 11
        echo $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "website", array());
        echo " </p>
";
    }

    public function getTemplateName()
    {
        return "__string_template__a21aea599c59e23f5b3d17bab157ba91caf1c071af25525709c34d0b0c7df7ad";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 11,  50 => 10,  46 => 9,  42 => 8,  36 => 7,  32 => 6,  29 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set parts = [c.city] %}*/
/* {% if c.state_descr %}*/
/*     <p style="margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;">{% set parts = parts|merge([c.state_descr]) %}</p>*/
/* {% endif %}*/
/* */
/* <p style="margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;">{{ c.address }}</p>*/
/* <p style="margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;">{{ parts|join(', ') }} {{ c.zipcode }}</p>*/
/* <p style="margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;">{{ c.country_descr }} </p>*/
/* <p style="margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;"><bdi>{{ c.phone }} </bdi></p>*/
/* <p style="margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;">{{ c.users_department }} </p>*/
/* <p style="margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;">{{ c.website }} </p>*/
/* */
