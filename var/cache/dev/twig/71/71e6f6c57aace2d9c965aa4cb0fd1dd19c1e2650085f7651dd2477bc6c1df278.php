<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_6fa7ae6fbd0813b897e9511e115696289df3d1e62ca8431656f2dcf2455fb61d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_93c01c6593554cd9755388dffcb277100b256d0f53d167209560f6809324bb35 = $this->env->getExtension("native_profiler");
        $__internal_93c01c6593554cd9755388dffcb277100b256d0f53d167209560f6809324bb35->enter($__internal_93c01c6593554cd9755388dffcb277100b256d0f53d167209560f6809324bb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93c01c6593554cd9755388dffcb277100b256d0f53d167209560f6809324bb35->leave($__internal_93c01c6593554cd9755388dffcb277100b256d0f53d167209560f6809324bb35_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f072a8f764305a0805eed9f9c64cdf69d0e31872d925d967ca1d88af3ef27900 = $this->env->getExtension("native_profiler");
        $__internal_f072a8f764305a0805eed9f9c64cdf69d0e31872d925d967ca1d88af3ef27900->enter($__internal_f072a8f764305a0805eed9f9c64cdf69d0e31872d925d967ca1d88af3ef27900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f072a8f764305a0805eed9f9c64cdf69d0e31872d925d967ca1d88af3ef27900->leave($__internal_f072a8f764305a0805eed9f9c64cdf69d0e31872d925d967ca1d88af3ef27900_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_03464e23997fc95c4ae2d54e191fdd36535af852e75237c17c0842c5506b4826 = $this->env->getExtension("native_profiler");
        $__internal_03464e23997fc95c4ae2d54e191fdd36535af852e75237c17c0842c5506b4826->enter($__internal_03464e23997fc95c4ae2d54e191fdd36535af852e75237c17c0842c5506b4826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_03464e23997fc95c4ae2d54e191fdd36535af852e75237c17c0842c5506b4826->leave($__internal_03464e23997fc95c4ae2d54e191fdd36535af852e75237c17c0842c5506b4826_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
