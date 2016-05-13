<?php

/* usuarios/new.html.twig */
class __TwigTemplate_2cd67e8737f2cae7c4100809e16b9a402665323134cc6aee909c1f8a765b5e06 extends Twig_Template
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
        $__internal_ac81f3e891d7e5a92a2ce6f616c04ec6bc395a02ba48f8f592607cca1580fd26 = $this->env->getExtension("native_profiler");
        $__internal_ac81f3e891d7e5a92a2ce6f616c04ec6bc395a02ba48f8f592607cca1580fd26->enter($__internal_ac81f3e891d7e5a92a2ce6f616c04ec6bc395a02ba48f8f592607cca1580fd26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuarios/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac81f3e891d7e5a92a2ce6f616c04ec6bc395a02ba48f8f592607cca1580fd26->leave($__internal_ac81f3e891d7e5a92a2ce6f616c04ec6bc395a02ba48f8f592607cca1580fd26_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3620c58f327a430c217587390cb902077e7d91f939fbcc7e18bd0dd03f8555ae = $this->env->getExtension("native_profiler");
        $__internal_3620c58f327a430c217587390cb902077e7d91f939fbcc7e18bd0dd03f8555ae->enter($__internal_3620c58f327a430c217587390cb902077e7d91f939fbcc7e18bd0dd03f8555ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Usuarios creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("usuarios_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_3620c58f327a430c217587390cb902077e7d91f939fbcc7e18bd0dd03f8555ae->leave($__internal_3620c58f327a430c217587390cb902077e7d91f939fbcc7e18bd0dd03f8555ae_prof);

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
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Usuarios creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
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
