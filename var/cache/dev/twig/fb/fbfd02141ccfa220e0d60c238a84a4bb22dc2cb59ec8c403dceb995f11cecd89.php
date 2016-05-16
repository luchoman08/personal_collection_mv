<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_ca28bf48dc4387a81c40e9b3bcb885e187e9468e099a81273f727f9d1cfb5c03 extends Twig_Template
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
        $__internal_3a5b1a1aec894f43fe42a9bfbe11ebd00718d9e5c17e7a382e903daeaebd5ccb = $this->env->getExtension("native_profiler");
        $__internal_3a5b1a1aec894f43fe42a9bfbe11ebd00718d9e5c17e7a382e903daeaebd5ccb->enter($__internal_3a5b1a1aec894f43fe42a9bfbe11ebd00718d9e5c17e7a382e903daeaebd5ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_3a5b1a1aec894f43fe42a9bfbe11ebd00718d9e5c17e7a382e903daeaebd5ccb->leave($__internal_3a5b1a1aec894f43fe42a9bfbe11ebd00718d9e5c17e7a382e903daeaebd5ccb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
