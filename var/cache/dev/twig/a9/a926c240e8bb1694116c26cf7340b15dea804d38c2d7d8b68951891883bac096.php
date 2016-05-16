<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_2a43535f2e6afd5a9ef6b2784e6e83cfb9ab8fecab8fa92117a2b5be9c034ec0 extends Twig_Template
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
        $__internal_49defda9ab16096e6a3fe89a290098c7cb3105f5294a9deed69296b230d09047 = $this->env->getExtension("native_profiler");
        $__internal_49defda9ab16096e6a3fe89a290098c7cb3105f5294a9deed69296b230d09047->enter($__internal_49defda9ab16096e6a3fe89a290098c7cb3105f5294a9deed69296b230d09047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_49defda9ab16096e6a3fe89a290098c7cb3105f5294a9deed69296b230d09047->leave($__internal_49defda9ab16096e6a3fe89a290098c7cb3105f5294a9deed69296b230d09047_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
