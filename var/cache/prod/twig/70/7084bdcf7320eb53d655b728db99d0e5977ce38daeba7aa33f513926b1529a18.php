<?php

/* VistaBundle:Default:administrador.html.twig */
class __TwigTemplate_90c717f650e0fb9d817713dcf03c03a91ac409ec91bb2cbf3f11e7e986e7a100 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "VistaBundle:Default:administrador.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'loginoptions' => array($this, 'block_loginoptions'),
            'classcontenido' => array($this, 'block_classcontenido'),
            'contenido' => array($this, 'block_contenido'),
            'barraderecha' => array($this, 'block_barraderecha'),
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
        echo " QMP - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nombres", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "apellidos", array()), "html", null, true);
        echo " ";
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
    public function block_classcontenido($context, array $blocks = array())
    {
        echo "col-md-12 fondoContenido";
    }

    // line 15
    public function block_contenido($context, array $blocks = array())
    {
        // line 16
        echo "
 <div class=\"menu-pelicula-border-black\">
                <ul class=\"menu-pelicula-tab\">
                    <li class=\"active\"><a data-toggle=\"tab\" href=\"#totalvistas\">Administracion de usuarios&nbsp;</a></li>
                </ul>
            </div>

            
            <div class=\"tab-content\">
                <div id=\"totalvistas\" class=\"tab-pane fade in active\">
                    <object style=\"overflow-x:false;\" width=\"100%\" height=\"900\"  data=\"";
        // line 26
        echo $this->env->getExtension('routing')->getUrl("usuarios_index");
        echo "\"></object>
                </div>

                <div id=\"generosvistos\" class=\"tab-pane fade\">
                   
                </div>
               
          
    </div>
  
";
    }

    // line 38
    public function block_barraderecha($context, array $blocks = array())
    {
        // line 39
        echo "

";
    }

    public function getTemplateName()
    {
        return "VistaBundle:Default:administrador.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 39,  109 => 38,  94 => 26,  82 => 16,  79 => 15,  73 => 14,  65 => 10,  61 => 8,  51 => 6,  48 => 5,  45 => 4,  42 => 3,  32 => 2,  11 => 1,);
    }
}
/* {%extends 'index.html.twig'%}*/
/* {%block title%} QMP - {{usuario.nombres}} {{usuario.apellidos}} {%endblock%}*/
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
/* {% block classcontenido %}col-md-12 fondoContenido{% endblock %}*/
/* {% block contenido %}*/
/* */
/*  <div class="menu-pelicula-border-black">*/
/*                 <ul class="menu-pelicula-tab">*/
/*                     <li class="active"><a data-toggle="tab" href="#totalvistas">Administracion de usuarios&nbsp;</a></li>*/
/*                 </ul>*/
/*             </div>*/
/* */
/*             */
/*             <div class="tab-content">*/
/*                 <div id="totalvistas" class="tab-pane fade in active">*/
/*                     <object style="overflow-x:false;" width="100%" height="900"  data="{{url('usuarios_index')}}"></object>*/
/*                 </div>*/
/* */
/*                 <div id="generosvistos" class="tab-pane fade">*/
/*                    */
/*                 </div>*/
/*                */
/*           */
/*     </div>*/
/*   */
/* {% endblock %}*/
/* */
/* {% block barraderecha %}*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
