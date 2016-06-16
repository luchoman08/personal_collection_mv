<?php

/* VistaBundle:Default:auditor.html.twig */
class __TwigTemplate_eff1e3404dd6c3f9b8b2be258a6f404f1435b10221f0f1c13715023ef99389fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "VistaBundle:Default:auditor.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'loginoptions' => array($this, 'block_loginoptions'),
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

    // line 15
    public function block_contenido($context, array $blocks = array())
    {
        // line 16
        echo "
 <div class=\"menu-pelicula-border-black\">
                <ul class=\"menu-pelicula-tab\">
                    <li class=\"active\"><a data-toggle=\"tab\" href=\"#totalvistas\">Total de peliculas vistas&nbsp;</a></li>
                    <li><a data-toggle=\"tab\" href=\"#ultimomes\">Vistas en el último mes&nbsp;</a></li>
                    <li><a data-toggle=\"tab\" href=\"#generosvistos\">Generos vistos&nbsp;</a></li>
                </ul>
            </div>

            
            <div class=\"tab-content\">
                <div id=\"totalvistas\" class=\"tab-pane fade in active\">
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
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["peliculasvistas"]) ? $context["peliculasvistas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 40
            echo "                              <tr>
                                <th>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "idPelicula", array()), "html", null, true);
            echo "</th>
                                <th>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "idUsuario", array()), "html", null, true);
            echo "</th>
                                <th>";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pelicula"], "fechaAdicionPelicula", array()), "m/d/Y"), "html", null, true);
            echo "</th>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                         
                        </tbody>
                      </table>
                    
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
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["peliculasultimomes"]) ? $context["peliculasultimomes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 64
            echo "                              <tr>
                                <th>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "idPelicula", array()), "html", null, true);
            echo "</th>
                                <th>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "idUsuario", array()), "html", null, true);
            echo "</th>
                                <th>";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pelicula"], "fechaAdicionPelicula", array()), "m/d/Y"), "html", null, true);
            echo "</th>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                         
                        </tbody>
                      </table>
                </div>
                
                <div id=\"generosvistos\" class=\"tab-pane fade\">
                   
                </div>
               
          
    </div>
  
";
    }

    // line 84
    public function block_barraderecha($context, array $blocks = array())
    {
        // line 85
        echo "
    <div class=\"col-md-3 columna-index-boostrap\">
        <div class=\"columna-index\">
            
            <label>";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nombres", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "apellidos", array()), "html", null, true);
        echo "</label>
            
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "VistaBundle:Default:auditor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 89,  186 => 85,  183 => 84,  167 => 70,  158 => 67,  154 => 66,  150 => 65,  147 => 64,  143 => 63,  124 => 46,  115 => 43,  111 => 42,  107 => 41,  104 => 40,  100 => 39,  75 => 16,  72 => 15,  64 => 10,  60 => 8,  50 => 6,  47 => 5,  44 => 4,  41 => 3,  31 => 2,  11 => 1,);
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
/* */
/* {% block contenido %}*/
/* */
/*  <div class="menu-pelicula-border-black">*/
/*                 <ul class="menu-pelicula-tab">*/
/*                     <li class="active"><a data-toggle="tab" href="#totalvistas">Total de peliculas vistas&nbsp;</a></li>*/
/*                     <li><a data-toggle="tab" href="#ultimomes">Vistas en el último mes&nbsp;</a></li>*/
/*                     <li><a data-toggle="tab" href="#generosvistos">Generos vistos&nbsp;</a></li>*/
/*                 </ul>*/
/*             </div>*/
/* */
/*             */
/*             <div class="tab-content">*/
/*                 <div id="totalvistas" class="tab-pane fade in active">*/
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
/*                           {% for pelicula in peliculasvistas %}*/
/*                               <tr>*/
/*                                 <th>{{pelicula.idPelicula}}</th>*/
/*                                 <th>{{pelicula.idUsuario}}</th>*/
/*                                 <th>{{pelicula.fechaAdicionPelicula |date("m/d/Y")}}</th>*/
/*                             </tr>*/
/*                             {% endfor %}*/
/*                          */
/*                         </tbody>*/
/*                       </table>*/
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
/*     <div class="col-md-3 columna-index-boostrap">*/
/*         <div class="columna-index">*/
/*             */
/*             <label>{{ usuario.nombres }} {{ usuario.apellidos }}</label>*/
/*             */
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
