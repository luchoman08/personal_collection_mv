<?php

/* VistaBundle:Default:index.html.twig */
class __TwigTemplate_63d0ef7b78a6458b66394bab97937deb0408412a524c9fb6a53f94682f511ed5 extends Twig_Template
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
        // line 39
        $context["i"] = 0;
        // line 161
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
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["backdrops"]) ? $context["backdrops"] : null), 0, array(), "array"), "fondo", array()), "html", null, true);
        echo "\");
    margin: 0 auto; 
        }
        
    </style>
";
    }

    // line 28
    public function block_loginoptions($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        if (((isset($context["usuarioLogueado"]) ? $context["usuarioLogueado"] : null) == 1)) {
            // line 30
            echo "
            ";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["nickname"]) ? $context["nickname"] : null), "html", null, true);
            echo " | <a href=\"";
            echo $this->env->getExtension('routing')->getUrl("logout_action");
            echo "\">Salir</a>
       
    ";
        } else {
            // line 33
            echo " 

        ";
            // line 35
            $this->displayParentBlock("loginoptions", $context, $blocks);
            echo " 
    
    ";
        }
    }

    // line 40
    public function block_tendencia($context, array $blocks = array())
    {
        // line 41
        echo "
    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["tendencia"]) ? $context["tendencia"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 43
            echo "
                <div class=\"col-sm-4 col-md-4\">
                    <a href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" class=\"thumbnail movie\">
                        ";
            // line 46
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 47
                echo "                             <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" alt=\"Imagen pelicula\">
                             
                        ";
            } else {
                // line 50
                echo "                        
                            <img src=\"https://image.tmdb.org/t/p/w185/";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
                echo "\">
                        
                        ";
            }
            // line 54
            echo "                        
                        <div class=\"caption\">
                            <h5>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
            echo "<div id=\"c";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" value=\"0\" class=\"rateyo-readonly-widg\"></div></h5>
                        </div>
                    </a>
                </div>
                ";
            // line 60
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 61
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 64
    public function block_mejorvaloradas($context, array $blocks = array())
    {
        // line 65
        $context["i"] = (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null);
        // line 66
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["mejoresValoradas"]) ? $context["mejoresValoradas"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 67
            echo "
                <div class=\"col-sm-4 col-md-4\">
                    <a href=\"";
            // line 69
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" class=\"thumbnail movie\">
                        ";
            // line 70
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 71
                echo "                             <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" alt=\"Imagen pelicula\">
                             
                        ";
            } else {
                // line 74
                echo "                        
                            <img src=\"https://image.tmdb.org/t/p/w185/";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
                echo "\">
                        
                        ";
            }
            // line 78
            echo "                        <div class=\"caption\">
                            <h5>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
            echo "<div id=\"c";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" value=\"0\" class=\"rateyo-readonly-widg\"></div></h5>
                        </div>
                    </a>
                </div>
                ";
            // line 83
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 84
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 87
    public function block_estrenos($context, array $blocks = array())
    {
        // line 88
        $context["i"] = ((isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null) * 2);
        // line 89
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["estrenos"]) ? $context["estrenos"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 90
            echo "
                <div class=\"col-sm-4 col-md-4\">
                    <a href=\"";
            // line 92
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" class=\"thumbnail movie\">
                        ";
            // line 93
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 94
                echo "                             <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" alt=\"Imagen pelicula\">
                             
                        ";
            } else {
                // line 97
                echo "                        
                            <img src=\"https://image.tmdb.org/t/p/w185/";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
                echo "\">
                        
                        ";
            }
            // line 101
            echo "                        <div class=\"caption\">
                            <h5>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
            echo "<div id=\"c";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" value=\"0\" class=\"rateyo-readonly-widg\"></div></h5>
                        </div>
                    </a>
                </div>
                ";
            // line 106
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 107
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 110
    public function block_proximamente($context, array $blocks = array())
    {
        // line 111
        echo "
";
        // line 112
        $context["i"] = ((isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null) * 3);
        // line 113
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["proximamente"]) ? $context["proximamente"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 114
            echo "
                <div class=\"col-sm-4 col-md-4\">
                    <a href=\"";
            // line 116
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" class=\"thumbnail movie\">
                        ";
            // line 117
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 118
                echo "                             <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" alt=\"Imagen pelicula\">
                             
                        ";
            } else {
                // line 121
                echo "                        
                            <img src=\"https://image.tmdb.org/t/p/w185/";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
                echo "\">
                        
                        ";
            }
            // line 125
            echo "                        <div class=\"caption\">
                            <h5>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
            echo "<div id=\"c";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" value=\"0\" class=\"rateyo-readonly-widg\"></div></h5>
                        </div>
                    </a>
                </div>
                ";
            // line 130
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 131
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 134
    public function block_ultimas($context, array $blocks = array())
    {
        // line 135
        echo "
";
        // line 136
        $context["i"] = ((isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null) * 4);
        // line 137
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["ultimas"]) ? $context["ultimas"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 138
            echo "
                <div class=\"col-sm-4 col-md-4\">
                    <a href=\"";
            // line 140
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" class=\"thumbnail movie\">
                        ";
            // line 141
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 142
                echo "                             <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" alt=\"Imagen pelicula\">
                             
                        ";
            } else {
                // line 145
                echo "                        
                            <img src=\"https://image.tmdb.org/t/p/w185/";
                // line 146
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
                echo "\">
                        
                        ";
            }
            // line 149
            echo "                        <div class=\"caption\">
                            <h5>";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
            echo "<div id=\"c";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" value=\"0\" class=\"rateyo-readonly-widg\"></div></h5>
                        </div>
                    </a>
                </div>
                ";
            // line 154
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 155
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 163
    public function block_javascripts($context, array $blocks = array())
    {
        // line 164
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script>
     \$(function() {
         
         \$(\"#a_tendencia\").click(function() {
      \$('#cabezera').css(\"background\", \"url(https://image.tmdb.org/t/p/w1280/";
        // line 169
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["backdrops"]) ? $context["backdrops"] : null), 0, array(), "array"), "fondo", array()), "html", null, true);
        echo ")\");
      \$('#watermark').html(\"";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["backdrops"]) ? $context["backdrops"] : null), 0, array(), "array"), "titulo", array()), "html", null, true);
        echo "\");
});
           \$(\"#a_mejores_valoradas\").click(function() {
      \$('#cabezera').css(\"background\", \"url(https://image.tmdb.org/t/p/w1280/";
        // line 173
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["backdrops"]) ? $context["backdrops"] : null), 1, array(), "array"), "fondo", array()), "html", null, true);
        echo ")\");
      \$('#watermark').html(\"";
        // line 174
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["backdrops"]) ? $context["backdrops"] : null), 1, array(), "array"), "titulo", array()), "html", null, true);
        echo "\");
});   
     \$(\"#a_estrenos\").click(function() {
      \$('#cabezera').css(\"background\", \"url(https://image.tmdb.org/t/p/w1280/";
        // line 177
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["backdrops"]) ? $context["backdrops"] : null), 2, array(), "array"), "fondo", array()), "html", null, true);
        echo ")\");
      \$('#watermark').html(\"";
        // line 178
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["backdrops"]) ? $context["backdrops"] : null), 2, array(), "array"), "titulo", array()), "html", null, true);
        echo "\");
      
});
     \$(\"#a_proximamente\").click(function() {
      \$('#cabezera').css(\"background\", \"url(https://image.tmdb.org/t/p/w1280/";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["backdrops"]) ? $context["backdrops"] : null), 3, array(), "array"), "fondo", array()), "html", null, true);
        echo ")\");
      \$('#watermark').html(\"";
        // line 183
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["backdrops"]) ? $context["backdrops"] : null), 3, array(), "array"), "titulo", array()), "html", null, true);
        echo "\");
});
        ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["tendencia"]) ? $context["tendencia"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 186
            echo "            var rating = ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "vote_average", array()), "html", null, true);
            echo ";
            \$(\".counter\").text(rating);
            \$(\"#c";
            // line 188
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
            // line 196
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").val(data.rating);
            });
                ";
            // line 198
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 199
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["mejoresValoradas"]) ? $context["mejoresValoradas"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 201
            echo "            var rating = ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "vote_average", array()), "html", null, true);
            echo ";
            \$(\".counter\").text(rating);
            \$(\"#c";
            // line 203
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
            // line 211
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").val(data.rating);
            });
                ";
            // line 213
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 214
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["estrenos"]) ? $context["estrenos"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 216
            echo "            var rating = ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "vote_average", array()), "html", null, true);
            echo ";
            \$(\".counter\").text(rating);
            \$(\"#c";
            // line 218
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
            // line 226
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").val(data.rating);
            });
                ";
            // line 228
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 229
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 230
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["proximamente"]) ? $context["proximamente"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 231
            echo "            var rating = ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "vote_average", array()), "html", null, true);
            echo ";
            \$(\".counter\").text(rating);
            \$(\"#c";
            // line 233
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
            // line 241
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").val(data.rating);
            });
                ";
            // line 243
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 244
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 245
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
        return array (  624 => 245,  618 => 244,  616 => 243,  611 => 241,  600 => 233,  594 => 231,  589 => 230,  583 => 229,  581 => 228,  576 => 226,  565 => 218,  559 => 216,  554 => 215,  548 => 214,  546 => 213,  541 => 211,  530 => 203,  524 => 201,  519 => 200,  513 => 199,  511 => 198,  506 => 196,  495 => 188,  489 => 186,  485 => 185,  480 => 183,  476 => 182,  469 => 178,  465 => 177,  459 => 174,  455 => 173,  449 => 170,  445 => 169,  436 => 164,  433 => 163,  425 => 155,  423 => 154,  414 => 150,  411 => 149,  403 => 146,  400 => 145,  393 => 142,  391 => 141,  385 => 140,  381 => 138,  376 => 137,  374 => 136,  371 => 135,  368 => 134,  360 => 131,  358 => 130,  349 => 126,  346 => 125,  338 => 122,  335 => 121,  328 => 118,  326 => 117,  320 => 116,  316 => 114,  311 => 113,  309 => 112,  306 => 111,  303 => 110,  295 => 107,  293 => 106,  284 => 102,  281 => 101,  273 => 98,  270 => 97,  263 => 94,  261 => 93,  255 => 92,  251 => 90,  246 => 89,  244 => 88,  241 => 87,  233 => 84,  231 => 83,  222 => 79,  219 => 78,  211 => 75,  208 => 74,  201 => 71,  199 => 70,  193 => 69,  189 => 67,  184 => 66,  182 => 65,  179 => 64,  171 => 61,  169 => 60,  160 => 56,  156 => 54,  148 => 51,  145 => 50,  138 => 47,  136 => 46,  130 => 45,  126 => 43,  122 => 42,  119 => 41,  116 => 40,  108 => 35,  104 => 33,  96 => 31,  93 => 30,  90 => 29,  87 => 28,  77 => 20,  60 => 6,  57 => 5,  54 => 4,  48 => 3,  42 => 2,  38 => 1,  36 => 161,  34 => 39,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* {%block title%} Quality Mega Pixel {%endblock%}*/
/* {% block moviename%}{{backdrops[0].titulo}}{% endblock %}*/
/* {% block stylesheets %}*/
/* */
/*     {{ parent() }}*/
/*     <style>*/
/*     */
/*         .cabezera {*/
/*             */
/*              padding-top: 20px;*/
/*     background-color: #f5f5f5;*/
/*     height: 200px;*/
/*     width: 100%;*/
/*     max-width: 100%;*/
/*     -webkit-background-size: cover;*/
/*     -moz-background-size: cover;*/
/*     -o-background-size: cover;*/
/*     background-size: cover;*/
/*     background: url("https://image.tmdb.org/t/p/w1280{{ backdrops[0].fondo }}");*/
/*     margin: 0 auto; */
/*         }*/
/*         */
/*     </style>*/
/* {%endblock%}*/
/* */
/* */
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
