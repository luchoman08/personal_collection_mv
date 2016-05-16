<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_bf3f4dbf056fd1da3f805763a458ea89fda483fd03a53f550ee0f77306213ef8 extends Twig_Template
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
        $__internal_d9b1f3bc2fc2528e3642f98841a48af0a8f98ce4dd2a5965fc606503bac41e94 = $this->env->getExtension("native_profiler");
        $__internal_d9b1f3bc2fc2528e3642f98841a48af0a8f98ce4dd2a5965fc606503bac41e94->enter($__internal_d9b1f3bc2fc2528e3642f98841a48af0a8f98ce4dd2a5965fc606503bac41e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_d9b1f3bc2fc2528e3642f98841a48af0a8f98ce4dd2a5965fc606503bac41e94->leave($__internal_d9b1f3bc2fc2528e3642f98841a48af0a8f98ce4dd2a5965fc606503bac41e94_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
