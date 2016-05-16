<?php

/* :usuarios:edit.html.twig */
class __TwigTemplate_341d825ef6cac0886e6bd3e0a867779060033e2866e614f2704e1d821fd03986 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":usuarios:edit.html.twig", 1);
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
        $__internal_60ee5cfe603ef0d62faa9a70dd539bac6e5dd54fdd7db50eee1bd5e8eef62f54 = $this->env->getExtension("native_profiler");
        $__internal_60ee5cfe603ef0d62faa9a70dd539bac6e5dd54fdd7db50eee1bd5e8eef62f54->enter($__internal_60ee5cfe603ef0d62faa9a70dd539bac6e5dd54fdd7db50eee1bd5e8eef62f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":usuarios:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60ee5cfe603ef0d62faa9a70dd539bac6e5dd54fdd7db50eee1bd5e8eef62f54->leave($__internal_60ee5cfe603ef0d62faa9a70dd539bac6e5dd54fdd7db50eee1bd5e8eef62f54_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_068f3036db9d35a9cdc01f64ce38012b641ef262e4a06241b7ac41db178e2536 = $this->env->getExtension("native_profiler");
        $__internal_068f3036db9d35a9cdc01f64ce38012b641ef262e4a06241b7ac41db178e2536->enter($__internal_068f3036db9d35a9cdc01f64ce38012b641ef262e4a06241b7ac41db178e2536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Usuarios edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("usuarios_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_068f3036db9d35a9cdc01f64ce38012b641ef262e4a06241b7ac41db178e2536->leave($__internal_068f3036db9d35a9cdc01f64ce38012b641ef262e4a06241b7ac41db178e2536_prof);

    }

    public function getTemplateName()
    {
        return ":usuarios:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Usuarios edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('usuarios_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
