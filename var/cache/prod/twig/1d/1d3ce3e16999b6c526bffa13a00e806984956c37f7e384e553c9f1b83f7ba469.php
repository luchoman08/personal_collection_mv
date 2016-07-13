<?php

/* VistaBundle:Default:panelUsuario.html.twig */
class __TwigTemplate_2b2dc3f2945243a5692e072eec784ff149b1ba8d73267959075ead1c0107fad1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "VistaBundle:Default:panelUsuario.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'loginoptions' => array($this, 'block_loginoptions'),
            'contenido' => array($this, 'block_contenido'),
            'barraderecha' => array($this, 'block_barraderecha'),
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
            // line 7
            if (((isset($context["rol"]) ? $context["rol"] : null) == 1)) {
                // line 8
                echo "                <br/><a href=\"";
                echo $this->env->getExtension('routing')->getUrl("auditor");
                echo "\">Auditar</a>
            ";
            }
            // line 10
            echo "            
            ";
            // line 11
            if (((isset($context["rol"]) ? $context["rol"] : null) == 2)) {
                // line 12
                echo "                <br/><a href=\"";
                echo $this->env->getExtension('routing')->getUrl("administrador");
                echo "\">Administrar</a>
            ";
            }
            // line 14
            echo "       
    ";
        } else {
            // line 15
            echo " 

        ";
            // line 17
            $this->displayParentBlock("loginoptions", $context, $blocks);
            echo " 
    
    ";
        }
    }

    // line 22
    public function block_contenido($context, array $blocks = array())
    {
        // line 23
        echo "

<div class=\"menu-pelicula-border-black\">
    <ul class=\"menu-pelicula-tab\">
        <li class=\"active\"><a data-toggle=\"tab\" href=\"#descubrir\">Descubrir&nbsp;</a></li>
        <li><a data-toggle=\"tab\" href=\"#listas\">Mis listas&nbsp;</a></li>
        <li><a data-toggle=\"tab\" href=\"#vistas\">Vistas&nbsp;</a></li>
        <li><a data-toggle=\"tab\" href=\"#pendientes\">Pendientes&nbsp;</a></li>
        <li><a data-toggle=\"tab\" href=\"#calificadas\">Calificadas&nbsp;</a></li>
        <li><a data-toggle=\"tab\" href=\"#perfil\">Mis Datos Personales&nbsp;</a></li>
        <li><a data-toggle=\"tab\" href=\"#misGeneros\">Mis G&eacute;neros</a></li>
    </ul>
</div>
  <div id=\"divEmergente\" style=\"display:none\" class=\"alert alert-success alert-dismissible\" role=\"alert\">
                   <p id=\"mensajeEmergente\"></p>
               </div>
<div class=\"tab-content\">
    <div id=\"listas\" class=\"tab-pane fade\">
    
        <div class=\"listasPersonalizadas\">
            <div class=\"alert alert-warning\" role=\"alert\"><strong>Warning!!</strong> Limitación de la API</div>
            <h3> Listas personalizadas </h3> 
             
                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["peliculas_coleccion"]) ? $context["peliculas_coleccion"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coleccion"]) {
            // line 47
            echo "                <br>
                <div id=\"divPrimario";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "\"idLista=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "\" class=\"panel panel-primary\" >
                
                
                    <div id=\"div";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "\" class=\"panel-heading\">
                        
                             <strong> <input class=\"tituloPanelColeccionReadOnly\"  value =  \"";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "nombreColeccion", array()), "html", null, true);
            echo "\" size=\"25\" type=\"text\"  id=\"tituloPanelColeccion";
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "\" readOnly></strong>
                        
                   <div style=\"float: right; \">
                        <a  idLista=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "\" style=\"display:none;\" class=\"btn btn-success btn-xs ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "_botonTerminarEdicion botonTerminarEdicion\">Guardar</a>
                        <a  idLista=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "\" class=\"btn btn-success btn-xs ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "_botonEditarColeccion\">Editar</a>
                        <a  idLista=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "\" class=\"btn btn-danger btn-xs ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "_botonEliminarColeccion botonEliminarColeccion\">Eliminar</a>
                    </div>
                    
            </div>
                <div class=\"panel-body\">
                
                    ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["coleccion"], "peliculas", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
                // line 65
                echo "                    
                        <div class=\"miniaturas\"  id=\"divPeliculaColeccion_";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
                echo "\" style=\"background-image: url(https://image.tmdb.org/t/p/w185";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo ");\" onclick=\"window.open('";
                echo $this->env->getExtension('routing')->getUrl("homepage");
                echo "vista/mostrarpelicula/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
                echo "','_blank');\" > 
                            <a idColeccion=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
                echo "\" idPelicula=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
                echo "\" id=\"pelicula_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
                echo "\" style=\"display:none;\"  class=\"glyphicon glyphicon-remove-circle borrar_de_lista ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
                echo "_selector\" aria-hidden=\"true\" href=\"#P\" ></a> 
                        </div>
                    
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coleccion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "        </div>
        </div> 
        
    <div id=\"descubrir\" class=\"tab-pane fade in active\">
        ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gustos"]) ? $context["gustos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["gusto"]) {
            // line 79
            echo "        <div class=\"gustos\"> ";
            echo twig_escape_filter($this->env, $context["gusto"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gusto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "        <br/> <br/> 
        ";
        // line 82
        if (((isset($context["descubiertas"]) ? $context["descubiertas"] : null) == null)) {
            // line 83
            echo "            <center>
                <h3>No tiene gustos registrados, puede adicionarlos en Mi perfil.</h3>
            </center>
            <br/> 
        ";
        }
        // line 87
        echo " 
        
        ";
        // line 89
        $context["i"] = 0;
        echo " 
        ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["descubiertas"]) ? $context["descubiertas"] : null), "results", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 91
            echo "
        <div class=\"resultado\" onclick=\"window.open('";
            // line 92
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "','_blank');\">
            <a>
            ";
            // line 94
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 95
                echo "                
                <img class=\"img-pendientes\"; src=\"";
                // line 96
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" alt=\"...\">
                           
                ";
            } else {
                // line 99
                echo "                        
                <img src=\"https://image.tmdb.org/t/p/w185/";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" alt=\"...\">
                        
            ";
            }
            // line 103
            echo "            </a>
            <div class=\"resultado-articulo\">
                <label> ";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
            echo " <div id=\"c";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" value=\"0\" class=\"rateyo-readonly-widg\"> </div> Fecha de estreno: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "release_date", array()), "html", null, true);
            echo "</label><br> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "overview", array()), "html", null, true);
            echo "
            </div>

        </div>

        ";
            // line 110
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            echo " 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "
        <center>
            <a href=\"";
        // line 114
        echo $this->env->getExtension('routing')->getUrl("vista_homepage");
        echo "bgeneros/";
        echo twig_escape_filter($this->env, (isset($context["generos"]) ? $context["generos"] : null), "html", null, true);
        echo "\" class=\"btn btn-primary\" type=\"button\"> Ver m&aacute;s <span class=\"badge\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["descubiertas"]) ? $context["descubiertas"] : null), "total_results", array()), "html", null, true);
        echo "</span> </a>
        </center>

        <br/>
    </div>
    <div id=\"perfil\" class=\"tab-pane fade\">
        <div class=\"datos\">
             <object width=\"100%\" height=\"500\"  data=\"";
        // line 121
        echo $this->env->getExtension('routing')->getUrl("usuarios_index");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "id", array()), "html", null, true);
        echo "/showEstandar\"></object> 

        </div>
        <br/>
    </div>
    <div id=\"misGeneros\" class=\"tab-pane fade\">

            
            <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                                 <div style=\"float:right;  margin-top:20px;\">
                                  <a   class=\"btn btn-sm btn-default\"  href=\"";
        // line 132
        echo $this->env->getExtension('routing')->getUrl("generos_barra");
        echo "\">Editar</a>
                                  </div>
                                 <h1>Generos que me gustan</h1>
                        </div>
                         <div class=\"panel-body\">
                                <ul>
                                    ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gustos"]) ? $context["gustos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["gusto"]) {
            // line 139
            echo "                                        <li>";
            echo twig_escape_filter($this->env, $context["gusto"], "html", null, true);
            echo "</li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gusto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "                                </ul>
                            
                            <br/>
                          </div>
            </div>
    </div>
    <div id=\"vistas\" class=\"tab-pane fade\">
        <div class=\"alert alert-warning\" role=\"alert\"><strong>Warning!!</strong> Limitación de la API</div>
          
          ";
        // line 150
        $context["i"] = 0;
        // line 151
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vistas"]) ? $context["vistas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 152
            echo "                        
                        <div class=\"vistas-pendientes\">
                             <a href=\"";
            // line 154
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" >
                            ";
            // line 155
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 156
                echo "                                <img ";
                if (((isset($context["i"]) ? $context["i"] : null) == (twig_length_filter($this->env, (isset($context["vistas"]) ? $context["vistas"] : null)) - 1))) {
                    // line 157
                    echo "                                class=\"espacio-bot img-pendientes\";  ";
                } else {
                    echo " class=\"img-pendientes\";
                                ";
                }
                // line 158
                echo " src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" height=\"278\" width=\"185\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
                echo "\" synopsis=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "overview", array()), "html", null, true);
                echo "\" fechaAdicion=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pelicula"], "fecha_adicion", array()), "d/m/Y"), "html", null, true);
                echo "\" valoracion =\"-1\" iterador=\"-1\"> 
                                ";
            } else {
                // line 160
                echo "                                <img ";
                if (((isset($context["i"]) ? $context["i"] : null) == (twig_length_filter($this->env, (isset($context["vistas"]) ? $context["vistas"] : null)) - 1))) {
                    // line 161
                    echo "                                class=\"espacio-bot img-pendientes\";  ";
                } else {
                    echo " class=\"img-pendientes\";
                                ";
                }
                // line 162
                echo " src=\"https://image.tmdb.org/t/p/w185/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" height=\"278\" width=\"185\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
                echo "\" synopsis=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "overview", array()), "html", null, true);
                echo "\" fechaAdicion=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pelicula"], "fecha_adicion", array()), "d/m/Y"), "html", null, true);
                echo "\" valoracion =\"-1\" iterador=\"-1\">  
                            ";
            }
            // line 164
            echo "                            </a>
                        </div>
                        ";
            // line 166
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 167
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "          
              <!--<div class=\"menu-pelicula-border-black\">
                <ul class=\"menu-pelicula-tab\">
                    <li class=\"active\"><a data-toggle=\"tab\" href=\"#totalvistas\">Total de peliculas vistas&nbsp;</a></li>
                    <li><a data-toggle=\"tab\" href=\"#ultimomes\">Vistas en el último mes&nbsp;</a></li>
                    <li><a data-toggle=\"tab\" href=\"#generosvistos\">Generos vistos&nbsp;</a></li>
                </ul>
              </div>-->
            
            <!--<div class=\"tab-content\">
                <div id=\"totalvistas\" class=\"tab-pane fade in active\">
                    ";
        // line 179
        $context["i"] = 0;
        // line 180
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vistas"]) ? $context["vistas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 181
            echo "                        
                        <div class=\"vistas-pendientes\">
                             <a href=\"";
            // line 183
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" >
                            ";
            // line 184
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 185
                echo "                                <img ";
                if (((isset($context["i"]) ? $context["i"] : null) == (twig_length_filter($this->env, (isset($context["vistas"]) ? $context["vistas"] : null)) - 1))) {
                    // line 186
                    echo "                                class=\"espacio-bot img-pendientes\";  ";
                } else {
                    echo " class=\"img-pendientes\";
                                ";
                }
                // line 187
                echo " src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" height=\"278\" width=\"185\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
                echo "\" synopsis=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "overview", array()), "html", null, true);
                echo "\" fechaAdicion=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pelicula"], "fecha_adicion", array()), "d/m/Y"), "html", null, true);
                echo "\"> 
                                ";
            } else {
                // line 189
                echo "                                <img ";
                if (((isset($context["i"]) ? $context["i"] : null) == (twig_length_filter($this->env, (isset($context["vistas"]) ? $context["vistas"] : null)) - 1))) {
                    // line 190
                    echo "                                class=\"espacio-bot img-pendientes\";  ";
                } else {
                    echo " class=\"img-pendientes\";
                                ";
                }
                // line 191
                echo " src=\"https://image.tmdb.org/t/p/w185/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" height=\"278\" width=\"185\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
                echo "\" synopsis=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "overview", array()), "html", null, true);
                echo "\" fechaAdicion=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pelicula"], "fecha_adicion", array()), "d/m/Y"), "html", null, true);
                echo "\">  
                            ";
            }
            // line 193
            echo "                            </a>
                        </div>
                        ";
            // line 195
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 196
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        echo "                </div>
                <div id=\"ultimomes\" class=\"tab-pane fade\">
                    ";
        // line 199
        $context["i"] = 0;
        // line 200
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ultimomes"]) ? $context["ultimomes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 201
            echo "                        <div class=\"vistas-pendientes\">
                             <a href=\"";
            // line 202
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" >
                            ";
            // line 203
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 204
                echo "                                <img ";
                if (((isset($context["i"]) ? $context["i"] : null) == (twig_length_filter($this->env, (isset($context["ultimomes"]) ? $context["ultimomes"] : null)) - 1))) {
                    // line 205
                    echo "                                class=\"espacio-bot img-pendientes\";  ";
                } else {
                    echo " class=\"img-pendientes\";
                                ";
                }
                // line 206
                echo " src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" height=\"278\" width=\"185\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
                echo "\" synopsis=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "overview", array()), "html", null, true);
                echo "\" fechaAdicion=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pelicula"], "fecha_adicion", array()), "d/m/Y"), "html", null, true);
                echo "\"> 
                                ";
            } else {
                // line 208
                echo "                                <img ";
                if (((isset($context["i"]) ? $context["i"] : null) == (twig_length_filter($this->env, (isset($context["ultimomes"]) ? $context["ultimomes"] : null)) - 1))) {
                    // line 209
                    echo "                                class=\"espacio-bot img-pendientes\";  ";
                } else {
                    echo " class=\"img-pendientes\";
                                ";
                }
                // line 210
                echo " src=\"https://image.tmdb.org/t/p/w185/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" height=\"278\" width=\"185\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
                echo "\" synopsis=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "overview", array()), "html", null, true);
                echo "\" fechaAdicion=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pelicula"], "fecha_adicion", array()), "d/m/Y"), "html", null, true);
                echo "\">  
                            ";
            }
            // line 212
            echo "                            </a>
                        </div>
                        ";
            // line 214
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 215
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        echo "                </div>
                
                <div id=\"generosvistos\" class=\"tab-pane fade\">
                    <ul>
                    ";
        // line 220
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["generosvistos"]) ? $context["generosvistos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["generovisto"]) {
            // line 221
            echo "                        <li>";
            echo twig_escape_filter($this->env, $context["generovisto"], "html", null, true);
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['generovisto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        echo "                    </ul>
                    
                </div>
                <br/>
                
            </div>-->
          
    </div>
    <div id=\"pendientes\" class=\"tab-pane fade\">
        <div class=\"alert alert-warning\" role=\"alert\"><strong>Warning!!</strong> Limitación de la API</div>
            
            ";
        // line 234
        $context["i"] = 0;
        // line 235
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pendientes"]) ? $context["pendientes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 236
            echo "            <div class=\"vistas-pendientes\">
                 <a href=\"";
            // line 237
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" >
                ";
            // line 238
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 239
                echo "                <img ";
                if (((isset($context["i"]) ? $context["i"] : null) == (twig_length_filter($this->env, (isset($context["pendientes"]) ? $context["pendientes"] : null)) - 1))) {
                    // line 240
                    echo "                    class=\"espacio-bot img-pendientes\"; ";
                } else {
                    echo " class=\"img-pendientes\";
                    ";
                }
                // line 241
                echo " src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" height=\"278\" width=\"185\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
                echo "\" synopsis=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "overview", array()), "html", null, true);
                echo "\" fechaAdicion=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pelicula"], "fecha_adicion", array()), "d/m/Y"), "html", null, true);
                echo "\" valoracion =\"-1\" iterador=\"-1\"> ";
            } else {
                // line 242
                echo "                <img ";
                if (((isset($context["i"]) ? $context["i"] : null) == (twig_length_filter($this->env, (isset($context["pendientes"]) ? $context["pendientes"] : null)) - 1))) {
                    // line 243
                    echo "                    class=\"espacio-bot img-pendientes\";  ";
                } else {
                    echo " class=\"img-pendientes\";
                    ";
                }
                // line 244
                echo " src=\"https://image.tmdb.org/t/p/w185/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" height=\"278\" width=\"185\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
                echo "\" synopsis=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "overview", array()), "html", null, true);
                echo "\" fechaAdicion=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pelicula"], "fecha_adicion", array()), "d/m/Y"), "html", null, true);
                echo "\" valoracion =\"-1\" iterador=\"-1\">   ";
            }
            // line 245
            echo "                    </a>
            </div>
            ";
            // line 247
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 248
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 249
        echo "        
    </div>
    
    <div id=\"calificadas\" class=\"tab-pane fade\">
        <div class=\"alert alert-warning\" role=\"alert\"><strong>Warning!!</strong> Limitación de la API</div>
            
           ";
        // line 255
        $context["i"] = 0;
        // line 256
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["calificadas"]) ? $context["calificadas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 257
            echo "            <div class=\"vistas-pendientes\">
                 <a href=\"";
            // line 258
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" >
                  
                ";
            // line 260
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 261
                echo "                <img ";
                if (((isset($context["i"]) ? $context["i"] : null) == (twig_length_filter($this->env, (isset($context["calificadas"]) ? $context["calificadas"] : null)) - 1))) {
                    // line 262
                    echo "                    class=\"espacio-bot img-pendientes\";  ";
                } else {
                    echo " class=\"img-pendientes\";
                    ";
                }
                // line 263
                echo " src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" height=\"278\" width=\"185\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
                echo "\" synopsis=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "overview", array()), "html", null, true);
                echo "\" fechaAdicion=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pelicula"], "fecha_adicion", array()), "d/m/Y"), "html", null, true);
                echo "\" valoracion =\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "valoracion", array()), "html", null, true);
                echo "\" iterador=\"";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\"> ";
            } else {
                // line 264
                echo "                <img ";
                if (((isset($context["i"]) ? $context["i"] : null) == (twig_length_filter($this->env, (isset($context["calificadas"]) ? $context["calificadas"] : null)) - 1))) {
                    // line 265
                    echo "                    class=\"espacio-bot img-pendientes\";  ";
                } else {
                    echo " class=\"img-pendientes\";
                    ";
                }
                // line 266
                echo " src=\"https://image.tmdb.org/t/p/w185/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" height=\"278\" width=\"185\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
                echo "\" synopsis=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "overview", array()), "html", null, true);
                echo "\" fechaAdicion=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pelicula"], "fecha_adicion", array()), "d/m/Y"), "html", null, true);
                echo "\" valoracion =\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "valoracion", array()), "html", null, true);
                echo "\" iterador=\"";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\">
                    
                    ";
            }
            // line 269
            echo "                    </a>
            </div>
            ";
            // line 271
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 272
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 273
        echo "        
    </div>
    
   
    
</div>
";
    }

    // line 281
    public function block_barraderecha($context, array $blocks = array())
    {
        // line 282
        echo "
    <div class=\"col-md-3 columna-index-boostrap\">
        <div class=\"columna-index\">
            
            <label>";
        // line 286
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nombres", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "apellidos", array()), "html", null, true);
        echo "</label>
            
        </div>
        
        
    </div>
    
    <div class=\"col-md-3 columna-index-boostrap\" style=\"display:none;\">
            <div id=\"bloqueDetalle\" class=\"columna-index columna-index-top\" >
            <img id=\"img-detalles\" src=\"\"  height=\"278\" width=\"185\" alt=\"...\"><br/>
            <br>
            <center>
            ";
        // line 298
        $context["i"] = 0;
        // line 299
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["calificadas"]) ? $context["calificadas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 300
            echo "             <span style=\"display:none;\" id=\"calificacionPersonal";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"rateyo-readonly-widg estrellas\"></span>
             ";
            // line 301
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 302
            echo "             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 303
        echo "             </center>
            <label id=\"titulo-detalles\" class=\"titulo-detalles\">  ... </label><br/>
            <label id=\"fecha-detalles\" class=\"fecha-detalles\">  ... </label><br/>
            <label id=\"synopsis-detalles\" class=\"synopsis-detalles\">  ... </label>
            
        </div>
    </div>

";
    }

    // line 313
    public function block_javascripts($context, array $blocks = array())
    {
        // line 314
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script>
      
        ";
        // line 317
        $context["i"] = 0;
        // line 318
        echo "     ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["calificadas"]) ? $context["calificadas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 319
            echo "            \$(\"#calificacionPersonal";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").rateYo({
                    
                    readOnly: true,
                    rating: ";
            // line 322
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "valoracion", array()), "html", null, true);
            echo ",
                    numStars: 10,
                    precision: 10,
                    minValue: 1,
                    maxValue: 10
                });
          ";
            // line 328
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            echo "      
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 330
        echo "        
        \$(\".img-pendientes\").hover(function(){
            \$('.estrellas').attr(\"style\",\"display:none; width:120px;\");
            var imagen= \$(this).attr(\"src\");
            var titulo= \$(this).attr(\"alt\");
            var synopsis= \$(this).attr(\"synopsis\");
            var fecha= \$(this).attr(\"fechaAdicion\");
            var valoracion= \$(this).attr(\"valoracion\");
            var iterador= \$(this).attr(\"iterador\");
            
            if(iterador>-1){
                
                \$('#calificacionPersonal'+iterador).attr(\"style\",\"width:120px;\");
                
            }
            
            \$(\"#img-detalles\").attr(\"src\", imagen);
            \$(\"#img-detalles\").attr(\"alt\", titulo);
            \$(\"#titulo-detalles\").html(\"<strong>\"+titulo+\"</strong>\");
            \$(\"#synopsis-detalles\").html(synopsis);
            \$(\"#fecha-detalles\").html(\"Adicionada: \" + fecha);
            \$(\".col-md-3\").attr(\"style\",\"display:inline;\");
        });
        
        \$(document).scroll(function() {
          var y = \$(this).scrollTop();
          if (y > 380) {
            \$('#bloqueDetalle').attr(\"class\",\"columna-index columna-index-top bajar\");
          }else{
            \$('#bloqueDetalle').attr(\"class\",\"columna-index columna-index-top\");
          }
        });

         \$(\".botonTerminarEdicion\").click(function(){
             
                    var idLista = \$(this).attr(\"idlista\");
                    \$.ajax({
                    type: \"GET\",
                    url: \"";
        // line 368
        echo $this->env->getExtension('routing')->getUrl("cambiar_nombre_coleccion");
        echo "\",
                    data: { idColeccion:idLista, nuevoNombre:\$(\"#tituloPanelColeccion\"+idLista).val()},
                    dataType: \"json\",
                   
                    //if received a response from the server
                    success: function( data, textStatus, jqXHR) {
                         if(data.success){
                             \$(\"#mensajeEmergente\").html(\"\");
                         } 
                         //display error message
                         else {
                             \$(\"#mensajeEmergente\").html(\"Error ¬_¬\");
                         }
                    },
                   
                    //If there was no resonse from the server
                    error: function(jqXHR, textStatus, errorThrown){
                        
                           if(jqXHR.status == 405)
                           {
                            \$(\"#mensajeEmergente\").html(jqXHR.responseText);
                            \$('#divEmergente').attr(\"class\",\"alert alert-danger alert-dismissible\" );
                            \$('#divEmergente').show(1000).delay(3000);
                            \$('#divEmergente').hide(1000);
                           }
                           if(jqXHR.status == 200)
                           {

                            \$(divEliminar).hide(1000);
                            
                            
                           }  
                    },
                   
    
         
                }); 
        
    });
         \$(\".botonEliminarColeccion\").click(function(){
             
                    var idLista = \$(this).attr(\"idlista\");
                    var divEliminar=\"#divPrimario\"+idLista;
                    \$.ajax({
                    type: \"GET\",
                    url: \"";
        // line 413
        echo $this->env->getExtension('routing')->getUrl("eliminar_coleccion_personalizada");
        echo "\",
                    data: { idColeccion:idLista},
                    dataType: \"json\",
                   
                    //if received a response from the server
                    success: function( data, textStatus, jqXHR) {
                         if(data.success){
                             \$(\"#mensajeEmergente\").html(\"\");
                         } 
                         //display error message
                         else {
                             \$(\"#mensajeEmergente\").html(\"Error ¬_¬\");
                         }
                    },
                   
                    //If there was no resonse from the server
                    error: function(jqXHR, textStatus, errorThrown){
                        
                           if(jqXHR.status == 405)
                           {
                            \$(\"#mensajeEmergente\").html(jqXHR.responseText);
                            \$('#divEmergente').attr(\"class\",\"alert alert-danger alert-dismissible\" );
                            \$('#divEmergente').show(1000).delay(3000);
                            \$('#divEmergente').hide(1000);
                           }
                           if(jqXHR.status == 200)
                           {

                            \$(divEliminar).hide(1000);
                            
                            
                           }  
                    },
                   
    
         
                }); 
        
    });

         \$(\".borrar_de_lista\").click(function(){
             
             var nombre= \"#divPeliculaColeccion_\"+\$(this).attr(\"idcoleccion\")+\"_\"+\$(this).attr(\"idpelicula\");
             var divImagenEliminar = \$(this).parent();
             divImagenEliminar.attr(\"onclick\",\"\");
                    \$.ajax({
                    type: \"GET\",
                    url: \"";
        // line 460
        echo $this->env->getExtension('routing')->getUrl("eliminar_pelicula_lista_personalizada");
        echo "\",
                    data: { idColeccion:\$(this).attr(\"idcoleccion\"), idPelicula:\$(this).attr(\"idpelicula\")},
                    dataType: \"json\",
                   
                    //if received a response from the server
                    success: function( data, textStatus, jqXHR) {
                         if(data.success){
                             \$(\"#mensajeEmergente\").html(\"\");
                         } 
                         //display error message
                         else {
                             \$(\"#mensajeEmergente\").html(\"Error ¬_¬\");
                         }
                    },
                   
                    //If there was no resonse from the server
                    error: function(jqXHR, textStatus, errorThrown){
                        
                           if(jqXHR.status == 405)
                           {
                            \$(\"#mensajeEmergente\").html(jqXHR.responseText);
                            \$('#divEmergente').attr(\"class\",\"alert alert-danger alert-dismissible\" );
                            \$('#divEmergente').show(1000).delay(3000);
                            \$('#divEmergente').hide(1000);
                           }
                           if(jqXHR.status == 200)
                           {

                            divImagenEliminar.hide(1000);
                            
                            
                           }  
                    },
                   
    
         
                }); 
        
    });

     \$(function() {
         ";
        // line 501
        $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 0);
        // line 502
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["descubiertas"]) ? $context["descubiertas"] : null), "results", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 503
            echo "            var rating = ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "vote_average", array()), "html", null, true);
            echo ";
            \$(\".counter\").text(rating);
            \$(\"#c";
            // line 505
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").rateYo({
                readOnly: true,
                rating: rating,
                numStars: 10,
                precision: 10,
                minValue: 1,
                maxValue: 10
            }).on(\"rateyo.change\", function(e, data) {
                \$(\"#c";
            // line 513
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").val(data.rating);
            });
            
                ";
            // line 516
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 517
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 518
        echo "     });
     

     ";
        // line 521
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["peliculas_coleccion"]) ? $context["peliculas_coleccion"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coleccion"]) {
            // line 522
            echo "     \$(\".";
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "_botonEditarColeccion\").click(function(){
               \$(\".";
            // line 523
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "_botonEliminarColeccion\").attr(\"style\",\"display:inline;\"); 
               \$(\".";
            // line 524
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "_botonEditarColeccion\").attr(\"style\",\"display:none;\");
               \$(\".";
            // line 525
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "_botonTerminarEdicion\").attr(\"style\",\"display:inline;\");
               \$(\".";
            // line 526
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "_selector\").attr(\"style\",\"display:inline;\");
               \$(\"#tituloPanelColeccion\"+\$(this).attr(\"idlista\")).prop(\"readonly\", false);
               \$(\"#tituloPanelColeccion\"+\$(this).attr(\"idlista\")).attr(\"class\", \"tituloPanelColeccionReadable\");
            });
    \$(\".";
            // line 530
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "_botonTerminarEdicion\").click(function(){
               \$(\".";
            // line 531
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "_botonEliminarColeccion\").attr(\"style\",\"display:inline;\"); 
               \$(\".";
            // line 532
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "_botonEditarColeccion\").attr(\"style\",\"display:inline;\");
               \$(\".";
            // line 533
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "_botonTerminarEdicion\").attr(\"style\",\"display:none;\");
               \$(\".";
            // line 534
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "_selector\").attr(\"style\",\"display:none;\");
               \$(\"#tituloPanelColeccion\"+\$(this).attr(\"idlista\")).prop(\"readonly\", true);
               \$(\"#tituloPanelColeccion\"+\$(this).attr(\"idlista\")).attr(\"class\", \"tituloPanelColeccionReadOnly\");
               
    });
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coleccion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 540
        echo "    
    </script>   
";
    }

    public function getTemplateName()
    {
        return "VistaBundle:Default:panelUsuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1198 => 540,  1186 => 534,  1182 => 533,  1178 => 532,  1174 => 531,  1170 => 530,  1163 => 526,  1159 => 525,  1155 => 524,  1151 => 523,  1146 => 522,  1142 => 521,  1137 => 518,  1131 => 517,  1129 => 516,  1123 => 513,  1112 => 505,  1106 => 503,  1101 => 502,  1099 => 501,  1055 => 460,  1005 => 413,  957 => 368,  917 => 330,  909 => 328,  900 => 322,  893 => 319,  888 => 318,  886 => 317,  879 => 314,  876 => 313,  864 => 303,  858 => 302,  856 => 301,  851 => 300,  846 => 299,  844 => 298,  827 => 286,  821 => 282,  818 => 281,  808 => 273,  802 => 272,  800 => 271,  796 => 269,  779 => 266,  773 => 265,  770 => 264,  755 => 263,  749 => 262,  746 => 261,  744 => 260,  737 => 258,  734 => 257,  729 => 256,  727 => 255,  719 => 249,  713 => 248,  711 => 247,  707 => 245,  696 => 244,  690 => 243,  687 => 242,  676 => 241,  670 => 240,  667 => 239,  665 => 238,  659 => 237,  656 => 236,  651 => 235,  649 => 234,  636 => 223,  627 => 221,  623 => 220,  617 => 216,  611 => 215,  609 => 214,  605 => 212,  593 => 210,  587 => 209,  584 => 208,  572 => 206,  566 => 205,  563 => 204,  561 => 203,  555 => 202,  552 => 201,  547 => 200,  545 => 199,  541 => 197,  535 => 196,  533 => 195,  529 => 193,  517 => 191,  511 => 190,  508 => 189,  496 => 187,  490 => 186,  487 => 185,  485 => 184,  479 => 183,  475 => 181,  470 => 180,  468 => 179,  455 => 168,  449 => 167,  447 => 166,  443 => 164,  431 => 162,  425 => 161,  422 => 160,  410 => 158,  404 => 157,  401 => 156,  399 => 155,  393 => 154,  389 => 152,  384 => 151,  382 => 150,  371 => 141,  362 => 139,  358 => 138,  349 => 132,  333 => 121,  319 => 114,  315 => 112,  307 => 110,  293 => 105,  289 => 103,  283 => 100,  280 => 99,  274 => 96,  271 => 95,  269 => 94,  262 => 92,  259 => 91,  255 => 90,  251 => 89,  247 => 87,  240 => 83,  238 => 82,  235 => 81,  226 => 79,  222 => 78,  216 => 74,  208 => 71,  192 => 67,  180 => 66,  177 => 65,  173 => 64,  162 => 58,  156 => 57,  150 => 56,  142 => 53,  137 => 51,  129 => 48,  126 => 47,  122 => 46,  97 => 23,  94 => 22,  86 => 17,  82 => 15,  78 => 14,  72 => 12,  70 => 11,  67 => 10,  61 => 8,  59 => 7,  51 => 6,  48 => 5,  45 => 4,  42 => 3,  32 => 2,  11 => 1,);
    }
}
/* {%extends 'index.html.twig'%}*/
/* {%block title%} QMP - {{usuario.nombres}} {{usuario.apellidos}} {%endblock%}*/
/* {%block loginoptions%}*/
/*     {% if usuarioLogueado == 1  %}*/
/* */
/*             <a href="{{url('usuario')}}">{{nickname}}</a> | <a href="{{url('logout_action')}}">Salir</a>*/
/*             {% if rol == 1  %}*/
/*                 <br/><a href="{{url('auditor')}}">Auditar</a>*/
/*             {% endif %}*/
/*             */
/*             {% if rol == 2  %}*/
/*                 <br/><a href="{{url('administrador')}}">Administrar</a>*/
/*             {% endif %}*/
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
/* */
/* <div class="menu-pelicula-border-black">*/
/*     <ul class="menu-pelicula-tab">*/
/*         <li class="active"><a data-toggle="tab" href="#descubrir">Descubrir&nbsp;</a></li>*/
/*         <li><a data-toggle="tab" href="#listas">Mis listas&nbsp;</a></li>*/
/*         <li><a data-toggle="tab" href="#vistas">Vistas&nbsp;</a></li>*/
/*         <li><a data-toggle="tab" href="#pendientes">Pendientes&nbsp;</a></li>*/
/*         <li><a data-toggle="tab" href="#calificadas">Calificadas&nbsp;</a></li>*/
/*         <li><a data-toggle="tab" href="#perfil">Mis Datos Personales&nbsp;</a></li>*/
/*         <li><a data-toggle="tab" href="#misGeneros">Mis G&eacute;neros</a></li>*/
/*     </ul>*/
/* </div>*/
/*   <div id="divEmergente" style="display:none" class="alert alert-success alert-dismissible" role="alert">*/
/*                    <p id="mensajeEmergente"></p>*/
/*                </div>*/
/* <div class="tab-content">*/
/*     <div id="listas" class="tab-pane fade">*/
/*     */
/*         <div class="listasPersonalizadas">*/
/*             <div class="alert alert-warning" role="alert"><strong>Warning!!</strong> Limitación de la API</div>*/
/*             <h3> Listas personalizadas </h3> */
/*              */
/*                 {% for coleccion in peliculas_coleccion %}*/
/*                 <br>*/
/*                 <div id="divPrimario{{coleccion.idColeccion}}"idLista="{{coleccion.idColeccion}}" class="panel panel-primary" >*/
/*                 */
/*                 */
/*                     <div id="div{{coleccion.idColeccion}}" class="panel-heading">*/
/*                         */
/*                              <strong> <input class="tituloPanelColeccionReadOnly"  value =  "{{coleccion.nombreColeccion}}" size="25" type="text"  id="tituloPanelColeccion{{coleccion.idColeccion}}" readOnly></strong>*/
/*                         */
/*                    <div style="float: right; ">*/
/*                         <a  idLista="{{coleccion.idColeccion}}" style="display:none;" class="btn btn-success btn-xs {{coleccion.idColeccion}}_botonTerminarEdicion botonTerminarEdicion">Guardar</a>*/
/*                         <a  idLista="{{coleccion.idColeccion}}" class="btn btn-success btn-xs {{coleccion.idColeccion}}_botonEditarColeccion">Editar</a>*/
/*                         <a  idLista="{{coleccion.idColeccion}}" class="btn btn-danger btn-xs {{coleccion.idColeccion}}_botonEliminarColeccion botonEliminarColeccion">Eliminar</a>*/
/*                     </div>*/
/*                     */
/*             </div>*/
/*                 <div class="panel-body">*/
/*                 */
/*                     {%for pelicula in coleccion.peliculas%}*/
/*                     */
/*                         <div class="miniaturas"  id="divPeliculaColeccion_{{coleccion.idColeccion}}_{{pelicula.id}}" style="background-image: url(https://image.tmdb.org/t/p/w185{{pelicula.poster_path}});" onclick="window.open('{{ url('homepage') }}vista/mostrarpelicula/{{pelicula.id}}','_blank');" > */
/*                             <a idColeccion="{{coleccion.idColeccion}}" idPelicula="{{pelicula.id}}" id="pelicula_{{pelicula.id}}" style="display:none;"  class="glyphicon glyphicon-remove-circle borrar_de_lista {{coleccion.idColeccion}}_selector" aria-hidden="true" href="#P" ></a> */
/*                         </div>*/
/*                     */
/*                     {%endfor%}*/
/*                     </div>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*         </div> */
/*         */
/*     <div id="descubrir" class="tab-pane fade in active">*/
/*         {% for gusto in gustos%}*/
/*         <div class="gustos"> {{gusto}}</div>*/
/*         {% endfor %}*/
/*         <br/> <br/> */
/*         {% if descubiertas == null %}*/
/*             <center>*/
/*                 <h3>No tiene gustos registrados, puede adicionarlos en Mi perfil.</h3>*/
/*             </center>*/
/*             <br/> */
/*         {% endif %} */
/*         */
/*         {%set i=0%} */
/*         {% for pelicula in descubiertas.results %}*/
/* */
/*         <div class="resultado" onclick="window.open('{{ url('homepage') }}vista/mostrarpelicula/{{pelicula.id}}','_blank');">*/
/*             <a>*/
/*             {% if pelicula.poster_path == "" %}*/
/*                 */
/*                 <img class="img-pendientes"; src="{{asset('assets/images/movie.png')}}" alt="...">*/
/*                            */
/*                 {% else %}*/
/*                         */
/*                 <img src="https://image.tmdb.org/t/p/w185/{{pelicula.poster_path}}" alt="...">*/
/*                         */
/*             {% endif %}*/
/*             </a>*/
/*             <div class="resultado-articulo">*/
/*                 <label> {{pelicula.title}} <div id="c{{i}}" value="0" class="rateyo-readonly-widg"> </div> Fecha de estreno: {{pelicula.release_date}}</label><br> {{pelicula.overview}}*/
/*             </div>*/
/* */
/*         </div>*/
/* */
/*         {%set i= i + 1%} */
/*         {% endfor %}*/
/* */
/*         <center>*/
/*             <a href="{{url('vista_homepage')}}bgeneros/{{generos}}" class="btn btn-primary" type="button"> Ver m&aacute;s <span class="badge">{{descubiertas.total_results}}</span> </a>*/
/*         </center>*/
/* */
/*         <br/>*/
/*     </div>*/
/*     <div id="perfil" class="tab-pane fade">*/
/*         <div class="datos">*/
/*              <object width="100%" height="500"  data="{{url('usuarios_index')}} {{usuario.id}}/showEstandar"></object> */
/* */
/*         </div>*/
/*         <br/>*/
/*     </div>*/
/*     <div id="misGeneros" class="tab-pane fade">*/
/* */
/*             */
/*             <div class="panel panel-default">*/
/*                         <div class="panel-heading">*/
/*                                  <div style="float:right;  margin-top:20px;">*/
/*                                   <a   class="btn btn-sm btn-default"  href="{{url('generos_barra')}}">Editar</a>*/
/*                                   </div>*/
/*                                  <h1>Generos que me gustan</h1>*/
/*                         </div>*/
/*                          <div class="panel-body">*/
/*                                 <ul>*/
/*                                     {% for gusto in gustos %}*/
/*                                         <li>{{gusto}}</li>*/
/*                                     {% endfor %}*/
/*                                 </ul>*/
/*                             */
/*                             <br/>*/
/*                           </div>*/
/*             </div>*/
/*     </div>*/
/*     <div id="vistas" class="tab-pane fade">*/
/*         <div class="alert alert-warning" role="alert"><strong>Warning!!</strong> Limitación de la API</div>*/
/*           */
/*           {% set i = 0 %}*/
/*                         {% for pelicula in vistas %}*/
/*                         */
/*                         <div class="vistas-pendientes">*/
/*                              <a href="{{ url('homepage') }}vista/mostrarpelicula/{{pelicula.id}}" >*/
/*                             {% if pelicula.poster_path == "" %}*/
/*                                 <img {%if i == ((vistas|length)-1) %}*/
/*                                 class="espacio-bot img-pendientes";  {%else%} class="img-pendientes";*/
/*                                 {%endif%} src="{{asset('assets/images/movie.png')}}" height="278" width="185" alt="{{pelicula.title}}" synopsis="{{pelicula.overview}}" fechaAdicion="{{pelicula.fecha_adicion|date("d/m/Y")}}" valoracion ="-1" iterador="-1"> */
/*                                 {% else %}*/
/*                                 <img {%if i == ((vistas|length)-1) %}*/
/*                                 class="espacio-bot img-pendientes";  {%else%} class="img-pendientes";*/
/*                                 {%endif%} src="https://image.tmdb.org/t/p/w185/{{pelicula.poster_path}}" height="278" width="185" alt="{{pelicula.title}}" synopsis="{{pelicula.overview}}" fechaAdicion="{{pelicula.fecha_adicion|date("d/m/Y")}}" valoracion ="-1" iterador="-1">  */
/*                             {% endif %}*/
/*                             </a>*/
/*                         </div>*/
/*                         {% set i = i + 1 %}*/
/*                         {% endfor %}*/
/*           */
/*               <!--<div class="menu-pelicula-border-black">*/
/*                 <ul class="menu-pelicula-tab">*/
/*                     <li class="active"><a data-toggle="tab" href="#totalvistas">Total de peliculas vistas&nbsp;</a></li>*/
/*                     <li><a data-toggle="tab" href="#ultimomes">Vistas en el último mes&nbsp;</a></li>*/
/*                     <li><a data-toggle="tab" href="#generosvistos">Generos vistos&nbsp;</a></li>*/
/*                 </ul>*/
/*               </div>-->*/
/*             */
/*             <!--<div class="tab-content">*/
/*                 <div id="totalvistas" class="tab-pane fade in active">*/
/*                     {% set i = 0 %}*/
/*                         {% for pelicula in vistas %}*/
/*                         */
/*                         <div class="vistas-pendientes">*/
/*                              <a href="{{ url('homepage') }}vista/mostrarpelicula/{{pelicula.id}}" >*/
/*                             {% if pelicula.poster_path == "" %}*/
/*                                 <img {%if i == ((vistas|length)-1) %}*/
/*                                 class="espacio-bot img-pendientes";  {%else%} class="img-pendientes";*/
/*                                 {%endif%} src="{{asset('assets/images/movie.png')}}" height="278" width="185" alt="{{pelicula.title}}" synopsis="{{pelicula.overview}}" fechaAdicion="{{pelicula.fecha_adicion|date("d/m/Y")}}"> */
/*                                 {% else %}*/
/*                                 <img {%if i == ((vistas|length)-1) %}*/
/*                                 class="espacio-bot img-pendientes";  {%else%} class="img-pendientes";*/
/*                                 {%endif%} src="https://image.tmdb.org/t/p/w185/{{pelicula.poster_path}}" height="278" width="185" alt="{{pelicula.title}}" synopsis="{{pelicula.overview}}" fechaAdicion="{{pelicula.fecha_adicion|date("d/m/Y")}}">  */
/*                             {% endif %}*/
/*                             </a>*/
/*                         </div>*/
/*                         {% set i = i + 1 %}*/
/*                         {% endfor %}*/
/*                 </div>*/
/*                 <div id="ultimomes" class="tab-pane fade">*/
/*                     {% set i = 0 %}*/
/*                         {% for pelicula in ultimomes %}*/
/*                         <div class="vistas-pendientes">*/
/*                              <a href="{{ url('homepage') }}vista/mostrarpelicula/{{pelicula.id}}" >*/
/*                             {% if pelicula.poster_path == "" %}*/
/*                                 <img {%if i == ((ultimomes|length)-1) %}*/
/*                                 class="espacio-bot img-pendientes";  {%else%} class="img-pendientes";*/
/*                                 {%endif%} src="{{asset('assets/images/movie.png')}}" height="278" width="185" alt="{{pelicula.title}}" synopsis="{{pelicula.overview}}" fechaAdicion="{{pelicula.fecha_adicion|date("d/m/Y")}}"> */
/*                                 {% else %}*/
/*                                 <img {%if i == ((ultimomes|length)-1) %}*/
/*                                 class="espacio-bot img-pendientes";  {%else%} class="img-pendientes";*/
/*                                 {%endif%} src="https://image.tmdb.org/t/p/w185/{{pelicula.poster_path}}" height="278" width="185" alt="{{pelicula.title}}" synopsis="{{pelicula.overview}}" fechaAdicion="{{pelicula.fecha_adicion|date("d/m/Y")}}">  */
/*                             {% endif %}*/
/*                             </a>*/
/*                         </div>*/
/*                         {% set i = i + 1 %}*/
/*                         {% endfor %}*/
/*                 </div>*/
/*                 */
/*                 <div id="generosvistos" class="tab-pane fade">*/
/*                     <ul>*/
/*                     {% for generovisto in generosvistos %}*/
/*                         <li>{{generovisto}}</li>*/
/*                     {% endfor %}*/
/*                     </ul>*/
/*                     */
/*                 </div>*/
/*                 <br/>*/
/*                 */
/*             </div>-->*/
/*           */
/*     </div>*/
/*     <div id="pendientes" class="tab-pane fade">*/
/*         <div class="alert alert-warning" role="alert"><strong>Warning!!</strong> Limitación de la API</div>*/
/*             */
/*             {% set i = 0 %}*/
/*             {% for pelicula in pendientes %}*/
/*             <div class="vistas-pendientes">*/
/*                  <a href="{{ url('homepage') }}vista/mostrarpelicula/{{pelicula.id}}" >*/
/*                 {% if pelicula.poster_path == "" %}*/
/*                 <img {%if i == ((pendientes|length)-1) %}*/
/*                     class="espacio-bot img-pendientes"; {%else%} class="img-pendientes";*/
/*                     {%endif%} src="{{asset('assets/images/movie.png')}}" height="278" width="185" alt="{{pelicula.title}}" synopsis="{{pelicula.overview}}" fechaAdicion="{{pelicula.fecha_adicion|date("d/m/Y")}}" valoracion ="-1" iterador="-1"> {% else %}*/
/*                 <img {%if i == ((pendientes|length)-1) %}*/
/*                     class="espacio-bot img-pendientes";  {%else%} class="img-pendientes";*/
/*                     {%endif%} src="https://image.tmdb.org/t/p/w185/{{pelicula.poster_path}}" height="278" width="185" alt="{{pelicula.title}}" synopsis="{{pelicula.overview}}" fechaAdicion="{{pelicula.fecha_adicion|date("d/m/Y")}}" valoracion ="-1" iterador="-1">   {% endif %}*/
/*                     </a>*/
/*             </div>*/
/*             {% set i = i + 1 %}*/
/*             {% endfor %}*/
/*         */
/*     </div>*/
/*     */
/*     <div id="calificadas" class="tab-pane fade">*/
/*         <div class="alert alert-warning" role="alert"><strong>Warning!!</strong> Limitación de la API</div>*/
/*             */
/*            {% set i = 0 %}*/
/*             {% for pelicula in calificadas %}*/
/*             <div class="vistas-pendientes">*/
/*                  <a href="{{ url('homepage') }}vista/mostrarpelicula/{{pelicula.id}}" >*/
/*                   */
/*                 {% if pelicula.poster_path == "" %}*/
/*                 <img {%if i == ((calificadas|length)-1) %}*/
/*                     class="espacio-bot img-pendientes";  {%else%} class="img-pendientes";*/
/*                     {%endif%} src="{{asset('assets/images/movie.png')}}" height="278" width="185" alt="{{pelicula.title}}" synopsis="{{pelicula.overview}}" fechaAdicion="{{pelicula.fecha_adicion|date("d/m/Y")}}" valoracion ="{{pelicula.valoracion}}" iterador="{{i}}"> {% else %}*/
/*                 <img {%if i == ((calificadas|length)-1) %}*/
/*                     class="espacio-bot img-pendientes";  {%else%} class="img-pendientes";*/
/*                     {%endif%} src="https://image.tmdb.org/t/p/w185/{{pelicula.poster_path}}" height="278" width="185" alt="{{pelicula.title}}" synopsis="{{pelicula.overview}}" fechaAdicion="{{pelicula.fecha_adicion|date("d/m/Y")}}" valoracion ="{{pelicula.valoracion}}" iterador="{{i}}">*/
/*                     */
/*                     {% endif %}*/
/*                     </a>*/
/*             </div>*/
/*             {% set i = i + 1 %}*/
/*             {% endfor %}*/
/*         */
/*     </div>*/
/*     */
/*    */
/*     */
/* </div>*/
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
/*         */
/*         */
/*     </div>*/
/*     */
/*     <div class="col-md-3 columna-index-boostrap" style="display:none;">*/
/*             <div id="bloqueDetalle" class="columna-index columna-index-top" >*/
/*             <img id="img-detalles" src=""  height="278" width="185" alt="..."><br/>*/
/*             <br>*/
/*             <center>*/
/*             {%set i = 0%}*/
/*             {%for pelicula in calificadas%}*/
/*              <span style="display:none;" id="calificacionPersonal{{i}}" class="rateyo-readonly-widg estrellas"></span>*/
/*              {%set i = i +1%}*/
/*              {%endfor%}*/
/*              </center>*/
/*             <label id="titulo-detalles" class="titulo-detalles">  ... </label><br/>*/
/*             <label id="fecha-detalles" class="fecha-detalles">  ... </label><br/>*/
/*             <label id="synopsis-detalles" class="synopsis-detalles">  ... </label>*/
/*             */
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* {%block javascripts%}*/
/*  {{ parent() }}*/
/* <script>*/
/*       */
/*         {% set i = 0 %}*/
/*      {% for pelicula in calificadas %}*/
/*             $("#calificacionPersonal{{i}}").rateYo({*/
/*                     */
/*                     readOnly: true,*/
/*                     rating: {{pelicula.valoracion}},*/
/*                     numStars: 10,*/
/*                     precision: 10,*/
/*                     minValue: 1,*/
/*                     maxValue: 10*/
/*                 });*/
/*           {% set i = i+1 %}      */
/*     {%endfor%}*/
/*         */
/*         $(".img-pendientes").hover(function(){*/
/*             $('.estrellas').attr("style","display:none; width:120px;");*/
/*             var imagen= $(this).attr("src");*/
/*             var titulo= $(this).attr("alt");*/
/*             var synopsis= $(this).attr("synopsis");*/
/*             var fecha= $(this).attr("fechaAdicion");*/
/*             var valoracion= $(this).attr("valoracion");*/
/*             var iterador= $(this).attr("iterador");*/
/*             */
/*             if(iterador>-1){*/
/*                 */
/*                 $('#calificacionPersonal'+iterador).attr("style","width:120px;");*/
/*                 */
/*             }*/
/*             */
/*             $("#img-detalles").attr("src", imagen);*/
/*             $("#img-detalles").attr("alt", titulo);*/
/*             $("#titulo-detalles").html("<strong>"+titulo+"</strong>");*/
/*             $("#synopsis-detalles").html(synopsis);*/
/*             $("#fecha-detalles").html("Adicionada: " + fecha);*/
/*             $(".col-md-3").attr("style","display:inline;");*/
/*         });*/
/*         */
/*         $(document).scroll(function() {*/
/*           var y = $(this).scrollTop();*/
/*           if (y > 380) {*/
/*             $('#bloqueDetalle').attr("class","columna-index columna-index-top bajar");*/
/*           }else{*/
/*             $('#bloqueDetalle').attr("class","columna-index columna-index-top");*/
/*           }*/
/*         });*/
/* */
/*          $(".botonTerminarEdicion").click(function(){*/
/*              */
/*                     var idLista = $(this).attr("idlista");*/
/*                     $.ajax({*/
/*                     type: "GET",*/
/*                     url: "{{url('cambiar_nombre_coleccion')}}",*/
/*                     data: { idColeccion:idLista, nuevoNombre:$("#tituloPanelColeccion"+idLista).val()},*/
/*                     dataType: "json",*/
/*                    */
/*                     //if received a response from the server*/
/*                     success: function( data, textStatus, jqXHR) {*/
/*                          if(data.success){*/
/*                              $("#mensajeEmergente").html("");*/
/*                          } */
/*                          //display error message*/
/*                          else {*/
/*                              $("#mensajeEmergente").html("Error ¬_¬");*/
/*                          }*/
/*                     },*/
/*                    */
/*                     //If there was no resonse from the server*/
/*                     error: function(jqXHR, textStatus, errorThrown){*/
/*                         */
/*                            if(jqXHR.status == 405)*/
/*                            {*/
/*                             $("#mensajeEmergente").html(jqXHR.responseText);*/
/*                             $('#divEmergente').attr("class","alert alert-danger alert-dismissible" );*/
/*                             $('#divEmergente').show(1000).delay(3000);*/
/*                             $('#divEmergente').hide(1000);*/
/*                            }*/
/*                            if(jqXHR.status == 200)*/
/*                            {*/
/* */
/*                             $(divEliminar).hide(1000);*/
/*                             */
/*                             */
/*                            }  */
/*                     },*/
/*                    */
/*     */
/*          */
/*                 }); */
/*         */
/*     });*/
/*          $(".botonEliminarColeccion").click(function(){*/
/*              */
/*                     var idLista = $(this).attr("idlista");*/
/*                     var divEliminar="#divPrimario"+idLista;*/
/*                     $.ajax({*/
/*                     type: "GET",*/
/*                     url: "{{url('eliminar_coleccion_personalizada')}}",*/
/*                     data: { idColeccion:idLista},*/
/*                     dataType: "json",*/
/*                    */
/*                     //if received a response from the server*/
/*                     success: function( data, textStatus, jqXHR) {*/
/*                          if(data.success){*/
/*                              $("#mensajeEmergente").html("");*/
/*                          } */
/*                          //display error message*/
/*                          else {*/
/*                              $("#mensajeEmergente").html("Error ¬_¬");*/
/*                          }*/
/*                     },*/
/*                    */
/*                     //If there was no resonse from the server*/
/*                     error: function(jqXHR, textStatus, errorThrown){*/
/*                         */
/*                            if(jqXHR.status == 405)*/
/*                            {*/
/*                             $("#mensajeEmergente").html(jqXHR.responseText);*/
/*                             $('#divEmergente').attr("class","alert alert-danger alert-dismissible" );*/
/*                             $('#divEmergente').show(1000).delay(3000);*/
/*                             $('#divEmergente').hide(1000);*/
/*                            }*/
/*                            if(jqXHR.status == 200)*/
/*                            {*/
/* */
/*                             $(divEliminar).hide(1000);*/
/*                             */
/*                             */
/*                            }  */
/*                     },*/
/*                    */
/*     */
/*          */
/*                 }); */
/*         */
/*     });*/
/* */
/*          $(".borrar_de_lista").click(function(){*/
/*              */
/*              var nombre= "#divPeliculaColeccion_"+$(this).attr("idcoleccion")+"_"+$(this).attr("idpelicula");*/
/*              var divImagenEliminar = $(this).parent();*/
/*              divImagenEliminar.attr("onclick","");*/
/*                     $.ajax({*/
/*                     type: "GET",*/
/*                     url: "{{url('eliminar_pelicula_lista_personalizada')}}",*/
/*                     data: { idColeccion:$(this).attr("idcoleccion"), idPelicula:$(this).attr("idpelicula")},*/
/*                     dataType: "json",*/
/*                    */
/*                     //if received a response from the server*/
/*                     success: function( data, textStatus, jqXHR) {*/
/*                          if(data.success){*/
/*                              $("#mensajeEmergente").html("");*/
/*                          } */
/*                          //display error message*/
/*                          else {*/
/*                              $("#mensajeEmergente").html("Error ¬_¬");*/
/*                          }*/
/*                     },*/
/*                    */
/*                     //If there was no resonse from the server*/
/*                     error: function(jqXHR, textStatus, errorThrown){*/
/*                         */
/*                            if(jqXHR.status == 405)*/
/*                            {*/
/*                             $("#mensajeEmergente").html(jqXHR.responseText);*/
/*                             $('#divEmergente').attr("class","alert alert-danger alert-dismissible" );*/
/*                             $('#divEmergente').show(1000).delay(3000);*/
/*                             $('#divEmergente').hide(1000);*/
/*                            }*/
/*                            if(jqXHR.status == 200)*/
/*                            {*/
/* */
/*                             divImagenEliminar.hide(1000);*/
/*                             */
/*                             */
/*                            }  */
/*                     },*/
/*                    */
/*     */
/*          */
/*                 }); */
/*         */
/*     });*/
/* */
/*      $(function() {*/
/*          {%set i = i + 0%}*/
/*         {% for pelicula in descubiertas.results%}*/
/*             var rating = {{pelicula.vote_average}};*/
/*             $(".counter").text(rating);*/
/*             $("#c{{i}}").rateYo({*/
/*                 readOnly: true,*/
/*                 rating: rating,*/
/*                 numStars: 10,*/
/*                 precision: 10,*/
/*                 minValue: 1,*/
/*                 maxValue: 10*/
/*             }).on("rateyo.change", function(e, data) {*/
/*                 $("#c{{i}}").val(data.rating);*/
/*             });*/
/*             */
/*                 {%set i = i + 1%}*/
/*         {%endfor%}*/
/*      });*/
/*      */
/* */
/*      {% for coleccion in peliculas_coleccion %}*/
/*      $(".{{coleccion.idColeccion}}_botonEditarColeccion").click(function(){*/
/*                $(".{{coleccion.idColeccion}}_botonEliminarColeccion").attr("style","display:inline;"); */
/*                $(".{{coleccion.idColeccion}}_botonEditarColeccion").attr("style","display:none;");*/
/*                $(".{{coleccion.idColeccion}}_botonTerminarEdicion").attr("style","display:inline;");*/
/*                $(".{{coleccion.idColeccion}}_selector").attr("style","display:inline;");*/
/*                $("#tituloPanelColeccion"+$(this).attr("idlista")).prop("readonly", false);*/
/*                $("#tituloPanelColeccion"+$(this).attr("idlista")).attr("class", "tituloPanelColeccionReadable");*/
/*             });*/
/*     $(".{{coleccion.idColeccion}}_botonTerminarEdicion").click(function(){*/
/*                $(".{{coleccion.idColeccion}}_botonEliminarColeccion").attr("style","display:inline;"); */
/*                $(".{{coleccion.idColeccion}}_botonEditarColeccion").attr("style","display:inline;");*/
/*                $(".{{coleccion.idColeccion}}_botonTerminarEdicion").attr("style","display:none;");*/
/*                $(".{{coleccion.idColeccion}}_selector").attr("style","display:none;");*/
/*                $("#tituloPanelColeccion"+$(this).attr("idlista")).prop("readonly", true);*/
/*                $("#tituloPanelColeccion"+$(this).attr("idlista")).attr("class", "tituloPanelColeccionReadOnly");*/
/*                */
/*     });*/
/*     {%endfor%}*/
/*     */
/*     </script>   */
/* {%endblock%}*/
