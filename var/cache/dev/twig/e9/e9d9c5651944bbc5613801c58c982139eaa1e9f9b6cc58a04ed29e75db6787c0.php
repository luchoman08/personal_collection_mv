<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_ee4498728efeb6c745f17855cd8628fba2bb3a3195c2f30a3aaed54535b93d6f extends Twig_Template
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
        $__internal_3773499601577af9448fd99f2aa64d23a82ea8dfbd1f9a341f2ae63506d1ec95 = $this->env->getExtension("native_profiler");
        $__internal_3773499601577af9448fd99f2aa64d23a82ea8dfbd1f9a341f2ae63506d1ec95->enter($__internal_3773499601577af9448fd99f2aa64d23a82ea8dfbd1f9a341f2ae63506d1ec95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3773499601577af9448fd99f2aa64d23a82ea8dfbd1f9a341f2ae63506d1ec95->leave($__internal_3773499601577af9448fd99f2aa64d23a82ea8dfbd1f9a341f2ae63506d1ec95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
