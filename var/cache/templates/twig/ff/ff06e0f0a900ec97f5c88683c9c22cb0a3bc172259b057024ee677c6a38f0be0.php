<?php

/* __string_template__13af96049009a845bb4c794a7b944e5d0b047d8381fb71925be58e2e6833d5bb */
class __TwigTemplate_1874210b539e97be016debec7d213f336a1c547afb4bcfda9a51b11c3a9f921b extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "shipment", array()), "comments", array())) {
            // line 2
            echo "<div style=\"float: left; padding-top: 20px; font-family: Helvetica, Arial, sans-serif;\"><strong>";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "comments");
            echo ":</strong></div>
<div style=\"padding-left: 7px; padding-bottom: 15px; overflow-x: auto; clear: both; width: 505px; height: 100%; padding-bottom: 20px; overflow-y: hidden; font-family: Helvetica, Arial, sans-serif;\">";
            // line 3
            echo nl2br(twig_escape_filter($this->env, twig_wordwrap_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "shipment", array()), "comments", array()), 90, "
"), "html", null, true));
            echo "</div>
";
        } elseif ($this->getAttribute(        // line 4
(isset($context["o"]) ? $context["o"] : null), "notes", array())) {
            // line 5
            echo "<div style=\"float: left; padding-top: 20px;\"><strong>";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "notes");
            echo ":</strong></div>
<div style=\"padding-left: 7px; padding-bottom: 15px; overflow-x: auto; clear: both; width: 505px; height: 100%; padding-bottom: 20px; overflow-y: hidden; font-family: Helvetica, Arial, sans-serif;\">";
            // line 6
            echo twig_wordwrap_filter($this->env, $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "notes", array()), 90, "
");
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__13af96049009a845bb4c794a7b944e5d0b047d8381fb71925be58e2e6833d5bb";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  33 => 5,  31 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if o.shipment.comments %}*/
/* <div style="float: left; padding-top: 20px; font-family: Helvetica, Arial, sans-serif;"><strong>{{ __("comments") }}:</strong></div>*/
/* <div style="padding-left: 7px; padding-bottom: 15px; overflow-x: auto; clear: both; width: 505px; height: 100%; padding-bottom: 20px; overflow-y: hidden; font-family: Helvetica, Arial, sans-serif;">{{ o.shipment.comments|wordwrap(90,"\n")|nl2br }}</div>*/
/* {% elseif o.notes %}*/
/* <div style="float: left; padding-top: 20px;"><strong>{{ __("notes") }}:</strong></div>*/
/* <div style="padding-left: 7px; padding-bottom: 15px; overflow-x: auto; clear: both; width: 505px; height: 100%; padding-bottom: 20px; overflow-y: hidden; font-family: Helvetica, Arial, sans-serif;">{{ o.notes|wordwrap(90, "\n") }}</div>*/
/* {% endif %}*/
