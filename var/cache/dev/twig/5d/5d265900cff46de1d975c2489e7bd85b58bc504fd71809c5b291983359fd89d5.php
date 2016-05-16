<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_89dd0a150d1954e5cc05799db16d109eccdbfb77204ddaaf0ee4393b178a1cbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ebcf88abc16484e10b2f78290b28f5885a1888c279871888b77d01326bbd15d6 = $this->env->getExtension("native_profiler");
        $__internal_ebcf88abc16484e10b2f78290b28f5885a1888c279871888b77d01326bbd15d6->enter($__internal_ebcf88abc16484e10b2f78290b28f5885a1888c279871888b77d01326bbd15d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebcf88abc16484e10b2f78290b28f5885a1888c279871888b77d01326bbd15d6->leave($__internal_ebcf88abc16484e10b2f78290b28f5885a1888c279871888b77d01326bbd15d6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f4c34bf38ea8ca567fdfdad91bbdef763d33c814ba5818f993536c431ffa5920 = $this->env->getExtension("native_profiler");
        $__internal_f4c34bf38ea8ca567fdfdad91bbdef763d33c814ba5818f993536c431ffa5920->enter($__internal_f4c34bf38ea8ca567fdfdad91bbdef763d33c814ba5818f993536c431ffa5920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f4c34bf38ea8ca567fdfdad91bbdef763d33c814ba5818f993536c431ffa5920->leave($__internal_f4c34bf38ea8ca567fdfdad91bbdef763d33c814ba5818f993536c431ffa5920_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a77f021dac2b09164d3c884465d9e2e4a654f3b57fc41ebf5bcb7b7ca2a663da = $this->env->getExtension("native_profiler");
        $__internal_a77f021dac2b09164d3c884465d9e2e4a654f3b57fc41ebf5bcb7b7ca2a663da->enter($__internal_a77f021dac2b09164d3c884465d9e2e4a654f3b57fc41ebf5bcb7b7ca2a663da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a77f021dac2b09164d3c884465d9e2e4a654f3b57fc41ebf5bcb7b7ca2a663da->leave($__internal_a77f021dac2b09164d3c884465d9e2e4a654f3b57fc41ebf5bcb7b7ca2a663da_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_358ac60866643d1b76ca82af0c6a968f720a1e766592dabecd1ed8a5e04477b1 = $this->env->getExtension("native_profiler");
        $__internal_358ac60866643d1b76ca82af0c6a968f720a1e766592dabecd1ed8a5e04477b1->enter($__internal_358ac60866643d1b76ca82af0c6a968f720a1e766592dabecd1ed8a5e04477b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_358ac60866643d1b76ca82af0c6a968f720a1e766592dabecd1ed8a5e04477b1->leave($__internal_358ac60866643d1b76ca82af0c6a968f720a1e766592dabecd1ed8a5e04477b1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
