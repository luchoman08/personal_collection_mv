<?php

/* VistaBundle:Default:buscarUnActor.html.twig */
class __TwigTemplate_760eb99d396a7729549c9ea0d59fa816b06dbcbc9bd5b7a84a690c265b5de254 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "VistaBundle:Default:buscarUnActor.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'loginoptions' => array($this, 'block_loginoptions'),
            'classcontenido' => array($this, 'block_classcontenido'),
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
        // line 103
        $context["i"] = 0;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " QMP - Resultados de busqueda ";
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

    // line 14
    public function block_classcontenido($context, array $blocks = array())
    {
        echo "col-md-12 fondoContenido";
    }

    // line 15
    public function block_contenido($context, array $blocks = array())
    {
        // line 16
        echo "    
     <div class=\"resultados-header\">N&uacute;mero de resultados para <b>\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["consulta"]) ? $context["consulta"] : null), "html", null, true);
        echo "\"</b>: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "total_results", array()), "html", null, true);
        echo "  Pagina:";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "page", array()), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "total_pages", array()), "html", null, true);
        echo " </div> <br>
   
    <div id=\"perfil-actor\" class = \"actorbox\">
        <div class=\"header-actorbox\">
            <img class=\"img-actorbox\" src=\"";
        // line 21
        if (($this->getAttribute((isset($context["actor"]) ? $context["actor"] : null), "profile_path", array()) == "")) {
            // line 22
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/profileEmpty.png"), "html", null, true);
            echo "
            ";
        } else {
            // line 24
            echo "            https://image.tmdb.org/t/p/w132_and_h132_bestv2/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actor"]) ? $context["actor"] : null), "profile_path", array()), "html", null, true);
            echo "
            ";
        }
        // line 25
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actor"]) ? $context["actor"] : null), "name", array()), "html", null, true);
        echo "\" >
            <div class=\"name-actorbox\"><label>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actor"]) ? $context["actor"] : null), "name", array()), "html", null, true);
        echo "</label> <sup class=\"glyphicon glyphicon-new-window\"> </sup> </div>
        </div>
        <div class=\"body-actorbox\">
        ";
        // line 29
        $context["i"] = 0;
        // line 30
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["params"]) ? $context["params"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 31
            echo "        
        <div class=\"resultado\" onclick=\"location.href='";
            // line 32
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "'\">
             <a href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" >
                ";
            // line 34
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 35
                echo "                    
                    <img src=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" alt=\"...\">
                               
                    ";
            } else {
                // line 39
                echo "                            
                    <img src=\"https://image.tmdb.org/t/p/w185/";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" alt=\"...\">
                            
                ";
            }
            // line 43
            echo "                </a>
                <div class=\"resultado-articulo\">
                    <label> ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
            echo " <div id=\"c";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" value=\"0\" class=\"rateyo-readonly-widg\"> </div> Fecha de estreno: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "release_date", array()), "html", null, true);
            echo "</label><br>
                    ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "overview", array()), "html", null, true);
            echo " 
                </div>
                
            </div>
          
            ";
            // line 51
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 52
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
        </div>
    </div> 
    
    <nav>
            <ul class=\"pager\">
                
                ";
        // line 59
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "page", array()) == 1)) {
            // line 60
            echo "                
                    <li class=\"previous disabled\"><a href=\"#\"><span aria-hidden=\"true\">&larr;</span> P&aacute;gina anterior</a></li>
                             
                ";
        } else {
            // line 64
            echo "                    ";
            if (((isset($context["flag"]) ? $context["flag"] : null) == "similares")) {
                echo "   
                        <li class=\"previous\"><a href=\"";
                // line 65
                echo $this->env->getExtension('routing')->getUrl("homepage");
                echo "vista/similares/";
                echo twig_escape_filter($this->env, (isset($context["consulta"]) ? $context["consulta"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "page", array()) - 1), "html", null, true);
                echo "\"><span aria-hidden=\"true\">&larr;</span> P&aacute;gina anterior</a></li>
                    ";
            } elseif ((            // line 66
(isset($context["flag"]) ? $context["flag"] : null) == "generos")) {
                echo " 
                        <li class=\"previous\"><a href=\"";
                // line 67
                echo $this->env->getExtension('routing')->getUrl("homepage");
                echo "vista/bgeneros/";
                echo twig_escape_filter($this->env, (isset($context["consulta"]) ? $context["consulta"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "page", array()) - 1), "html", null, true);
                echo "\"><span aria-hidden=\"true\">&larr;</span> P&aacute;gina anterior</a></li>
                    ";
            } else {
                // line 69
                echo "                        <li class=\"previous\"><a href=\"";
                echo $this->env->getExtension('routing')->getUrl("homepage");
                echo "vista/bactor/";
                echo twig_escape_filter($this->env, (isset($context["consulta"]) ? $context["consulta"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "page", array()) - 1), "html", null, true);
                echo "\"><span aria-hidden=\"true\">&larr;</span> P&aacute;gina anterior</a></li>
                    ";
            }
            // line 70
            echo "    
                ";
        }
        // line 72
        echo "                
                ";
        // line 73
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "page", array()) == $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "total_pages", array()))) {
            // line 74
            echo "                
                    <li class=\"next disabled\"><a href=\"#\"> P&aacute;gina siguiente <span aria-hidden=\"true\">&rarr;</span></a></li>
                    
                ";
        } elseif (($this->getAttribute(        // line 77
(isset($context["params"]) ? $context["params"] : null), "page", array()) >= 1000)) {
            // line 78
            echo "                
                     <li class=\"next disabled\"><a href=\"#\"> P&aacute;gina siguiente <span aria-hidden=\"true\">&rarr;</span></a></li>
                
                ";
        } else {
            // line 82
            echo "                    
                    ";
            // line 83
            if (((isset($context["flag"]) ? $context["flag"] : null) == "similares")) {
                echo " 
                        <li class=\"next\"><a href=\"";
                // line 84
                echo $this->env->getExtension('routing')->getUrl("homepage");
                echo "vista/similares/";
                echo twig_escape_filter($this->env, (isset($context["consulta"]) ? $context["consulta"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "page", array()) + 1), "html", null, true);
                echo "\"> P&aacute;gina siguiente <span aria-hidden=\"true\">&rarr;</span></a></li>
                    ";
            } elseif ((            // line 85
(isset($context["flag"]) ? $context["flag"] : null) == "generos")) {
                echo " 
                        <li class=\"next\"><a href=\"";
                // line 86
                echo $this->env->getExtension('routing')->getUrl("homepage");
                echo "vista/bgeneros/";
                echo twig_escape_filter($this->env, (isset($context["consulta"]) ? $context["consulta"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "page", array()) + 1), "html", null, true);
                echo "\"> P&aacute;gina siguiente <span aria-hidden=\"true\">&rarr;</span></a></li>
                    ";
            } else {
                // line 87
                echo " 
                        <li class=\"next\"><a href=\"";
                // line 88
                echo $this->env->getExtension('routing')->getUrl("homepage");
                echo "vista/bactor/";
                echo twig_escape_filter($this->env, (isset($context["consulta"]) ? $context["consulta"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "page", array()) + 1), "html", null, true);
                echo "\"> P&aacute;gina siguiente <span aria-hidden=\"true\">&rarr;</span></a></li>
                    ";
            }
            // line 90
            echo "                      
                    
                ";
        }
        // line 93
        echo "                
                
            </ul>
    </nav>
       

";
    }

    // line 101
    public function block_barraderecha($context, array $blocks = array())
    {
        echo " ";
    }

    // line 105
    public function block_javascripts($context, array $blocks = array())
    {
        // line 106
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script>
     \$(function() {
        ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "results", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 110
            echo "            var rating = ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "vote_average", array()), "html", null, true);
            echo ";
            \$(\".counter\").text(rating);
            \$(\"#c";
            // line 112
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
            // line 120
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").val(data.rating);
            });
                ";
            // line 122
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 123
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "     });
    </script>   
";
    }

    public function getTemplateName()
    {
        return "VistaBundle:Default:buscarUnActor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 124,  366 => 123,  364 => 122,  359 => 120,  348 => 112,  342 => 110,  338 => 109,  331 => 106,  328 => 105,  322 => 101,  312 => 93,  307 => 90,  298 => 88,  295 => 87,  286 => 86,  282 => 85,  274 => 84,  270 => 83,  267 => 82,  261 => 78,  259 => 77,  254 => 74,  252 => 73,  249 => 72,  245 => 70,  235 => 69,  226 => 67,  222 => 66,  214 => 65,  209 => 64,  203 => 60,  201 => 59,  187 => 52,  185 => 51,  177 => 46,  169 => 45,  165 => 43,  159 => 40,  156 => 39,  150 => 36,  147 => 35,  145 => 34,  139 => 33,  133 => 32,  130 => 31,  125 => 30,  123 => 29,  117 => 26,  112 => 25,  106 => 24,  100 => 22,  98 => 21,  85 => 17,  82 => 16,  79 => 15,  73 => 14,  65 => 10,  61 => 8,  51 => 6,  48 => 5,  45 => 4,  42 => 3,  36 => 2,  32 => 1,  30 => 103,  11 => 1,);
    }
}
/* {%extends 'index.html.twig'%}*/
/* {%block title%} QMP - Resultados de busqueda {%endblock%}*/
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
/* {% block classcontenido %}col-md-12 fondoContenido{% endblock %}*/
/* {% block contenido %}*/
/*     */
/*      <div class="resultados-header">N&uacute;mero de resultados para <b>"{{ consulta }}"</b>: {{params.total_results}}  Pagina:{{ params.page }} de {{ params.total_pages }} </div> <br>*/
/*    */
/*     <div id="perfil-actor" class = "actorbox">*/
/*         <div class="header-actorbox">*/
/*             <img class="img-actorbox" src="{%if actor.profile_path == "" %}*/
/*             {{asset('assets/images/profileEmpty.png')}}*/
/*             {% else %}*/
/*             https://image.tmdb.org/t/p/w132_and_h132_bestv2/{{actor.profile_path}}*/
/*             {% endif %}" alt="{{actor.name}}" >*/
/*             <div class="name-actorbox"><label>{{actor.name}}</label> <sup class="glyphicon glyphicon-new-window"> </sup> </div>*/
/*         </div>*/
/*         <div class="body-actorbox">*/
/*         {%set i=0%}*/
/*         {%for pelicula in params%}*/
/*         */
/*         <div class="resultado" onclick="location.href='{{ url('homepage') }}vista/mostrarpelicula/{{pelicula.id}}'">*/
/*              <a href="{{ url('homepage') }}vista/mostrarpelicula/{{pelicula.id}}" >*/
/*                 {% if pelicula.poster_path == "" %}*/
/*                     */
/*                     <img src="{{asset('assets/images/movie.png')}}" alt="...">*/
/*                                */
/*                     {% else %}*/
/*                             */
/*                     <img src="https://image.tmdb.org/t/p/w185/{{pelicula.poster_path}}" alt="...">*/
/*                             */
/*                 {% endif %}*/
/*                 </a>*/
/*                 <div class="resultado-articulo">*/
/*                     <label> {{pelicula.title}} <div id="c{{i}}" value="0" class="rateyo-readonly-widg"> </div> Fecha de estreno: {{pelicula.release_date}}</label><br>*/
/*                     {{pelicula.overview}} */
/*                 </div>*/
/*                 */
/*             </div>*/
/*           */
/*             {%set i= i + 1%}*/
/*         {%endfor%} */
/*         </div>*/
/*     </div> */
/*     */
/*     <nav>*/
/*             <ul class="pager">*/
/*                 */
/*                 {% if params.page == 1 %}*/
/*                 */
/*                     <li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span> P&aacute;gina anterior</a></li>*/
/*                              */
/*                 {% else %}*/
/*                     {% if flag == "similares" %}   */
/*                         <li class="previous"><a href="{{ url('homepage') }}vista/similares/{{ consulta }}/{{ params.page - 1 }}"><span aria-hidden="true">&larr;</span> P&aacute;gina anterior</a></li>*/
/*                     {% elseif flag == "generos" %} */
/*                         <li class="previous"><a href="{{ url('homepage') }}vista/bgeneros/{{ consulta }}/{{ params.page - 1 }}"><span aria-hidden="true">&larr;</span> P&aacute;gina anterior</a></li>*/
/*                     {% else %}*/
/*                         <li class="previous"><a href="{{ url('homepage') }}vista/bactor/{{ consulta }}/{{ params.page - 1 }}"><span aria-hidden="true">&larr;</span> P&aacute;gina anterior</a></li>*/
/*                     {% endif %}    */
/*                 {% endif %}*/
/*                 */
/*                 {% if params.page == params.total_pages %}*/
/*                 */
/*                     <li class="next disabled"><a href="#"> P&aacute;gina siguiente <span aria-hidden="true">&rarr;</span></a></li>*/
/*                     */
/*                 {% elseif params.page >= 1000 %}*/
/*                 */
/*                      <li class="next disabled"><a href="#"> P&aacute;gina siguiente <span aria-hidden="true">&rarr;</span></a></li>*/
/*                 */
/*                 {% else %}*/
/*                     */
/*                     {% if flag == "similares" %} */
/*                         <li class="next"><a href="{{ url('homepage') }}vista/similares/{{ consulta }}/{{ params.page + 1 }}"> P&aacute;gina siguiente <span aria-hidden="true">&rarr;</span></a></li>*/
/*                     {% elseif flag == "generos" %} */
/*                         <li class="next"><a href="{{ url('homepage') }}vista/bgeneros/{{ consulta }}/{{ params.page + 1 }}"> P&aacute;gina siguiente <span aria-hidden="true">&rarr;</span></a></li>*/
/*                     {% else %} */
/*                         <li class="next"><a href="{{ url('homepage') }}vista/bactor/{{ consulta }}/{{ params.page + 1 }}"> P&aacute;gina siguiente <span aria-hidden="true">&rarr;</span></a></li>*/
/*                     {% endif %}*/
/*                       */
/*                     */
/*                 {% endif %}*/
/*                 */
/*                 */
/*             </ul>*/
/*     </nav>*/
/*        */
/* */
/* {% endblock %}*/
/* */
/* {% block barraderecha %} {% endblock %}*/
/* */
/* {% set i = 0 %}*/
/* */
/* {%block javascripts%}*/
/*  {{ parent() }}*/
/* <script>*/
/*      $(function() {*/
/*         {% for pelicula in params.results%}*/
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
