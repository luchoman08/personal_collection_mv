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
        <li class=\"active\"><a data-toggle=\"tab\" href=\"#descubrir\">Descubrir&nbsp;</a></li>
        <li><a data-toggle=\"tab\" href=\"#listas\">Mis listas&nbsp;</a></li>
        <li><a data-toggle=\"tab\" href=\"#vistas\">Vistas&nbsp;</a></li>
        <li><a data-toggle=\"tab\" href=\"#pendientes\">Pendientes&nbsp;</a></li>
        <li><a data-toggle=\"tab\" href=\"#calificadas\">Calificadas&nbsp;</a></li>
        <li><a data-toggle=\"tab\" href=\"#perfil\">Mis Datos Personales</a></li>
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
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["peliculas_coleccion"]) ? $context["peliculas_coleccion"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coleccion"]) {
            // line 40
            echo "                <br>
                <div id=\"divPrimario";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "\"idLista=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "\" class=\"panel panel-primary\" >
                
                
                    <div id=\"div";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "\" class=\"panel-heading\">
                        
                             <strong> <input class=\"tituloPanelColeccionReadOnly\"  value =  \"";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "nombreColeccion", array()), "html", null, true);
            echo "\" size=\"25\" type=\"text\"  id=\"tituloPanelColeccion";
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "\" readOnly></strong>
                        
                   <div style=\"float: right; \">
                        <a  idLista=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "\" style=\"display:none;\" class=\"btn btn-success btn-xs ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "_botonTerminarEdicion botonTerminarEdicion\">Guardar</a>
                        <a  idLista=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "\" class=\"btn btn-success btn-xs ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "_botonEditarColeccion\">Editar</a>
                        <a  idLista=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "\" class=\"btn btn-danger btn-xs ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "_botonEliminarColeccion botonEliminarColeccion\">Eliminar</a>
                    </div>
                    
            </div>
                <div class=\"panel-body\">
                
                    ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["coleccion"], "peliculas", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
                // line 58
                echo "                    
                        <div class=\"miniaturas\"  id=\"divPeliculaColeccion_";
                // line 59
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
                // line 60
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
            // line 64
            echo "                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coleccion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "        </div>
        </div> 
        
    <div id=\"descubrir\" class=\"tab-pane fade in active\">
        ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gustos"]) ? $context["gustos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["gusto"]) {
            // line 72
            echo "        <div class=\"gustos\"> ";
            echo twig_escape_filter($this->env, $context["gusto"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gusto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "        <br/> <br/> 
        ";
        // line 75
        if (((isset($context["descubiertas"]) ? $context["descubiertas"] : null) == null)) {
            // line 76
            echo "            <center>
                <h3>No tiene gustos registrados, puede adicionarlos en Mi perfil.</h3>
            </center>
            <br/> 
        ";
        }
        // line 80
        echo " 
        
        ";
        // line 82
        $context["i"] = 0;
        echo " 
        ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["descubiertas"]) ? $context["descubiertas"] : null), "results", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 84
            echo "
        <div class=\"resultado\" onclick=\"window.open('";
            // line 85
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "','_blank');\">
            <a>
            ";
            // line 87
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 88
                echo "                
                <img class=\"img-pendientes\"; src=\"";
                // line 89
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" alt=\"...\">
                           
                ";
            } else {
                // line 92
                echo "                        
                <img src=\"https://image.tmdb.org/t/p/w185/";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" alt=\"...\">
                        
            ";
            }
            // line 96
            echo "            </a>
            <div class=\"resultado-articulo\">
                <label> ";
            // line 98
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
            // line 103
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            echo " 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "
        <center>
            <a href=\"";
        // line 107
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
        // line 114
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
        // line 125
        echo $this->env->getExtension('routing')->getUrl("generos_barra");
        echo "\">Editar</a>
                                  </div>
                                 <h1>Generos que me gustan</h1>
                        </div>
                         <div class=\"panel-body\">
                                <ul>
                                    ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gustos"]) ? $context["gustos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["gusto"]) {
            // line 132
            echo "                                        <li>";
            echo twig_escape_filter($this->env, $context["gusto"], "html", null, true);
            echo "</li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gusto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "                                </ul>
                            
                            <br/>
                          </div>
            </div>
    </div>
    <div id=\"vistas\" class=\"tab-pane fade\">
        <div class=\"alert alert-warning\" role=\"alert\"><strong>Warning!!</strong> Limitación de la API</div>
          
          ";
        // line 143
        $context["i"] = 0;
        // line 144
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vistas"]) ? $context["vistas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 145
            echo "                        
                        <div class=\"vistas-pendientes\">
                             <a href=\"";
            // line 147
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" >
                            ";
            // line 148
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 149
                echo "                                <img ";
                if (((isset($context["i"]) ? $context["i"] : null) == (twig_length_filter($this->env, (isset($context["vistas"]) ? $context["vistas"] : null)) - 1))) {
                    // line 150
                    echo "                                class=\"espacio-bot img-pendientes\";  ";
                } else {
                    echo " class=\"img-pendientes\";
                                ";
                }
                // line 151
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
                // line 153
                echo "                                <img ";
                if (((isset($context["i"]) ? $context["i"] : null) == (twig_length_filter($this->env, (isset($context["vistas"]) ? $context["vistas"] : null)) - 1))) {
                    // line 154
                    echo "                                class=\"espacio-bot img-pendientes\";  ";
                } else {
                    echo " class=\"img-pendientes\";
                                ";
                }
                // line 155
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
            // line 157
            echo "                            </a>
                        </div>
                        ";
            // line 159
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 160
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
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
        // line 172
        $context["i"] = 0;
        // line 173
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vistas"]) ? $context["vistas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 174
            echo "                        
                        <div class=\"vistas-pendientes\">
                             <a href=\"";
            // line 176
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" >
                            ";
            // line 177
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 178
                echo "                                <img ";
                if (((isset($context["i"]) ? $context["i"] : null) == (twig_length_filter($this->env, (isset($context["vistas"]) ? $context["vistas"] : null)) - 1))) {
                    // line 179
                    echo "                                class=\"espacio-bot img-pendientes\";  ";
                } else {
                    echo " class=\"img-pendientes\";
                                ";
                }
                // line 180
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
                // line 182
                echo "                                <img ";
                if (((isset($context["i"]) ? $context["i"] : null) == (twig_length_filter($this->env, (isset($context["vistas"]) ? $context["vistas"] : null)) - 1))) {
                    // line 183
                    echo "                                class=\"espacio-bot img-pendientes\";  ";
                } else {
                    echo " class=\"img-pendientes\";
                                ";
                }
                // line 184
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
            // line 186
            echo "                            </a>
                        </div>
                        ";
            // line 188
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 189
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "                </div>
                <div id=\"ultimomes\" class=\"tab-pane fade\">
                    ";
        // line 192
        $context["i"] = 0;
        // line 193
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ultimomes"]) ? $context["ultimomes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 194
            echo "                        <div class=\"vistas-pendientes\">
                             <a href=\"";
            // line 195
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" >
                            ";
            // line 196
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 197
                echo "                                <img ";
                if (((isset($context["i"]) ? $context["i"] : null) == (twig_length_filter($this->env, (isset($context["ultimomes"]) ? $context["ultimomes"] : null)) - 1))) {
                    // line 198
                    echo "                                class=\"espacio-bot img-pendientes\";  ";
                } else {
                    echo " class=\"img-pendientes\";
                                ";
                }
                // line 199
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
                // line 201
                echo "                                <img ";
                if (((isset($context["i"]) ? $context["i"] : null) == (twig_length_filter($this->env, (isset($context["ultimomes"]) ? $context["ultimomes"] : null)) - 1))) {
                    // line 202
                    echo "                                class=\"espacio-bot img-pendientes\";  ";
                } else {
                    echo " class=\"img-pendientes\";
                                ";
                }
                // line 203
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
            // line 205
            echo "                            </a>
                        </div>
                        ";
            // line 207
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 208
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        echo "                </div>
                
                <div id=\"generosvistos\" class=\"tab-pane fade\">
                    <ul>
                    ";
        // line 213
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["generosvistos"]) ? $context["generosvistos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["generovisto"]) {
            // line 214
            echo "                        <li>";
            echo twig_escape_filter($this->env, $context["generovisto"], "html", null, true);
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['generovisto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        echo "                    </ul>
                    
                </div>
                <br/>
                
            </div>-->
          
    </div>
    <div id=\"pendientes\" class=\"tab-pane fade\">
        <div class=\"alert alert-warning\" role=\"alert\"><strong>Warning!!</strong> Limitación de la API</div>
            
            ";
        // line 227
        $context["i"] = 0;
        // line 228
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pendientes"]) ? $context["pendientes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 229
            echo "            <div class=\"vistas-pendientes\">
                 <a href=\"";
            // line 230
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" >
                ";
            // line 231
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 232
                echo "                <img ";
                if (((isset($context["i"]) ? $context["i"] : null) == (twig_length_filter($this->env, (isset($context["pendientes"]) ? $context["pendientes"] : null)) - 1))) {
                    // line 233
                    echo "                    class=\"espacio-bot img-pendientes\"; ";
                } else {
                    echo " class=\"img-pendientes\";
                    ";
                }
                // line 234
                echo " src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" height=\"278\" width=\"185\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
                echo "\" synopsis=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "overview", array()), "html", null, true);
                echo "\" fechaAdicion=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pelicula"], "fecha_adicion", array()), "d/m/Y"), "html", null, true);
                echo "\"> ";
            } else {
                // line 235
                echo "                <img ";
                if (((isset($context["i"]) ? $context["i"] : null) == (twig_length_filter($this->env, (isset($context["pendientes"]) ? $context["pendientes"] : null)) - 1))) {
                    // line 236
                    echo "                    class=\"espacio-bot img-pendientes\";  ";
                } else {
                    echo " class=\"img-pendientes\";
                    ";
                }
                // line 237
                echo " src=\"https://image.tmdb.org/t/p/w185/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" height=\"278\" width=\"185\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
                echo "\" synopsis=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "overview", array()), "html", null, true);
                echo "\" fechaAdicion=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pelicula"], "fecha_adicion", array()), "d/m/Y"), "html", null, true);
                echo "\">   ";
            }
            // line 238
            echo "                    </a>
            </div>
            ";
            // line 240
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 241
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 242
        echo "        
    </div>
    
    <div id=\"calificadas\" class=\"tab-pane fade\">
        <div class=\"alert alert-warning\" role=\"alert\"><strong>Warning!!</strong> Limitación de la API</div>
            
           ";
        // line 248
        $context["i"] = 0;
        // line 249
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["calificadas"]) ? $context["calificadas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 250
            echo "            <div class=\"vistas-pendientes\">
                 <a href=\"";
            // line 251
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" >
                ";
            // line 252
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 253
                echo "                <img ";
                if (((isset($context["i"]) ? $context["i"] : null) == (twig_length_filter($this->env, (isset($context["calificadas"]) ? $context["calificadas"] : null)) - 1))) {
                    // line 254
                    echo "                    class=\"espacio-bot img-pendientes\";  ";
                } else {
                    echo " class=\"img-pendientes\";
                    ";
                }
                // line 255
                echo " src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" height=\"278\" width=\"185\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
                echo "\" synopsis=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "overview", array()), "html", null, true);
                echo "\" fechaAdicion=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pelicula"], "fecha_adicion", array()), "d/m/Y"), "html", null, true);
                echo "\"> ";
            } else {
                // line 256
                echo "                <img ";
                if (((isset($context["i"]) ? $context["i"] : null) == (twig_length_filter($this->env, (isset($context["calificadas"]) ? $context["calificadas"] : null)) - 1))) {
                    // line 257
                    echo "                    class=\"espacio-bot img-pendientes\";  ";
                } else {
                    echo " class=\"img-pendientes\";
                    ";
                }
                // line 258
                echo " src=\"https://image.tmdb.org/t/p/w185/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" height=\"278\" width=\"185\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
                echo "\" synopsis=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "overview", array()), "html", null, true);
                echo "\" fechaAdicion=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pelicula"], "fecha_adicion", array()), "d/m/Y"), "html", null, true);
                echo "\">   ";
            }
            // line 259
            echo "                    </a>
            </div>
            ";
            // line 261
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 262
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 263
        echo "        
    </div>
    
   
    
</div>
";
    }

    // line 271
    public function block_barraderecha($context, array $blocks = array())
    {
        // line 272
        echo "
    <div class=\"col-md-3 columna-index-boostrap\">
        <div class=\"columna-index\">
            
            <label>";
        // line 276
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nombres", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "apellidos", array()), "html", null, true);
        echo "</label>
            
        </div>
        
        
    </div>
    
    <div class=\"col-md-3 columna-index-boostrap\" style=\"display:none;\">
            <div id=\"bloqueDetalle\" class=\"columna-index columna-index-top\" >
            <img id=\"img-detalles\" src=\"\"  height=\"278\" width=\"185\" alt=\"...\"><br/>
            <label id=\"titulo-detalles\" class=\"titulo-detalles\">  ... </label><br/>
            <label id=\"fecha-detalles\" class=\"fecha-detalles\">  ... </label><br/>
            <label id=\"synopsis-detalles\" class=\"synopsis-detalles\">  ... </label>
            
        </div>
    </div>

";
    }

    // line 295
    public function block_javascripts($context, array $blocks = array())
    {
        // line 296
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script>
        
        
        \$(\".img-pendientes\").hover(function(){
            var imagen= \$(this).attr(\"src\");
            var titulo= \$(this).attr(\"alt\");
            var synopsis= \$(this).attr(\"synopsis\");
            var fecha= \$(this).attr(\"fechaAdicion\");
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
        // line 327
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
        // line 372
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
        // line 419
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
        // line 460
        $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 0);
        // line 461
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["descubiertas"]) ? $context["descubiertas"] : null), "results", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 462
            echo "            var rating = ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "vote_average", array()), "html", null, true);
            echo ";
            \$(\".counter\").text(rating);
            \$(\"#c";
            // line 464
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
            // line 472
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").val(data.rating);
            });
            
                ";
            // line 475
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 476
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 477
        echo "     });
     

     ";
        // line 480
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["peliculas_coleccion"]) ? $context["peliculas_coleccion"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coleccion"]) {
            // line 481
            echo "     \$(\".";
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "_botonEditarColeccion\").click(function(){
               \$(\".";
            // line 482
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "_botonEliminarColeccion\").attr(\"style\",\"display:inline;\"); 
               \$(\".";
            // line 483
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "_botonEditarColeccion\").attr(\"style\",\"display:none;\");
               \$(\".";
            // line 484
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "_botonTerminarEdicion\").attr(\"style\",\"display:inline;\");
               \$(\".";
            // line 485
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "_selector\").attr(\"style\",\"display:inline;\");
               \$(\"#tituloPanelColeccion\"+\$(this).attr(\"idlista\")).prop(\"readonly\", false);
               \$(\"#tituloPanelColeccion\"+\$(this).attr(\"idlista\")).attr(\"class\", \"tituloPanelColeccionReadable\");
            });
    \$(\".";
            // line 489
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "_botonTerminarEdicion\").click(function(){
               \$(\".";
            // line 490
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "_botonEliminarColeccion\").attr(\"style\",\"display:inline;\"); 
               \$(\".";
            // line 491
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "_botonEditarColeccion\").attr(\"style\",\"display:inline;\");
               \$(\".";
            // line 492
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "_botonTerminarEdicion\").attr(\"style\",\"display:none;\");
               \$(\".";
            // line 493
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
        // line 499
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
        return array (  1098 => 499,  1086 => 493,  1082 => 492,  1078 => 491,  1074 => 490,  1070 => 489,  1063 => 485,  1059 => 484,  1055 => 483,  1051 => 482,  1046 => 481,  1042 => 480,  1037 => 477,  1031 => 476,  1029 => 475,  1023 => 472,  1012 => 464,  1006 => 462,  1001 => 461,  999 => 460,  955 => 419,  905 => 372,  857 => 327,  822 => 296,  819 => 295,  795 => 276,  789 => 272,  786 => 271,  776 => 263,  770 => 262,  768 => 261,  764 => 259,  753 => 258,  747 => 257,  744 => 256,  733 => 255,  727 => 254,  724 => 253,  722 => 252,  716 => 251,  713 => 250,  708 => 249,  706 => 248,  698 => 242,  692 => 241,  690 => 240,  686 => 238,  675 => 237,  669 => 236,  666 => 235,  655 => 234,  649 => 233,  646 => 232,  644 => 231,  638 => 230,  635 => 229,  630 => 228,  628 => 227,  615 => 216,  606 => 214,  602 => 213,  596 => 209,  590 => 208,  588 => 207,  584 => 205,  572 => 203,  566 => 202,  563 => 201,  551 => 199,  545 => 198,  542 => 197,  540 => 196,  534 => 195,  531 => 194,  526 => 193,  524 => 192,  520 => 190,  514 => 189,  512 => 188,  508 => 186,  496 => 184,  490 => 183,  487 => 182,  475 => 180,  469 => 179,  466 => 178,  464 => 177,  458 => 176,  454 => 174,  449 => 173,  447 => 172,  434 => 161,  428 => 160,  426 => 159,  422 => 157,  410 => 155,  404 => 154,  401 => 153,  389 => 151,  383 => 150,  380 => 149,  378 => 148,  372 => 147,  368 => 145,  363 => 144,  361 => 143,  350 => 134,  341 => 132,  337 => 131,  328 => 125,  312 => 114,  298 => 107,  294 => 105,  286 => 103,  272 => 98,  268 => 96,  262 => 93,  259 => 92,  253 => 89,  250 => 88,  248 => 87,  241 => 85,  238 => 84,  234 => 83,  230 => 82,  226 => 80,  219 => 76,  217 => 75,  214 => 74,  205 => 72,  201 => 71,  195 => 67,  187 => 64,  171 => 60,  159 => 59,  156 => 58,  152 => 57,  141 => 51,  135 => 50,  129 => 49,  121 => 46,  116 => 44,  108 => 41,  105 => 40,  101 => 39,  76 => 16,  73 => 15,  65 => 10,  61 => 8,  51 => 6,  48 => 5,  45 => 4,  42 => 3,  32 => 2,  11 => 1,);
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
/* */
/* <div class="menu-pelicula-border-black">*/
/*     <ul class="menu-pelicula-tab">*/
/*         <li class="active"><a data-toggle="tab" href="#descubrir">Descubrir&nbsp;</a></li>*/
/*         <li><a data-toggle="tab" href="#listas">Mis listas&nbsp;</a></li>*/
/*         <li><a data-toggle="tab" href="#vistas">Vistas&nbsp;</a></li>*/
/*         <li><a data-toggle="tab" href="#pendientes">Pendientes&nbsp;</a></li>*/
/*         <li><a data-toggle="tab" href="#calificadas">Calificadas&nbsp;</a></li>*/
/*         <li><a data-toggle="tab" href="#perfil">Mis Datos Personales</a></li>*/
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
/*                     {%endif%} src="{{asset('assets/images/movie.png')}}" height="278" width="185" alt="{{pelicula.title}}" synopsis="{{pelicula.overview}}" fechaAdicion="{{pelicula.fecha_adicion|date("d/m/Y")}}"> {% else %}*/
/*                 <img {%if i == ((pendientes|length)-1) %}*/
/*                     class="espacio-bot img-pendientes";  {%else%} class="img-pendientes";*/
/*                     {%endif%} src="https://image.tmdb.org/t/p/w185/{{pelicula.poster_path}}" height="278" width="185" alt="{{pelicula.title}}" synopsis="{{pelicula.overview}}" fechaAdicion="{{pelicula.fecha_adicion|date("d/m/Y")}}">   {% endif %}*/
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
/*                 {% if pelicula.poster_path == "" %}*/
/*                 <img {%if i == ((calificadas|length)-1) %}*/
/*                     class="espacio-bot img-pendientes";  {%else%} class="img-pendientes";*/
/*                     {%endif%} src="{{asset('assets/images/movie.png')}}" height="278" width="185" alt="{{pelicula.title}}" synopsis="{{pelicula.overview}}" fechaAdicion="{{pelicula.fecha_adicion|date("d/m/Y")}}"> {% else %}*/
/*                 <img {%if i == ((calificadas|length)-1) %}*/
/*                     class="espacio-bot img-pendientes";  {%else%} class="img-pendientes";*/
/*                     {%endif%} src="https://image.tmdb.org/t/p/w185/{{pelicula.poster_path}}" height="278" width="185" alt="{{pelicula.title}}" synopsis="{{pelicula.overview}}" fechaAdicion="{{pelicula.fecha_adicion|date("d/m/Y")}}">   {% endif %}*/
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
/*         */
/*         */
/*         $(".img-pendientes").hover(function(){*/
/*             var imagen= $(this).attr("src");*/
/*             var titulo= $(this).attr("alt");*/
/*             var synopsis= $(this).attr("synopsis");*/
/*             var fecha= $(this).attr("fechaAdicion");*/
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
/* */
/*     </script>   */
/* {%endblock%}*/
