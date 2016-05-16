<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_a1fdd4357ec49bdd3fc5530e364e17a275dece21115c78e1597a5d263a5b6812 extends Twig_Template
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
        $__internal_9861028e84b2eef908fd24339ba923259577348f6a329189e32212f81f88bfc0 = $this->env->getExtension("native_profiler");
        $__internal_9861028e84b2eef908fd24339ba923259577348f6a329189e32212f81f88bfc0->enter($__internal_9861028e84b2eef908fd24339ba923259577348f6a329189e32212f81f88bfc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_9861028e84b2eef908fd24339ba923259577348f6a329189e32212f81f88bfc0->leave($__internal_9861028e84b2eef908fd24339ba923259577348f6a329189e32212f81f88bfc0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
