<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_083258016fb6bd213172dc97fb5cf46c0e91a8f15208a4024fb08ee1cc11d8a6 extends Twig_Template
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
        $__internal_6e7f18be8bdd916aecce81e513bc7403ece2ddad820ece2b56e1ac67e8ddcadd = $this->env->getExtension("native_profiler");
        $__internal_6e7f18be8bdd916aecce81e513bc7403ece2ddad820ece2b56e1ac67e8ddcadd->enter($__internal_6e7f18be8bdd916aecce81e513bc7403ece2ddad820ece2b56e1ac67e8ddcadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6e7f18be8bdd916aecce81e513bc7403ece2ddad820ece2b56e1ac67e8ddcadd->leave($__internal_6e7f18be8bdd916aecce81e513bc7403ece2ddad820ece2b56e1ac67e8ddcadd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
