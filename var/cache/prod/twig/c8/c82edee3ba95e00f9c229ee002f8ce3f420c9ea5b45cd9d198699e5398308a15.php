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
        // line 26
        $context["i"] = 0;
        // line 150
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

    // line 29
    public function block_tendencia($context, array $blocks = array())
    {
        // line 30
        echo "
    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["tendencia"]) ? $context["tendencia"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 32
            echo "
                <div class=\"col-sm-4 col-md-4\">
                    <a href=\"";
            // line 34
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" class=\"thumbnail movie\">
                        ";
            // line 35
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 36
                echo "                             <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" alt=\"Imagen pelicula\">
                             
                        ";
            } else {
                // line 39
                echo "                        
                            <img src=\"https://image.tmdb.org/t/p/w185/";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
                echo "\">
                        
                        ";
            }
            // line 43
            echo "                        
                        <div class=\"caption\">
                            <h5>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
            echo "<div id=\"c";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" value=\"0\" class=\"rateyo-readonly-widg\"></div></h5>
                        </div>
                    </a>
                </div>
                ";
            // line 49
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 50
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 53
    public function block_mejorvaloradas($context, array $blocks = array())
    {
        // line 54
        $context["i"] = (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null);
        // line 55
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["mejoresValoradas"]) ? $context["mejoresValoradas"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 56
            echo "
                <div class=\"col-sm-4 col-md-4\">
                    <a href=\"";
            // line 58
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" class=\"thumbnail movie\">
                        ";
            // line 59
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 60
                echo "                             <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" alt=\"Imagen pelicula\">
                             
                        ";
            } else {
                // line 63
                echo "                        
                            <img src=\"https://image.tmdb.org/t/p/w185/";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
                echo "\">
                        
                        ";
            }
            // line 67
            echo "                        <div class=\"caption\">
                            <h5>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
            echo "<div id=\"c";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" value=\"0\" class=\"rateyo-readonly-widg\"></div></h5>
                        </div>
                    </a>
                </div>
                ";
            // line 72
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 73
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 76
    public function block_estrenos($context, array $blocks = array())
    {
        // line 77
        $context["i"] = ((isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null) * 2);
        // line 78
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["estrenos"]) ? $context["estrenos"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 79
            echo "
                <div class=\"col-sm-4 col-md-4\">
                    <a href=\"";
            // line 81
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" class=\"thumbnail movie\">
                        ";
            // line 82
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 83
                echo "                             <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" alt=\"Imagen pelicula\">
                             
                        ";
            } else {
                // line 86
                echo "                        
                            <img src=\"https://image.tmdb.org/t/p/w185/";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
                echo "\">
                        
                        ";
            }
            // line 90
            echo "                        <div class=\"caption\">
                            <h5>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
            echo "<div id=\"c";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" value=\"0\" class=\"rateyo-readonly-widg\"></div></h5>
                        </div>
                    </a>
                </div>
                ";
            // line 95
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 96
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 99
    public function block_proximamente($context, array $blocks = array())
    {
        // line 100
        echo "
";
        // line 101
        $context["i"] = ((isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null) * 3);
        // line 102
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["proximamente"]) ? $context["proximamente"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 103
            echo "
                <div class=\"col-sm-4 col-md-4\">
                    <a href=\"";
            // line 105
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" class=\"thumbnail movie\">
                        ";
            // line 106
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 107
                echo "                             <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" alt=\"Imagen pelicula\">
                             
                        ";
            } else {
                // line 110
                echo "                        
                            <img src=\"https://image.tmdb.org/t/p/w185/";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
                echo "\">
                        
                        ";
            }
            // line 114
            echo "                        <div class=\"caption\">
                            <h5>";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
            echo "<div id=\"c";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" value=\"0\" class=\"rateyo-readonly-widg\"></div></h5>
                        </div>
                    </a>
                </div>
                ";
            // line 119
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 120
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 123
    public function block_ultimas($context, array $blocks = array())
    {
        // line 124
        echo "
";
        // line 125
        $context["i"] = ((isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null) * 4);
        // line 126
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["ultimas"]) ? $context["ultimas"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 127
            echo "
                <div class=\"col-sm-4 col-md-4\">
                    <a href=\"";
            // line 129
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" class=\"thumbnail movie\">
                        ";
            // line 130
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 131
                echo "                             <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" alt=\"Imagen pelicula\">
                             
                        ";
            } else {
                // line 134
                echo "                        
                            <img src=\"https://image.tmdb.org/t/p/w185/";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
                echo "\">
                        
                        ";
            }
            // line 138
            echo "                        <div class=\"caption\">
                            <h5>";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
            echo "<div id=\"c";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" value=\"0\" class=\"rateyo-readonly-widg\"></div></h5>
                        </div>
                    </a>
                </div>
                ";
            // line 143
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 144
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 152
    public function block_javascripts($context, array $blocks = array())
    {
        // line 153
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script>
     \$(function() {
         
         \$(\"#a_tendencia\").click(function() {
      \$('#cabezera').css(\"background\", \"url(https://image.tmdb.org/t/p/w1280/";
        // line 158
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["backdrops"]) ? $context["backdrops"] : null), 0, array(), "array"), "fondo", array()), "html", null, true);
        echo ")\");
      \$('#watermark').html(\"";
        // line 159
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["backdrops"]) ? $context["backdrops"] : null), 0, array(), "array"), "titulo", array()), "html", null, true);
        echo "\");
});
           \$(\"#a_mejores_valoradas\").click(function() {
      \$('#cabezera').css(\"background\", \"url(https://image.tmdb.org/t/p/w1280/";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["backdrops"]) ? $context["backdrops"] : null), 1, array(), "array"), "fondo", array()), "html", null, true);
        echo ")\");
      \$('#watermark').html(\"";
        // line 163
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["backdrops"]) ? $context["backdrops"] : null), 1, array(), "array"), "titulo", array()), "html", null, true);
        echo "\");
});   
     \$(\"#a_estrenos\").click(function() {
      \$('#cabezera').css(\"background\", \"url(https://image.tmdb.org/t/p/w1280/";
        // line 166
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["backdrops"]) ? $context["backdrops"] : null), 2, array(), "array"), "fondo", array()), "html", null, true);
        echo ")\");
      \$('#watermark').html(\"";
        // line 167
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["backdrops"]) ? $context["backdrops"] : null), 2, array(), "array"), "titulo", array()), "html", null, true);
        echo "\");
      
});
     \$(\"#a_proximamente\").click(function() {
      \$('#cabezera').css(\"background\", \"url(https://image.tmdb.org/t/p/w1280/";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["backdrops"]) ? $context["backdrops"] : null), 3, array(), "array"), "fondo", array()), "html", null, true);
        echo ")\");
      \$('#watermark').html(\"";
        // line 172
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["backdrops"]) ? $context["backdrops"] : null), 3, array(), "array"), "titulo", array()), "html", null, true);
        echo "\");
});
        ";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["tendencia"]) ? $context["tendencia"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 175
            echo "            var rating = ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "vote_average", array()), "html", null, true);
            echo ";
            \$(\".counter\").text(rating);
            \$(\"#c";
            // line 177
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
            // line 185
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").val(data.rating);
            });
                ";
            // line 187
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 188
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["mejoresValoradas"]) ? $context["mejoresValoradas"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 190
            echo "            var rating = ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "vote_average", array()), "html", null, true);
            echo ";
            \$(\".counter\").text(rating);
            \$(\"#c";
            // line 192
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
            // line 200
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").val(data.rating);
            });
                ";
            // line 202
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 203
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["estrenos"]) ? $context["estrenos"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 205
            echo "            var rating = ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "vote_average", array()), "html", null, true);
            echo ";
            \$(\".counter\").text(rating);
            \$(\"#c";
            // line 207
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
            // line 215
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").val(data.rating);
            });
                ";
            // line 217
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 218
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["proximamente"]) ? $context["proximamente"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 220
            echo "            var rating = ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "vote_average", array()), "html", null, true);
            echo ";
            \$(\".counter\").text(rating);
            \$(\"#c";
            // line 222
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
            // line 230
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").val(data.rating);
            });
                ";
            // line 232
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 233
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 234
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
        return array (  594 => 234,  588 => 233,  586 => 232,  581 => 230,  570 => 222,  564 => 220,  559 => 219,  553 => 218,  551 => 217,  546 => 215,  535 => 207,  529 => 205,  524 => 204,  518 => 203,  516 => 202,  511 => 200,  500 => 192,  494 => 190,  489 => 189,  483 => 188,  481 => 187,  476 => 185,  465 => 177,  459 => 175,  455 => 174,  450 => 172,  446 => 171,  439 => 167,  435 => 166,  429 => 163,  425 => 162,  419 => 159,  415 => 158,  406 => 153,  403 => 152,  395 => 144,  393 => 143,  384 => 139,  381 => 138,  373 => 135,  370 => 134,  363 => 131,  361 => 130,  355 => 129,  351 => 127,  346 => 126,  344 => 125,  341 => 124,  338 => 123,  330 => 120,  328 => 119,  319 => 115,  316 => 114,  308 => 111,  305 => 110,  298 => 107,  296 => 106,  290 => 105,  286 => 103,  281 => 102,  279 => 101,  276 => 100,  273 => 99,  265 => 96,  263 => 95,  254 => 91,  251 => 90,  243 => 87,  240 => 86,  233 => 83,  231 => 82,  225 => 81,  221 => 79,  216 => 78,  214 => 77,  211 => 76,  203 => 73,  201 => 72,  192 => 68,  189 => 67,  181 => 64,  178 => 63,  171 => 60,  169 => 59,  163 => 58,  159 => 56,  154 => 55,  152 => 54,  149 => 53,  141 => 50,  139 => 49,  130 => 45,  126 => 43,  118 => 40,  115 => 39,  108 => 36,  106 => 35,  100 => 34,  96 => 32,  92 => 31,  89 => 30,  86 => 29,  76 => 20,  59 => 6,  56 => 5,  53 => 4,  47 => 3,  41 => 2,  37 => 1,  35 => 150,  33 => 26,  11 => 1,);
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
/* {%set i = 0%}*/
/* */
/* */
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
