<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_01224911102c1708b2ebbb5b3757da8f9eb9e99f286605239ec713c17ae12fc0 extends Twig_Template
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
        $__internal_d45b1213794e7db8ed4fc97996cfff96ce9081506929f17303dfb9d279362ca2 = $this->env->getExtension("native_profiler");
        $__internal_d45b1213794e7db8ed4fc97996cfff96ce9081506929f17303dfb9d279362ca2->enter($__internal_d45b1213794e7db8ed4fc97996cfff96ce9081506929f17303dfb9d279362ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d45b1213794e7db8ed4fc97996cfff96ce9081506929f17303dfb9d279362ca2->leave($__internal_d45b1213794e7db8ed4fc97996cfff96ce9081506929f17303dfb9d279362ca2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
