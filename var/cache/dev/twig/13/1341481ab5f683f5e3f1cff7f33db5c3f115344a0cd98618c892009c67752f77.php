<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_53704245d61d3286f2a50f48105ffc65b7022ffec896cfb9f10d4c2df1be947a extends Twig_Template
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
        $__internal_08c743021517a1179f18751f015506d088ba6cd3e3d18e9b36626acc120c8698 = $this->env->getExtension("native_profiler");
        $__internal_08c743021517a1179f18751f015506d088ba6cd3e3d18e9b36626acc120c8698->enter($__internal_08c743021517a1179f18751f015506d088ba6cd3e3d18e9b36626acc120c8698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_08c743021517a1179f18751f015506d088ba6cd3e3d18e9b36626acc120c8698->leave($__internal_08c743021517a1179f18751f015506d088ba6cd3e3d18e9b36626acc120c8698_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
