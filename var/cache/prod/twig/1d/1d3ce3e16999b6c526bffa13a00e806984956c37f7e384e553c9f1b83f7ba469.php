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
        <li><a data-toggle=\"tab\" href=\"#perfil\">Mi perfil</a></li>
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
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["peliculas_coleccion"]) ? $context["peliculas_coleccion"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coleccion"]) {
            // line 39
            echo "                <br>
                <div id=\"divPrimario";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "\"idLista=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "\" class=\"panel panel-primary\" >
                
                
                    <div id=\"div";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "\" class=\"panel-heading\">
                        
                             <strong> <input class=\"tituloPanelColeccionReadOnly\"  value =  \"";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "nombreColeccion", array()), "html", null, true);
            echo "\" size=\"25\" type=\"text\"  id=\"tituloPanelColeccion";
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "\" readOnly></strong>
                        
                   <div style=\"float: right; \">
                        <a  idLista=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "\" style=\"display:none;\" class=\"btn btn-success btn-xs ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "_botonTerminarEdicion botonTerminarEdicion\">Guardar</a>
                        <a  idLista=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "\" class=\"btn btn-success btn-xs ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "_botonEditarColeccion\">Editar</a>
                        <a  idLista=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "\" class=\"btn btn-danger btn-xs ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "_botonEliminarColeccion botonEliminarColeccion\">Eliminar</a>
                    </div>
                    
            </div>
                <div class=\"panel-body\">
                
                    ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["coleccion"], "peliculas", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
                // line 57
                echo "                    
                        <div class=\"miniaturas\"  id=\"divPeliculaColeccion_";
                // line 58
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
                // line 59
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
            // line 63
            echo "                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coleccion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "        </div>
        </div> 
        
    <div id=\"descubrir\" class=\"tab-pane fade in active\">
        ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gustos"]) ? $context["gustos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["gusto"]) {
            // line 71
            echo "        <div class=\"gustos\"> ";
            echo twig_escape_filter($this->env, $context["gusto"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gusto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "        <br/> <br/> 
        ";
        // line 74
        if (((isset($context["descubiertas"]) ? $context["descubiertas"] : null) == null)) {
            // line 75
            echo "            <center>
                <h3>No tiene gustos registrados, puede adicionarlos en Mi perfil.</h3>
            </center>
            <br/> 
        ";
        }
        // line 79
        echo " 
        
        ";
        // line 81
        $context["i"] = 0;
        echo " 
        ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["descubiertas"]) ? $context["descubiertas"] : null), "results", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 83
            echo "
        <div class=\"resultado\" onclick=\"window.open('";
            // line 84
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "','_blank');\">
            <a>
            ";
            // line 86
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 87
                echo "                
                <img class=\"img-pendientes\"; src=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" alt=\"...\">
                           
                ";
            } else {
                // line 91
                echo "                        
                <img src=\"https://image.tmdb.org/t/p/w185/";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" alt=\"...\">
                        
            ";
            }
            // line 95
            echo "            </a>
            <div class=\"resultado-articulo\">
                <label> ";
            // line 97
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
            // line 102
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            echo " 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "
        <center>
            <a href=\"";
        // line 106
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
            <strong>Nombre:</strong> ";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nombres", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "apellidos", array()), "html", null, true);
        echo "<br/>
            <strong>Nickname:</strong> ";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nickname", array()), "html", null, true);
        echo "<br/>
            <strong>E-Mail:</strong> ";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "correoElectronico", array()), "html", null, true);
        echo "</br>
            <strong>Géneros que me gustan:</strong></br>
            <ul>
                ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gustos"]) ? $context["gustos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["gusto"]) {
            // line 119
            echo "                    <li>";
            echo twig_escape_filter($this->env, $context["gusto"], "html", null, true);
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gusto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "            </ul>
        </div>
        <br/>
    </div>
    <div id=\"vistas\" class=\"tab-pane fade\">
        <div class=\"alert alert-warning\" role=\"alert\"><strong>Warning!!</strong> Limitación de la API</div>
          
              <div class=\"menu-pelicula-border-black\">
                <ul class=\"menu-pelicula-tab\">
                    <li class=\"active\"><a data-toggle=\"tab\" href=\"#totalvistas\">Total de peliculas vistas&nbsp;</a></li>
                    <li><a data-toggle=\"tab\" href=\"#ultimomes\">Vistas en el último mes&nbsp;</a></li>
                    <li><a data-toggle=\"tab\" href=\"#generosvistos\">Generos vistos&nbsp;</a></li>
                </ul>
            </div>
            
            <div class=\"tab-content\">
                <div id=\"totalvistas\" class=\"tab-pane fade in active\">
                    ";
        // line 138
        $context["i"] = 0;
        // line 139
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vistas"]) ? $context["vistas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 140
            echo "                        
                        <div class=\"vistas-pendientes\">
                             <a href=\"";
            // line 142
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" >
                            ";
            // line 143
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 144
                echo "                                <img ";
                if (((isset($context["i"]) ? $context["i"] : null) == (twig_length_filter($this->env, (isset($context["vistas"]) ? $context["vistas"] : null)) - 1))) {
                    // line 145
                    echo "                                class=\"espacio-bot img-pendientes\";  ";
                } else {
                    echo " class=\"img-pendientes\";
                                ";
                }
                // line 146
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
                // line 148
                echo "                                <img ";
                if (((isset($context["i"]) ? $context["i"] : null) == (twig_length_filter($this->env, (isset($context["vistas"]) ? $context["vistas"] : null)) - 1))) {
                    // line 149
                    echo "                                class=\"espacio-bot img-pendientes\";  ";
                } else {
                    echo " class=\"img-pendientes\";
                                ";
                }
                // line 150
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
            // line 152
            echo "                            </a>
                        </div>
                        ";
            // line 154
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 155
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "                </div>
                <div id=\"ultimomes\" class=\"tab-pane fade\">
                    ";
        // line 158
        $context["i"] = 0;
        // line 159
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ultimomes"]) ? $context["ultimomes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 160
            echo "                        <div class=\"vistas-pendientes\">
                             <a href=\"";
            // line 161
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" >
                            ";
            // line 162
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 163
                echo "                                <img ";
                if (((isset($context["i"]) ? $context["i"] : null) == (twig_length_filter($this->env, (isset($context["ultimomes"]) ? $context["ultimomes"] : null)) - 1))) {
                    // line 164
                    echo "                                class=\"espacio-bot img-pendientes\";  ";
                } else {
                    echo " class=\"img-pendientes\";
                                ";
                }
                // line 165
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
                // line 167
                echo "                                <img ";
                if (((isset($context["i"]) ? $context["i"] : null) == (twig_length_filter($this->env, (isset($context["ultimomes"]) ? $context["ultimomes"] : null)) - 1))) {
                    // line 168
                    echo "                                class=\"espacio-bot img-pendientes\";  ";
                } else {
                    echo " class=\"img-pendientes\";
                                ";
                }
                // line 169
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
            // line 171
            echo "                            </a>
                        </div>
                        ";
            // line 173
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 174
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "                </div>
                
                <div id=\"generosvistos\" class=\"tab-pane fade\">
                    <ul>
                    ";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["generosvistos"]) ? $context["generosvistos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["generovisto"]) {
            // line 180
            echo "                        <li>";
            echo twig_escape_filter($this->env, $context["generovisto"], "html", null, true);
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['generovisto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo "                    </ul>
                    
                </div>
                <br/>
                
            </div>
          
    </div>
    <div id=\"pendientes\" class=\"tab-pane fade\">
        <div class=\"alert alert-warning\" role=\"alert\"><strong>Warning!!</strong> Limitación de la API</div>
            
            ";
        // line 193
        $context["i"] = 0;
        // line 194
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pendientes"]) ? $context["pendientes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 195
            echo "            <div class=\"vistas-pendientes\">
                 <a href=\"";
            // line 196
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" >
                ";
            // line 197
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 198
                echo "                <img ";
                if (((isset($context["i"]) ? $context["i"] : null) == (twig_length_filter($this->env, (isset($context["pendientes"]) ? $context["pendientes"] : null)) - 1))) {
                    // line 199
                    echo "                    class=\"espacio-bot img-pendientes\"; ";
                } else {
                    echo " class=\"img-pendientes\";
                    ";
                }
                // line 200
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
                // line 201
                echo "                <img ";
                if (((isset($context["i"]) ? $context["i"] : null) == (twig_length_filter($this->env, (isset($context["pendientes"]) ? $context["pendientes"] : null)) - 1))) {
                    // line 202
                    echo "                    class=\"espacio-bot img-pendientes\";  ";
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
                echo "\">   ";
            }
            // line 204
            echo "                    </a>
            </div>
            ";
            // line 206
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 207
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        echo "        
    </div>
    
    <div id=\"calificadas\" class=\"tab-pane fade\">
        <div class=\"alert alert-warning\" role=\"alert\"><strong>Warning!!</strong> Limitación de la API</div>
            
           ";
        // line 214
        $context["i"] = 0;
        // line 215
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["calificadas"]) ? $context["calificadas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 216
            echo "            <div class=\"vistas-pendientes\">
                 <a href=\"";
            // line 217
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" >
                ";
            // line 218
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 219
                echo "                <img ";
                if (((isset($context["i"]) ? $context["i"] : null) == (twig_length_filter($this->env, (isset($context["calificadas"]) ? $context["calificadas"] : null)) - 1))) {
                    // line 220
                    echo "                    class=\"espacio-bot img-pendientes\";  ";
                } else {
                    echo " class=\"img-pendientes\";
                    ";
                }
                // line 221
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
                // line 222
                echo "                <img ";
                if (((isset($context["i"]) ? $context["i"] : null) == (twig_length_filter($this->env, (isset($context["calificadas"]) ? $context["calificadas"] : null)) - 1))) {
                    // line 223
                    echo "                    class=\"espacio-bot img-pendientes\";  ";
                } else {
                    echo " class=\"img-pendientes\";
                    ";
                }
                // line 224
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
            // line 225
            echo "                    </a>
            </div>
            ";
            // line 227
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 228
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 229
        echo "        
    </div>
    
   
    
</div>
";
    }

    // line 237
    public function block_barraderecha($context, array $blocks = array())
    {
        // line 238
        echo "
    <div class=\"col-md-3 columna-index-boostrap\">
        <div class=\"columna-index\">
            
            <label>";
        // line 242
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

    // line 261
    public function block_javascripts($context, array $blocks = array())
    {
        // line 262
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
        // line 293
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
        // line 338
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
        // line 385
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
        // line 426
        $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 0);
        // line 427
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["descubiertas"]) ? $context["descubiertas"] : null), "results", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 428
            echo "            var rating = ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "vote_average", array()), "html", null, true);
            echo ";
            \$(\".counter\").text(rating);
            \$(\"#c";
            // line 430
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
            // line 438
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").val(data.rating);
            });
            
                ";
            // line 441
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 442
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 443
        echo "     });
     

     ";
        // line 446
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["peliculas_coleccion"]) ? $context["peliculas_coleccion"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coleccion"]) {
            // line 447
            echo "     \$(\".";
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "_botonEditarColeccion\").click(function(){
               \$(\".";
            // line 448
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "_botonEliminarColeccion\").attr(\"style\",\"display:inline;\"); 
               \$(\".";
            // line 449
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "_botonEditarColeccion\").attr(\"style\",\"display:none;\");
               \$(\".";
            // line 450
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "_botonTerminarEdicion\").attr(\"style\",\"display:inline;\");
               \$(\".";
            // line 451
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "_selector\").attr(\"style\",\"display:inline;\");
               \$(\"#tituloPanelColeccion\"+\$(this).attr(\"idlista\")).prop(\"readonly\", false);
               \$(\"#tituloPanelColeccion\"+\$(this).attr(\"idlista\")).attr(\"class\", \"tituloPanelColeccionReadable\");
            });
    \$(\".";
            // line 455
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "_botonTerminarEdicion\").click(function(){
               \$(\".";
            // line 456
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "_botonEliminarColeccion\").attr(\"style\",\"display:inline;\"); 
               \$(\".";
            // line 457
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "_botonEditarColeccion\").attr(\"style\",\"display:inline;\");
               \$(\".";
            // line 458
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "idColeccion", array()), "html", null, true);
            echo "_botonTerminarEdicion\").attr(\"style\",\"display:none;\");
               \$(\".";
            // line 459
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
        // line 465
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
        return array (  1010 => 465,  998 => 459,  994 => 458,  990 => 457,  986 => 456,  982 => 455,  975 => 451,  971 => 450,  967 => 449,  963 => 448,  958 => 447,  954 => 446,  949 => 443,  943 => 442,  941 => 441,  935 => 438,  924 => 430,  918 => 428,  913 => 427,  911 => 426,  867 => 385,  817 => 338,  769 => 293,  734 => 262,  731 => 261,  707 => 242,  701 => 238,  698 => 237,  688 => 229,  682 => 228,  680 => 227,  676 => 225,  665 => 224,  659 => 223,  656 => 222,  645 => 221,  639 => 220,  636 => 219,  634 => 218,  628 => 217,  625 => 216,  620 => 215,  618 => 214,  610 => 208,  604 => 207,  602 => 206,  598 => 204,  587 => 203,  581 => 202,  578 => 201,  567 => 200,  561 => 199,  558 => 198,  556 => 197,  550 => 196,  547 => 195,  542 => 194,  540 => 193,  527 => 182,  518 => 180,  514 => 179,  508 => 175,  502 => 174,  500 => 173,  496 => 171,  484 => 169,  478 => 168,  475 => 167,  463 => 165,  457 => 164,  454 => 163,  452 => 162,  446 => 161,  443 => 160,  438 => 159,  436 => 158,  432 => 156,  426 => 155,  424 => 154,  420 => 152,  408 => 150,  402 => 149,  399 => 148,  387 => 146,  381 => 145,  378 => 144,  376 => 143,  370 => 142,  366 => 140,  361 => 139,  359 => 138,  340 => 121,  331 => 119,  327 => 118,  321 => 115,  317 => 114,  311 => 113,  297 => 106,  293 => 104,  285 => 102,  271 => 97,  267 => 95,  261 => 92,  258 => 91,  252 => 88,  249 => 87,  247 => 86,  240 => 84,  237 => 83,  233 => 82,  229 => 81,  225 => 79,  218 => 75,  216 => 74,  213 => 73,  204 => 71,  200 => 70,  194 => 66,  186 => 63,  170 => 59,  158 => 58,  155 => 57,  151 => 56,  140 => 50,  134 => 49,  128 => 48,  120 => 45,  115 => 43,  107 => 40,  104 => 39,  100 => 38,  76 => 16,  73 => 15,  65 => 10,  61 => 8,  51 => 6,  48 => 5,  45 => 4,  42 => 3,  32 => 2,  11 => 1,);
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
/*         <li><a data-toggle="tab" href="#perfil">Mi perfil</a></li>*/
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
/*             <strong>Nombre:</strong> {{usuario.nombres}} {{usuario.apellidos}}<br/>*/
/*             <strong>Nickname:</strong> {{usuario.nickname}}<br/>*/
/*             <strong>E-Mail:</strong> {{usuario.correoElectronico}}</br>*/
/*             <strong>Géneros que me gustan:</strong></br>*/
/*             <ul>*/
/*                 {% for gusto in gustos %}*/
/*                     <li>{{gusto}}</li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*         <br/>*/
/*     </div>*/
/*     <div id="vistas" class="tab-pane fade">*/
/*         <div class="alert alert-warning" role="alert"><strong>Warning!!</strong> Limitación de la API</div>*/
/*           */
/*               <div class="menu-pelicula-border-black">*/
/*                 <ul class="menu-pelicula-tab">*/
/*                     <li class="active"><a data-toggle="tab" href="#totalvistas">Total de peliculas vistas&nbsp;</a></li>*/
/*                     <li><a data-toggle="tab" href="#ultimomes">Vistas en el último mes&nbsp;</a></li>*/
/*                     <li><a data-toggle="tab" href="#generosvistos">Generos vistos&nbsp;</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*             */
/*             <div class="tab-content">*/
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
/*             </div>*/
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
