<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_f135db3e582dfcce7100db0fe8c1321203953dee5f62c13c76c13c14b6edce65 extends Twig_Template
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
        $__internal_e14c0a3880c8b4d89f9954a5b5638d55b49faee2da2831f6cdc5097ba8ea92a9 = $this->env->getExtension("native_profiler");
        $__internal_e14c0a3880c8b4d89f9954a5b5638d55b49faee2da2831f6cdc5097ba8ea92a9->enter($__internal_e14c0a3880c8b4d89f9954a5b5638d55b49faee2da2831f6cdc5097ba8ea92a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_e14c0a3880c8b4d89f9954a5b5638d55b49faee2da2831f6cdc5097ba8ea92a9->leave($__internal_e14c0a3880c8b4d89f9954a5b5638d55b49faee2da2831f6cdc5097ba8ea92a9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
