<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_bc71280f56e9c3238f6d67c4032400998b6d66dd9885ca632770a2b325e448bc extends Twig_Template
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
        $__internal_7d823e086f3495ecf602e78536b0b312ce9d59d2161a87a310cb5cf60f34c8c0 = $this->env->getExtension("native_profiler");
        $__internal_7d823e086f3495ecf602e78536b0b312ce9d59d2161a87a310cb5cf60f34c8c0->enter($__internal_7d823e086f3495ecf602e78536b0b312ce9d59d2161a87a310cb5cf60f34c8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7d823e086f3495ecf602e78536b0b312ce9d59d2161a87a310cb5cf60f34c8c0->leave($__internal_7d823e086f3495ecf602e78536b0b312ce9d59d2161a87a310cb5cf60f34c8c0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
