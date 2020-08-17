<?php

/* __string_template__a73ae69a71be142b73775aab009abcbd354056ec28a25a87ee85349b1f94f160 */
class __TwigTemplate_8cf24defd75d26b011d03d97306c57f0bb36086086d8704ec34d6d8720076c69 extends Twig_Template
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
        echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "amount", array());
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "__string_template__a73ae69a71be142b73775aab009abcbd354056ec28a25a87ee85349b1f94f160";
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
/* <p style="text-align: center; font-family: Helvetica, Arial, sans-serif;">{{ p.amount }}</p>*/
