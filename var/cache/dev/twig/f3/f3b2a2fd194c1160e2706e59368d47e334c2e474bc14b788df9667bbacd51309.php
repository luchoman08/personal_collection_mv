<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d7a72d3df61ad5fbb640bcf03119273b59484122aa041eb35199b451473a3138 extends Twig_Template
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
        $__internal_2a7165986192753ba35cabfe5d3c0a8e9f2ec455c3148600f2471d3a5e99d481 = $this->env->getExtension("native_profiler");
        $__internal_2a7165986192753ba35cabfe5d3c0a8e9f2ec455c3148600f2471d3a5e99d481->enter($__internal_2a7165986192753ba35cabfe5d3c0a8e9f2ec455c3148600f2471d3a5e99d481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_2a7165986192753ba35cabfe5d3c0a8e9f2ec455c3148600f2471d3a5e99d481->leave($__internal_2a7165986192753ba35cabfe5d3c0a8e9f2ec455c3148600f2471d3a5e99d481_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
