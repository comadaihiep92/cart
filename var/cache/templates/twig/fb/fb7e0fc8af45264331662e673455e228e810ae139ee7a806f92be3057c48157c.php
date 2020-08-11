<?php

/* __string_template__89cb3ae3b7c83ccbafc4a78237074d82a61de1a1f8f5bdc7644385e572ea4547 */
class __TwigTemplate_e5817d3c7932e70e30dc3bfa09e2a7c97b1182318303ac17c33f7a960bdff3f2 extends Twig_Template
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
        if ($this->getAttribute((isset($context["products_table"]) ? $context["products_table"] : null), "rows", array())) {
            // line 2
            echo "<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"border-top: 3px solid #444; color: #444;  text-transofrm: uppercase; border-collapse: separate; font-family: Helvetica, Arial, sans-serif;\">
    <tbody>
        <tr style=\"font-size: 12px; font-family: Helvetica, Arial, sans-serif; font-weight: 600; text-transform: uppercase; text-align: center; vertical-aling: top;\">
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["products_table"]) ? $context["products_table"] : null), "headers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                // line 6
                echo "                <td style=\"padding:10px; font-family: Helvetica, Arial, sans-serif;\">";
                echo $context["header"];
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "        </tr>
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["products_table"]) ? $context["products_table"] : null), "rows", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 10
                echo "            <tr style=\"font-size: 14px; font-family: Helvetica, Arial, sans-serif; font-weight: 400; text-transform: uppercase; text-align: center; vertical-aling: middle;\">
                ";
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 12
                    echo "                    <td style=\"padding:10px 0px; border-bottom: 1px solid #ebebeb; font-family: Helvetica, Arial, sans-serif;\">";
                    echo $context["column"];
                    echo "</td>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    </tbody>
</table>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__89cb3ae3b7c83ccbafc4a78237074d82a61de1a1f8f5bdc7644385e572ea4547";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 16,  62 => 14,  53 => 12,  49 => 11,  46 => 10,  42 => 9,  39 => 8,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% if products_table.rows %}*/
/* <table width="100%" cellspacing="0" cellpadding="0" border="0" style="border-top: 3px solid #444; color: #444;  text-transofrm: uppercase; border-collapse: separate; font-family: Helvetica, Arial, sans-serif;">*/
/*     <tbody>*/
/*         <tr style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; font-weight: 600; text-transform: uppercase; text-align: center; vertical-aling: top;">*/
/*             {% for  header in products_table.headers %}*/
/*                 <td style="padding:10px; font-family: Helvetica, Arial, sans-serif;">{{ header }}</td>*/
/*             {% endfor %}*/
/*         </tr>*/
/*         {% for  row in products_table.rows %}*/
/*             <tr style="font-size: 14px; font-family: Helvetica, Arial, sans-serif; font-weight: 400; text-transform: uppercase; text-align: center; vertical-aling: middle;">*/
/*                 {% for  column in row %}*/
/*                     <td style="padding:10px 0px; border-bottom: 1px solid #ebebeb; font-family: Helvetica, Arial, sans-serif;">{{ column }}</td>*/
/*                 {% endfor %}*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </tbody>*/
/* </table>*/
/* {% endif %}*/
