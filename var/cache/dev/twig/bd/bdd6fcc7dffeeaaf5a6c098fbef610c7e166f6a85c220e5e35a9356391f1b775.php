<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_ec6e713745fe3cdcc364126f20d7d21182c1ec6f77606d9a449917a7d2ba5011 extends Twig_Template
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
        $__internal_b96f2f719c0959cbde367fe3c7aa0d8b1008a1d5f3b052395ab6fa50713910ae = $this->env->getExtension("native_profiler");
        $__internal_b96f2f719c0959cbde367fe3c7aa0d8b1008a1d5f3b052395ab6fa50713910ae->enter($__internal_b96f2f719c0959cbde367fe3c7aa0d8b1008a1d5f3b052395ab6fa50713910ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b96f2f719c0959cbde367fe3c7aa0d8b1008a1d5f3b052395ab6fa50713910ae->leave($__internal_b96f2f719c0959cbde367fe3c7aa0d8b1008a1d5f3b052395ab6fa50713910ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
