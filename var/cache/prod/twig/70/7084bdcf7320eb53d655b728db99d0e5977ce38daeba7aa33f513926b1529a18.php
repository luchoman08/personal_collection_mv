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
                    <li><a data-toggle=\"tab\" href=\"#ultimomes\">Informes</a></li>
                </ul>
            </div>

            
            <div class=\"tab-content\">
                <div id=\"totalvistas\" class=\"tab-pane fade in active\">
                    <object width=\"100%\" height=\"1100\"  data=\"";
        // line 27
        echo $this->env->getExtension('routing')->getUrl("usuarios_index");
        echo "\"></object>
                    
                </div>
                <div id=\"ultimomes\" class=\"tab-pane fade\">
                     <div class=\"alert alert-warning\" role=\"alert\"><strong>Warning!!</strong> Limitación de la API</div>
                    <table class=\"table\">
                        <thead>
                          <tr>
                           <td>Id de pelicula</td>
                            <td>Id de usuario</td>
                            <td>Fecha vista</td>
                          </tr>
                        </thead>
                        <tbody>
                         
                          ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["peliculasultimomes"]) ? $context["peliculasultimomes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 43
            echo "                              <tr>
                                <th>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "idPelicula", array()), "html", null, true);
            echo "</th>
                                <th>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "idUsuario", array()), "html", null, true);
            echo "</th>
                                <th>";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pelicula"], "fechaAdicionPelicula", array()), "m/d/Y"), "html", null, true);
            echo "</th>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                         
                        </tbody>
                      </table>
                </div>
                
                <div id=\"generosvistos\" class=\"tab-pane fade\">
                   
                </div>
               
          
    </div>
  
";
    }

    // line 63
    public function block_barraderecha($context, array $blocks = array())
    {
        // line 64
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
        return array (  156 => 64,  153 => 63,  137 => 49,  128 => 46,  124 => 45,  120 => 44,  117 => 43,  113 => 42,  95 => 27,  82 => 16,  79 => 15,  73 => 14,  65 => 10,  61 => 8,  51 => 6,  48 => 5,  45 => 4,  42 => 3,  32 => 2,  11 => 1,);
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
/*                     <li><a data-toggle="tab" href="#ultimomes">Informes</a></li>*/
/*                 </ul>*/
/*             </div>*/
/* */
/*             */
/*             <div class="tab-content">*/
/*                 <div id="totalvistas" class="tab-pane fade in active">*/
/*                     <object width="100%" height="1100"  data="{{url('usuarios_index')}}"></object>*/
/*                     */
/*                 </div>*/
/*                 <div id="ultimomes" class="tab-pane fade">*/
/*                      <div class="alert alert-warning" role="alert"><strong>Warning!!</strong> Limitación de la API</div>*/
/*                     <table class="table">*/
/*                         <thead>*/
/*                           <tr>*/
/*                            <td>Id de pelicula</td>*/
/*                             <td>Id de usuario</td>*/
/*                             <td>Fecha vista</td>*/
/*                           </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                          */
/*                           {% for pelicula in peliculasultimomes %}*/
/*                               <tr>*/
/*                                 <th>{{pelicula.idPelicula}}</th>*/
/*                                 <th>{{pelicula.idUsuario}}</th>*/
/*                                 <th>{{pelicula.fechaAdicionPelicula |date("m/d/Y")}}</th>*/
/*                             </tr>*/
/*                             {% endfor %}*/
/*                          */
/*                         </tbody>*/
/*                       </table>*/
/*                 </div>*/
/*                 */
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
