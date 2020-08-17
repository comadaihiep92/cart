<?php

/* __string_template__92eb81034ab0f8716bc66aec93803f77690a149bc31d42e22610e2e817b1f801 */
class __TwigTemplate_8eaf95428b4ca56446a486d0a94cda7acb0ea6291f6aa18f3add3e2672f6c5a2 extends Twig_Template
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
            echo "    ";
            $context["parts"] = twig_array_merge((isset($context["parts"]) ? $context["parts"] : null), array(0 => $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "state_descr", array())));
        }
        // line 5
        echo "
";
        // line 6
        echo $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "address", array());
        echo " <br />
";
        // line 7
        echo twig_join_filter((isset($context["parts"]) ? $context["parts"] : null), ", ");
        echo " ";
        echo $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "zipcode", array());
        echo "  <br />
";
        // line 8
        echo $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "country_descr", array());
    }

    public function getTemplateName()
    {
        return "__string_template__92eb81034ab0f8716bc66aec93803f77690a149bc31d42e22610e2e817b1f801";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  34 => 7,  30 => 6,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set parts = [c.city] %}*/
/* {% if c.state_descr %}*/
/*     {% set parts = parts|merge([c.state_descr]) %}*/
/* {% endif %}*/
/* */
/* {{ c.address }} <br />*/
/* {{ parts|join(', ') }} {{ c.zipcode }}  <br />*/
/* {{ c.country_descr }}*/
