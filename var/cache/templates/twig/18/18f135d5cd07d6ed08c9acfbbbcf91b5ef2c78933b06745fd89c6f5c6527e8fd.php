<?php

/* __string_template__b008403c084dd9387a581797295ddee6d8bf2f80ef5e88c4c0b63dd4686a0bec */
class __TwigTemplate_ff6b6bda65a2e69a47ea02c587232903990c13963f8898595042b95d67634681 extends Twig_Template
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
        echo "<p style=\"text-align: center; font-family: Helvetica, Arial, sans-serif;\">";
        echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "product_code", array());
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "__string_template__b008403c084dd9387a581797295ddee6d8bf2f80ef5e88c4c0b63dd4686a0bec";
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
/* <p style="text-align: center; font-family: Helvetica, Arial, sans-serif;">{{ p.product_code }}</p>*/
