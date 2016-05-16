<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_cfa7d78942b80ca34b5fd005885eb844e5449785835891c832c3abf19d3129f4 extends Twig_Template
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
        $__internal_a26a1ae29decf9d60963a9e3dbc6eb02dfd6342b8ccaf2bce65d090a516327a1 = $this->env->getExtension("native_profiler");
        $__internal_a26a1ae29decf9d60963a9e3dbc6eb02dfd6342b8ccaf2bce65d090a516327a1->enter($__internal_a26a1ae29decf9d60963a9e3dbc6eb02dfd6342b8ccaf2bce65d090a516327a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a26a1ae29decf9d60963a9e3dbc6eb02dfd6342b8ccaf2bce65d090a516327a1->leave($__internal_a26a1ae29decf9d60963a9e3dbc6eb02dfd6342b8ccaf2bce65d090a516327a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
