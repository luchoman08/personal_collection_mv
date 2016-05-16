<?php

/* APITheMovieDataBaseBundle:Default:index.html.twig */
class __TwigTemplate_5850798e372ccda8bee53a2a89b554237264718fe245e9e115b88c4c9e8a5ffd extends Twig_Template
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
        // line 1
        echo "
Hello World! > API

";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "genres", array()));
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
        return array (  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* */
/* Hello World! > API*/
/* */
/* {% for genero in params.genres %}*/
/* {{ genero.id  }}  {{ genero.name  }} <br />*/
/* {% endfor %}*/
