<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_1d826cdf50d5da45de39da93679512be1b1bdc5c5876e147f2b56530f9952474 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1e6cafd47810406b3199fc34b0efe601cf7c7f203f5ac6c29c5784ffedad05e = $this->env->getExtension("native_profiler");
        $__internal_d1e6cafd47810406b3199fc34b0efe601cf7c7f203f5ac6c29c5784ffedad05e->enter($__internal_d1e6cafd47810406b3199fc34b0efe601cf7c7f203f5ac6c29c5784ffedad05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1e6cafd47810406b3199fc34b0efe601cf7c7f203f5ac6c29c5784ffedad05e->leave($__internal_d1e6cafd47810406b3199fc34b0efe601cf7c7f203f5ac6c29c5784ffedad05e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_807d10079ac1497b922c9d10d7724d01b978ebe711c4e5b6b1d5ccd5302ccc43 = $this->env->getExtension("native_profiler");
        $__internal_807d10079ac1497b922c9d10d7724d01b978ebe711c4e5b6b1d5ccd5302ccc43->enter($__internal_807d10079ac1497b922c9d10d7724d01b978ebe711c4e5b6b1d5ccd5302ccc43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_807d10079ac1497b922c9d10d7724d01b978ebe711c4e5b6b1d5ccd5302ccc43->leave($__internal_807d10079ac1497b922c9d10d7724d01b978ebe711c4e5b6b1d5ccd5302ccc43_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2038c6f4c3318499d31711794cdf753382ac5104dff912bc14e96a634932ae16 = $this->env->getExtension("native_profiler");
        $__internal_2038c6f4c3318499d31711794cdf753382ac5104dff912bc14e96a634932ae16->enter($__internal_2038c6f4c3318499d31711794cdf753382ac5104dff912bc14e96a634932ae16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2038c6f4c3318499d31711794cdf753382ac5104dff912bc14e96a634932ae16->leave($__internal_2038c6f4c3318499d31711794cdf753382ac5104dff912bc14e96a634932ae16_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_54708f3859a39deb1d6c55e5e9ba2a2c8568808cca26e4537d54105b69a55e55 = $this->env->getExtension("native_profiler");
        $__internal_54708f3859a39deb1d6c55e5e9ba2a2c8568808cca26e4537d54105b69a55e55->enter($__internal_54708f3859a39deb1d6c55e5e9ba2a2c8568808cca26e4537d54105b69a55e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_54708f3859a39deb1d6c55e5e9ba2a2c8568808cca26e4537d54105b69a55e55->leave($__internal_54708f3859a39deb1d6c55e5e9ba2a2c8568808cca26e4537d54105b69a55e55_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
