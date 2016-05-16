<?php

/* APITheMovieDataBaseBundle:Default:index.html.twig */
class __TwigTemplate_24def76172f287e4797ad9da21cb7b42c6a2911313174ee8453b7dfe83e6dda5 extends Twig_Template
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
        $__internal_192848e11c2abf1c64167da17aa017d20d59cf11ea0182daaed6b41e77f7091f = $this->env->getExtension("native_profiler");
        $__internal_192848e11c2abf1c64167da17aa017d20d59cf11ea0182daaed6b41e77f7091f->enter($__internal_192848e11c2abf1c64167da17aa017d20d59cf11ea0182daaed6b41e77f7091f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "APITheMovieDataBaseBundle:Default:index.html.twig"));

        // line 1
        echo "
Hello World! > API

";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "genres", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["genero"]) {
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["genero"], "id", array()), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["genero"], "name", array()), "html", null, true);
            echo " <br />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genero'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_192848e11c2abf1c64167da17aa017d20d59cf11ea0182daaed6b41e77f7091f->leave($__internal_192848e11c2abf1c64167da17aa017d20d59cf11ea0182daaed6b41e77f7091f_prof);

    }

    public function getTemplateName()
    {
        return "APITheMovieDataBaseBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* */
/* Hello World! > API*/
/* */
/* {% for genero in params.genres %}*/
/* {{ genero.id  }}  {{ genero.name  }} <br />*/
/* {% endfor %}*/
