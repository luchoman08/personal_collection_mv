<?php

/* VistaBundle:Default:pelicula.html.twig */
class __TwigTemplate_ac411d98b39970c48755a76cec0fc799aae885b4706964d6bb813e02d7a1ad1f extends Twig_Template
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
        echo "<h1>Busqueda: Paginas:";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "page", array()), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "total_pages", array()), "html", null, true);
        echo " Resultados:";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "total_results", array()), "html", null, true);
        echo " </h1><br/><br/>

";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "results", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pagina"]) {
            // line 4
            echo "
<h3>Datos Película: </h3>
<h4>Título:</h4>  ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["pagina"], "title", array()), "html", null, true);
            echo " </h4><br/>
<h4>Título Original: </h4> ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["pagina"], "original_title", array()), "html", null, true);
            echo " <br/>
<h4>Descripción: </h4> ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["pagina"], "overview", array()), "html", null, true);
            echo "<br/>
<h4>Fecha de Estreno: </h4> ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["pagina"], "release_date", array()), "html", null, true);
            echo " <br/>
<h4>Cantidad de Votos: </h4> ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["pagina"], "vote_count", array()), "html", null, true);
            echo "<br/>
<h4>Valoración Promedio: </h4> ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["pagina"], "vote_average", array()), "html", null, true);
            echo " <br/>
<h4>Popularidad: </h4> ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["pagina"], "popularity", array()), "html", null, true);
            echo " <br/><br/><br/>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagina'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "VistaBundle:Default:pelicula.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 12,  57 => 11,  53 => 10,  49 => 9,  45 => 8,  41 => 7,  37 => 6,  33 => 4,  29 => 3,  19 => 1,);
    }
}
/* <h1>Busqueda: Paginas:{{ params.page }} de {{ params.total_pages }} Resultados:{{ params.total_results }} </h1><br/><br/>*/
/* */
/* {% for pagina in params.results %}*/
/* */
/* <h3>Datos Película: </h3>*/
/* <h4>Título:</h4>  {{ pagina.title }} </h4><br/>*/
/* <h4>Título Original: </h4> {{ pagina.original_title }} <br/>*/
/* <h4>Descripción: </h4> {{ pagina.overview  }}<br/>*/
/* <h4>Fecha de Estreno: </h4> {{ pagina.release_date }} <br/>*/
/* <h4>Cantidad de Votos: </h4> {{ pagina.vote_count  }}<br/>*/
/* <h4>Valoración Promedio: </h4> {{ pagina.vote_average }} <br/>*/
/* <h4>Popularidad: </h4> {{ pagina.popularity }} <br/><br/><br/>*/
/* */
/* {% endfor %}*/
