<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_10dc0c5be2d27d1252f8a8281a9f221d51921ad52cf99a7911f9e55c029a45c3 extends Twig_Template
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
        $__internal_efc6c11d0ce0e249556db0d7207fe2d6ddbac2f0e44d3bd23a96b3b5d8d58f9a = $this->env->getExtension("native_profiler");
        $__internal_efc6c11d0ce0e249556db0d7207fe2d6ddbac2f0e44d3bd23a96b3b5d8d58f9a->enter($__internal_efc6c11d0ce0e249556db0d7207fe2d6ddbac2f0e44d3bd23a96b3b5d8d58f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_efc6c11d0ce0e249556db0d7207fe2d6ddbac2f0e44d3bd23a96b3b5d8d58f9a->leave($__internal_efc6c11d0ce0e249556db0d7207fe2d6ddbac2f0e44d3bd23a96b3b5d8d58f9a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
