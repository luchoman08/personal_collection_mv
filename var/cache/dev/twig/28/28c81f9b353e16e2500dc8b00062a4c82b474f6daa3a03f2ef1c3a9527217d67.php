<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_8c24470f1bd801c76c07717149b99c979c7e1de912b84693f116a993b78de8ca extends Twig_Template
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
        $__internal_f2cf6e6bbe223f6ab628b84d28cc91915cb05eb0a84802c91f4e1a503d9302df = $this->env->getExtension("native_profiler");
        $__internal_f2cf6e6bbe223f6ab628b84d28cc91915cb05eb0a84802c91f4e1a503d9302df->enter($__internal_f2cf6e6bbe223f6ab628b84d28cc91915cb05eb0a84802c91f4e1a503d9302df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_f2cf6e6bbe223f6ab628b84d28cc91915cb05eb0a84802c91f4e1a503d9302df->leave($__internal_f2cf6e6bbe223f6ab628b84d28cc91915cb05eb0a84802c91f4e1a503d9302df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
