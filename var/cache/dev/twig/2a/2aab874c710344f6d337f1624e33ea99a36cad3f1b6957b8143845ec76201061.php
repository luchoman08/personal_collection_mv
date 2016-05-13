<?php

/* usuarios/new.html.twig */
class __TwigTemplate_8b08ac2ff9ae42ee40e6178e41ba61707617de035a699e2758f9b5f8209c5db8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "usuarios/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a132522988c16d0894b6a09c3c8fd9a702c386a9a62748040b1d1e6961e20d84 = $this->env->getExtension("native_profiler");
        $__internal_a132522988c16d0894b6a09c3c8fd9a702c386a9a62748040b1d1e6961e20d84->enter($__internal_a132522988c16d0894b6a09c3c8fd9a702c386a9a62748040b1d1e6961e20d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuarios/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a132522988c16d0894b6a09c3c8fd9a702c386a9a62748040b1d1e6961e20d84->leave($__internal_a132522988c16d0894b6a09c3c8fd9a702c386a9a62748040b1d1e6961e20d84_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b8aa05fcbc6bc3ee2436c8718fba87ddbb0d43204e289ee77d3a0461ced9036 = $this->env->getExtension("native_profiler");
        $__internal_5b8aa05fcbc6bc3ee2436c8718fba87ddbb0d43204e289ee77d3a0461ced9036->enter($__internal_5b8aa05fcbc6bc3ee2436c8718fba87ddbb0d43204e289ee77d3a0461ced9036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Usuarios creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label', array("label_attr" => array("class" => "foo"), "label" => "Your Name"));
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "


        <input type=\"submit\" value=\"Create\" />
    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("usuarios_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_5b8aa05fcbc6bc3ee2436c8718fba87ddbb0d43204e289ee77d3a0461ced9036->leave($__internal_5b8aa05fcbc6bc3ee2436c8718fba87ddbb0d43204e289ee77d3a0461ced9036_prof);

    }

    public function getTemplateName()
    {
        return "usuarios/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 16,  59 => 12,  52 => 8,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Usuarios creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*     {{ form_label(form.nombre, 'Your Name', {'label_attr': {'class': 'foo'}}) }}*/
/*         {{ form_widget(form) }}*/
/* */
/* */
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('usuarios_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
