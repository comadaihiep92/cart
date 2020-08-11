<?php

/* __string_template__fbea7476eddd6a0b5a4dabc7997112f186827be0e3f0a387495c8850c8e05c64 */
class __TwigTemplate_dbba06ad975f2e31f26771414e7c3194d8a1c7dd28e97d9b574e642a91708ad6 extends Twig_Template
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
        echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "tax", array());
        echo "</strong></p>";
    }

    public function getTemplateName()
    {
        return "__string_template__fbea7476eddd6a0b5a4dabc7997112f186827be0e3f0a387495c8850c8e05c64";
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
/* <p style="text-align: center; font-family: Helvetica, Arial, sans-serif;"><strong style="font-weight:600;">{{ p.tax }}</strong></p>*/
