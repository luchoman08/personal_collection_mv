<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_d40c573402c0315b4bde0483476563e8797806153dba325f1797df70ddf43e4c extends Twig_Template
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
        $__internal_9977540c4abac21fbd490250c05ae6f3f60f2f19f3f8524235133bc407bc6e22 = $this->env->getExtension("native_profiler");
        $__internal_9977540c4abac21fbd490250c05ae6f3f60f2f19f3f8524235133bc407bc6e22->enter($__internal_9977540c4abac21fbd490250c05ae6f3f60f2f19f3f8524235133bc407bc6e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_9977540c4abac21fbd490250c05ae6f3f60f2f19f3f8524235133bc407bc6e22->leave($__internal_9977540c4abac21fbd490250c05ae6f3f60f2f19f3f8524235133bc407bc6e22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
