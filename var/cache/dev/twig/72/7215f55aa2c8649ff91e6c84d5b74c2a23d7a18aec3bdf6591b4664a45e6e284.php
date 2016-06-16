<?php

/* VistaBundle:Default:index.html.twig */
class __TwigTemplate_010a937686dae46918297f1930675d48e6fbffddb9b60e2a89c082e6c181f33a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "VistaBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'moviename' => array($this, 'block_moviename'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'loginoptions' => array($this, 'block_loginoptions'),
            'tendencia' => array($this, 'block_tendencia'),
            'mejorvaloradas' => array($this, 'block_mejorvaloradas'),
            'estrenos' => array($this, 'block_estrenos'),
            'proximamente' => array($this, 'block_proximamente'),
            'ultimas' => array($this, 'block_ultimas'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 37
        $context["i"] = 0;
        // line 160
        $context["i"] = 0;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Quality Mega Pixel ";
    }

    // line 3
    public function block_moviename($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["backdrops"]) ? $context["backdrops"] : null), 0, array(), "array"), "titulo", array()), "html", null, true);
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "
    ";
        // line 6
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style> 
    .cabezera {
        padding-top: 20px;
        background-color: #f5f5f5;
        height: 200px;
        width: 100%;
        max-width: 100%;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background: url(\"https://image.tmdb.org/t/p/w1280";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["backdrops"]) ? $context["backdrops"] : null), 0, array(), "array"), "fondo", array()), "html", null, true);
        echo "\");
        margin: 0 auto;
    }
    
    </style>
";
    }

    // line 26
    public function block_loginoptions($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        if (((isset($context["usuarioLogueado"]) ? $context["usuarioLogueado"] : null) == 1)) {
            // line 28
            echo "
            <a href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getUrl("usuario");
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["nickname"]) ? $context["nickname"] : null), "html", null, true);
            echo "</a> | <a href=\"";
            echo $this->env->getExtension('routing')->getUrl("logout_action");
            echo "\">Salir</a>
       
    ";
        } else {
            // line 31
            echo " 

        ";
            // line 33
            $this->displayParentBlock("loginoptions", $context, $blocks);
            echo " 
    
    ";
        }
    }

    // line 38
    public function block_tendencia($context, array $blocks = array())
    {
        // line 39
        echo "
    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["tendencia"]) ? $context["tendencia"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 41
            echo "
                <div class=\"col-sm-4 col-md-4\">
                    <a href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" class=\"thumbnail movie\">
                        ";
            // line 44
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 45
                echo "                             <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" alt=\"Imagen pelicula\">
                             
                        ";
            } else {
                // line 48
                echo "                        
                            <img src=\"https://image.tmdb.org/t/p/w185/";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
                echo "\">
                        
                        ";
            }
            // line 52
            echo "                        
                        <div class=\"caption\">
                            <h5>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
            echo "<div id=\"c";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" value=\"0\" class=\"rateyo-readonly-widg\"></div></h5>
                                 
                        </div>
                    </a>
                </div>
                ";
            // line 59
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 60
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 63
    public function block_mejorvaloradas($context, array $blocks = array())
    {
        // line 64
        $context["i"] = (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null);
        // line 65
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["mejoresValoradas"]) ? $context["mejoresValoradas"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 66
            echo "
                <div class=\"col-sm-4 col-md-4\">
                    <a href=\"";
            // line 68
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" class=\"thumbnail movie\">
                        ";
            // line 69
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 70
                echo "                             <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" alt=\"Imagen pelicula\">
                             
                        ";
            } else {
                // line 73
                echo "                        
                            <img src=\"https://image.tmdb.org/t/p/w185/";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
                echo "\">
                        
                        ";
            }
            // line 77
            echo "                        <div class=\"caption\">
                            <h5>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
            echo "<div id=\"c";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" value=\"0\" class=\"rateyo-readonly-widg\"></div></h5>
                        </div>
                    </a>
                </div>
                ";
            // line 82
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 83
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 86
    public function block_estrenos($context, array $blocks = array())
    {
        // line 87
        $context["i"] = ((isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null) * 2);
        // line 88
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["estrenos"]) ? $context["estrenos"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 89
            echo "
                <div class=\"col-sm-4 col-md-4\">
                    <a href=\"";
            // line 91
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" class=\"thumbnail movie\">
                        ";
            // line 92
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 93
                echo "                             <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" alt=\"Imagen pelicula\">
                             
                        ";
            } else {
                // line 96
                echo "                        
                            <img src=\"https://image.tmdb.org/t/p/w185/";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
                echo "\">
                        
                        ";
            }
            // line 100
            echo "                        <div class=\"caption\">
                            <h5>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
            echo "<div id=\"c";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" value=\"0\" class=\"rateyo-readonly-widg\"></div></h5>
                        </div>
                    </a>
                </div>
                ";
            // line 105
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 106
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 109
    public function block_proximamente($context, array $blocks = array())
    {
        // line 110
        echo "
";
        // line 111
        $context["i"] = ((isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null) * 3);
        // line 112
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["proximamente"]) ? $context["proximamente"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 113
            echo "
                <div class=\"col-sm-4 col-md-4\">
                    <a href=\"";
            // line 115
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" class=\"thumbnail movie\">
                        ";
            // line 116
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 117
                echo "                             <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" alt=\"Imagen pelicula\">
                             
                        ";
            } else {
                // line 120
                echo "                        
                            <img src=\"https://image.tmdb.org/t/p/w185/";
                // line 121
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
                echo "\">
                        
                        ";
            }
            // line 124
            echo "                        <div class=\"caption\">
                            <h5>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
            echo "<div id=\"c";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" value=\"0\" class=\"rateyo-readonly-widg\"></div></h5>
                        </div>
                    </a>
                </div>
                ";
            // line 129
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 130
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 133
    public function block_ultimas($context, array $blocks = array())
    {
        // line 134
        echo "
";
        // line 135
        $context["i"] = ((isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null) * 4);
        // line 136
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["ultimas"]) ? $context["ultimas"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 137
            echo "
                <div class=\"col-sm-4 col-md-4\">
                    <a href=\"";
            // line 139
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" class=\"thumbnail movie\">
                        ";
            // line 140
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 141
                echo "                             <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" alt=\"Imagen pelicula\">
                             
                        ";
            } else {
                // line 144
                echo "                        
                            <img src=\"https://image.tmdb.org/t/p/w185/";
                // line 145
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
                echo "\">
                        
                        ";
            }
            // line 148
            echo "                        <div class=\"caption\">
                            <h5>";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
            echo "<div id=\"c";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" value=\"0\" class=\"rateyo-readonly-widg\"></div></h5>
                        </div>
                    </a>
                </div>
                ";
            // line 153
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 154
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 162
    public function block_javascripts($context, array $blocks = array())
    {
        // line 163
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script>
     \$(function() {
         
         \$(\"#a_tendencia\").click(function() {
      \$('#cabezera').css(\"background\", \"url(https://image.tmdb.org/t/p/w1280/";
        // line 168
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["backdrops"]) ? $context["backdrops"] : null), 0, array(), "array"), "fondo", array()), "html", null, true);
        echo ")\");
      \$('#watermark').html(\"";
        // line 169
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["backdrops"]) ? $context["backdrops"] : null), 0, array(), "array"), "titulo", array()), "html", null, true);
        echo "\");
});
           \$(\"#a_mejores_valoradas\").click(function() {
      \$('#cabezera').css(\"background\", \"url(https://image.tmdb.org/t/p/w1280/";
        // line 172
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["backdrops"]) ? $context["backdrops"] : null), 1, array(), "array"), "fondo", array()), "html", null, true);
        echo ")\");
      \$('#watermark').html(\"";
        // line 173
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["backdrops"]) ? $context["backdrops"] : null), 1, array(), "array"), "titulo", array()), "html", null, true);
        echo "\");
});   
     \$(\"#a_estrenos\").click(function() {
      \$('#cabezera').css(\"background\", \"url(https://image.tmdb.org/t/p/w1280/";
        // line 176
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["backdrops"]) ? $context["backdrops"] : null), 2, array(), "array"), "fondo", array()), "html", null, true);
        echo ")\");
      \$('#watermark').html(\"";
        // line 177
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["backdrops"]) ? $context["backdrops"] : null), 2, array(), "array"), "titulo", array()), "html", null, true);
        echo "\");
      
});
     \$(\"#a_proximamente\").click(function() {
      \$('#cabezera').css(\"background\", \"url(https://image.tmdb.org/t/p/w1280/";
        // line 181
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["backdrops"]) ? $context["backdrops"] : null), 3, array(), "array"), "fondo", array()), "html", null, true);
        echo ")\");
      \$('#watermark').html(\"";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["backdrops"]) ? $context["backdrops"] : null), 3, array(), "array"), "titulo", array()), "html", null, true);
        echo "\");
});
        ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["tendencia"]) ? $context["tendencia"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 185
            echo "            var rating = ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "vote_average", array()), "html", null, true);
            echo ";
            \$(\".counter\").text(rating);
            \$(\"#c";
            // line 187
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
            // line 195
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").val(data.rating);
            });
                ";
            // line 197
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 198
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["mejoresValoradas"]) ? $context["mejoresValoradas"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 200
            echo "            var rating = ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "vote_average", array()), "html", null, true);
            echo ";
            \$(\".counter\").text(rating);
            \$(\"#c";
            // line 202
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
            // line 210
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").val(data.rating);
            });
                ";
            // line 212
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 213
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["estrenos"]) ? $context["estrenos"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 215
            echo "            var rating = ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "vote_average", array()), "html", null, true);
            echo ";
            \$(\".counter\").text(rating);
            \$(\"#c";
            // line 217
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
            // line 225
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").val(data.rating);
            });
                ";
            // line 227
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 228
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 229
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["proximamente"]) ? $context["proximamente"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 230
            echo "            var rating = ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "vote_average", array()), "html", null, true);
            echo ";
            \$(\".counter\").text(rating);
            \$(\"#c";
            // line 232
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
            // line 240
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").val(data.rating);
            });
                ";
            // line 242
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 243
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 244
        echo "        
        
     });
     </script>
";
    }

    public function getTemplateName()
    {
        return "VistaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  625 => 244,  619 => 243,  617 => 242,  612 => 240,  601 => 232,  595 => 230,  590 => 229,  584 => 228,  582 => 227,  577 => 225,  566 => 217,  560 => 215,  555 => 214,  549 => 213,  547 => 212,  542 => 210,  531 => 202,  525 => 200,  520 => 199,  514 => 198,  512 => 197,  507 => 195,  496 => 187,  490 => 185,  486 => 184,  481 => 182,  477 => 181,  470 => 177,  466 => 176,  460 => 173,  456 => 172,  450 => 169,  446 => 168,  437 => 163,  434 => 162,  426 => 154,  424 => 153,  415 => 149,  412 => 148,  404 => 145,  401 => 144,  394 => 141,  392 => 140,  386 => 139,  382 => 137,  377 => 136,  375 => 135,  372 => 134,  369 => 133,  361 => 130,  359 => 129,  350 => 125,  347 => 124,  339 => 121,  336 => 120,  329 => 117,  327 => 116,  321 => 115,  317 => 113,  312 => 112,  310 => 111,  307 => 110,  304 => 109,  296 => 106,  294 => 105,  285 => 101,  282 => 100,  274 => 97,  271 => 96,  264 => 93,  262 => 92,  256 => 91,  252 => 89,  247 => 88,  245 => 87,  242 => 86,  234 => 83,  232 => 82,  223 => 78,  220 => 77,  212 => 74,  209 => 73,  202 => 70,  200 => 69,  194 => 68,  190 => 66,  185 => 65,  183 => 64,  180 => 63,  172 => 60,  170 => 59,  160 => 54,  156 => 52,  148 => 49,  145 => 48,  138 => 45,  136 => 44,  130 => 43,  126 => 41,  122 => 40,  119 => 39,  116 => 38,  108 => 33,  104 => 31,  94 => 29,  91 => 28,  88 => 27,  85 => 26,  75 => 18,  60 => 6,  57 => 5,  54 => 4,  48 => 3,  42 => 2,  38 => 1,  36 => 160,  34 => 37,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* {%block title%} Quality Mega Pixel {%endblock%}*/
/* {% block moviename%}{{backdrops[0].titulo}}{% endblock %}*/
/* {% block stylesheets %}*/
/* */
/*     {{ parent() }}*/
/*     <style> */
/*     .cabezera {*/
/*         padding-top: 20px;*/
/*         background-color: #f5f5f5;*/
/*         height: 200px;*/
/*         width: 100%;*/
/*         max-width: 100%;*/
/*         -webkit-background-size: cover;*/
/*         -moz-background-size: cover;*/
/*         -o-background-size: cover;*/
/*         background-size: cover;*/
/*         background: url("https://image.tmdb.org/t/p/w1280{{ backdrops[0].fondo }}");*/
/*         margin: 0 auto;*/
/*     }*/
/*     */
/*     </style>*/
/* {%endblock%}*/
/* */
/* */
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
/* {%set i = 0%}*/
/* {%block tendencia%}*/
/* */
/*     {%for pelicula in tendencia.results|slice(0,numPeliculasDivisibleTres)%}*/
/* */
/*                 <div class="col-sm-4 col-md-4">*/
/*                     <a href="{{ url('homepage') }}vista/mostrarpelicula/{{pelicula.id}}" class="thumbnail movie">*/
/*                         {% if pelicula.poster_path == "" %}*/
/*                              <img src="{{asset('assets/images/movie.png')}}" alt="Imagen pelicula">*/
/*                              */
/*                         {% else %}*/
/*                         */
/*                             <img src="https://image.tmdb.org/t/p/w185/{{pelicula.poster_path}}" alt="{{ pelicula.title }}">*/
/*                         */
/*                         {% endif %}*/
/*                         */
/*                         <div class="caption">*/
/*                             <h5>{{ pelicula.title }}<div id="c{{i}}" value="0" class="rateyo-readonly-widg"></div></h5>*/
/*                                  */
/*                         </div>*/
/*                     </a>*/
/*                 </div>*/
/*                 {%set i =( i + 1)%}*/
/*     {%endfor%}*/
/* {%endblock%}*/
/* */
/* {%block mejorvaloradas%}*/
/* {% set i = numPeliculasDivisibleTres %}*/
/*     {%for pelicula in mejoresValoradas.results|slice(0,numPeliculasDivisibleTres)%}*/
/* */
/*                 <div class="col-sm-4 col-md-4">*/
/*                     <a href="{{ url('homepage') }}vista/mostrarpelicula/{{pelicula.id}}" class="thumbnail movie">*/
/*                         {% if pelicula.poster_path == "" %}*/
/*                              <img src="{{asset('assets/images/movie.png')}}" alt="Imagen pelicula">*/
/*                              */
/*                         {% else %}*/
/*                         */
/*                             <img src="https://image.tmdb.org/t/p/w185/{{pelicula.poster_path}}" alt="{{ pelicula.title }}">*/
/*                         */
/*                         {% endif %}*/
/*                         <div class="caption">*/
/*                             <h5>{{ pelicula.title }}<div id="c{{i}}" value="0" class="rateyo-readonly-widg"></div></h5>*/
/*                         </div>*/
/*                     </a>*/
/*                 </div>*/
/*                 {%set i = i + 1%}*/
/*     {%endfor%}*/
/* {%endblock%}*/
/* */
/* {%block estrenos%}*/
/* {% set i = numPeliculasDivisibleTres * 2%}*/
/*     {%for pelicula in estrenos.results|slice(0,numPeliculasDivisibleTres)%}*/
/* */
/*                 <div class="col-sm-4 col-md-4">*/
/*                     <a href="{{ url('homepage') }}vista/mostrarpelicula/{{pelicula.id}}" class="thumbnail movie">*/
/*                         {% if pelicula.poster_path == "" %}*/
/*                              <img src="{{asset('assets/images/movie.png')}}" alt="Imagen pelicula">*/
/*                              */
/*                         {% else %}*/
/*                         */
/*                             <img src="https://image.tmdb.org/t/p/w185/{{pelicula.poster_path}}" alt="{{ pelicula.title }}">*/
/*                         */
/*                         {% endif %}*/
/*                         <div class="caption">*/
/*                             <h5>{{ pelicula.title }}<div id="c{{i}}" value="0" class="rateyo-readonly-widg"></div></h5>*/
/*                         </div>*/
/*                     </a>*/
/*                 </div>*/
/*                 {%set i =i + 1%}*/
/*     {%endfor%}*/
/* {%endblock%}*/
/* */
/* {%block proximamente%}*/
/* */
/* {% set i = numPeliculasDivisibleTres * 3%}*/
/*     {%for pelicula in proximamente.results|slice(0,numPeliculasDivisibleTres)%}*/
/* */
/*                 <div class="col-sm-4 col-md-4">*/
/*                     <a href="{{ url('homepage') }}vista/mostrarpelicula/{{pelicula.id}}" class="thumbnail movie">*/
/*                         {% if pelicula.poster_path == "" %}*/
/*                              <img src="{{asset('assets/images/movie.png')}}" alt="Imagen pelicula">*/
/*                              */
/*                         {% else %}*/
/*                         */
/*                             <img src="https://image.tmdb.org/t/p/w185/{{pelicula.poster_path}}" alt="{{ pelicula.title }}">*/
/*                         */
/*                         {% endif %}*/
/*                         <div class="caption">*/
/*                             <h5>{{ pelicula.title }}<div id="c{{i}}" value="0" class="rateyo-readonly-widg"></div></h5>*/
/*                         </div>*/
/*                     </a>*/
/*                 </div>*/
/*                 {%set i = i + 1%}*/
/*     {%endfor%}*/
/* {%endblock%}*/
/* */
/* {%block ultimas%}*/
/* */
/* {% set i = numPeliculasDivisibleTres * 4%}*/
/*     {%for pelicula in ultimas.results|slice(0,numPeliculasDivisibleTres)%}*/
/* */
/*                 <div class="col-sm-4 col-md-4">*/
/*                     <a href="{{ url('homepage') }}vista/mostrarpelicula/{{pelicula.id}}" class="thumbnail movie">*/
/*                         {% if pelicula.poster_path == "" %}*/
/*                              <img src="{{asset('assets/images/movie.png')}}" alt="Imagen pelicula">*/
/*                              */
/*                         {% else %}*/
/*                         */
/*                             <img src="https://image.tmdb.org/t/p/w185/{{pelicula.poster_path}}" alt="{{ pelicula.title }}">*/
/*                         */
/*                         {% endif %}*/
/*                         <div class="caption">*/
/*                             <h5>{{ pelicula.title }}<div id="c{{i}}" value="0" class="rateyo-readonly-widg"></div></h5>*/
/*                         </div>*/
/*                     </a>*/
/*                 </div>*/
/*                 {%set i = i + 1%}*/
/*     {%endfor%}*/
/* {%endblock%}*/
/* */
/* */
/* */
/* */
/* {% set i = 0 %}*/
/* */
/* {%block javascripts%}*/
/*  {{ parent() }}*/
/* <script>*/
/*      $(function() {*/
/*          */
/*          $("#a_tendencia").click(function() {*/
/*       $('#cabezera').css("background", "url(https://image.tmdb.org/t/p/w1280/{{backdrops[0].fondo}})");*/
/*       $('#watermark').html("{{backdrops[0].titulo}}");*/
/* });*/
/*            $("#a_mejores_valoradas").click(function() {*/
/*       $('#cabezera').css("background", "url(https://image.tmdb.org/t/p/w1280/{{backdrops[1].fondo}})");*/
/*       $('#watermark').html("{{backdrops[1].titulo}}");*/
/* });   */
/*      $("#a_estrenos").click(function() {*/
/*       $('#cabezera').css("background", "url(https://image.tmdb.org/t/p/w1280/{{backdrops[2].fondo}})");*/
/*       $('#watermark').html("{{backdrops[2].titulo}}");*/
/*       */
/* });*/
/*      $("#a_proximamente").click(function() {*/
/*       $('#cabezera').css("background", "url(https://image.tmdb.org/t/p/w1280/{{backdrops[3].fondo}})");*/
/*       $('#watermark').html("{{backdrops[3].titulo}}");*/
/* });*/
/*         {%for pelicula in tendencia.results|slice(0,numPeliculasDivisibleTres)%}*/
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
/*       {%for pelicula in mejoresValoradas.results|slice(0,numPeliculasDivisibleTres)%}*/
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
/*           {%for pelicula in estrenos.results|slice(0,numPeliculasDivisibleTres)%}*/
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
/*           {%for pelicula in proximamente.results|slice(0,numPeliculasDivisibleTres)%}*/
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
/*         */
/*         */
/*      });*/
/*      </script>*/
/* {%endblock%}*/
/* */
/* */
/* */
