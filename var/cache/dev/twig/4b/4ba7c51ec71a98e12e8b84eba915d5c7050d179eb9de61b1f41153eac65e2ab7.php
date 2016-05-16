<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_3d2775835f809195b7bff2e2206ac1fd1be1bcfa5a6f03dd9174ba4f25acc62e extends Twig_Template
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
        $__internal_3f5267730ef12c893bfe731a3d26fece0295cd05d5c1c64d43ef3a76e6a01e7e = $this->env->getExtension("native_profiler");
        $__internal_3f5267730ef12c893bfe731a3d26fece0295cd05d5c1c64d43ef3a76e6a01e7e->enter($__internal_3f5267730ef12c893bfe731a3d26fece0295cd05d5c1c64d43ef3a76e6a01e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_3f5267730ef12c893bfe731a3d26fece0295cd05d5c1c64d43ef3a76e6a01e7e->leave($__internal_3f5267730ef12c893bfe731a3d26fece0295cd05d5c1c64d43ef3a76e6a01e7e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
