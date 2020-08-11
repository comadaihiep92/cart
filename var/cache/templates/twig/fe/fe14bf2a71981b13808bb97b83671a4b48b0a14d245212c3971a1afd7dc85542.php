<?php

/* __string_template__18416c557e15d63441a6c87027898272a3969577725c92ba3b0b600c9042b78c */
class __TwigTemplate_35d0f40137f61b3a9803f5a69005735f945f85248c847cc33fbe668ab0edfde8 extends Twig_Template
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
        echo "
";
        // line 2
        if ($this->getAttribute((isset($context["products_table"]) ? $context["products_table"] : null), "rows", array())) {
            // line 3
            echo "<table width=\"100%\" cellpadding=\"0\" cellspacing=\"1\" style=\"background-color: #dddddd; -webkit-print-color-adjust: exact;\">
<thead>
    <tr>

        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["products_table"]) ? $context["products_table"] : null), "headers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                // line 8
                echo "            <th style=\"background-color: #eeeeee; padding: 6px 10px; white-space: nowrap; font-size: 12px; font-family: Arial;\">";
                echo $context["header"];
                echo "</th>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "    </tr>
</thead>
<tbody>
    ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["products_table"]) ? $context["products_table"] : null), "rows", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 14
                echo "        <tr style=\"padding: 10px; background-color: #ffffff; font-size: 12px; font-family: Arial; border: 1px solid #eeeeee; text-align: center;\">
            ";
                // line 15
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 16
                    echo "                <td style=\"border: 1px solid #eeeeee; padding:5px; text-align:left;\">
                ";
                    // line 17
                    echo $context["column"];
                    echo "
                </td>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "        </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "</tbody>
</table>";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__18416c557e15d63441a6c87027898272a3969577725c92ba3b0b600c9042b78c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 22,  71 => 20,  62 => 17,  59 => 16,  55 => 15,  52 => 14,  48 => 13,  43 => 10,  34 => 8,  30 => 7,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* {% if products_table.rows %}*/
/* <table width="100%" cellpadding="0" cellspacing="1" style="background-color: #dddddd; -webkit-print-color-adjust: exact;">*/
/* <thead>*/
/*     <tr>*/
/* */
/*         {% for  header in products_table.headers %}*/
/*             <th style="background-color: #eeeeee; padding: 6px 10px; white-space: nowrap; font-size: 12px; font-family: Arial;">{{ header }}</th>*/
/*         {% endfor %}*/
/*     </tr>*/
/* </thead>*/
/* <tbody>*/
/*     {% for  row in products_table.rows %}*/
/*         <tr style="padding: 10px; background-color: #ffffff; font-size: 12px; font-family: Arial; border: 1px solid #eeeeee; text-align: center;">*/
/*             {% for  column in row %}*/
/*                 <td style="border: 1px solid #eeeeee; padding:5px; text-align:left;">*/
/*                 {{ column }}*/
/*                 </td>*/
/*             {% endfor %}*/
/*         </tr>*/
/*     {% endfor %}*/
/* </tbody>*/
/* </table>{% endif %}*/
