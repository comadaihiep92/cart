<?php

/* __string_template__75968aa1135d78d8fa2a862e77af2f4d4f3a5a23155603a0f4261e495ca1d6d2 */
class __TwigTemplate_d4c9a22dd70d74b7d6680ea4c887600b4ab0a82c37fcb0ad2a025798c58c4a63 extends Twig_Template
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
        echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "discount", array());
        echo "</strong></p>";
    }

    public function getTemplateName()
    {
        return "__string_template__75968aa1135d78d8fa2a862e77af2f4d4f3a5a23155603a0f4261e495ca1d6d2";
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
/* <p style="text-align: center; font-family: Helvetica, Arial, sans-serif;"><strong style="font-weight:600;">{{ p.discount }}</strong></p>*/
