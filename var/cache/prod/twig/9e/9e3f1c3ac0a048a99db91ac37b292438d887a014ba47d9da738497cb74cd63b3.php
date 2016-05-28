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
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-1.8.3.js\"></script>

  
";
    }

    // line 28
    public function block_moviename($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "title", array()), "html", null, true);
    }

    // line 29
    public function block_classcontenido($context, array $blocks = array())
    {
        echo "col-md-12 fondoContenido";
    }

    // line 30
    public function block_contenido($context, array $blocks = array())
    {
        // line 31
        echo "



<div class=\"content\">
      \t   <div class=\"movie_top\">
      \t         <div class=\"col-md-9 movie_box\">
 

      \t         \t\t<div class=\"video\">
\t\t\t      \t\t\t<iframe width=\"100%\" height=\"\" src=\"https://www.youtube.com/embed/";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "results", array()), 0, array(), "array"), "key", array()), "html", null, true);
        echo "?rel=0\" frameborder=\"0\" allowfullscreen=\"\"></iframe>
\t\t\t  \t\t\t</div>

                        <div class=\"grid images_3_of_2\">
                        \t<div class=\"movie_image\">
                                <span class=\"movie_rating\">";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "vote_average", array()), "html", null, true);
        echo "</span>
                                <img src=\"https://image.tmdb.org/t/p/w300";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "poster_path", array()), "html", null, true);
        echo "\" width=\"100%\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "title", array()), "html", null, true);
        echo "\" class=\"img-responsive\" >
                            </div>
                            <div class=\"movie_rate\">
                                <span>
                            <p>\tTu voto :</p>
                            <span id=\"calificacionPersonal\" class=\"rateyo-readonly-widg\"></span>
                            </span>
\t\t\t\t\t\t  \t   <div class=\"clearfix\"> </div>
                            </div>
                        </div>
                        <div class=\"desc1 span_3_of_2\">
                        \t<p class=\"movie_option\"><strong><div class=\"titulo\">";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "title", array()), "html", null, true);
        echo "  </strong></p> </div> <br />
                        \t";
        // line 59
        if ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "release_date", array())) {
            echo "<p class=\"movie_option\"><strong>Fecha de estreno: </strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "release_date", array()), "html", null, true);
            echo "</p>";
        }
        // line 60
        echo "                        \t<p class=\"movie_option\"><strong>Generos: </strong> 
                        \t";
        // line 61
        $context["i"] = 0;
        // line 62
        echo "                        \t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "genres", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["genero"]) {
            // line 63
            echo "    
                        \t";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["genero"], "name", array()), "html", null, true);
            if (((isset($context["i"]) ? $context["i"] : null) < (twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "genres", array())) - 1))) {
                echo ",";
            }
            // line 65
            echo "                  
                        \t";
            // line 66
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 67
            echo "                        \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genero'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                        \t</p>
                        \t<p class=\"movie_option\"><strong>Estudio Cinematogr&aacute;fico : </strong>";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "production_companies", array()), 0, array(), "array"), "name", array()), "html", null, true);
        echo "</p>
                            <p class=\"movie_option\"><strong>Total votos: </strong>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "vote_count", array()), "html", null, true);
        echo "</p> 
                            <div class=\"down_btn\"><a class=\"btn1\" href=\"#\"><span> </span>Marcar como vista</a></div>
                            <div class=\"down_btn\"><a class=\"btn1\" href=\"#\"><span> </span>Adicionar a una lista</a></div>
                         </div>

                        
                        <div class=\"clearfix\"> </div>
                        
                        <p class=\"m_4\">Sinopsis: ";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "overview", array()), "html", null, true);
        echo "</p>
\t\t                
                      </div>
                 
                    
                  </div>
                    
           </div>

";
    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        // line 89
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(function() {

            var rating =0;

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
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "backdrop_path", array()), "html", null, true);
        echo ")\");  



      
        });
    </script>
    
    ";
    }

    // line 116
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
        return array (  246 => 116,  233 => 107,  212 => 89,  209 => 88,  195 => 78,  184 => 70,  180 => 69,  177 => 68,  171 => 67,  169 => 66,  166 => 65,  161 => 64,  158 => 63,  153 => 62,  151 => 61,  148 => 60,  142 => 59,  138 => 58,  122 => 47,  118 => 46,  110 => 41,  98 => 31,  95 => 30,  89 => 29,  83 => 28,  74 => 23,  70 => 21,  60 => 14,  54 => 10,  52 => 9,  48 => 8,  45 => 7,  42 => 6,  34 => 5,  11 => 1,);
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
/*   {%if params.backdrops[3].file_path%}*/
/*   */
/*   <style>*/
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
/* */
/*     <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />*/
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
/* 			      			<iframe width="100%" height="" src="https://www.youtube.com/embed/{{params.results[0].key}}?rel=0" frameborder="0" allowfullscreen=""></iframe>*/
/* 			  			</div>*/
/* */
/*                         <div class="grid images_3_of_2">*/
/*                         	<div class="movie_image">*/
/*                                 <span class="movie_rating">{{params.vote_average}}</span>*/
/*                                 <img src="https://image.tmdb.org/t/p/w300{{params.poster_path}}" width="100%" alt="{{params.title}}" class="img-responsive" >*/
/*                             </div>*/
/*                             <div class="movie_rate">*/
/*                                 <span>*/
/*                             <p>	Tu voto :</p>*/
/*                             <span id="calificacionPersonal" class="rateyo-readonly-widg"></span>*/
/*                             </span>*/
/* 						  	   <div class="clearfix"> </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="desc1 span_3_of_2">*/
/*                         	<p class="movie_option"><strong><div class="titulo">{{params.title}}  </strong></p> </div> <br />*/
/*                         	{%if params.release_date %}<p class="movie_option"><strong>Fecha de estreno: </strong>{{params.release_date}}</p>{%endif%}*/
/*                         	<p class="movie_option"><strong>Generos: </strong> */
/*                         	{%set i=0%}*/
/*                         	{%for genero in params.genres%}*/
/*     */
/*                         	{{genero.name}}{%if i <params.genres|length -1 %},{%endif%}*/
/*                   */
/*                         	{%set i = i +1%}*/
/*                         	{%endfor%}*/
/*                         	</p>*/
/*                         	<p class="movie_option"><strong>Estudio Cinematogr&aacute;fico : </strong>{{params.production_companies[0].name}}</p>*/
/*                             <p class="movie_option"><strong>Total votos: </strong>{{params.vote_count}}</p> */
/*                             <div class="down_btn"><a class="btn1" href="#"><span> </span>Marcar como vista</a></div>*/
/*                             <div class="down_btn"><a class="btn1" href="#"><span> </span>Adicionar a una lista</a></div>*/
/*                          </div>*/
/* */
/*                         */
/*                         <div class="clearfix"> </div>*/
/*                         */
/*                         <p class="m_4">Sinopsis: {{params.overview}}</p>*/
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
/*             var rating =0;*/
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
/*       */
/*         });*/
/*     </script>*/
/*     */
/*     {%endblock%}*/
/*     {% block barraderecha %}{% endblock %}*/
/* */
