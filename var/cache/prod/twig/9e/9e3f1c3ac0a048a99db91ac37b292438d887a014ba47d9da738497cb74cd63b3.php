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
    <style>
    
        .fondo {
            background-image: url(\"https://image.tmdb.org/t/p/original/";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "backdrops", array()), 3, array(), "array"), "file_path", array()), "html", null, true);
        echo "\");
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        
    </style>
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-1.8.3.js\"></script>
    <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-1.8.3.js\"></script>

  
";
    }

    // line 24
    public function block_moviename($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "title", array()), "html", null, true);
    }

    // line 25
    public function block_classcontenido($context, array $blocks = array())
    {
        echo "col-md-12 fondoContenido";
    }

    // line 26
    public function block_contenido($context, array $blocks = array())
    {
        // line 27
        echo "



<div class=\"content\">
      \t   <div class=\"movie_top\">
      \t         <div class=\"col-md-9 movie_box\">
 

      \t         \t\t<div class=\"video\">
\t\t\t      \t\t\t<iframe width=\"100%\" height=\"\" src=\"https://www.youtube.com/embed/";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "results", array()), 0, array(), "array"), "key", array()), "html", null, true);
        echo "\" frameborder=\"0\" allowfullscreen=\"\"></iframe>
\t\t\t  \t\t\t</div>

                        <div class=\"grid images_3_of_2\">
                        \t<div class=\"movie_image\">
                                <span class=\"movie_rating\">";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "vote_average", array()), "html", null, true);
        echo "</span>
                                <img src=\"https://image.tmdb.org/t/p/w300";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "poster_path", array()), "html", null, true);
        echo "\" width=\"100%\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "title", array()), "html", null, true);
        echo "\" class=\"img-responsive\" >
                            </div>
                            <div class=\"movie_rate\">
                                <span>
                            <p>\tYour Vote :</p>
                            <span id=\"calificacionPersonal\" class=\"rateyo-readonly-widg\"></span>
                            </span>
\t\t\t\t\t\t  \t   <div class=\"clearfix\"> </div>
                            </div>
                        </div>
                        <div class=\"desc1 span_3_of_2\">
                        \t<p class=\"movie_option\"><strong><div class=\"titulo\">";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "title", array()), "html", null, true);
        echo "  </strong></p> </div> <br />
                        \t";
        // line 55
        if ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "release_date", array())) {
            echo "<p class=\"movie_option\"><strong>Fecha de estreno: </strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "release_date", array()), "html", null, true);
            echo "</p>";
        }
        // line 56
        echo "                        \t<p class=\"movie_option\"><strong>Categoría: </strong><a href=\"#\">Adventure</a>, <a href=\"#\">Fantazy</a></p>
                        \t<p class=\"movie_option\"><strong>Director: </strong><a href=\"#\">suffered </a></p>
                        \t<p class=\"movie_option\"><strong>Actores: </strong><a href=\"#\">anything</a>, <a href=\"#\">Lorem Ipsum</a>, <a href=\"#\" discovered<=\"\" a=\"\">, </a><a href=\"#\"> Virginia</a>, <a href=\"#\"> Virginia</a>, <a href=\"#\">variations</a>, <a href=\"#\">variations</a>, <a href=\"#\">variations</a>, <a href=\"#\"> Virginia</a> <a href=\"#\">...</a></p>
                            <p class=\"movie_option\"><strong>Restricción de edad: </strong>13</p> 
                            <div class=\"down_btn\"><a class=\"btn1\" href=\"#\"><span> </span>Marcar como vista</a></div>
                            <div class=\"down_btn\"><a class=\"btn1\" href=\"#\"><span> </span>Adicionar a una lista</a></div>
                         </div>

                        
                        <div class=\"clearfix\"> </div>
                        <p class=\"m_4\">";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "overview", array()), "html", null, true);
        echo "</p>
\t\t                
                      </div>
                 
                    
                  </div>
                    
           </div>

";
    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        // line 77
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(function() {

            var rating = ";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "vote_average", array()), "html", null, true);
        echo ";

        \$(\"#calificacionPersonal\").rateYo({
                readOnly: false,
                rating: rating,
                numStars: 10,
                precision: 10,
                minValue: 1,
                maxValue: 10
            }).on(\"rateyo.change\", function(e, data) {
                \$(\"#calificacionPersonal\").val(data.rating);

            });
 
      \$('#cabezera').css(\"background\", \"url(https://image.tmdb.org/t/p/w1280/";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "backdrop_path", array()), "html", null, true);
        echo ")\");  



            \$(\"#c1\").rateYo({
                readOnly: true,
                rating: rating,
                numStars: 10,
                precision: 10,
                minValue: 1,
                maxValue: 10,
                 multiColor: {
 
      \"startColor\": \"#FF0000\", //RED
      \"endColor\"  : \"#00FF00\"  //GREEN
    }

            }).on(\"rateyo.change\", function(e, data) {
                \$(\"#c1\").val(data.rating);

            });
        });
    </script>
    
    ";
    }

    // line 120
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
        return array (  221 => 120,  192 => 95,  175 => 81,  168 => 77,  165 => 76,  151 => 66,  139 => 56,  133 => 55,  129 => 54,  113 => 43,  109 => 42,  101 => 37,  89 => 27,  86 => 26,  80 => 25,  74 => 24,  64 => 18,  55 => 12,  48 => 8,  45 => 7,  42 => 6,  34 => 5,  11 => 1,);
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
/*     <style>*/
/*     */
/*         .fondo {*/
/*             background-image: url("https://image.tmdb.org/t/p/original/{{ params.backdrops[3].file_path }}");*/
/*             background-repeat: no-repeat;*/
/*             background-attachment: fixed;*/
/*         }*/
/*         */
/*     </style>*/
/*     <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />*/
/*     <script type="text/javascript" src="//code.jquery.com/jquery-1.8.3.js"></script>*/
/*     <script type="text/javascript" src="//code.jquery.com/jquery-1.8.3.js"></script>*/
/* */
/*   */
/* {% endblock %}*/
/* {% block moviename%}{{params.title}}{% endblock %}*/
/* {% block classcontenido %}col-md-12 fondoContenido{% endblock %}*/
/* {% block contenido %}*/
/* */
/* */
/* */
/* */
/* <div class="content">*/
/*       	   <div class="movie_top">*/
/*       	         <div class="col-md-9 movie_box">*/
/*  */
/* */
/*       	         		<div class="video">*/
/* 			      			<iframe width="100%" height="" src="https://www.youtube.com/embed/{{params.results[0].key}}" frameborder="0" allowfullscreen=""></iframe>*/
/* 			  			</div>*/
/* */
/*                         <div class="grid images_3_of_2">*/
/*                         	<div class="movie_image">*/
/*                                 <span class="movie_rating">{{params.vote_average}}</span>*/
/*                                 <img src="https://image.tmdb.org/t/p/w300{{params.poster_path}}" width="100%" alt="{{params.title}}" class="img-responsive" >*/
/*                             </div>*/
/*                             <div class="movie_rate">*/
/*                                 <span>*/
/*                             <p>	Your Vote :</p>*/
/*                             <span id="calificacionPersonal" class="rateyo-readonly-widg"></span>*/
/*                             </span>*/
/* 						  	   <div class="clearfix"> </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="desc1 span_3_of_2">*/
/*                         	<p class="movie_option"><strong><div class="titulo">{{params.title}}  </strong></p> </div> <br />*/
/*                         	{%if params.release_date %}<p class="movie_option"><strong>Fecha de estreno: </strong>{{params.release_date}}</p>{%endif%}*/
/*                         	<p class="movie_option"><strong>Categoría: </strong><a href="#">Adventure</a>, <a href="#">Fantazy</a></p>*/
/*                         	<p class="movie_option"><strong>Director: </strong><a href="#">suffered </a></p>*/
/*                         	<p class="movie_option"><strong>Actores: </strong><a href="#">anything</a>, <a href="#">Lorem Ipsum</a>, <a href="#" discovered<="" a="">, </a><a href="#"> Virginia</a>, <a href="#"> Virginia</a>, <a href="#">variations</a>, <a href="#">variations</a>, <a href="#">variations</a>, <a href="#"> Virginia</a> <a href="#">...</a></p>*/
/*                             <p class="movie_option"><strong>Restricción de edad: </strong>13</p> */
/*                             <div class="down_btn"><a class="btn1" href="#"><span> </span>Marcar como vista</a></div>*/
/*                             <div class="down_btn"><a class="btn1" href="#"><span> </span>Adicionar a una lista</a></div>*/
/*                          </div>*/
/* */
/*                         */
/*                         <div class="clearfix"> </div>*/
/*                         <p class="m_4">{{params.overview}}</p>*/
/* 		                */
/*                       </div>*/
/*                  */
/*                     */
/*                   </div>*/
/*                     */
/*            </div>*/
/* */
/* {%endblock%}*/
/* {%block javascripts%}*/
/* {{parent()}}*/
/*     <script>*/
/*         $(function() {*/
/* */
/*             var rating = {{params.vote_average}};*/
/* */
/*         $("#calificacionPersonal").rateYo({*/
/*                 readOnly: false,*/
/*                 rating: rating,*/
/*                 numStars: 10,*/
/*                 precision: 10,*/
/*                 minValue: 1,*/
/*                 maxValue: 10*/
/*             }).on("rateyo.change", function(e, data) {*/
/*                 $("#calificacionPersonal").val(data.rating);*/
/* */
/*             });*/
/*  */
/*       $('#cabezera').css("background", "url(https://image.tmdb.org/t/p/w1280/{{params.backdrop_path}})");  */
/* */
/* */
/* */
/*             $("#c1").rateYo({*/
/*                 readOnly: true,*/
/*                 rating: rating,*/
/*                 numStars: 10,*/
/*                 precision: 10,*/
/*                 minValue: 1,*/
/*                 maxValue: 10,*/
/*                  multiColor: {*/
/*  */
/*       "startColor": "#FF0000", //RED*/
/*       "endColor"  : "#00FF00"  //GREEN*/
/*     }*/
/* */
/*             }).on("rateyo.change", function(e, data) {*/
/*                 $("#c1").val(data.rating);*/
/* */
/*             });*/
/*         });*/
/*     </script>*/
/*     */
/*     {%endblock%}*/
/*     {% block barraderecha %}{% endblock %}*/
/* */
