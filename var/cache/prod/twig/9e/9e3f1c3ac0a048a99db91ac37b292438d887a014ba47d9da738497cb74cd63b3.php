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
<div  id=\"divEmergente\"style=\"display:none\" class=\"alert alert-success alert-dismissible\" role=\"alert\">
    <p id=\"mensajeEmergente\"></p>
</div>



<div class=\"content\">
      \t   <div class=\"movie_top\">
      \t         <div class=\"col-md-9 movie_box\">
 

      \t         \t\t

                        <div class=\"grid images_3_of_2\">
                        \t<div class=\"movie_image\">
                                <span class=\"movie_rating\">";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "vote_average", array()), "html", null, true);
        echo "</span>
                                <img src=\"https://image.tmdb.org/t/p/w300";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "poster_path", array()), "html", null, true);
        echo "\" width=\"100%\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "title", array()), "html", null, true);
        echo "\" class=\"img-responsive\" >
                            </div>
                            ";
        // line 50
        if ((isset($context["usuarioLogueado"]) ? $context["usuarioLogueado"] : null)) {
            // line 51
            echo "                            <div class=\"movie_rate\">
                                <span> <p>\tTu voto :</p> <span id=\"calificacionPersonal\" class=\"rateyo-readonly-widg\"></span></span>
\t\t\t\t\t\t  \t   <div class=\"clearfix\"> </div>
                            </div>
                            <div class=\"movie_rate\">
                                <a class=\"a_btn1\" href=\"#\"><div class=\"btn1\">Marcar como vista</div></a>
                                <a class=\"a_btn2\" href=\"#\"><div class=\"btn2\">Adicionar a una lista</div></a>
                            </div>
                               ";
        }
        // line 60
        echo "                        </div>
                     
                        <div class=\"desc1 span_3_of_2\">
                        \t<p class=\"movie_option\"><strong><div class=\"titulo\">";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "title", array()), "html", null, true);
        echo "  </strong> </div> </p> <br />
                        \t";
        // line 64
        if ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "release_date", array())) {
            echo "<p class=\"movie_option\"><strong>Fecha de estreno: </strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "release_date", array()), "html", null, true);
            echo "</p>";
        }
        // line 65
        echo "                        \t<p class=\"movie_option\"><strong>Generos: </strong> 
                        \t";
        // line 66
        $context["i"] = 0;
        // line 67
        echo "                        \t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "genres", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["genero"]) {
            // line 68
            echo "    
                        \t";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["genero"], "name", array()), "html", null, true);
            if (((isset($context["i"]) ? $context["i"] : null) < (twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "genres", array())) - 1))) {
                echo ",";
            }
            // line 70
            echo "                  
                        \t";
            // line 71
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 72
            echo "                        \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genero'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                        \t</p>
                        \t<p class=\"movie_option\"><strong>Estudio Cinematogr&aacute;fico : </strong>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "production_companies", array()), 0, array(), "array"), "name", array()), "html", null, true);
        echo "</p>
                            <p class=\"movie_option\"><strong>Total votos: </strong>";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "vote_count", array()), "html", null, true);
        echo "</p> 
                            <p class=\"m_4\"><strong>Sinopsis:</strong> ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "overview", array()), "html", null, true);
        echo "</p>
                            <!--<center>
                                <br><br><br>
                            <a class=\"a_btn1\" href=\"#\"><div class=\"btn1\">Marcar como vista</div></a>
                            <a class=\"a_btn2\" href=\"#\"><div class=\"btn2\">Adicionar a una lista</div></a>
                            </center>-->
                            
                            <div class=\"video\">
\t\t\t      \t\t\t    <iframe width=\"100%\" height=\"250px\" src=\"https://www.youtube.com/embed/";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "results", array()), 0, array(), "array"), "key", array()), "html", null, true);
        echo "?rel=0\" frameborder=\"0\" allowfullscreen=\"\"></iframe>
\t\t\t  \t\t\t    </div>
                            
                         </div>

                        
                        <div class=\"clearfix\"> </div>
                        
                        
\t\t                
                      </div>
                 
                    
                  </div>
                  
                  <div class=\"col-md-2\">
                      ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["similares"]) ? $context["similares"] : null), "results", array()), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["peliculaSimilar"]) {
            // line 101
            echo "                      \t<div class=\"movie_img\"><div class=\"grid_2\">
                      \t        
                      \t        ";
            // line 103
            if (($this->getAttribute($context["peliculaSimilar"], "poster_path", array()) == "")) {
                // line 104
                echo "                                     <a href=\"";
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
                // line 106
                echo "                                    <a href=\"";
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
            // line 108
            echo "                      \t        
                                <div class=\"caption1\">
\t\t\t\t\t\t\t\t\t<ul class=\"list_5 list_7\">
\t\t\t\t\t\t\t\t\t    <div class=\"calificacion-fondo-similares\">
\t\t\t\t\t\t\t    \t\t    <li><i class=\"icon5\"> <span  class=\"glyphicon glyphicon-star calificacion-similares\" aria-hidden=\"true\"> </span></i><p>";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["peliculaSimilar"], "vote_average", array()), "html", null, true);
            echo "</p></li>
\t\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t\t    \t</ul>
\t\t\t\t\t\t\t    \t<i class=\"icon4 icon6 icon7\"> </i>
\t\t\t\t\t\t\t    \t<!--  <p class=\"m_3\">";
            // line 116
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
        // line 120
        echo "          \t
                    
           </div>

";
    }

    // line 125
    public function block_javascripts($context, array $blocks = array())
    {
        // line 126
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(function() {

            var rating =0;
            var calificacion_semaphore=0;
            //enviar calificacion
            //\$(\"#calificacionPersonal\").click(function(e){

            
            //make the AJAX request, dataType is set to json
            //meaning we are expecting JSON data in response from the server
           
            //});
            
//\$('#gritter-notice-wrapper').hide();
\t
        \$(\"#calificacionPersonal\").rateYo({
                readOnly: false,
                rating: rating,
                numStars: 10,
                precision: 10,
                minValue: 1,
                maxValue: 10
            }).on(\"rateyo.change\", function(e, data) {
                if(calificacion_semaphore==1){
                 \$.ajax({
                type: \"GET\",
                url: \"";
        // line 154
        echo $this->env->getExtension('routing')->getUrl("calificacion_pelicula");
        echo "\",
                data: { idPelicula:";
        // line 155
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
 
            \$('#cabezera').css(\"background\", \"url(https://image.tmdb.org/t/p/w1280/";
        // line 188
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "backdrop_path", array()), "html", null, true);
        echo ")\");  
\t        \$(\"#calificacionPersonal\").click(function(){
\t\t    calificacion_semaphore=1;
\t\t   
\t\t\t
\t\t });


      
        });
    </script>
    
    ";
    }

    // line 201
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
        return array (  391 => 201,  374 => 188,  338 => 155,  334 => 154,  303 => 126,  300 => 125,  292 => 120,  281 => 116,  274 => 112,  268 => 108,  256 => 106,  244 => 104,  242 => 103,  238 => 101,  234 => 100,  215 => 84,  204 => 76,  200 => 75,  196 => 74,  193 => 73,  187 => 72,  185 => 71,  182 => 70,  177 => 69,  174 => 68,  169 => 67,  167 => 66,  164 => 65,  158 => 64,  154 => 63,  149 => 60,  138 => 51,  136 => 50,  129 => 48,  125 => 47,  107 => 31,  104 => 30,  98 => 29,  92 => 28,  85 => 25,  81 => 24,  77 => 23,  73 => 22,  70 => 21,  60 => 14,  54 => 10,  52 => 9,  48 => 8,  45 => 7,  42 => 6,  34 => 5,  11 => 1,);
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
/*   */
/* {% endblock %}*/
/* {% block moviename%}{{params.title}}{% endblock %}*/
/* {% block classcontenido %}col-md-12 fondoContenido{% endblock %}*/
/* {% block contenido %}*/
/* */
/* <div  id="divEmergente"style="display:none" class="alert alert-success alert-dismissible" role="alert">*/
/*     <p id="mensajeEmergente"></p>*/
/* </div>*/
/* */
/* */
/* */
/* <div class="content">*/
/*       	   <div class="movie_top">*/
/*       	         <div class="col-md-9 movie_box">*/
/*  */
/* */
/*       	         		*/
/* */
/*                         <div class="grid images_3_of_2">*/
/*                         	<div class="movie_image">*/
/*                                 <span class="movie_rating">{{params.vote_average}}</span>*/
/*                                 <img src="https://image.tmdb.org/t/p/w300{{params.poster_path}}" width="100%" alt="{{params.title}}" class="img-responsive" >*/
/*                             </div>*/
/*                             {%if usuarioLogueado%}*/
/*                             <div class="movie_rate">*/
/*                                 <span> <p>	Tu voto :</p> <span id="calificacionPersonal" class="rateyo-readonly-widg"></span></span>*/
/* 						  	   <div class="clearfix"> </div>*/
/*                             </div>*/
/*                             <div class="movie_rate">*/
/*                                 <a class="a_btn1" href="#"><div class="btn1">Marcar como vista</div></a>*/
/*                                 <a class="a_btn2" href="#"><div class="btn2">Adicionar a una lista</div></a>*/
/*                             </div>*/
/*                                {%endif%}*/
/*                         </div>*/
/*                      */
/*                         <div class="desc1 span_3_of_2">*/
/*                         	<p class="movie_option"><strong><div class="titulo">{{params.title}}  </strong> </div> </p> <br />*/
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
/*                             <p class="m_4"><strong>Sinopsis:</strong> {{params.overview}}</p>*/
/*                             <!--<center>*/
/*                                 <br><br><br>*/
/*                             <a class="a_btn1" href="#"><div class="btn1">Marcar como vista</div></a>*/
/*                             <a class="a_btn2" href="#"><div class="btn2">Adicionar a una lista</div></a>*/
/*                             </center>-->*/
/*                             */
/*                             <div class="video">*/
/* 			      			    <iframe width="100%" height="250px" src="https://www.youtube.com/embed/{{params.results[0].key}}?rel=0" frameborder="0" allowfullscreen=""></iframe>*/
/* 			  			    </div>*/
/*                             */
/*                          </div>*/
/* */
/*                         */
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
/*                       	<div class="movie_img"><div class="grid_2">*/
/*                       	        */
/*                       	        {% if peliculaSimilar.poster_path == "" %}*/
/*                                      <a href="{{url('homepage')}}vista/mostrarpelicula/{{peliculaSimilar.id}}"><img src="{{asset('assets/images/movie.png')}}" alt="{{peliculaSimilar.title}}"></a>*/
/*                                 {% else %}*/
/*                                     <a href="{{url('homepage')}}vista/mostrarpelicula/{{peliculaSimilar.id}}"><img src="https://image.tmdb.org/t/p/w300{{peliculaSimilar.poster_path}}" width="100%" alt="{{peliculaSimilar.title}}" class="img-responsive" ></a>	*/
/*                                 {% endif %}*/
/*                       	        */
/*                                 <div class="caption1">*/
/* 									<ul class="list_5 list_7">*/
/* 									    <div class="calificacion-fondo-similares">*/
/* 							    		    <li><i class="icon5"> <span  class="glyphicon glyphicon-star calificacion-similares" aria-hidden="true"> </span></i><p>{{peliculaSimilar.vote_average}}</p></li>*/
/* 							    		</div>*/
/* 							    	</ul>*/
/* 							    	<i class="icon4 icon6 icon7"> </i>*/
/* 							    	<!--  <p class="m_3">{{peliculaSimilar.title}}</p>-->*/
/* 							    </div>*/
/* 						    </div>*/
/* 						</div>*/
/*             {%endfor%}          	*/
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
/*             var calificacion_semaphore=0;*/
/*             //enviar calificacion*/
/*             //$("#calificacionPersonal").click(function(e){*/
/* */
/*             */
/*             //make the AJAX request, dataType is set to json*/
/*             //meaning we are expecting JSON data in response from the server*/
/*            */
/*             //});*/
/*             */
/* //$('#gritter-notice-wrapper').hide();*/
/* 	*/
/*         $("#calificacionPersonal").rateYo({*/
/*                 readOnly: false,*/
/*                 rating: rating,*/
/*                 numStars: 10,*/
/*                 precision: 10,*/
/*                 minValue: 1,*/
/*                 maxValue: 10*/
/*             }).on("rateyo.change", function(e, data) {*/
/*                 if(calificacion_semaphore==1){*/
/*                  $.ajax({*/
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
/*  */
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
/*  */
/*             $('#cabezera').css("background", "url(https://image.tmdb.org/t/p/w1280/{{params.backdrop_path}})");  */
/* 	        $("#calificacionPersonal").click(function(){*/
/* 		    calificacion_semaphore=1;*/
/* 		   */
/* 			*/
/* 		 });*/
/* */
/* */
/*       */
/*         });*/
/*     </script>*/
/*     */
/*     {%endblock%}*/
/*     {% block barraderecha %}{% endblock %}*/
/* */
