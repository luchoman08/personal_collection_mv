<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_8379af8526b0ac08341105371bfcb0defd3c328af35e48abd652a84e23533031 extends Twig_Template
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
        $__internal_c5d19a446f740bab9dea6abe23eceed1e344b8ba8970beffedef457ed78b0c22 = $this->env->getExtension("native_profiler");
        $__internal_c5d19a446f740bab9dea6abe23eceed1e344b8ba8970beffedef457ed78b0c22->enter($__internal_c5d19a446f740bab9dea6abe23eceed1e344b8ba8970beffedef457ed78b0c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_c5d19a446f740bab9dea6abe23eceed1e344b8ba8970beffedef457ed78b0c22->leave($__internal_c5d19a446f740bab9dea6abe23eceed1e344b8ba8970beffedef457ed78b0c22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
