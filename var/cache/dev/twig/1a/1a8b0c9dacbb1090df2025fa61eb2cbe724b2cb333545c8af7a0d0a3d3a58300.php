<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_504f7594d505637f75c611d1adb57e6b2190e90a343c5ee6501c442587dc195a extends Twig_Template
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
        $__internal_6aeff70ebf89430433b055cfb8e2393a3d2a073f9a8adfd580989f344642a429 = $this->env->getExtension("native_profiler");
        $__internal_6aeff70ebf89430433b055cfb8e2393a3d2a073f9a8adfd580989f344642a429->enter($__internal_6aeff70ebf89430433b055cfb8e2393a3d2a073f9a8adfd580989f344642a429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6aeff70ebf89430433b055cfb8e2393a3d2a073f9a8adfd580989f344642a429->leave($__internal_6aeff70ebf89430433b055cfb8e2393a3d2a073f9a8adfd580989f344642a429_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
