<?php

/* VistaBundle:Default:listas.html.twig */
class __TwigTemplate_bf822307f36f32521a8309ed87e71317c4c5e554668ed420c57f7591fe135f5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "VistaBundle:Default:listas.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'loginoptions' => array($this, 'block_loginoptions'),
            'contenido' => array($this, 'block_contenido'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " QMP - Resultados de busqueda ";
    }

    // line 3
    public function block_loginoptions($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (((isset($context["usuarioLogueado"]) ? $context["usuarioLogueado"] : null) == 1)) {
            // line 5
            echo "
            <a href=\"";
            // line 6
            echo $this->env->getExtension('routing')->getUrl("usuario");
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["nickname"]) ? $context["nickname"] : null), "html", null, true);
            echo "</a> | <a href=\"";
            echo $this->env->getExtension('routing')->getUrl("logout_action");
            echo "\">Salir</a>
       
    ";
        } else {
            // line 8
            echo " 

        ";
            // line 10
            $this->displayParentBlock("loginoptions", $context, $blocks);
            echo " 
    
    ";
        }
    }

    // line 14
    public function block_contenido($context, array $blocks = array())
    {
        // line 15
        echo "    
    <h3> Listas personalizadas </h3>
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["listacolecciones"]) ? $context["listacolecciones"] : null), "listaColecciones", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["coleccion"]) {
            // line 18
            echo "        <div class=\"elementoLista\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "nombre", array()), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coleccion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    
    <br/>

";
    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        // line 26
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "VistaBundle:Default:listas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 26,  95 => 25,  88 => 20,  79 => 18,  75 => 17,  71 => 15,  68 => 14,  60 => 10,  56 => 8,  46 => 6,  43 => 5,  40 => 4,  37 => 3,  31 => 2,  11 => 1,);
    }
}
/* {%extends 'index.html.twig'%}*/
/* {%block title%} QMP - Resultados de busqueda {%endblock%}*/
/* {%block loginoptions%}*/
/*     {% if usuarioLogueado == 1  %}*/
/* */
/*             <a href="{{url('usuario')}}">{{nickname}}</a> | <a href="{{url('logout_action')}}">Salir</a>*/
/*        */
/*     {% else %} */
/* */
/*         {{parent()}} */
/*     */
/*     {% endif %}*/
/* {% endblock %}*/
/* {% block contenido %}*/
/*     */
/*     <h3> Listas personalizadas </h3>*/
/*     {% for coleccion in listacolecciones.listaColecciones %}*/
/*         <div class="elementoLista">{{coleccion.nombre}}</div>*/
/*     {% endfor %}*/
/*     */
/*     <br/>*/
/* */
/* {% endblock %}*/
/* */
/* {%block javascripts%}*/
/*  {{ parent() }}*/
/* {%endblock%}*/
