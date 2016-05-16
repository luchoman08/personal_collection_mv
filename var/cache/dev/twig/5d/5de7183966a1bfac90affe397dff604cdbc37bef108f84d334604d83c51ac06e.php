<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_63607a9ace610fb312158fead3840179466803827932220a39820e9285a07ef5 extends Twig_Template
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
        $__internal_f0f83d3c071c78a39f37bd32096de0842ee6b4b3d7e939f9763bf598262cfe78 = $this->env->getExtension("native_profiler");
        $__internal_f0f83d3c071c78a39f37bd32096de0842ee6b4b3d7e939f9763bf598262cfe78->enter($__internal_f0f83d3c071c78a39f37bd32096de0842ee6b4b3d7e939f9763bf598262cfe78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f0f83d3c071c78a39f37bd32096de0842ee6b4b3d7e939f9763bf598262cfe78->leave($__internal_f0f83d3c071c78a39f37bd32096de0842ee6b4b3d7e939f9763bf598262cfe78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
