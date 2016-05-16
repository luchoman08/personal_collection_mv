<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_859fc7a392e1a5c9bc4bd0b20ef8351766f575f08f3da1e94c0926483c7cc0f3 extends Twig_Template
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
        $__internal_30e363fe5061a635d8909914857e1c9b3a251d06b39a3871246366fdc04e43ad = $this->env->getExtension("native_profiler");
        $__internal_30e363fe5061a635d8909914857e1c9b3a251d06b39a3871246366fdc04e43ad->enter($__internal_30e363fe5061a635d8909914857e1c9b3a251d06b39a3871246366fdc04e43ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_30e363fe5061a635d8909914857e1c9b3a251d06b39a3871246366fdc04e43ad->leave($__internal_30e363fe5061a635d8909914857e1c9b3a251d06b39a3871246366fdc04e43ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
