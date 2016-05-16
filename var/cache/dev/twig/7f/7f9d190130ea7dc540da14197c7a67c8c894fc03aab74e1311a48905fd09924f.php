<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_acea22401ed2c79320ea4d72cdffc1bc8946f14036333f8622068aa6b59e4a6b extends Twig_Template
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
        $__internal_82e58b76c497529115736a62b3006281d03b2e9fc602d587a598fd6653137cda = $this->env->getExtension("native_profiler");
        $__internal_82e58b76c497529115736a62b3006281d03b2e9fc602d587a598fd6653137cda->enter($__internal_82e58b76c497529115736a62b3006281d03b2e9fc602d587a598fd6653137cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_82e58b76c497529115736a62b3006281d03b2e9fc602d587a598fd6653137cda->leave($__internal_82e58b76c497529115736a62b3006281d03b2e9fc602d587a598fd6653137cda_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
