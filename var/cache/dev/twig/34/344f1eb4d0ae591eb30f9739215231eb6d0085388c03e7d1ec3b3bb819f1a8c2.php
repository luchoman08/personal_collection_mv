<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_b464f89c789ebbf6efa8e87effe97a665db28fef56c83d4f1c3a7721ddd776c7 extends Twig_Template
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
        $__internal_39228781560fedfaa36221f0fb0f6fa1bf87f9713ab8aeb225fb5dc571240d71 = $this->env->getExtension("native_profiler");
        $__internal_39228781560fedfaa36221f0fb0f6fa1bf87f9713ab8aeb225fb5dc571240d71->enter($__internal_39228781560fedfaa36221f0fb0f6fa1bf87f9713ab8aeb225fb5dc571240d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_39228781560fedfaa36221f0fb0f6fa1bf87f9713ab8aeb225fb5dc571240d71->leave($__internal_39228781560fedfaa36221f0fb0f6fa1bf87f9713ab8aeb225fb5dc571240d71_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
