<?php

/* __string_template__4d48fb2c61e1b89c4968844565feb836538e5c34eeaabd731629c58a6aff3d48 */
class __TwigTemplate_e393b6aded90b0fcb0eef0609530991f4d47488844d43ea0073251a9b24818c7 extends Twig_Template
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
        echo "<p style=\"font-family: Helvetica, Arial, sans-serif;\">";
        echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "name", array());
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "__string_template__4d48fb2c61e1b89c4968844565feb836538e5c34eeaabd731629c58a6aff3d48";
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
/* <p style="font-family: Helvetica, Arial, sans-serif;">{{ p.name }}</p>*/
