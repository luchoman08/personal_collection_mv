<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_8d69edac55f7acf5671cc04454519e775998224c03703d5fe88694ae0f06fd1a extends Twig_Template
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
        $__internal_ff4e23dd217ec2ba4afc4cb4991e15f7a105bacbcdd88e2c5c4cb56fb507350c = $this->env->getExtension("native_profiler");
        $__internal_ff4e23dd217ec2ba4afc4cb4991e15f7a105bacbcdd88e2c5c4cb56fb507350c->enter($__internal_ff4e23dd217ec2ba4afc4cb4991e15f7a105bacbcdd88e2c5c4cb56fb507350c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_ff4e23dd217ec2ba4afc4cb4991e15f7a105bacbcdd88e2c5c4cb56fb507350c->leave($__internal_ff4e23dd217ec2ba4afc4cb4991e15f7a105bacbcdd88e2c5c4cb56fb507350c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
