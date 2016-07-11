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
            'classcontenido' => array($this, 'block_classcontenido'),
            'tendencia' => array($this, 'block_tendencia'),
            'mejorvaloradas' => array($this, 'block_mejorvaloradas'),
            'estrenos' => array($this, 'block_estrenos'),
            'proximamente' => array($this, 'block_proximamente'),
            'ultimas' => array($this, 'block_ultimas'),
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
        // line 37
        $context["i"] = 0;
        // line 163
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
    public function block_classcontenido($context, array $blocks = array())
    {
        echo "col-md-12 fondoContenido";
    }

    // line 39
    public function block_tendencia($context, array $blocks = array())
    {
        // line 40
        echo "
    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["tendencia"]) ? $context["tendencia"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 42
            echo "
                <div class=\"col-sm-3 col-md-3\">
                    <a href=\"";
            // line 44
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" class=\"thumbnail movie\">
                        ";
            // line 45
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 46
                echo "                             <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" alt=\"Imagen pelicula\">
                             
                        ";
            } else {
                // line 49
                echo "                        
                            <img src=\"https://image.tmdb.org/t/p/w185/";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
                echo "\">
                        
                        ";
            }
            // line 53
            echo "                        
                        <div class=\"caption\">
                            <h5>";
            // line 55
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
                <div class=\"col-sm-3 col-md-3\">
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
                <div class=\"col-sm-3 col-md-3\">
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
                <div class=\"col-sm-3 col-md-3\">
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
        $this->displayBlock('barraderecha', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $context["i"] = ((isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null) * 4);
        // line 139
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["ultimas"]) ? $context["ultimas"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 140
            echo "
                <div class=\"col-sm-3 col-md-3\">
                    <a href=\"";
            // line 142
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" class=\"thumbnail movie\">
                        ";
            // line 143
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 144
                echo "                             <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" alt=\"Imagen pelicula\">
                             
                        ";
            } else {
                // line 147
                echo "                        
                            <img src=\"https://image.tmdb.org/t/p/w185/";
                // line 148
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
                echo "\">
                        
                        ";
            }
            // line 151
            echo "                        <div class=\"caption\">
                            <h5>";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
            echo "<div id=\"c";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" value=\"0\" class=\"rateyo-readonly-widg\"></div></h5>
                        </div>
                    </a>
                </div>
                ";
            // line 156
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 157
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 136
    public function block_barraderecha($context, array $blocks = array())
    {
    }

    // line 165
    public function block_javascripts($context, array $blocks = array())
    {
        // line 166
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script>
     \$(function() {
         
         \$(\"#a_tendencia\").click(function() {
      \$('#cabezera').css(\"background\", \"url(https://image.tmdb.org/t/p/w1280/";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["backdrops"]) ? $context["backdrops"] : null), 0, array(), "array"), "fondo", array()), "html", null, true);
        echo ")\");
      \$('#watermark').html(\"";
        // line 172
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["backdrops"]) ? $context["backdrops"] : null), 0, array(), "array"), "titulo", array()), "html", null, true);
        echo "\");
});
           \$(\"#a_mejores_valoradas\").click(function() {
      \$('#cabezera').css(\"background\", \"url(https://image.tmdb.org/t/p/w1280/";
        // line 175
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["backdrops"]) ? $context["backdrops"] : null), 1, array(), "array"), "fondo", array()), "html", null, true);
        echo ")\");
      \$('#watermark').html(\"";
        // line 176
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["backdrops"]) ? $context["backdrops"] : null), 1, array(), "array"), "titulo", array()), "html", null, true);
        echo "\");
});   
     \$(\"#a_estrenos\").click(function() {
      \$('#cabezera').css(\"background\", \"url(https://image.tmdb.org/t/p/w1280/";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["backdrops"]) ? $context["backdrops"] : null), 2, array(), "array"), "fondo", array()), "html", null, true);
        echo ")\");
      \$('#watermark').html(\"";
        // line 180
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["backdrops"]) ? $context["backdrops"] : null), 2, array(), "array"), "titulo", array()), "html", null, true);
        echo "\");
      
});
     \$(\"#a_proximamente\").click(function() {
      \$('#cabezera').css(\"background\", \"url(https://image.tmdb.org/t/p/w1280/";
        // line 184
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["backdrops"]) ? $context["backdrops"] : null), 3, array(), "array"), "fondo", array()), "html", null, true);
        echo ")\");
      \$('#watermark').html(\"";
        // line 185
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["backdrops"]) ? $context["backdrops"] : null), 3, array(), "array"), "titulo", array()), "html", null, true);
        echo "\");
});
        ";
        // line 187
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["tendencia"]) ? $context["tendencia"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 188
            echo "            var rating = ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "vote_average", array()), "html", null, true);
            echo ";
            \$(\".counter\").text(rating);
            \$(\"#c";
            // line 190
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
            // line 198
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").val(data.rating);
            });
                ";
            // line 200
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 201
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 202
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["mejoresValoradas"]) ? $context["mejoresValoradas"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 203
            echo "            var rating = ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "vote_average", array()), "html", null, true);
            echo ";
            \$(\".counter\").text(rating);
            \$(\"#c";
            // line 205
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
            // line 213
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").val(data.rating);
            });
                ";
            // line 215
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 216
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["estrenos"]) ? $context["estrenos"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 218
            echo "            var rating = ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "vote_average", array()), "html", null, true);
            echo ";
            \$(\".counter\").text(rating);
            \$(\"#c";
            // line 220
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
            // line 228
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").val(data.rating);
            });
                ";
            // line 230
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 231
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["proximamente"]) ? $context["proximamente"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 233
            echo "            var rating = ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "vote_average", array()), "html", null, true);
            echo ";
            \$(\".counter\").text(rating);
            \$(\"#c";
            // line 235
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
            // line 243
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").val(data.rating);
            });
                ";
            // line 245
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 246
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
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
        return array (  643 => 247,  637 => 246,  635 => 245,  630 => 243,  619 => 235,  613 => 233,  608 => 232,  602 => 231,  600 => 230,  595 => 228,  584 => 220,  578 => 218,  573 => 217,  567 => 216,  565 => 215,  560 => 213,  549 => 205,  543 => 203,  538 => 202,  532 => 201,  530 => 200,  525 => 198,  514 => 190,  508 => 188,  504 => 187,  499 => 185,  495 => 184,  488 => 180,  484 => 179,  478 => 176,  474 => 175,  468 => 172,  464 => 171,  455 => 166,  452 => 165,  447 => 136,  439 => 157,  437 => 156,  428 => 152,  425 => 151,  417 => 148,  414 => 147,  407 => 144,  405 => 143,  399 => 142,  395 => 140,  390 => 139,  388 => 138,  385 => 137,  383 => 136,  380 => 135,  377 => 134,  369 => 131,  367 => 130,  358 => 126,  355 => 125,  347 => 122,  344 => 121,  337 => 118,  335 => 117,  329 => 116,  325 => 114,  320 => 113,  318 => 112,  315 => 111,  312 => 110,  304 => 107,  302 => 106,  293 => 102,  290 => 101,  282 => 98,  279 => 97,  272 => 94,  270 => 93,  264 => 92,  260 => 90,  255 => 89,  253 => 88,  250 => 87,  242 => 84,  240 => 83,  231 => 79,  228 => 78,  220 => 75,  217 => 74,  210 => 71,  208 => 70,  202 => 69,  198 => 67,  193 => 66,  191 => 65,  188 => 64,  180 => 61,  178 => 60,  168 => 55,  164 => 53,  156 => 50,  153 => 49,  146 => 46,  144 => 45,  138 => 44,  134 => 42,  130 => 41,  127 => 40,  124 => 39,  118 => 38,  110 => 33,  106 => 31,  96 => 29,  93 => 28,  90 => 27,  87 => 26,  77 => 18,  62 => 6,  59 => 5,  56 => 4,  50 => 3,  44 => 2,  40 => 1,  38 => 163,  36 => 37,  11 => 1,);
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
/* {% block classcontenido %}col-md-12 fondoContenido{% endblock %}*/
/* {%block tendencia%}*/
/* */
/*     {%for pelicula in tendencia.results|slice(0,numPeliculasDivisibleTres)%}*/
/* */
/*                 <div class="col-sm-3 col-md-3">*/
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
/*                 <div class="col-sm-3 col-md-3">*/
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
/*                 <div class="col-sm-3 col-md-3">*/
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
/*                 <div class="col-sm-3 col-md-3">*/
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
/* {% block barraderecha %}{%endblock%}*/
/* */
/* {% set i = numPeliculasDivisibleTres * 4%}*/
/*     {%for pelicula in ultimas.results|slice(0,numPeliculasDivisibleTres)%}*/
/* */
/*                 <div class="col-sm-3 col-md-3">*/
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
