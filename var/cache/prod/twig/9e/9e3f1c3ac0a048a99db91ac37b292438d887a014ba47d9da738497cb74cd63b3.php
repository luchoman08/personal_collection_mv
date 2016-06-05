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
        }
        
    </style>
    ";
        }
        // line 21
        echo "    
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/greeter.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/greeter.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
    
";
    }

    // line 29
    public function block_moviename($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "title", array()), "html", null, true);
    }

    // line 30
    public function block_classcontenido($context, array $blocks = array())
    {
        echo "col-md-12 fondoContenido";
    }

    // line 31
    public function block_loginoptions($context, array $blocks = array())
    {
        // line 32
        echo "    ";
        if (((isset($context["usuarioLogueado"]) ? $context["usuarioLogueado"] : null) == 1)) {
            // line 33
            echo "
            ";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["nickname"]) ? $context["nickname"] : null), "html", null, true);
            echo " | <a href=\"";
            echo $this->env->getExtension('routing')->getUrl("logout_action");
            echo "\">Salir</a>
       
    ";
        } else {
            // line 36
            echo " 

        ";
            // line 38
            $this->displayParentBlock("loginoptions", $context, $blocks);
            echo " 
    
    ";
        }
    }

    // line 42
    public function block_contenido($context, array $blocks = array())
    {
        // line 43
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
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "vote_average", array()), "html", null, true);
        echo "</span>
                                
                                ";
        // line 58
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "poster_path", array()) == "")) {
            // line 59
            echo "                                     <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
            echo "\" width=\"100%\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "title", array()), "html", null, true);
            echo "\" class=\"img-responsive\" >
                                ";
        } else {
            // line 61
            echo "                                     <img src=\"https://image.tmdb.org/t/p/w300";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "poster_path", array()), "html", null, true);
            echo "\" width=\"100%\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "title", array()), "html", null, true);
            echo "\" class=\"img-responsive\" >
                                ";
        }
        // line 63
        echo "                                
                                
                            </div>
                            ";
        // line 66
        if ((isset($context["usuarioLogueado"]) ? $context["usuarioLogueado"] : null)) {
            // line 67
            echo "                            <div class=\"movie_rate\">
                                <span> <p>\tTu voto :</p> <span id=\"calificacionPersonal\" class=\"rateyo-readonly-widg\"></span></span>
\t\t\t\t\t\t  \t   <div class=\"clearfix\"> </div>
                            </div>
                           
                               ";
        }
        // line 73
        echo "                        </div>
                     
                        <div class=\"desc1 span_3_of_2\">
                      
                            <center>
                            <div id=\"menupelicula\" class=\"menu-pelicula\" >
                                <ui>
                                    <li id=\"marcar_desmarcar_vista_li\" class=\"vista\"> <div id=\"iconoVista\" class=\"glyphicon glyphicon-eye-open\"></div> Vista&nbsp;</li>
                                    <li id=\"marcar_desmarcar_por_ver_li\" class=\"vista\"> <div id=\"iconoPorVer\"  class=\"glyphicon glyphicon-time\"></div> Pendiente&nbsp;</li>
                                    <li class=\"lista\"> <div class=\"glyphicon glyphicon-plus\"></div> Lista&nbsp;</li>
                                    
                                    <li class=\"dropdown trailers\" id=\"test\"> <div class=\"glyphicon glyphicon-film\"></div>  
                                        <a id=\"trailers\" href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">Trailers <b class=\"caret\"></b></a>
                                        <ul class=\"dropdown-menu\">
                                            ";
        // line 87
        $context["t"] = 0;
        // line 88
        echo "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "results", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trailer"]) {
            // line 89
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
            // line 91
            echo twig_escape_filter($this->env, (isset($context["t"]) ? $context["t"] : null), "html", null, true);
            echo "\" style=\"\" class=\"overlay\">
\t                                            <div class=\"popup\">
\t\t                                            <a id=\"close";
            // line 93
            echo twig_escape_filter($this->env, (isset($context["t"]) ? $context["t"] : null), "html", null, true);
            echo "\" class=\"close\" href=\"#\">&times;</a>
\t\t                                            <div class=\"video\">
\t\t\t      \t\t\t                            <iframe width=\"100%\" height=\"600px\" src=\"https://www.youtube.com/embed/";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["trailer"], "key", array()), "html", null, true);
            echo "?rel=0\" frameborder=\"0\" allowfullscreen=\"\"></iframe>
\t\t\t  \t\t\t                            </div>
\t                                            </div>
                                            </div>
                                            ";
            // line 99
            $context["t"] = ((isset($context["t"]) ? $context["t"] : null) + 1);
            // line 100
            echo "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trailer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
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
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "title", array()), "html", null, true);
        echo "  </strong> </div> </div> <br/>
                                \t";
        // line 116
        if ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "release_date", array())) {
            // line 117
            echo "                                \t    <div class=\"movie_option\"><strong>Fecha de estreno: </strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "release_date", array()), "html", null, true);
            echo "</div>
                                \t";
        }
        // line 119
        echo "                                \t<div class=\"movie_option\"><strong>Generos: </strong> 
                                \t";
        // line 120
        $context["i"] = 0;
        // line 121
        echo "                                \t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "genres", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["genero"]) {
            // line 122
            echo "            
                                \t";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["genero"], "name", array()), "html", null, true);
            if (((isset($context["i"]) ? $context["i"] : null) < (twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "genres", array())) - 1))) {
                echo ",";
            }
            // line 124
            echo "                          
                                \t";
            // line 125
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 126
            echo "                                \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genero'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "                                \t</div>
                                \t<div class=\"movie_option\"><strong>Estudio Cinematogr&aacute;fico : </strong>";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "production_companies", array()), 0, array(), "array"), "name", array()), "html", null, true);
        echo "</div>
                                    <div class=\"movie_option\"><strong>Total votos: </strong>";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "vote_count", array()), "html", null, true);
        echo "</div> <br/>
                                    <div class=\"m_4\"><strong>Sinopsis:</strong> ";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "overview", array()), "html", null, true);
        echo "</div><br/>
                            
                                <h4>Capturas</h4>
                                <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
                                  <!-- Indicators -->
                                  <ol class=\"carousel-indicators\">
                                   ";
        // line 136
        $context["k"] = 0;
        // line 137
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "backdrops", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["backdrops"]) {
            // line 138
            echo "                                        <li data-target=\"#myCarousel\" data-slide-to=\"";
            echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
            echo "\"";
            if (((isset($context["k"]) ? $context["k"] : null) == 0)) {
                echo "class=\"active\"";
            }
            echo "></li>
                                          
                                        ";
            // line 140
            $context["k"] = ((isset($context["k"]) ? $context["k"] : null) + 1);
            // line 141
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['backdrops'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "                                      </ol>
                                    
                                      <!-- Wrapper for slides -->
                                      <div class=\"carousel-inner\" role=\"listbox\">
                                        
                                        ";
        // line 147
        $context["p"] = 0;
        // line 148
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "backdrops", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["backdrops"]) {
            // line 149
            echo "                                        <div class=\"";
            if (((isset($context["p"]) ? $context["p"] : null) == 0)) {
                echo "item active";
            } else {
                echo "item ";
            }
            echo "\">
                                          <img src=\"https://image.tmdb.org/t/p/w780/";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($context["backdrops"], "file_path", array()), "html", null, true);
            echo "\" alt=\"Captura\">
                                        </div>
                                        ";
            // line 152
            $context["p"] =  -1;
            // line 153
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['backdrops'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
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
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "cast", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["elenco"]) {
            // line 171
            echo "                                            
                                            <strong>";
            // line 172
            echo twig_escape_filter($this->env, $this->getAttribute($context["elenco"], "name", array()), "html", null, true);
            echo "</strong>: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["elenco"], "character", array()), "html", null, true);
            echo " <br/>
                                            
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elenco'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "                                        
                                        <h3> Personal </h3>
                                        
                                        ";
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "crew", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["personal"]) {
            // line 179
            echo "                                            
                                            <strong>";
            // line 180
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
        // line 183
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
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["similares"]) ? $context["similares"] : null), "results", array()), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["peliculaSimilar"]) {
            // line 198
            echo "                          \t<div class=\"movie_img\"><div class=\"grid_2\">
                          \t        
                          \t        ";
            // line 200
            if (($this->getAttribute($context["peliculaSimilar"], "poster_path", array()) == "")) {
                // line 201
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
                // line 203
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
            // line 205
            echo "                          \t        
                                    <div class=\"caption1\">
    \t\t\t\t\t\t\t\t\t<ul class=\"list_5 list_7\">
    \t\t\t\t\t\t\t\t\t    <div class=\"calificacion-fondo-similares\">
    \t\t\t\t\t\t\t    \t\t    <li><i class=\"icon5\"> <span  class=\"glyphicon glyphicon-star calificacion-similares\" aria-hidden=\"true\"> </span></i><p>";
            // line 209
            echo twig_escape_filter($this->env, $this->getAttribute($context["peliculaSimilar"], "vote_average", array()), "html", null, true);
            echo "</p></li>
    \t\t\t\t\t\t\t    \t\t</div>
    \t\t\t\t\t\t\t    \t</ul>
    \t\t\t\t\t\t\t    \t<i class=\"icon4 icon6 icon7\"> </i>
    \t\t\t\t\t\t\t    \t<!--  <p class=\"m_3\">";
            // line 213
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
        // line 217
        echo " 
                      
                     <center>
                         <a href=\"";
        // line 220
        echo $this->env->getExtension('routing')->getUrl("vista_homepage");
        echo "similares/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "id", array()), "html", null, true);
        echo "\" class=\"btn btn-primary\" type=\"button\"> Ver m&aacute;s <span class=\"badge\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["similares"]) ? $context["similares"] : null), "results", array())), "html", null, true);
        echo "</span> </a>
                         
                    </center><br/>
           </div>

";
    }

    // line 226
    public function block_javascripts($context, array $blocks = array())
    {
        // line 227
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(function() {
            ";
        // line 230
        if (((isset($context["usuarioLogueado"]) ? $context["usuarioLogueado"] : null) == 1)) {
            // line 231
            echo "            var vista=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "vista", array()), "html", null, true);
            echo ";
            var porVer=";
            // line 232
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "porVer", array()), "html", null, true);
            echo ";
             estiloBotonVistas(vista);
             estiloBotonPorVer(porVer);
            ";
        }
        // line 236
        echo "            var lts=0;
            
            var rating =0;
            var calificacion_semaphore=0;
           
  //inicializar el color del boton marcar vista segun si se ha visto o no
  ";
        // line 242
        $context["i"] = 0;
        // line 243
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "results", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trailer"]) {
            // line 244
            echo "  \$(\"#close";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").click(function(){
       \$(\"#popup";
            // line 245
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").attr(\"style\",\"visibility: invisible; opacity: 0;\");
       var x = document.getElementById(\"popup";
            // line 246
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\");
    var y = x;
    \$(\"#ctn\").append(y);
  });
  
  \$('#trailer";
            // line 251
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "').click(function(){
    \$(\"#popup";
            // line 252
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").attr(\"style\",\"visibility: visible; opacity: 1;\");
    var x = document.getElementById(\"popup";
            // line 253
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\");
    var y = x;
    \$(\"#ctn\").append(y);
  });
  ";
            // line 257
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 258
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trailer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 259
        echo "             

         ";
        // line 261
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
            // line 288
            echo $this->env->getExtension('routing')->getUrl("marcar_por_ver");
            echo "\",
                data: { idPelicula:";
            // line 289
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
                    \$(\"#mensajeEmergente\").html(jqXHR.responseText);
                    \$('#divEmergente').show(1000).delay( 4000 );
                    \$('#divEmergente').hide(1000);
                       
                },
               

     
            });   
        });
        \$(\"#marcar_desmarcar_vista_li\").click(function(){
         \$.ajax({
                type: \"GET\",
                url: \"";
            // line 324
            echo $this->env->getExtension('routing')->getUrl("marcar_vista");
            echo "\",
                data: { idPelicula:";
            // line 325
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
                       \$('#divEmergente').show(1000).delay( 4000 );
                       \$('#divEmergente').hide(1000);
                       
                },
               

     
            });   
        });
        \$(\"#calificacionPersonal\").rateYo({
                
                readOnly: false,
                rating: ";
            // line 360
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
            // line 369
            echo $this->env->getExtension('routing')->getUrl("calificacion_pelicula");
            echo "\",
                data: { idPelicula:";
            // line 370
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
               
                //If there was no resonse from the server
                error: function(jqXHR, textStatus, errorThrown){
                    
                      
                       \$(\"#mensajeEmergente\").html(jqXHR.responseText);
                       \$('#divEmergente').show(1000).delay( 4000 );
                       \$('#divEmergente').hide(1000);
                       
                },
               

     
            }); 
                 calificacion_semaphore=0;   
                }       
                \$(\"#calificacionPersonal\").val(data.rating);

            });
             
        
\t        \$(\"#calificacionPersonal\").click(function(){
\t\t    calificacion_semaphore=1;
\t\t   
\t\t\t
\t\t });

  ";
        }
        // line 411
        echo "          ";
        if ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "backdrop_path", array())) {
            // line 412
            echo "            \$('#cabezera').css(\"background\", \"url(https://image.tmdb.org/t/p/w1280/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "backdrop_path", array()), "html", null, true);
            echo ")\");  
            ";
        }
        // line 414
        echo "        });
    </script>
    
    ";
    }

    // line 418
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
        return array (  817 => 418,  810 => 414,  804 => 412,  801 => 411,  757 => 370,  753 => 369,  741 => 360,  703 => 325,  699 => 324,  661 => 289,  657 => 288,  627 => 261,  623 => 259,  617 => 258,  615 => 257,  608 => 253,  604 => 252,  600 => 251,  592 => 246,  588 => 245,  583 => 244,  578 => 243,  576 => 242,  568 => 236,  561 => 232,  556 => 231,  554 => 230,  548 => 227,  545 => 226,  531 => 220,  526 => 217,  515 => 213,  508 => 209,  502 => 205,  490 => 203,  478 => 201,  476 => 200,  472 => 198,  468 => 197,  452 => 183,  439 => 180,  436 => 179,  432 => 178,  427 => 175,  416 => 172,  413 => 171,  409 => 170,  391 => 154,  385 => 153,  383 => 152,  378 => 150,  369 => 149,  364 => 148,  362 => 147,  355 => 142,  349 => 141,  347 => 140,  337 => 138,  332 => 137,  330 => 136,  321 => 130,  317 => 129,  313 => 128,  310 => 127,  304 => 126,  302 => 125,  299 => 124,  294 => 123,  291 => 122,  286 => 121,  284 => 120,  281 => 119,  275 => 117,  273 => 116,  269 => 115,  253 => 101,  247 => 100,  245 => 99,  238 => 95,  233 => 93,  228 => 91,  214 => 89,  209 => 88,  207 => 87,  191 => 73,  183 => 67,  181 => 66,  176 => 63,  168 => 61,  160 => 59,  158 => 58,  153 => 56,  138 => 43,  135 => 42,  127 => 38,  123 => 36,  115 => 34,  112 => 33,  109 => 32,  106 => 31,  100 => 30,  94 => 29,  86 => 25,  82 => 24,  78 => 23,  74 => 22,  71 => 21,  61 => 14,  55 => 10,  53 => 9,  49 => 8,  46 => 7,  43 => 6,  35 => 5,  11 => 1,);
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
/* */
/* <div id = "ctn" class="content">*/
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
/*                                     <li id="marcar_desmarcar_vista_li" class="vista"> <div id="iconoVista" class="glyphicon glyphicon-eye-open"></div> Vista&nbsp;</li>*/
/*                                     <li id="marcar_desmarcar_por_ver_li" class="vista"> <div id="iconoPorVer"  class="glyphicon glyphicon-time"></div> Pendiente&nbsp;</li>*/
/*                                     <li class="lista"> <div class="glyphicon glyphicon-plus"></div> Lista&nbsp;</li>*/
/*                                     */
/*                                     <li class="dropdown trailers" id="test"> <div class="glyphicon glyphicon-film"></div>  */
/*                                         <a id="trailers" href="#" data-toggle="dropdown" class="dropdown-toggle">Trailers <b class="caret"></b></a>*/
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
/*                                 	<div class="movie_option"><strong>Estudio Cinematogr&aacute;fico : </strong>{{params.production_companies[0].name}}</div>*/
/*                                     <div class="movie_option"><strong>Total votos: </strong>{{params.vote_count}}</div> <br/>*/
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
/*             var calificacion_semaphore=0;*/
/*            */
/*   //inicializar el color del boton marcar vista segun si se ha visto o no*/
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
/*                     $("#mensajeEmergente").html(jqXHR.responseText);*/
/*                     $('#divEmergente').show(1000).delay( 4000 );*/
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
/*                        $('#divEmergente').show(1000).delay( 4000 );*/
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
/*                 //If there was no resonse from the server*/
/*                 error: function(jqXHR, textStatus, errorThrown){*/
/*                     */
/*                       */
/*                        $("#mensajeEmergente").html(jqXHR.responseText);*/
/*                        $('#divEmergente').show(1000).delay( 4000 );*/
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
/*              */
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
