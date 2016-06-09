<?php

/* VistaBundle:Default:mostrarPelicula.html.twig */
class __TwigTemplate_d85d464632fcc98a5d73590bbadaef50098a61787ae286f1cadd01b571f6a6e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "VistaBundle:Default:mostrarPelicula.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'moviename' => array($this, 'block_moviename'),
            'classcontenido' => array($this, 'block_classcontenido'),
            'loginoptions' => array($this, 'block_loginoptions'),
            'contenido' => array($this, 'block_contenido'),
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "title", array()), "html", null, true);
        echo " ";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "
    ";
        // line 8
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 9
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "backdrops", array()), 3, array(), "array"), "file_path", array())) {
            // line 10
            echo "  
    <style>
    
        .fondo {
            background-image: url(\"https://image.tmdb.org/t/p/original/";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "backdrops", array()), 3, array(), "array"), "file_path", array()), "html", null, true);
            echo "\");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center; 
        }
        
    </style>
    ";
        }
        // line 22
        echo "    
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/greeter.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/greeter.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
    
";
    }

    // line 30
    public function block_moviename($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "title", array()), "html", null, true);
    }

    // line 31
    public function block_classcontenido($context, array $blocks = array())
    {
        echo "col-md-12 fondoContenido";
    }

    // line 32
    public function block_loginoptions($context, array $blocks = array())
    {
        // line 33
        echo "    ";
        if (((isset($context["usuarioLogueado"]) ? $context["usuarioLogueado"] : null) == 1)) {
            // line 34
            echo "
            ";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["nickname"]) ? $context["nickname"] : null), "html", null, true);
            echo " | <a href=\"";
            echo $this->env->getExtension('routing')->getUrl("logout_action");
            echo "\">Salir</a>
       
    ";
        } else {
            // line 37
            echo " 

        ";
            // line 39
            $this->displayParentBlock("loginoptions", $context, $blocks);
            echo " 
    
    ";
        }
    }

    // line 43
    public function block_contenido($context, array $blocks = array())
    {
        // line 44
        echo "
<div  id=\"divEmergente\"style=\"display:none\" class=\"alert alert-success alert-dismissible\" role=\"alert\">
    <p id=\"mensajeEmergente\"></p>
</div>


<div id = \"ctn\" class=\"content\">

      \t   <div class=\"movie_top\">
      \t         <div class=\"col-md-9 movie_box\">
 
                        <div class=\"grid images_3_of_2\">
                        \t<div class=\"movie_image\">
                                <span class=\"movie_rating\">";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "vote_average", array()), "html", null, true);
        echo "</span>
                                
                                ";
        // line 59
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "poster_path", array()) == "")) {
            // line 60
            echo "                                     <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
            echo "\" width=\"100%\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "title", array()), "html", null, true);
            echo "\" class=\"img-responsive\" >
                                ";
        } else {
            // line 62
            echo "                                     <img src=\"https://image.tmdb.org/t/p/w300";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "poster_path", array()), "html", null, true);
            echo "\" width=\"100%\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "title", array()), "html", null, true);
            echo "\" class=\"img-responsive\" >
                                ";
        }
        // line 64
        echo "                                
                               
                                
                            </div>
                            ";
        // line 68
        if ((isset($context["usuarioLogueado"]) ? $context["usuarioLogueado"] : null)) {
            // line 69
            echo "                            <div class=\"movie_rate\">
                                <span> <p>\tTu voto :</p> <span id=\"calificacionPersonal\" class=\"rateyo-readonly-widg\"></span></span>
\t\t\t\t\t\t  \t   <div class=\"clearfix\"> </div>
                            </div>
                           
                               ";
        }
        // line 75
        echo "                        </div>
                     
                        <div class=\"desc1 span_3_of_2\">
                      
                            <center>
                            <div id=\"menupelicula\" class=\"menu-pelicula\" >
                                <ui>
                                    ";
        // line 82
        if (((isset($context["usuarioLogueado"]) ? $context["usuarioLogueado"] : null) == 1)) {
            // line 83
            echo "                                    <li id=\"marcar_desmarcar_vista_li\" class=\"vista\"> <div id=\"iconoVista\" class=\"glyphicon glyphicon-eye-open\"></div> Vista&nbsp;</li>
                                    <li id=\"marcar_desmarcar_por_ver_li\" class=\"vista\"> <div id=\"iconoPorVer\"  class=\"glyphicon glyphicon-time\"></div> Pendiente&nbsp;</li>
                                    
                                    <li class=\"listas dropdown\" id =\"listas\"> <div class=\"glyphicon glyphicon-plus\"></div> 
                                        <a id=\"listas\" href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">Listas&nbsp;<b class=\"caret\"></b></a>&nbsp;
                                            <ul id = \"ulListaColecciones\" class=\"dropdown-menu\">
                                                 <li><a id=\"crearListas\" href=\"#lista\"><span class=\"glyphicon glyphicon-plus\"></span>&nbsp;Crear</a> </li>
                                                 <li class=\"divider\"></li>
                                                ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "listaColecciones", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["lista"]) {
                // line 92
                echo "                                                <li><a idColeccion=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["lista"], "id", array()), "html", null, true);
                echo "\" class=\"a_lista\" id=\"crearListas\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["lista"], "nombre", array()), "html", null, true);
                echo "</a> </li>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lista'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                                               
                                               
                                           
                                            </ul>
                                    </li>
                                    ";
        }
        // line 100
        echo "                                    <li class=\"dropdown trailers\" id=\"test\"> <div class=\"glyphicon glyphicon-film\"></div>  
                                        <a id=\"trailers\" href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">Trailers&nbsp;<b class=\"caret\"></b></a>
                                        <ul class=\"dropdown-menu\">
                                            ";
        // line 103
        $context["t"] = 0;
        // line 104
        echo "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "results", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trailer"]) {
            // line 105
            echo "                                            <li><a id=\"trailer";
            echo twig_escape_filter($this->env, (isset($context["t"]) ? $context["t"] : null), "html", null, true);
            echo "\" href=\"#popup";
            echo twig_escape_filter($this->env, (isset($context["t"]) ? $context["t"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["trailer"], "name", array()), "html", null, true);
            echo " | ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["trailer"], "iso_639_1", array()), "html", null, true);
            echo " | ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["trailer"], "size", array()), "html", null, true);
            echo "p</a></li>
                                            
                                            <div id=\"popup";
            // line 107
            echo twig_escape_filter($this->env, (isset($context["t"]) ? $context["t"] : null), "html", null, true);
            echo "\" style=\"\" class=\"overlay\">
\t                                            <div class=\"popup\">
\t\t                                            <a id=\"close";
            // line 109
            echo twig_escape_filter($this->env, (isset($context["t"]) ? $context["t"] : null), "html", null, true);
            echo "\" class=\"close\" href=\"#\">&times;</a>
\t\t                                            <div class=\"video\">
\t\t\t      \t\t\t                            <iframe width=\"100%\" height=\"600px\" src=\"https://www.youtube.com/embed/";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["trailer"], "key", array()), "html", null, true);
            echo "?rel=0\" frameborder=\"0\" allowfullscreen=\"\"></iframe>
\t\t\t  \t\t\t                            </div>
\t                                            </div>
                                            </div>
                                            ";
            // line 115
            $context["t"] = ((isset($context["t"]) ? $context["t"] : null) + 1);
            // line 116
            echo "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trailer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "                                            
                                        </ul>
                                    </li>
                                    
                                </ui>
                            </div>
                            </center>
                            
                            <ul class=\"menu-pelicula-tab\">
                                <li class=\"active\"><a data-toggle=\"tab\" href=\"#detalles\">Detalles&nbsp;</a></li>
                                <li><a data-toggle=\"tab\" href=\"#produccion\">Producci&oacute;n</a></li>
                            </ul>
                                <div class=\"tab-content\">
                                    <div id=\"detalles\" class=\"tab-pane fade in active\">
                                    <div class=\"movie_option\"><strong><div class=\"titulo\">";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "title", array()), "html", null, true);
        echo "  </strong> </div> </div> <br/>
                                \t";
        // line 132
        if ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "release_date", array())) {
            // line 133
            echo "                                \t    <div class=\"movie_option\"><strong>Fecha de estreno: </strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "release_date", array()), "html", null, true);
            echo "</div>
                                \t";
        }
        // line 135
        echo "                                \t<div class=\"movie_option\"><strong>Generos: </strong> 
                                \t";
        // line 136
        $context["i"] = 0;
        // line 137
        echo "                                \t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "genres", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["genero"]) {
            // line 138
            echo "            
                                \t";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($context["genero"], "name", array()), "html", null, true);
            if (((isset($context["i"]) ? $context["i"] : null) < (twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "genres", array())) - 1))) {
                echo ",";
            }
            // line 140
            echo "                          
                                \t";
            // line 141
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 142
            echo "                                \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genero'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "                                \t</div>
                                \t<div class=\"movie_option\"><strong>Duraci&oacute;n : </strong>";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "runtime", array()), "html", null, true);
        echo "m</div>
                                \t
                                \t<div class=\"movie_option\"><strong>Total votos: </strong>";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "vote_count", array()), "html", null, true);
        echo "</div>
                                    
                                    <span class=\"imdbRatingPlugin\" style=\"padding-right:5px;\" data-user=\"ur52717514\" data-title=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "imdb_id", array()), "html", null, true);
        echo "\" data-style=\"p2\"><strong>&nbsp;IMDb: </strong> <a href=\"http://www.imdb.com/title/tt2948356/?ref_=plg_rt_1\"><img src=\"http://g-ecx.images-amazon.com/images/G/01/imdb/plugins/rating/images/imdb_37x18.png\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "title", array()), "html", null, true);
        echo " en IMDb\" />&nbsp;</a></span>
                                    <script>(function(d,s,id){var js,stags=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}js=d.createElement(s);js.id=id;js.src=\"http://g-ec2.images-amazon.com/images/G/01/imdb/plugins/rating/js/rating.min.js\";stags.parentNode.insertBefore(js,stags);})(document,'script','imdb-rating-api');</script>
                                    
                                    <div class=\"movie_option\"><strong>Total votos IMDb: </strong>";
        // line 151
        echo twig_escape_filter($this->env, (isset($context["votos_imdb"]) ? $context["votos_imdb"] : null), "html", null, true);
        echo "</div><br/>
                                \t
                                \t<div class=\"movie_option\"><strong>Estudio(s) Cinematogr&aacute;fico(s) : </strong>
                                \t";
        // line 154
        $context["contador_companias"] = 0;
        echo " 
                                \t";
        // line 155
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "production_companies", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["production_companies"]) {
            // line 156
            echo "                                \t
                                    \t";
            // line 157
            $context["contador_companias"] = ((isset($context["contador_companias"]) ? $context["contador_companias"] : null) + 1);
            // line 158
            echo "                                    \t
                                    \t";
            // line 159
            if (((isset($context["contador_companias"]) ? $context["contador_companias"] : null) < twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "production_companies", array())))) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["production_companies"], "name", array()), "html", null, true);
                echo ",&nbsp;
                                    \t";
            } else {
                // line 160
                echo twig_escape_filter($this->env, $this->getAttribute($context["production_companies"], "name", array()), "html", null, true);
                echo ".
                                    \t";
            }
            // line 162
            echo "                                \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['production_companies'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "                                \t</div><br/>
                                    
                                    ";
        // line 165
        if (((isset($context["funcionesOcultas"]) ? $context["funcionesOcultas"] : null) == 1)) {
            // line 166
            echo "                                        <center> <div class=\"movie_option\"><a target=\"_blank\" style=\"text-decoration:none; border-radius:5px; color:#fff;\" class=\"btn1\" href=\"https://thepiratebay.org/search/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "title", array()), "html", null, true);
            echo "\" ><strong>Descargar</strong></a></div><br/></center>
                                    ";
        }
        // line 168
        echo "                                    
                                    <div class=\"m_4\"><strong>Sinopsis:</strong> ";
        // line 169
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "overview", array()), "html", null, true);
        echo "</div><br/>
                            
                                <h4>Capturas</h4>
                                <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
                                  <!-- Indicators -->
                                  <ol class=\"carousel-indicators\">
                                   ";
        // line 175
        $context["k"] = 0;
        // line 176
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "backdrops", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["backdrops"]) {
            // line 177
            echo "                                        <li data-target=\"#myCarousel\" data-slide-to=\"";
            echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
            echo "\"";
            if (((isset($context["k"]) ? $context["k"] : null) == 0)) {
                echo "class=\"active\"";
            }
            echo "></li>
                                          
                                        ";
            // line 179
            $context["k"] = ((isset($context["k"]) ? $context["k"] : null) + 1);
            // line 180
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['backdrops'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "                                      </ol>
                                    
                                      <!-- Wrapper for slides -->
                                      <div class=\"carousel-inner\" role=\"listbox\">
                                        
                                        ";
        // line 186
        $context["p"] = 0;
        // line 187
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "backdrops", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["backdrops"]) {
            // line 188
            echo "                                        <div class=\"";
            if (((isset($context["p"]) ? $context["p"] : null) == 0)) {
                echo "item active";
            } else {
                echo "item ";
            }
            echo "\">
                                          <img src=\"https://image.tmdb.org/t/p/w780/";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute($context["backdrops"], "file_path", array()), "html", null, true);
            echo "\" alt=\"Captura\">
                                        </div>
                                        ";
            // line 191
            $context["p"] =  -1;
            // line 192
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['backdrops'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "                                    
                                      </div>
                                    
                                      <!-- Left and right controls -->
                                      <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
                                        <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                                        <span class=\"sr-only\">Anterior</span>
                                      </a>
                                      <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
                                        <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                                        <span class=\"sr-only\">Siguiente</span>
                                      </a>
                                    </div>
                                    </div>
                                    <div id=\"produccion\" class=\"tab-pane fade\">
                                        <h3> Elenco </h3>
                                        ";
        // line 209
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "cast", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["elenco"]) {
            // line 210
            echo "                                            
                                            <strong>";
            // line 211
            echo twig_escape_filter($this->env, $this->getAttribute($context["elenco"], "name", array()), "html", null, true);
            echo "</strong>: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["elenco"], "character", array()), "html", null, true);
            echo " <br/>
                                            
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elenco'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        echo "                                        
                                        <h3> Personal </h3>
                                        
                                        ";
        // line 217
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "crew", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["personal"]) {
            // line 218
            echo "                                            
                                            <strong>";
            // line 219
            echo twig_escape_filter($this->env, $this->getAttribute($context["personal"], "name", array()), "html", null, true);
            echo "</strong>: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["personal"], "department", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["personal"], "job", array()), "html", null, true);
            echo ") <br/>
                                            
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 222
        echo "                                        
                                    </div>
                                </div>
                         </div>
                        <div class=\"clearfix\"> </div>
                        
                        
\t\t                
                      </div>
                 
                    
                  </div>
                  
                  <div class=\"col-md-2\">
                      ";
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["similares"]) ? $context["similares"] : null), "results", array()), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["peliculaSimilar"]) {
            // line 237
            echo "                          \t<div class=\"movie_img\"><div class=\"grid_2\">
                          \t        
                          \t        ";
            // line 239
            if (($this->getAttribute($context["peliculaSimilar"], "poster_path", array()) == "")) {
                // line 240
                echo "                                         <a href=\"";
                echo $this->env->getExtension('routing')->getUrl("homepage");
                echo "vista/mostrarpelicula/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["peliculaSimilar"], "id", array()), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["peliculaSimilar"], "title", array()), "html", null, true);
                echo "\"></a>
                                    ";
            } else {
                // line 242
                echo "                                        <a href=\"";
                echo $this->env->getExtension('routing')->getUrl("homepage");
                echo "vista/mostrarpelicula/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["peliculaSimilar"], "id", array()), "html", null, true);
                echo "\"><img src=\"https://image.tmdb.org/t/p/w300";
                echo twig_escape_filter($this->env, $this->getAttribute($context["peliculaSimilar"], "poster_path", array()), "html", null, true);
                echo "\" width=\"100%\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["peliculaSimilar"], "title", array()), "html", null, true);
                echo "\" class=\"img-responsive\" ></a>\t
                                    ";
            }
            // line 244
            echo "                          \t        
                                    <div class=\"caption1\">
    \t\t\t\t\t\t\t\t\t<ul class=\"list_5 list_7\">
    \t\t\t\t\t\t\t\t\t    <div class=\"calificacion-fondo-similares\">
    \t\t\t\t\t\t\t    \t\t    <li><i class=\"icon5\"> <span  class=\"glyphicon glyphicon-star calificacion-similares\" aria-hidden=\"true\"> </span></i><p>";
            // line 248
            echo twig_escape_filter($this->env, $this->getAttribute($context["peliculaSimilar"], "vote_average", array()), "html", null, true);
            echo "</p></li>
    \t\t\t\t\t\t\t    \t\t</div>
    \t\t\t\t\t\t\t    \t</ul>
    \t\t\t\t\t\t\t    \t<i class=\"icon4 icon6 icon7\"> </i>
    \t\t\t\t\t\t\t    \t<!--  <p class=\"m_3\">";
            // line 252
            echo twig_escape_filter($this->env, $this->getAttribute($context["peliculaSimilar"], "title", array()), "html", null, true);
            echo "</p>-->
    \t\t\t\t\t\t\t    </div>
    \t\t\t\t\t\t    </div>
    \t\t\t\t\t\t</div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['peliculaSimilar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 256
        echo " 
                      
                     <center>
                         <a href=\"";
        // line 259
        echo $this->env->getExtension('routing')->getUrl("vista_homepage");
        echo "similares/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "id", array()), "html", null, true);
        echo "\" class=\"btn btn-primary\" type=\"button\"> Ver m&aacute;s <span class=\"badge\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["similares"]) ? $context["similares"] : null), "results", array())), "html", null, true);
        echo "</span> </a>
                         
                    </center><br/>
           </div>
           <div id=\"popup_nueva_coleccion_personalizada\" style=\"visibility: invisible; opacity: 1;\" class=\"overlay\">
               <div id=\"divEmergentePopup\" style=\"display:none\" class=\"alert alert-success alert-dismissible\" role=\"alert\">
                   <p id=\"mensajeEmergente\"></p>
               </div>
               
               <div class=\"popup\">
                    <a id=\"close_nueva_coleccion_p\" class=\"close\" href=\"#\">×</a>
                   <div class=\"panel panel-warning\" sytle =\"width= 90%;\">
                        <div class=\"panel-heading\">
                            Creacion de nuevas colecciones
                        </div>
                        <div class=\"panel-body\">
                            <div class=\"form-group col-md-7\">
                                <div id=\"divEmergenteCrearListas\" style=\"display:none; margin-top: 0.5cm;\" class=\"alert alert-success alert-dismissible\" role=\"alert\">
                                   <p id=\"mensajeEmergenteCrearListas\"></p>
                               </div>
                      
                                <label style=\"margin-top = 5%;\">Ingrese el nombre de la nueva lista </label>
                                <input id=\"nombreNuevaColeccion\" style=\"width : 90%;\" type=\"text\" style=\"form-control\" required>
                                <br><br>
                                <center>
                                <button id=\"crearColeccion\" type=\"submit\" class=\"btn btn-warning\">Crear</button>
                                </center>
                             </div>
                             <img src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/listImage.png"), "html", null, true);
        echo "\" class=\"img-responsive col-md-4\" alt=\"Cinque Terre\">
                        </div>
           
                        </div>
                   
                    </div>
                    
                    
                  
                
                   
               </div>
           
           </div>

";
    }

    // line 303
    public function block_javascripts($context, array $blocks = array())
    {
        // line 304
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(function() {
            ";
        // line 307
        if (((isset($context["usuarioLogueado"]) ? $context["usuarioLogueado"] : null) == 1)) {
            // line 308
            echo "            var vista=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "vista", array()), "html", null, true);
            echo ";
            var porVer=";
            // line 309
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "porVer", array()), "html", null, true);
            echo ";
             estiloBotonVistas(vista);
             estiloBotonPorVer(porVer);
            ";
        }
        // line 313
        echo "            var lts=0;
            
            var rating =0;
            
            var calificacion_semaphore=0;
       
  
       
           
       
            
    // funciones para nuevas colecciones            
     \$(\"#close_nueva_coleccion_p\").click(function(){
       \$(\"#popup_nueva_coleccion_personalizada\").attr(\"style\",\"visibility: invisible; opacity: 0;\");
       var x = document.getElementById(\"popup_nueva_coleccion_personalizada\");
    var y = x;
    \$(\"#ctn\").append(y);
  });        
  \$('#crearListas').click(function(){
    \$(\"#popup_nueva_coleccion_personalizada\").attr(\"style\",\"visibility: visible; opacity: 1;\");
    var x = document.getElementById(\"popup_nueva_coleccion_personalizada\");
    var y = x;
    \$(\"#ctn\").append(y);
  });
   \$('#crearColeccion').click(function(){
     \$.ajax({
                type: \"GET\",
                url: \"";
        // line 340
        echo $this->env->getExtension('routing')->getUrl("adicionar_lista");
        echo "\",
                data: { nombreColeccion:\$('#nombreNuevaColeccion').val()},
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
                        
                      
                        \$(\"#mensajeEmergenteCrearListas\").html(jQuery.parseJSON(jqXHR.responseText).mensaje);
                        \$('#divEmergenteCrearListas').attr(\"class\",\"alert alert-danger alert-dismissible\" );
                        \$('#divEmergenteCrearListas').show(1000).delay(3000);
                        \$('#divEmergenteCrearListas').hide(1000);
                       }
                         if(jqXHR.status == 200)
                       {
                           
                       // var respuesta = jQuery.parseJSON(  );
                      alert(\"que mira prro >:v\");
                        \$(\"#mensajeEmergente\").html(jQuery.parseJSON(jqXHR.responseText).mensaje);   
                        \$('#divEmergente').attr(\"class\",\"alert alert-success alert-dismissible\" );
                       \$('#divEmergente').show(1000).delay(3000);
                        \$('#divEmergente').hide(1000);    
                       \$('#ulListaColecciones').append('<li><a idColeccion=\"'+ jQuery.parseJSON(jqXHR.responseText).idColeccion +'\"id=\"crearListas\" href=\"#lista\">'+\$('#nombreNuevaColeccion').val()+'</a> </li>');
                        \$(\"#popup_nueva_coleccion_personalizada\").attr(\"style\",\"visibility: invisible; opacity: 0;\");
                       }
                    
                 
                       
                },
               

     
            });  
  });
  //close y enlaces a trailers
  ";
        // line 391
        $context["i"] = 0;
        // line 392
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "results", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trailer"]) {
            // line 393
            echo "  \$(\"#close";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").click(function(){
       \$(\"#popup";
            // line 394
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").attr(\"style\",\"visibility: invisible; opacity: 0;\");
       var x = document.getElementById(\"popup";
            // line 395
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\");
    var y = x;
    \$(\"#ctn\").append(y);
  });
  
  \$('#trailer";
            // line 400
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "').click(function(){
    \$(\"#popup";
            // line 401
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").attr(\"style\",\"visibility: visible; opacity: 1;\");
    var x = document.getElementById(\"popup";
            // line 402
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\");
    var y = x;
    \$(\"#ctn\").append(y);
  });
  ";
            // line 406
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 407
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trailer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 408
        echo "             

         ";
        // line 410
        if (((isset($context["usuarioLogueado"]) ? $context["usuarioLogueado"] : null) == 1)) {
            echo "   
         
            
  function estiloBotonVistas(vista){
  
             if(vista == 0){
                        \$('#marcar_desmarcar_vista_li').css(\"color\",\"#ccc\");
                        \$('#iconoVista').attr(\"class\", \"glyphicon glyphicon-eye-close\");
                    }
                    if(vista == 1){
                        \$('#marcar_desmarcar_vista_li').css(\"color\",\"#3a8cfb\");
                        \$('#iconoVista').attr(\"class\", \"glyphicon glyphicon-eye-open\");
                    }
  };
  
    function estiloBotonPorVer(porVer){
  
             if(porVer == 0){
                        \$('#marcar_desmarcar_por_ver_li').css(\"color\",\"#ccc\");
                    }
                    if(porVer == 1){
                        \$('#marcar_desmarcar_por_ver_li').css(\"color\",\"#3a8cfb\");
                    }
  };
   \$(\"#marcar_desmarcar_por_ver_li\").click(function(){
         \$.ajax({
                type: \"GET\",
                url: \"";
            // line 437
            echo $this->env->getExtension('routing')->getUrl("marcar_por_ver");
            echo "\",
                data: { idPelicula:";
            // line 438
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "id", array()), "html", null, true);
            echo "},
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
                    porVer = (porVer + 1) %2;
                    if(porVer == 1){
                    vista = 0;
                    estiloBotonVistas(vista);
                    }
                    estiloBotonPorVer(porVer);
                    \$('#divEmergente').attr(\"class\",\"alert alert-success alert-dismissible\" );
                    \$(\"#mensajeEmergente\").html(jqXHR.responseText);
                    \$('#divEmergente').show(1000).delay( 3000 );
                    \$('#divEmergente').hide(1000);
                       
                },
               

     
            });   
        });
        \$(\"#marcar_desmarcar_vista_li\").click(function(){
         \$.ajax({
                type: \"GET\",
                url: \"";
            // line 474
            echo $this->env->getExtension('routing')->getUrl("marcar_vista");
            echo "\",
                data: { idPelicula:";
            // line 475
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "id", array()), "html", null, true);
            echo "},
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
                    vista = (vista + 1) %2;
                    if(vista ==1){
                        porVer=0;
                        estiloBotonPorVer(porVer);
                    }
                       estiloBotonVistas(vista);
                       \$(\"#mensajeEmergente\").html(jqXHR.responseText);
                       \$('#divEmergente').attr(\"class\",\"alert alert-success alert-dismissible\" );
                       \$('#divEmergente').show(1000).delay( 3000 );
                       \$('#divEmergente').hide(1000);
                       
                },
               

     
            });   
        });
        \$(\"#calificacionPersonal\").rateYo({
                
                readOnly: false,
                rating: ";
            // line 511
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "calificacionUsuario", array()), "html", null, true);
            echo ",
                numStars: 10,
                precision: 10,
                minValue: 1,
                maxValue: 10
            }).on(\"rateyo.change\", function(e, data) {
                if(calificacion_semaphore==1){
                \$.ajax({
                type: \"GET\",
                url: \"";
            // line 520
            echo $this->env->getExtension('routing')->getUrl("calificacion_pelicula");
            echo "\",
                data: { idPelicula:";
            // line 521
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "id", array()), "html", null, true);
            echo ", calificacion:data.rating},
                dataType: \"json\",
               
                //if received a response from the server
                success: function( data, textStatus, jqXHR) {
                     if(data.success){
                         \$(\"#mensajeEmergente\").html(\"\");
                     } 
                     //display error message
                     else {
                         \$(\"#mensajeEmergente\").html(\"No se pudo enviar la calificación\");
                     }
                },
               
                //al intentar calificar:
                error: function(jqXHR, textStatus, errorThrown){
                    
                      
                       \$(\"#mensajeEmergente\").html(jqXHR.responseText);
                       if(jqXHR.status == 405)
                       {
                        \$('#divEmergente').attr(\"class\",\"alert alert-danger alert-dismissible\" );
                       }
                       if(jqXHR.status == 200)
                       {
                        \$('#divEmergente').attr(\"class\",\"alert alert-success alert-dismissible\" );
                       }
                       \$('#divEmergente').show(1000).delay( 3000 );
                       \$('#divEmergente').hide(1000);
                       
                },
               

     
            }); 
                 calificacion_semaphore=0;   
                }       
                \$(\"#calificacionPersonal\").val(data.rating);

            });
             \$(\".a_lista\").click(function(){
          \$.ajax({
                type: \"GET\",
                url: \"";
            // line 564
            echo $this->env->getExtension('routing')->getUrl("adicionar_pelicula_lista_personalizada");
            echo "\",
                data: { idColeccion:\$(this).attr(\"idColeccion\"), idPelicula:";
            // line 565
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "id", array()), "html", null, true);
            echo "},
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
                        \$(\"#mensajeEmergente\").html(jqXHR.responseText);   
                        \$('#divEmergente').attr(\"class\",\"alert alert-success alert-dismissible\" );
                        \$('#divEmergente').show(1000).delay(3000);
                        \$('#divEmergente').hide(1000);
                 
                       }  
                },
               

     
            });   
       });
        
\t        \$(\"#calificacionPersonal\").click(function(){
\t\t    calificacion_semaphore=1;
\t\t   
\t\t\t
\t\t });

  ";
        }
        // line 611
        echo "          ";
        if ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "backdrop_path", array())) {
            // line 612
            echo "            \$('#cabezera').css(\"background\", \"url(https://image.tmdb.org/t/p/w1280/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "backdrop_path", array()), "html", null, true);
            echo ")\");  
            ";
        }
        // line 614
        echo "        });
    </script>
    
    ";
    }

    // line 618
    public function block_barraderecha($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "VistaBundle:Default:mostrarPelicula.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1089 => 618,  1082 => 614,  1076 => 612,  1073 => 611,  1024 => 565,  1020 => 564,  974 => 521,  970 => 520,  958 => 511,  919 => 475,  915 => 474,  876 => 438,  872 => 437,  842 => 410,  838 => 408,  832 => 407,  830 => 406,  823 => 402,  819 => 401,  815 => 400,  807 => 395,  803 => 394,  798 => 393,  793 => 392,  791 => 391,  737 => 340,  708 => 313,  701 => 309,  696 => 308,  694 => 307,  688 => 304,  685 => 303,  665 => 287,  630 => 259,  625 => 256,  614 => 252,  607 => 248,  601 => 244,  589 => 242,  577 => 240,  575 => 239,  571 => 237,  567 => 236,  551 => 222,  538 => 219,  535 => 218,  531 => 217,  526 => 214,  515 => 211,  512 => 210,  508 => 209,  490 => 193,  484 => 192,  482 => 191,  477 => 189,  468 => 188,  463 => 187,  461 => 186,  454 => 181,  448 => 180,  446 => 179,  436 => 177,  431 => 176,  429 => 175,  420 => 169,  417 => 168,  411 => 166,  409 => 165,  405 => 163,  399 => 162,  394 => 160,  388 => 159,  385 => 158,  383 => 157,  380 => 156,  376 => 155,  372 => 154,  366 => 151,  358 => 148,  353 => 146,  348 => 144,  345 => 143,  339 => 142,  337 => 141,  334 => 140,  329 => 139,  326 => 138,  321 => 137,  319 => 136,  316 => 135,  310 => 133,  308 => 132,  304 => 131,  288 => 117,  282 => 116,  280 => 115,  273 => 111,  268 => 109,  263 => 107,  249 => 105,  244 => 104,  242 => 103,  237 => 100,  229 => 94,  218 => 92,  214 => 91,  204 => 83,  202 => 82,  193 => 75,  185 => 69,  183 => 68,  177 => 64,  169 => 62,  161 => 60,  159 => 59,  154 => 57,  139 => 44,  136 => 43,  128 => 39,  124 => 37,  116 => 35,  113 => 34,  110 => 33,  107 => 32,  101 => 31,  95 => 30,  87 => 26,  83 => 25,  79 => 24,  75 => 23,  72 => 22,  61 => 14,  55 => 10,  53 => 9,  49 => 8,  46 => 7,  43 => 6,  35 => 5,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* */
/* */
/* {% block title%} {{params.title}} {%endblock%}*/
/* {% block stylesheets %}*/
/* */
/*     {{ parent() }}*/
/*     {%if params.backdrops[3].file_path%}*/
/*   */
/*     <style>*/
/*     */
/*         .fondo {*/
/*             background-image: url("https://image.tmdb.org/t/p/original/{{ params.backdrops[3].file_path }}");*/
/*             background-repeat: no-repeat;*/
/*             background-attachment: fixed;*/
/*             background-position: center; */
/*         }*/
/*         */
/*     </style>*/
/*     {%endif%}*/
/*     */
/*     <link href="{{asset('assets/css/greeter.css')}}" rel="stylesheet" type="text/css" media="all" />*/
/*     <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />*/
/*     <script type="text/javascript" src="{{asset('assets/js/greeter.js')}}"></script>*/
/*     <script type="text/javascript" src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>*/
/*     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/*     */
/* {% endblock %}*/
/* {% block moviename%}{{params.title}}{% endblock %}*/
/* {% block classcontenido %}col-md-12 fondoContenido{% endblock %}*/
/* {%block loginoptions%}*/
/*     {% if usuarioLogueado == 1  %}*/
/* */
/*             {{nickname}} | <a href="{{url('logout_action')}}">Salir</a>*/
/*        */
/*     {% else %} */
/* */
/*         {{parent()}} */
/*     */
/*     {% endif %}*/
/* {% endblock %}*/
/* {% block contenido %}*/
/* */
/* <div  id="divEmergente"style="display:none" class="alert alert-success alert-dismissible" role="alert">*/
/*     <p id="mensajeEmergente"></p>*/
/* </div>*/
/* */
/* */
/* <div id = "ctn" class="content">*/
/* */
/*       	   <div class="movie_top">*/
/*       	         <div class="col-md-9 movie_box">*/
/*  */
/*                         <div class="grid images_3_of_2">*/
/*                         	<div class="movie_image">*/
/*                                 <span class="movie_rating">{{params.vote_average}}</span>*/
/*                                 */
/*                                 {% if params.poster_path == "" %}*/
/*                                      <img src="{{asset('assets/images/movie.png')}}" width="100%" alt="{{params.title}}" class="img-responsive" >*/
/*                                 {% else %}*/
/*                                      <img src="https://image.tmdb.org/t/p/w300{{params.poster_path}}" width="100%" alt="{{params.title}}" class="img-responsive" >*/
/*                                 {% endif %}*/
/*                                 */
/*                                */
/*                                 */
/*                             </div>*/
/*                             {%if usuarioLogueado%}*/
/*                             <div class="movie_rate">*/
/*                                 <span> <p>	Tu voto :</p> <span id="calificacionPersonal" class="rateyo-readonly-widg"></span></span>*/
/* 						  	   <div class="clearfix"> </div>*/
/*                             </div>*/
/*                            */
/*                                {%endif%}*/
/*                         </div>*/
/*                      */
/*                         <div class="desc1 span_3_of_2">*/
/*                       */
/*                             <center>*/
/*                             <div id="menupelicula" class="menu-pelicula" >*/
/*                                 <ui>*/
/*                                     {%if usuarioLogueado == 1%}*/
/*                                     <li id="marcar_desmarcar_vista_li" class="vista"> <div id="iconoVista" class="glyphicon glyphicon-eye-open"></div> Vista&nbsp;</li>*/
/*                                     <li id="marcar_desmarcar_por_ver_li" class="vista"> <div id="iconoPorVer"  class="glyphicon glyphicon-time"></div> Pendiente&nbsp;</li>*/
/*                                     */
/*                                     <li class="listas dropdown" id ="listas"> <div class="glyphicon glyphicon-plus"></div> */
/*                                         <a id="listas" href="#" data-toggle="dropdown" class="dropdown-toggle">Listas&nbsp;<b class="caret"></b></a>&nbsp;*/
/*                                             <ul id = "ulListaColecciones" class="dropdown-menu">*/
/*                                                  <li><a id="crearListas" href="#lista"><span class="glyphicon glyphicon-plus"></span>&nbsp;Crear</a> </li>*/
/*                                                  <li class="divider"></li>*/
/*                                                 {%for lista in params.listaColecciones%}*/
/*                                                 <li><a idColeccion="{{lista.id}}" class="a_lista" id="crearListas" >{{lista.nombre}}</a> </li>*/
/*                                                 {%endfor%}*/
/*                                                */
/*                                                */
/*                                            */
/*                                             </ul>*/
/*                                     </li>*/
/*                                     {%endif%}*/
/*                                     <li class="dropdown trailers" id="test"> <div class="glyphicon glyphicon-film"></div>  */
/*                                         <a id="trailers" href="#" data-toggle="dropdown" class="dropdown-toggle">Trailers&nbsp;<b class="caret"></b></a>*/
/*                                         <ul class="dropdown-menu">*/
/*                                             {% set t = 0 %}*/
/*                                             {% for trailer in params.results %}*/
/*                                             <li><a id="trailer{{t}}" href="#popup{{t}}">{{trailer.name}} | {{trailer.iso_639_1}} | {{trailer.size}}p</a></li>*/
/*                                             */
/*                                             <div id="popup{{t}}" style="" class="overlay">*/
/* 	                                            <div class="popup">*/
/* 		                                            <a id="close{{t}}" class="close" href="#">&times;</a>*/
/* 		                                            <div class="video">*/
/* 			      			                            <iframe width="100%" height="600px" src="https://www.youtube.com/embed/{{trailer.key}}?rel=0" frameborder="0" allowfullscreen=""></iframe>*/
/* 			  			                            </div>*/
/* 	                                            </div>*/
/*                                             </div>*/
/*                                             {% set t = t + 1 %}*/
/*                                             {% endfor %}*/
/*                                             */
/*                                         </ul>*/
/*                                     </li>*/
/*                                     */
/*                                 </ui>*/
/*                             </div>*/
/*                             </center>*/
/*                             */
/*                             <ul class="menu-pelicula-tab">*/
/*                                 <li class="active"><a data-toggle="tab" href="#detalles">Detalles&nbsp;</a></li>*/
/*                                 <li><a data-toggle="tab" href="#produccion">Producci&oacute;n</a></li>*/
/*                             </ul>*/
/*                                 <div class="tab-content">*/
/*                                     <div id="detalles" class="tab-pane fade in active">*/
/*                                     <div class="movie_option"><strong><div class="titulo">{{params.title}}  </strong> </div> </div> <br/>*/
/*                                 	{%if params.release_date %}*/
/*                                 	    <div class="movie_option"><strong>Fecha de estreno: </strong>{{params.release_date}}</div>*/
/*                                 	{%endif%}*/
/*                                 	<div class="movie_option"><strong>Generos: </strong> */
/*                                 	{%set i=0%}*/
/*                                 	{%for genero in params.genres%}*/
/*             */
/*                                 	{{genero.name}}{%if i <params.genres|length -1 %},{%endif%}*/
/*                           */
/*                                 	{%set i = i +1%}*/
/*                                 	{%endfor%}*/
/*                                 	</div>*/
/*                                 	<div class="movie_option"><strong>Duraci&oacute;n : </strong>{{params.runtime}}m</div>*/
/*                                 	*/
/*                                 	<div class="movie_option"><strong>Total votos: </strong>{{params.vote_count}}</div>*/
/*                                     */
/*                                     <span class="imdbRatingPlugin" style="padding-right:5px;" data-user="ur52717514" data-title="{{params.imdb_id}}" data-style="p2"><strong>&nbsp;IMDb: </strong> <a href="http://www.imdb.com/title/tt2948356/?ref_=plg_rt_1"><img src="http://g-ecx.images-amazon.com/images/G/01/imdb/plugins/rating/images/imdb_37x18.png" alt="{{params.title}} en IMDb" />&nbsp;</a></span>*/
/*                                     <script>(function(d,s,id){var js,stags=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}js=d.createElement(s);js.id=id;js.src="http://g-ec2.images-amazon.com/images/G/01/imdb/plugins/rating/js/rating.min.js";stags.parentNode.insertBefore(js,stags);})(document,'script','imdb-rating-api');</script>*/
/*                                     */
/*                                     <div class="movie_option"><strong>Total votos IMDb: </strong>{{votos_imdb}}</div><br/>*/
/*                                 	*/
/*                                 	<div class="movie_option"><strong>Estudio(s) Cinematogr&aacute;fico(s) : </strong>*/
/*                                 	{% set contador_companias = 0 %} */
/*                                 	{% for production_companies in params.production_companies  %}*/
/*                                 	*/
/*                                     	{% set contador_companias = contador_companias + 1 %}*/
/*                                     	*/
/*                                     	{%if contador_companias < params.production_companies|length %}{{production_companies.name}},&nbsp;*/
/*                                     	{%else%}{{production_companies.name}}.*/
/*                                     	{%endif%}*/
/*                                 	{% endfor %}*/
/*                                 	</div><br/>*/
/*                                     */
/*                                     {% if funcionesOcultas == 1 %}*/
/*                                         <center> <div class="movie_option"><a target="_blank" style="text-decoration:none; border-radius:5px; color:#fff;" class="btn1" href="https://thepiratebay.org/search/{{params.title}}" ><strong>Descargar</strong></a></div><br/></center>*/
/*                                     {% endif %}*/
/*                                     */
/*                                     <div class="m_4"><strong>Sinopsis:</strong> {{params.overview}}</div><br/>*/
/*                             */
/*                                 <h4>Capturas</h4>*/
/*                                 <div id="myCarousel" class="carousel slide" data-ride="carousel">*/
/*                                   <!-- Indicators -->*/
/*                                   <ol class="carousel-indicators">*/
/*                                    {%set k=0%}*/
/*                                     {%for backdrops in params.backdrops%}*/
/*                                         <li data-target="#myCarousel" data-slide-to="{{k}}"{% if k == 0 %}class="active"{%endif%}></li>*/
/*                                           */
/*                                         {%set k=k + 1%}*/
/*                                         {%endfor%}*/
/*                                       </ol>*/
/*                                     */
/*                                       <!-- Wrapper for slides -->*/
/*                                       <div class="carousel-inner" role="listbox">*/
/*                                         */
/*                                         {%set p=0%}*/
/*                                         {%for backdrops in params.backdrops%}*/
/*                                         <div class="{% if p == 0 %}item active{%else%}item {%endif%}">*/
/*                                           <img src="https://image.tmdb.org/t/p/w780/{{backdrops.file_path}}" alt="Captura">*/
/*                                         </div>*/
/*                                         {%set p=-1%}*/
/*                                         {%endfor%}*/
/*                                     */
/*                                       </div>*/
/*                                     */
/*                                       <!-- Left and right controls -->*/
/*                                       <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">*/
/*                                         <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>*/
/*                                         <span class="sr-only">Anterior</span>*/
/*                                       </a>*/
/*                                       <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">*/
/*                                         <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>*/
/*                                         <span class="sr-only">Siguiente</span>*/
/*                                       </a>*/
/*                                     </div>*/
/*                                     </div>*/
/*                                     <div id="produccion" class="tab-pane fade">*/
/*                                         <h3> Elenco </h3>*/
/*                                         {% for elenco in params.cast %}*/
/*                                             */
/*                                             <strong>{{ elenco.name }}</strong>: {{elenco.character}} <br/>*/
/*                                             */
/*                                         {% endfor %}*/
/*                                         */
/*                                         <h3> Personal </h3>*/
/*                                         */
/*                                         {% for personal in params.crew %}*/
/*                                             */
/*                                             <strong>{{ personal.name }}</strong>: {{personal.department}} ({{personal.job}}) <br/>*/
/*                                             */
/*                                         {% endfor %}*/
/*                                         */
/*                                     </div>*/
/*                                 </div>*/
/*                          </div>*/
/*                         <div class="clearfix"> </div>*/
/*                         */
/*                         */
/* 		                */
/*                       </div>*/
/*                  */
/*                     */
/*                   </div>*/
/*                   */
/*                   <div class="col-md-2">*/
/*                       {%for peliculaSimilar in similares.results|slice(0, 3)%}*/
/*                           	<div class="movie_img"><div class="grid_2">*/
/*                           	        */
/*                           	        {% if peliculaSimilar.poster_path == "" %}*/
/*                                          <a href="{{url('homepage')}}vista/mostrarpelicula/{{peliculaSimilar.id}}"><img src="{{asset('assets/images/movie.png')}}" alt="{{peliculaSimilar.title}}"></a>*/
/*                                     {% else %}*/
/*                                         <a href="{{url('homepage')}}vista/mostrarpelicula/{{peliculaSimilar.id}}"><img src="https://image.tmdb.org/t/p/w300{{peliculaSimilar.poster_path}}" width="100%" alt="{{peliculaSimilar.title}}" class="img-responsive" ></a>	*/
/*                                     {% endif %}*/
/*                           	        */
/*                                     <div class="caption1">*/
/*     									<ul class="list_5 list_7">*/
/*     									    <div class="calificacion-fondo-similares">*/
/*     							    		    <li><i class="icon5"> <span  class="glyphicon glyphicon-star calificacion-similares" aria-hidden="true"> </span></i><p>{{peliculaSimilar.vote_average}}</p></li>*/
/*     							    		</div>*/
/*     							    	</ul>*/
/*     							    	<i class="icon4 icon6 icon7"> </i>*/
/*     							    	<!--  <p class="m_3">{{peliculaSimilar.title}}</p>-->*/
/*     							    </div>*/
/*     						    </div>*/
/*     						</div>*/
/*                       {%endfor%} */
/*                       */
/*                      <center>*/
/*                          <a href="{{url('vista_homepage')}}similares/{{params.id}}" class="btn btn-primary" type="button"> Ver m&aacute;s <span class="badge">{{similares.results|length}}</span> </a>*/
/*                          */
/*                     </center><br/>*/
/*            </div>*/
/*            <div id="popup_nueva_coleccion_personalizada" style="visibility: invisible; opacity: 1;" class="overlay">*/
/*                <div id="divEmergentePopup" style="display:none" class="alert alert-success alert-dismissible" role="alert">*/
/*                    <p id="mensajeEmergente"></p>*/
/*                </div>*/
/*                */
/*                <div class="popup">*/
/*                     <a id="close_nueva_coleccion_p" class="close" href="#">×</a>*/
/*                    <div class="panel panel-warning" sytle ="width= 90%;">*/
/*                         <div class="panel-heading">*/
/*                             Creacion de nuevas colecciones*/
/*                         </div>*/
/*                         <div class="panel-body">*/
/*                             <div class="form-group col-md-7">*/
/*                                 <div id="divEmergenteCrearListas" style="display:none; margin-top: 0.5cm;" class="alert alert-success alert-dismissible" role="alert">*/
/*                                    <p id="mensajeEmergenteCrearListas"></p>*/
/*                                </div>*/
/*                       */
/*                                 <label style="margin-top = 5%;">Ingrese el nombre de la nueva lista </label>*/
/*                                 <input id="nombreNuevaColeccion" style="width : 90%;" type="text" style="form-control" required>*/
/*                                 <br><br>*/
/*                                 <center>*/
/*                                 <button id="crearColeccion" type="submit" class="btn btn-warning">Crear</button>*/
/*                                 </center>*/
/*                              </div>*/
/*                              <img src="{{asset('assets/images/listImage.png')}}" class="img-responsive col-md-4" alt="Cinque Terre">*/
/*                         </div>*/
/*            */
/*                         </div>*/
/*                    */
/*                     </div>*/
/*                     */
/*                     */
/*                   */
/*                 */
/*                    */
/*                </div>*/
/*            */
/*            </div>*/
/* */
/* {%endblock%}*/
/* {%block javascripts%}*/
/* {{parent()}}*/
/*     <script>*/
/*         $(function() {*/
/*             {% if usuarioLogueado ==1%}*/
/*             var vista={{params.vista}};*/
/*             var porVer={{params.porVer}};*/
/*              estiloBotonVistas(vista);*/
/*              estiloBotonPorVer(porVer);*/
/*             {%endif%}*/
/*             var lts=0;*/
/*             */
/*             var rating =0;*/
/*             */
/*             var calificacion_semaphore=0;*/
/*        */
/*   */
/*        */
/*            */
/*        */
/*             */
/*     // funciones para nuevas colecciones            */
/*      $("#close_nueva_coleccion_p").click(function(){*/
/*        $("#popup_nueva_coleccion_personalizada").attr("style","visibility: invisible; opacity: 0;");*/
/*        var x = document.getElementById("popup_nueva_coleccion_personalizada");*/
/*     var y = x;*/
/*     $("#ctn").append(y);*/
/*   });        */
/*   $('#crearListas').click(function(){*/
/*     $("#popup_nueva_coleccion_personalizada").attr("style","visibility: visible; opacity: 1;");*/
/*     var x = document.getElementById("popup_nueva_coleccion_personalizada");*/
/*     var y = x;*/
/*     $("#ctn").append(y);*/
/*   });*/
/*    $('#crearColeccion').click(function(){*/
/*      $.ajax({*/
/*                 type: "GET",*/
/*                 url: "{{url('adicionar_lista')}}",*/
/*                 data: { nombreColeccion:$('#nombreNuevaColeccion').val()},*/
/*                 dataType: "json",*/
/*                */
/*                 //if received a response from the server*/
/*                 success: function( data, textStatus, jqXHR) {*/
/*                      if(data.success){*/
/*                          $("#mensajeEmergente").html("");*/
/*                      } */
/*                      //display error message*/
/*                      else {*/
/*                          $("#mensajeEmergente").html("Error ¬_¬");*/
/*                      }*/
/*                 },*/
/*                */
/*                 //If there was no resonse from the server*/
/*                 error: function(jqXHR, textStatus, errorThrown){*/
/*                     */
/*                     */
/*                       */
/*                        if(jqXHR.status == 405)*/
/*                        {*/
/*                         */
/*                       */
/*                         $("#mensajeEmergenteCrearListas").html(jQuery.parseJSON(jqXHR.responseText).mensaje);*/
/*                         $('#divEmergenteCrearListas').attr("class","alert alert-danger alert-dismissible" );*/
/*                         $('#divEmergenteCrearListas').show(1000).delay(3000);*/
/*                         $('#divEmergenteCrearListas').hide(1000);*/
/*                        }*/
/*                          if(jqXHR.status == 200)*/
/*                        {*/
/*                            */
/*                        // var respuesta = jQuery.parseJSON(  );*/
/*                       alert("que mira prro >:v");*/
/*                         $("#mensajeEmergente").html(jQuery.parseJSON(jqXHR.responseText).mensaje);   */
/*                         $('#divEmergente').attr("class","alert alert-success alert-dismissible" );*/
/*                        $('#divEmergente').show(1000).delay(3000);*/
/*                         $('#divEmergente').hide(1000);    */
/*                        $('#ulListaColecciones').append('<li><a idColeccion="'+ jQuery.parseJSON(jqXHR.responseText).idColeccion +'"id="crearListas" href="#lista">'+$('#nombreNuevaColeccion').val()+'</a> </li>');*/
/*                         $("#popup_nueva_coleccion_personalizada").attr("style","visibility: invisible; opacity: 0;");*/
/*                        }*/
/*                     */
/*                  */
/*                        */
/*                 },*/
/*                */
/* */
/*      */
/*             });  */
/*   });*/
/*   //close y enlaces a trailers*/
/*   {%set i = 0%}*/
/*  {% for trailer in params.results %}*/
/*   $("#close{{i}}").click(function(){*/
/*        $("#popup{{i}}").attr("style","visibility: invisible; opacity: 0;");*/
/*        var x = document.getElementById("popup{{i}}");*/
/*     var y = x;*/
/*     $("#ctn").append(y);*/
/*   });*/
/*   */
/*   $('#trailer{{i}}').click(function(){*/
/*     $("#popup{{i}}").attr("style","visibility: visible; opacity: 1;");*/
/*     var x = document.getElementById("popup{{i}}");*/
/*     var y = x;*/
/*     $("#ctn").append(y);*/
/*   });*/
/*   {%set i = i+1%}*/
/*   {%endfor%}*/
/*              */
/* */
/*          {%if usuarioLogueado == 1%}   */
/*          */
/*             */
/*   function estiloBotonVistas(vista){*/
/*   */
/*              if(vista == 0){*/
/*                         $('#marcar_desmarcar_vista_li').css("color","#ccc");*/
/*                         $('#iconoVista').attr("class", "glyphicon glyphicon-eye-close");*/
/*                     }*/
/*                     if(vista == 1){*/
/*                         $('#marcar_desmarcar_vista_li').css("color","#3a8cfb");*/
/*                         $('#iconoVista').attr("class", "glyphicon glyphicon-eye-open");*/
/*                     }*/
/*   };*/
/*   */
/*     function estiloBotonPorVer(porVer){*/
/*   */
/*              if(porVer == 0){*/
/*                         $('#marcar_desmarcar_por_ver_li').css("color","#ccc");*/
/*                     }*/
/*                     if(porVer == 1){*/
/*                         $('#marcar_desmarcar_por_ver_li').css("color","#3a8cfb");*/
/*                     }*/
/*   };*/
/*    $("#marcar_desmarcar_por_ver_li").click(function(){*/
/*          $.ajax({*/
/*                 type: "GET",*/
/*                 url: "{{url('marcar_por_ver')}}",*/
/*                 data: { idPelicula:{{params.id}}},*/
/*                 dataType: "json",*/
/*                */
/*                 //if received a response from the server*/
/*                 success: function( data, textStatus, jqXHR) {*/
/*                      if(data.success){*/
/*                          $("#mensajeEmergente").html("");*/
/*                      } */
/*                      //display error message*/
/*                      else {*/
/*                          $("#mensajeEmergente").html("Error ¬_¬");*/
/*                      }*/
/*                 },*/
/*                */
/*                 //If there was no resonse from the server*/
/*                 error: function(jqXHR, textStatus, errorThrown){*/
/*                     porVer = (porVer + 1) %2;*/
/*                     if(porVer == 1){*/
/*                     vista = 0;*/
/*                     estiloBotonVistas(vista);*/
/*                     }*/
/*                     estiloBotonPorVer(porVer);*/
/*                     $('#divEmergente').attr("class","alert alert-success alert-dismissible" );*/
/*                     $("#mensajeEmergente").html(jqXHR.responseText);*/
/*                     $('#divEmergente').show(1000).delay( 3000 );*/
/*                     $('#divEmergente').hide(1000);*/
/*                        */
/*                 },*/
/*                */
/* */
/*      */
/*             });   */
/*         });*/
/*         $("#marcar_desmarcar_vista_li").click(function(){*/
/*          $.ajax({*/
/*                 type: "GET",*/
/*                 url: "{{url('marcar_vista')}}",*/
/*                 data: { idPelicula:{{params.id}}},*/
/*                 dataType: "json",*/
/*                */
/*                 //if received a response from the server*/
/*                 success: function( data, textStatus, jqXHR) {*/
/*                      if(data.success){*/
/*                          $("#mensajeEmergente").html("");*/
/*                      } */
/*                      //display error message*/
/*                      else {*/
/*                          $("#mensajeEmergente").html("Error ¬_¬");*/
/*                      }*/
/*                 },*/
/*                */
/*                 //If there was no resonse from the server*/
/*                 error: function(jqXHR, textStatus, errorThrown){*/
/*                     vista = (vista + 1) %2;*/
/*                     if(vista ==1){*/
/*                         porVer=0;*/
/*                         estiloBotonPorVer(porVer);*/
/*                     }*/
/*                        estiloBotonVistas(vista);*/
/*                        $("#mensajeEmergente").html(jqXHR.responseText);*/
/*                        $('#divEmergente').attr("class","alert alert-success alert-dismissible" );*/
/*                        $('#divEmergente').show(1000).delay( 3000 );*/
/*                        $('#divEmergente').hide(1000);*/
/*                        */
/*                 },*/
/*                */
/* */
/*      */
/*             });   */
/*         });*/
/*         $("#calificacionPersonal").rateYo({*/
/*                 */
/*                 readOnly: false,*/
/*                 rating: {{params.calificacionUsuario}},*/
/*                 numStars: 10,*/
/*                 precision: 10,*/
/*                 minValue: 1,*/
/*                 maxValue: 10*/
/*             }).on("rateyo.change", function(e, data) {*/
/*                 if(calificacion_semaphore==1){*/
/*                 $.ajax({*/
/*                 type: "GET",*/
/*                 url: "{{url('calificacion_pelicula')}}",*/
/*                 data: { idPelicula:{{params.id}}, calificacion:data.rating},*/
/*                 dataType: "json",*/
/*                */
/*                 //if received a response from the server*/
/*                 success: function( data, textStatus, jqXHR) {*/
/*                      if(data.success){*/
/*                          $("#mensajeEmergente").html("");*/
/*                      } */
/*                      //display error message*/
/*                      else {*/
/*                          $("#mensajeEmergente").html("No se pudo enviar la calificación");*/
/*                      }*/
/*                 },*/
/*                */
/*                 //al intentar calificar:*/
/*                 error: function(jqXHR, textStatus, errorThrown){*/
/*                     */
/*                       */
/*                        $("#mensajeEmergente").html(jqXHR.responseText);*/
/*                        if(jqXHR.status == 405)*/
/*                        {*/
/*                         $('#divEmergente').attr("class","alert alert-danger alert-dismissible" );*/
/*                        }*/
/*                        if(jqXHR.status == 200)*/
/*                        {*/
/*                         $('#divEmergente').attr("class","alert alert-success alert-dismissible" );*/
/*                        }*/
/*                        $('#divEmergente').show(1000).delay( 3000 );*/
/*                        $('#divEmergente').hide(1000);*/
/*                        */
/*                 },*/
/*                */
/* */
/*      */
/*             }); */
/*                  calificacion_semaphore=0;   */
/*                 }       */
/*                 $("#calificacionPersonal").val(data.rating);*/
/* */
/*             });*/
/*              $(".a_lista").click(function(){*/
/*           $.ajax({*/
/*                 type: "GET",*/
/*                 url: "{{url('adicionar_pelicula_lista_personalizada')}}",*/
/*                 data: { idColeccion:$(this).attr("idColeccion"), idPelicula:{{params.id}}},*/
/*                 dataType: "json",*/
/*                */
/*                 //if received a response from the server*/
/*                 success: function( data, textStatus, jqXHR) {*/
/*                      if(data.success){*/
/*                          $("#mensajeEmergente").html("");*/
/*                      } */
/*                      //display error message*/
/*                      else {*/
/*                          $("#mensajeEmergente").html("Error ¬_¬");*/
/*                      }*/
/*                 },*/
/*                */
/*                 //If there was no resonse from the server*/
/*                 error: function(jqXHR, textStatus, errorThrown){*/
/*                     */
/*                        if(jqXHR.status == 405)*/
/*                        {*/
/*                         $("#mensajeEmergente").html(jqXHR.responseText);*/
/*                         $('#divEmergente').attr("class","alert alert-danger alert-dismissible" );*/
/*                         $('#divEmergente').show(1000).delay(3000);*/
/*                         $('#divEmergente').hide(1000);*/
/*                        }*/
/*                        if(jqXHR.status == 200)*/
/*                        {*/
/*                         $("#mensajeEmergente").html(jqXHR.responseText);   */
/*                         $('#divEmergente').attr("class","alert alert-success alert-dismissible" );*/
/*                         $('#divEmergente').show(1000).delay(3000);*/
/*                         $('#divEmergente').hide(1000);*/
/*                  */
/*                        }  */
/*                 },*/
/*                */
/* */
/*      */
/*             });   */
/*        });*/
/*         */
/* 	        $("#calificacionPersonal").click(function(){*/
/* 		    calificacion_semaphore=1;*/
/* 		   */
/* 			*/
/* 		 });*/
/* */
/*   {%endif%}*/
/*           {%if params.backdrop_path%}*/
/*             $('#cabezera').css("background", "url(https://image.tmdb.org/t/p/w1280/{{params.backdrop_path}})");  */
/*             {%endif%}*/
/*         });*/
/*     </script>*/
/*     */
/*     {%endblock%}*/
/*     {% block barraderecha %}{% endblock %}*/
/* */
