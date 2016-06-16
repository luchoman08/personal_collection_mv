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

<div class=\"tab-content\">
    <div id=\"listas\" class=\"tab-pane fade\">

        <div class=\"listasPersonalizadas\">
            <h3> Listas personalizadas </h3> ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["listacolecciones"]) ? $context["listacolecciones"] : null), "listaColecciones", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["coleccion"]) {
            // line 34
            echo "            <div class=\"elementoLista\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "nombre", array()), "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coleccion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </div>
        <br/>
    </div>
    <div id=\"descubrir\" class=\"tab-pane fade in active\">
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gustos"]) ? $context["gustos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["gusto"]) {
            // line 41
            echo "        <div class=\"gustos\"> ";
            echo twig_escape_filter($this->env, $context["gusto"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gusto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        <br/> <br/> 
        ";
        // line 44
        if (((isset($context["descubiertas"]) ? $context["descubiertas"] : null) == null)) {
            // line 45
            echo "            <center>
                <h3>No tiene gustos registrados, puede adicionarlos en Mi perfil.</h3>
            </center>
            <br/> 
        ";
        }
        // line 49
        echo " 
        
        ";
        // line 51
        $context["i"] = 0;
        echo " 
        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["descubiertas"]) ? $context["descubiertas"] : null), "results", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 53
            echo "
        <div class=\"resultado\" onclick=\"location.href='";
            // line 54
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "'\">
            <a href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\">
            ";
            // line 56
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 57
                echo "                
                <img src=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" alt=\"...\">
                           
                ";
            } else {
                // line 61
                echo "                        
                <img src=\"https://image.tmdb.org/t/p/w185/";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" alt=\"...\">
                        
            ";
            }
            // line 65
            echo "            </a>
            <div class=\"resultado-articulo\">
                <label> ";
            // line 67
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
            // line 72
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            echo " 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
        <center>
            <a href=\"";
        // line 76
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
        Perfil
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
        // line 98
        $context["i"] = 0;
        // line 99
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vistas"]) ? $context["vistas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 100
            echo "                        <div class=\"vistas-pendientes\">
                             <a href=\"";
            // line 101
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" >
                            ";
            // line 102
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 103
                echo "                                <img ";
                if (((isset($context["i"]) ? $context["i"] : null) == (twig_length_filter($this->env, (isset($context["vistas"]) ? $context["vistas"] : null)) - 1))) {
                    // line 104
                    echo "                                class=\"espacio-bot\";
                                ";
                }
                // line 105
                echo " src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" height=\"278\" width=\"185\" alt=\"...\"> 
                                ";
            } else {
                // line 107
                echo "                                <img ";
                if (((isset($context["i"]) ? $context["i"] : null) == (twig_length_filter($this->env, (isset($context["vistas"]) ? $context["vistas"] : null)) - 1))) {
                    // line 108
                    echo "                                class=\"espacio-bot\";
                                ";
                }
                // line 109
                echo " src=\"https://image.tmdb.org/t/p/w185/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" height=\"278\" width=\"185\" alt=\"...\">  
                            ";
            }
            // line 111
            echo "                            </a>
                        </div>
                        ";
            // line 113
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 114
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                </div>
                <div id=\"ultimomes\" class=\"tab-pane fade\">
                    ";
        // line 117
        $context["i"] = 0;
        // line 118
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ultimomes"]) ? $context["ultimomes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 119
            echo "                        <div class=\"vistas-pendientes\">
                             <a href=\"";
            // line 120
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" >
                            ";
            // line 121
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 122
                echo "                                <img ";
                if (((isset($context["i"]) ? $context["i"] : null) == (twig_length_filter($this->env, (isset($context["ultimomes"]) ? $context["ultimomes"] : null)) - 1))) {
                    // line 123
                    echo "                                class=\"espacio-bot\";
                                ";
                }
                // line 124
                echo " src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" height=\"278\" width=\"185\" alt=\"...\"> 
                                ";
            } else {
                // line 126
                echo "                                <img ";
                if (((isset($context["i"]) ? $context["i"] : null) == (twig_length_filter($this->env, (isset($context["ultimomes"]) ? $context["ultimomes"] : null)) - 1))) {
                    // line 127
                    echo "                                class=\"espacio-bot\";
                                ";
                }
                // line 128
                echo " src=\"https://image.tmdb.org/t/p/w185/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" height=\"278\" width=\"185\" alt=\"...\">  
                            ";
            }
            // line 130
            echo "                            </a>
                        </div>
                        ";
            // line 132
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 133
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "                </div>
                
                <div id=\"generosvistos\" class=\"tab-pane fade\">
                    <ul>
                    ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["generosvistos"]) ? $context["generosvistos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["generovisto"]) {
            // line 139
            echo "                        <li>";
            echo twig_escape_filter($this->env, $context["generovisto"], "html", null, true);
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['generovisto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "                    </ul>
                    
                </div>
                <br/>
                
            </div>
          
    </div>
    <div id=\"pendientes\" class=\"tab-pane fade\">
        <div class=\"alert alert-warning\" role=\"alert\"><strong>Warning!!</strong> Limitación de la API</div>
            
            ";
        // line 152
        $context["i"] = 0;
        // line 153
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pendientes"]) ? $context["pendientes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 154
            echo "            <div class=\"vistas-pendientes\">
                 <a href=\"";
            // line 155
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" >
                ";
            // line 156
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 157
                echo "                <img ";
                if (((isset($context["i"]) ? $context["i"] : null) == (twig_length_filter($this->env, (isset($context["pendientes"]) ? $context["pendientes"] : null)) - 1))) {
                    // line 158
                    echo "                    class=\"espacio-bot\";
                    ";
                }
                // line 159
                echo " src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" height=\"278\" width=\"185\" alt=\"...\"> ";
            } else {
                // line 160
                echo "                <img ";
                if (((isset($context["i"]) ? $context["i"] : null) == (twig_length_filter($this->env, (isset($context["pendientes"]) ? $context["pendientes"] : null)) - 1))) {
                    // line 161
                    echo "                    class=\"espacio-bot\";
                    ";
                }
                // line 162
                echo " src=\"https://image.tmdb.org/t/p/w185/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" height=\"278\" width=\"185\" alt=\"...\">   ";
            }
            // line 163
            echo "                    </a>
            </div>
            ";
            // line 165
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 166
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "        
    </div>
    
    <div id=\"calificadas\" class=\"tab-pane fade\">
        <div class=\"alert alert-warning\" role=\"alert\"><strong>Warning!!</strong> Limitación de la API</div>
            
           ";
        // line 173
        $context["i"] = 0;
        // line 174
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["calificadas"]) ? $context["calificadas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 175
            echo "            <div class=\"vistas-pendientes\">
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
                echo "                <img ";
                if (((isset($context["i"]) ? $context["i"] : null) == (twig_length_filter($this->env, (isset($context["calificadas"]) ? $context["calificadas"] : null)) - 1))) {
                    // line 179
                    echo "                    class=\"espacio-bot\";
                    ";
                }
                // line 180
                echo " src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" height=\"278\" width=\"185\" alt=\"...\"> ";
            } else {
                // line 181
                echo "                <img ";
                if (((isset($context["i"]) ? $context["i"] : null) == (twig_length_filter($this->env, (isset($context["calificadas"]) ? $context["calificadas"] : null)) - 1))) {
                    // line 182
                    echo "                    class=\"espacio-bot\";
                    ";
                }
                // line 183
                echo " src=\"https://image.tmdb.org/t/p/w185/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" height=\"278\" width=\"185\" alt=\"...\">   ";
            }
            // line 184
            echo "                    </a>
            </div>
            ";
            // line 186
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 187
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "        
    </div>
    
</div>
";
    }

    // line 194
    public function block_barraderecha($context, array $blocks = array())
    {
        // line 195
        echo "
    <div class=\"col-md-3 columna-index-boostrap\">
        <div class=\"columna-index\">
            
            <label>";
        // line 199
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nombres", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "apellidos", array()), "html", null, true);
        echo "</label>
            
        </div>
    </div>

";
    }

    // line 206
    public function block_javascripts($context, array $blocks = array())
    {
        // line 207
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script>
     \$(function() {
        ";
        // line 210
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["descubiertas"]) ? $context["descubiertas"] : null), "results", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 211
            echo "            var rating = ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "vote_average", array()), "html", null, true);
            echo ";
            \$(\".counter\").text(rating);
            \$(\"#c";
            // line 213
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
            // line 221
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").val(data.rating);
            });
                ";
            // line 223
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 224
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "     });
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
        return array (  582 => 225,  576 => 224,  574 => 223,  569 => 221,  558 => 213,  552 => 211,  548 => 210,  541 => 207,  538 => 206,  526 => 199,  520 => 195,  517 => 194,  509 => 188,  503 => 187,  501 => 186,  497 => 184,  492 => 183,  488 => 182,  485 => 181,  480 => 180,  476 => 179,  473 => 178,  471 => 177,  465 => 176,  462 => 175,  457 => 174,  455 => 173,  447 => 167,  441 => 166,  439 => 165,  435 => 163,  430 => 162,  426 => 161,  423 => 160,  418 => 159,  414 => 158,  411 => 157,  409 => 156,  403 => 155,  400 => 154,  395 => 153,  393 => 152,  380 => 141,  371 => 139,  367 => 138,  361 => 134,  355 => 133,  353 => 132,  349 => 130,  343 => 128,  339 => 127,  336 => 126,  330 => 124,  326 => 123,  323 => 122,  321 => 121,  315 => 120,  312 => 119,  307 => 118,  305 => 117,  301 => 115,  295 => 114,  293 => 113,  289 => 111,  283 => 109,  279 => 108,  276 => 107,  270 => 105,  266 => 104,  263 => 103,  261 => 102,  255 => 101,  252 => 100,  247 => 99,  245 => 98,  216 => 76,  212 => 74,  204 => 72,  190 => 67,  186 => 65,  180 => 62,  177 => 61,  171 => 58,  168 => 57,  166 => 56,  160 => 55,  154 => 54,  151 => 53,  147 => 52,  143 => 51,  139 => 49,  132 => 45,  130 => 44,  127 => 43,  118 => 41,  114 => 40,  108 => 36,  99 => 34,  95 => 33,  76 => 16,  73 => 15,  65 => 10,  61 => 8,  51 => 6,  48 => 5,  45 => 4,  42 => 3,  32 => 2,  11 => 1,);
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
/* */
/* <div class="tab-content">*/
/*     <div id="listas" class="tab-pane fade">*/
/* */
/*         <div class="listasPersonalizadas">*/
/*             <h3> Listas personalizadas </h3> {% for coleccion in listacolecciones.listaColecciones %}*/
/*             <div class="elementoLista">{{coleccion.nombre}}</div>*/
/*             {% endfor %}*/
/*         </div>*/
/*         <br/>*/
/*     </div>*/
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
/*         <div class="resultado" onclick="location.href='{{ url('homepage') }}vista/mostrarpelicula/{{pelicula.id}}'">*/
/*             <a href="{{ url('homepage') }}vista/mostrarpelicula/{{pelicula.id}}">*/
/*             {% if pelicula.poster_path == "" %}*/
/*                 */
/*                 <img src="{{asset('assets/images/movie.png')}}" alt="...">*/
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
/*         Perfil*/
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
/*                         <div class="vistas-pendientes">*/
/*                              <a href="{{ url('homepage') }}vista/mostrarpelicula/{{pelicula.id}}" >*/
/*                             {% if pelicula.poster_path == "" %}*/
/*                                 <img {%if i == ((vistas|length)-1) %}*/
/*                                 class="espacio-bot";*/
/*                                 {%endif%} src="{{asset('assets/images/movie.png')}}" height="278" width="185" alt="..."> */
/*                                 {% else %}*/
/*                                 <img {%if i == ((vistas|length)-1) %}*/
/*                                 class="espacio-bot";*/
/*                                 {%endif%} src="https://image.tmdb.org/t/p/w185/{{pelicula.poster_path}}" height="278" width="185" alt="...">  */
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
/*                                 class="espacio-bot";*/
/*                                 {%endif%} src="{{asset('assets/images/movie.png')}}" height="278" width="185" alt="..."> */
/*                                 {% else %}*/
/*                                 <img {%if i == ((ultimomes|length)-1) %}*/
/*                                 class="espacio-bot";*/
/*                                 {%endif%} src="https://image.tmdb.org/t/p/w185/{{pelicula.poster_path}}" height="278" width="185" alt="...">  */
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
/*                     class="espacio-bot";*/
/*                     {%endif%} src="{{asset('assets/images/movie.png')}}" height="278" width="185" alt="..."> {% else %}*/
/*                 <img {%if i == ((pendientes|length)-1) %}*/
/*                     class="espacio-bot";*/
/*                     {%endif%} src="https://image.tmdb.org/t/p/w185/{{pelicula.poster_path}}" height="278" width="185" alt="...">   {% endif %}*/
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
/*                     class="espacio-bot";*/
/*                     {%endif%} src="{{asset('assets/images/movie.png')}}" height="278" width="185" alt="..."> {% else %}*/
/*                 <img {%if i == ((calificadas|length)-1) %}*/
/*                     class="espacio-bot";*/
/*                     {%endif%} src="https://image.tmdb.org/t/p/w185/{{pelicula.poster_path}}" height="278" width="185" alt="...">   {% endif %}*/
/*                     </a>*/
/*             </div>*/
/*             {% set i = i + 1 %}*/
/*             {% endfor %}*/
/*         */
/*     </div>*/
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
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* {%block javascripts%}*/
/*  {{ parent() }}*/
/* <script>*/
/*      $(function() {*/
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
/*                 {%set i = i + 1%}*/
/*         {%endfor%}*/
/*      });*/
/*     </script>   */
/* {%endblock%}*/
