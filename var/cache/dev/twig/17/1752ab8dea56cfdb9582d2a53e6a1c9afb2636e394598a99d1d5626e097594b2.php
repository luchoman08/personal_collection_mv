<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_c90a594e0d5ed495700ef4b56275e51e8a56cd0fb33fa7cbcf2178ea5ac5c1af extends Twig_Template
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
        $__internal_513e786cd6f42d25034b8f8c055157e51bf441f5aac3dc245f9df4cff0f5beb2 = $this->env->getExtension("native_profiler");
        $__internal_513e786cd6f42d25034b8f8c055157e51bf441f5aac3dc245f9df4cff0f5beb2->enter($__internal_513e786cd6f42d25034b8f8c055157e51bf441f5aac3dc245f9df4cff0f5beb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_513e786cd6f42d25034b8f8c055157e51bf441f5aac3dc245f9df4cff0f5beb2->leave($__internal_513e786cd6f42d25034b8f8c055157e51bf441f5aac3dc245f9df4cff0f5beb2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
