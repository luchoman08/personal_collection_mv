<?php

/* VistaBundle:Default:elegirGenero.html.twig */
class __TwigTemplate_cfad4655d73f25b7380b72a22da287b5da1e0861d74bfe9a9724cffca761a547 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "VistaBundle:Default:elegirGenero.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        body{
            background-color:#fff;
            margin: 0px 0px 0px 0px;
        }
        
        /*body div {
            border-style:solid;
            border-color:#000;
        }*/
    </style>
";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "<div class=\"elegirGenero-contenedor\">
    
    ";
        // line 20
        if (((isset($context["error"]) ? $context["error"] : null) == 1)) {
            // line 21
            echo "\t\t<div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
  \t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
  \t\t\t<strong>Error!</strong> Debe seleccionar almenos uno.
\t\t</div>
\t";
        }
        // line 26
        echo "    
    <div class=\"row\">
        <div class=\"col-sm-5\">
            <h2> Bienvenido a QMP </h2>
            <h5>Ellige tus géneros favoritos:</h5>
            <form method = \"POST\" action=\"";
        // line 31
        echo $this->env->getExtension('routing')->getUrl("registro_generos_action");
        echo "\">
            ";
        // line 32
        $context["contador_generos"] = 0;
        // line 33
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "genres", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["genero"]) {
            // line 34
            echo "            <div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" value=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["genero"], "id", array()), "html", null, true);
            echo "\" name=\"genero_";
            echo twig_escape_filter($this->env, (isset($context["contador_generos"]) ? $context["contador_generos"] : null), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["genero"], "name", array()), "html", null, true);
            echo "
                </label>
            </div>
            ";
            // line 39
            $context["contador_generos"] = ((isset($context["contador_generos"]) ? $context["contador_generos"] : null) + 1);
            // line 40
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genero'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "            <input type=\"submit\" class=\"btn btn-primary\" type=\"button\" value=\"Continuar\">
            </form>
        </div>

        <div class=\"col-sm-5 imagen-generos\">
            <img src=\"http://images6.fanpop.com/image/photos/37600000/Transparent-Baymax-big-hero-6-37653147-347-500.png\" />
        </div>
        
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "VistaBundle:Default:elegirGenero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 41,  100 => 40,  98 => 39,  88 => 36,  84 => 34,  79 => 33,  77 => 32,  73 => 31,  66 => 26,  59 => 21,  57 => 20,  53 => 18,  50 => 17,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <style>*/
/*         body{*/
/*             background-color:#fff;*/
/*             margin: 0px 0px 0px 0px;*/
/*         }*/
/*         */
/*         /*body div {*/
/*             border-style:solid;*/
/*             border-color:#000;*/
/*         }*//* */
/*     </style>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <div class="elegirGenero-contenedor">*/
/*     */
/*     {%if error == 1%}*/
/* 		<div class="alert alert-danger alert-dismissible" role="alert">*/
/*   			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*   			<strong>Error!</strong> Debe seleccionar almenos uno.*/
/* 		</div>*/
/* 	{%endif%}*/
/*     */
/*     <div class="row">*/
/*         <div class="col-sm-5">*/
/*             <h2> Bienvenido a QMP </h2>*/
/*             <h5>Ellige tus géneros favoritos:</h5>*/
/*             <form method = "POST" action="{{url('registro_generos_action')}}">*/
/*             {% set contador_generos = 0 %}*/
/*             {% for genero in params.genres %}*/
/*             <div class="checkbox">*/
/*                 <label>*/
/*                     <input type="checkbox" value="{{genero.id}}" name="genero_{{contador_generos}}"> {{genero.name}}*/
/*                 </label>*/
/*             </div>*/
/*             {% set contador_generos = contador_generos + 1 %}*/
/*             {% endfor %}*/
/*             <input type="submit" class="btn btn-primary" type="button" value="Continuar">*/
/*             </form>*/
/*         </div>*/
/* */
/*         <div class="col-sm-5 imagen-generos">*/
/*             <img src="http://images6.fanpop.com/image/photos/37600000/Transparent-Baymax-big-hero-6-37653147-347-500.png" />*/
/*         </div>*/
/*         */
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
