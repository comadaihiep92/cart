<?php

/* __string_template__cad39defbaf36f83dd5f2828ec72b349b1f70120e32935a5e5f2c90466b6d0bb */
class __TwigTemplate_19f03af144ed438e9a3fb810720297e73ab720fad8a6266fe882a2105807ae44 extends Twig_Template
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
        echo "<p style=\"text-align: center; font-family: Helvetica, Arial, sans-serif;\"><strong style=\"font-weight:600;\">";
        echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "amount", array());
        echo "</strong></p>";
    }

    public function getTemplateName()
    {
        return "__string_template__cad39defbaf36f83dd5f2828ec72b349b1f70120e32935a5e5f2c90466b6d0bb";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <p style="text-align: center; font-family: Helvetica, Arial, sans-serif;"><strong style="font-weight:600;">{{ p.amount }}</strong></p>*/
