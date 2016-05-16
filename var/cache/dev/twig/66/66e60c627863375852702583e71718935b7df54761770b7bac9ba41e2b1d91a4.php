<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f1391d0a18ff3e1c5773b65ba7bf45e354a81852a108943ec1bc58ace882166b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ebde614b3de09fa03f68b14ab19479f71afedbdcc405d6f5fbaac9a42b55dc90 = $this->env->getExtension("native_profiler");
        $__internal_ebde614b3de09fa03f68b14ab19479f71afedbdcc405d6f5fbaac9a42b55dc90->enter($__internal_ebde614b3de09fa03f68b14ab19479f71afedbdcc405d6f5fbaac9a42b55dc90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ebde614b3de09fa03f68b14ab19479f71afedbdcc405d6f5fbaac9a42b55dc90->leave($__internal_ebde614b3de09fa03f68b14ab19479f71afedbdcc405d6f5fbaac9a42b55dc90_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0e82033059436ddfdfe6af3d8eb09b598d8582b4d6d1ed6a0de4f9724008e026 = $this->env->getExtension("native_profiler");
        $__internal_0e82033059436ddfdfe6af3d8eb09b598d8582b4d6d1ed6a0de4f9724008e026->enter($__internal_0e82033059436ddfdfe6af3d8eb09b598d8582b4d6d1ed6a0de4f9724008e026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0e82033059436ddfdfe6af3d8eb09b598d8582b4d6d1ed6a0de4f9724008e026->leave($__internal_0e82033059436ddfdfe6af3d8eb09b598d8582b4d6d1ed6a0de4f9724008e026_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
