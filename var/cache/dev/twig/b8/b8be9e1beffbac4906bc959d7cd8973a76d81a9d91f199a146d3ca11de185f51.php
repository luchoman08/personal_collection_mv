<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_5e13fba4cd4f1918a835f67ca2f4d763a1d56dca9b9b898c9ec113c67e05141c extends Twig_Template
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
        $__internal_8acc893385c07be3d7c00667de657ee7407b1825f6b46f7e14a408eb9a5f44dd = $this->env->getExtension("native_profiler");
        $__internal_8acc893385c07be3d7c00667de657ee7407b1825f6b46f7e14a408eb9a5f44dd->enter($__internal_8acc893385c07be3d7c00667de657ee7407b1825f6b46f7e14a408eb9a5f44dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_8acc893385c07be3d7c00667de657ee7407b1825f6b46f7e14a408eb9a5f44dd->leave($__internal_8acc893385c07be3d7c00667de657ee7407b1825f6b46f7e14a408eb9a5f44dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
