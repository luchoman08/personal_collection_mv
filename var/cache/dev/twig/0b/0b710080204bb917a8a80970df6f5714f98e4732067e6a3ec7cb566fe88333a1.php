<?php

/* :usuarios:new.html.twig */
class __TwigTemplate_4f18c09eee1efe945719e38e68f78ed91c13c1c1d02b9dd83c252a3d9777ce1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":usuarios:new.html.twig", 1);
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
        $__internal_92556df598f6e440385e357c29a6bcd982e21ef00f95f20ddb1a8ee5e27b1bae = $this->env->getExtension("native_profiler");
        $__internal_92556df598f6e440385e357c29a6bcd982e21ef00f95f20ddb1a8ee5e27b1bae->enter($__internal_92556df598f6e440385e357c29a6bcd982e21ef00f95f20ddb1a8ee5e27b1bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":usuarios:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92556df598f6e440385e357c29a6bcd982e21ef00f95f20ddb1a8ee5e27b1bae->leave($__internal_92556df598f6e440385e357c29a6bcd982e21ef00f95f20ddb1a8ee5e27b1bae_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_00c3e14f72a82dc841a4b4ac4de200575a59f50a6a9e59188bf70d1a16fab44e = $this->env->getExtension("native_profiler");
        $__internal_00c3e14f72a82dc841a4b4ac4de200575a59f50a6a9e59188bf70d1a16fab44e->enter($__internal_00c3e14f72a82dc841a4b4ac4de200575a59f50a6a9e59188bf70d1a16fab44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_00c3e14f72a82dc841a4b4ac4de200575a59f50a6a9e59188bf70d1a16fab44e->leave($__internal_00c3e14f72a82dc841a4b4ac4de200575a59f50a6a9e59188bf70d1a16fab44e_prof);

    }

    public function getTemplateName()
    {
        return ":usuarios:new.html.twig";
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
