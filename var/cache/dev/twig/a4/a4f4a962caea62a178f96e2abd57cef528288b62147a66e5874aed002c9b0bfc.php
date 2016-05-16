<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_5a0e64014c9d445fec6c77ea1c91470c101286b34d76127a29010d30e1abe07e extends Twig_Template
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
        $__internal_ad6e022a2d05c41f9886154e9b9086d011186d28ac6e7b9cafce7e6b52d46d72 = $this->env->getExtension("native_profiler");
        $__internal_ad6e022a2d05c41f9886154e9b9086d011186d28ac6e7b9cafce7e6b52d46d72->enter($__internal_ad6e022a2d05c41f9886154e9b9086d011186d28ac6e7b9cafce7e6b52d46d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ad6e022a2d05c41f9886154e9b9086d011186d28ac6e7b9cafce7e6b52d46d72->leave($__internal_ad6e022a2d05c41f9886154e9b9086d011186d28ac6e7b9cafce7e6b52d46d72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
