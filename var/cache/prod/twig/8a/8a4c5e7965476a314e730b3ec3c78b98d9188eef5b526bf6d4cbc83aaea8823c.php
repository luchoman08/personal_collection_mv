<?php

/* VistaBundle:Default:buscarActor.html.twig */
class __TwigTemplate_14ad25111dcf80c3d3b712e496be1018b5a85d12d76dfcc37640c2bba84e2dbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "VistaBundle:Default:buscarActor.html.twig", 1);
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
   
   ";
        // line 19
        $context["k"] = 0;
        // line 20
        echo "   ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "results", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
            echo " 
    <div id=\"perfil-actor\" class = \"actorbox\">
        <div class=\"header-actorbox\">
            <img class=\"img-actorbox\" src=\"";
            // line 23
            if (($this->getAttribute($context["actor"], "profile_path", array()) == "")) {
                // line 24
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/profileEmpty.png"), "html", null, true);
                echo "
            ";
            } else {
                // line 26
                echo "            https://image.tmdb.org/t/p/w132_and_h132_bestv2/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["actor"], "profile_path", array()), "html", null, true);
                echo "
            ";
            }
            // line 27
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["actor"], "name", array()), "html", null, true);
            echo "\" >
            <div class=\"name-actorbox\"><label>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["actor"], "name", array()), "html", null, true);
            echo "</label> <a href=\"";
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/bunactor/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["actor"], "id", array()), "html", null, true);
            echo "\" /><sup class=\"glyphicon glyphicon-new-window\"> </sup></a> </div>
        </div>
        <div class=\"body-actorbox\">
        ";
            // line 31
            $context["i"] = 0;
            // line 32
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["actor"], "known_for", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
                // line 33
                echo "        
        <div class=\"resultado\" onclick=\"location.href='";
                // line 34
                echo $this->env->getExtension('routing')->getUrl("homepage");
                echo "vista/mostrarpelicula/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
                echo "'\">
             <a href=\"";
                // line 35
                echo $this->env->getExtension('routing')->getUrl("homepage");
                echo "vista/mostrarpelicula/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
                echo "\" >
                ";
                // line 36
                if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                    // line 37
                    echo "                    
                    <img src=\"";
                    // line 38
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                    echo "\" alt=\"...\">
                               
                    ";
                } else {
                    // line 41
                    echo "                            
                    <img src=\"https://image.tmdb.org/t/p/w185/";
                    // line 42
                    echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                    echo "\" alt=\"...\">
                            
                ";
                }
                // line 45
                echo "                </a>
                <div class=\"resultado-articulo\">
                    <label> ";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
                echo " <div id=\"c";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
                echo "\" value=\"0\" class=\"rateyo-readonly-widg\"> </div> Fecha de estreno: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "release_date", array()), "html", null, true);
                echo "</label><br>
                    ";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "overview", array()), "html", null, true);
                echo " 
                </div>
                
            </div>
          
            ";
                // line 53
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 54
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
        </div>
    </div> 
    ";
            // line 57
            $context["k"] = ((isset($context["k"]) ? $context["k"] : null) + 1);
            // line 58
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
    <nav>
            <ul class=\"pager\">
                
                ";
        // line 62
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "page", array()) == 1)) {
            // line 63
            echo "                
                    <li class=\"previous disabled\"><a href=\"#\"><span aria-hidden=\"true\">&larr;</span> P&aacute;gina anterior</a></li>
                             
                ";
        } else {
            // line 67
            echo "                    ";
            if (((isset($context["flag"]) ? $context["flag"] : null) == "similares")) {
                echo "   
                        <li class=\"previous\"><a href=\"";
                // line 68
                echo $this->env->getExtension('routing')->getUrl("homepage");
                echo "vista/similares/";
                echo twig_escape_filter($this->env, (isset($context["consulta"]) ? $context["consulta"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "page", array()) - 1), "html", null, true);
                echo "\"><span aria-hidden=\"true\">&larr;</span> P&aacute;gina anterior</a></li>
                    ";
            } elseif ((            // line 69
(isset($context["flag"]) ? $context["flag"] : null) == "generos")) {
                echo " 
                        <li class=\"previous\"><a href=\"";
                // line 70
                echo $this->env->getExtension('routing')->getUrl("homepage");
                echo "vista/bgeneros/";
                echo twig_escape_filter($this->env, (isset($context["consulta"]) ? $context["consulta"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "page", array()) - 1), "html", null, true);
                echo "\"><span aria-hidden=\"true\">&larr;</span> P&aacute;gina anterior</a></li>
                    ";
            } else {
                // line 72
                echo "                        <li class=\"previous\"><a href=\"";
                echo $this->env->getExtension('routing')->getUrl("homepage");
                echo "vista/bactor/";
                echo twig_escape_filter($this->env, (isset($context["consulta"]) ? $context["consulta"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "page", array()) - 1), "html", null, true);
                echo "\"><span aria-hidden=\"true\">&larr;</span> P&aacute;gina anterior</a></li>
                    ";
            }
            // line 73
            echo "    
                ";
        }
        // line 75
        echo "                
                ";
        // line 76
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "page", array()) == $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "total_pages", array()))) {
            // line 77
            echo "                
                    <li class=\"next disabled\"><a href=\"#\"> P&aacute;gina siguiente <span aria-hidden=\"true\">&rarr;</span></a></li>
                    
                ";
        } elseif (($this->getAttribute(        // line 80
(isset($context["params"]) ? $context["params"] : null), "page", array()) >= 1000)) {
            // line 81
            echo "                
                     <li class=\"next disabled\"><a href=\"#\"> P&aacute;gina siguiente <span aria-hidden=\"true\">&rarr;</span></a></li>
                
                ";
        } else {
            // line 85
            echo "                    
                    ";
            // line 86
            if (((isset($context["flag"]) ? $context["flag"] : null) == "similares")) {
                echo " 
                        <li class=\"next\"><a href=\"";
                // line 87
                echo $this->env->getExtension('routing')->getUrl("homepage");
                echo "vista/similares/";
                echo twig_escape_filter($this->env, (isset($context["consulta"]) ? $context["consulta"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "page", array()) + 1), "html", null, true);
                echo "\"> P&aacute;gina siguiente <span aria-hidden=\"true\">&rarr;</span></a></li>
                    ";
            } elseif ((            // line 88
(isset($context["flag"]) ? $context["flag"] : null) == "generos")) {
                echo " 
                        <li class=\"next\"><a href=\"";
                // line 89
                echo $this->env->getExtension('routing')->getUrl("homepage");
                echo "vista/bgeneros/";
                echo twig_escape_filter($this->env, (isset($context["consulta"]) ? $context["consulta"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "page", array()) + 1), "html", null, true);
                echo "\"> P&aacute;gina siguiente <span aria-hidden=\"true\">&rarr;</span></a></li>
                    ";
            } else {
                // line 90
                echo " 
                        <li class=\"next\"><a href=\"";
                // line 91
                echo $this->env->getExtension('routing')->getUrl("homepage");
                echo "vista/bactor/";
                echo twig_escape_filter($this->env, (isset($context["consulta"]) ? $context["consulta"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "page", array()) + 1), "html", null, true);
                echo "\"> P&aacute;gina siguiente <span aria-hidden=\"true\">&rarr;</span></a></li>
                    ";
            }
            // line 93
            echo "                      
                    
                ";
        }
        // line 96
        echo "                
                
            </ul>
    </nav>
       

";
    }

    // line 104
    public function block_barraderecha($context, array $blocks = array())
    {
        echo " ";
    }

    // line 108
    public function block_javascripts($context, array $blocks = array())
    {
        // line 109
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script>
     \$(function() {
        ";
        // line 112
        $context["k"] = 0;
        // line 113
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "results", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
            // line 114
            echo "        
            ";
            // line 115
            $context["i"] = 0;
            // line 116
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["actor"], "known_for", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
                // line 117
                echo "            
                var rating = ";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "vote_average", array()), "html", null, true);
                echo ";
                \$(\".counter\").text(rating);
                \$(\"#c";
                // line 120
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
                echo "\").rateYo({
                    readOnly: true,
                    rating: rating,
                    numStars: 10,
                    precision: 10,
                    minValue: 1,
                    maxValue: 10
                }).on(\"rateyo.change\", function(e, data) {
                    \$(\"#c";
                // line 128
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
                echo "\").val(data.rating);
                });
                ";
                // line 130
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 131
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "        ";
            $context["k"] = ((isset($context["k"]) ? $context["k"] : null) + 1);
            // line 133
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "     });
    </script>   
";
    }

    public function getTemplateName()
    {
        return "VistaBundle:Default:buscarActor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  418 => 134,  412 => 133,  409 => 132,  403 => 131,  401 => 130,  395 => 128,  383 => 120,  378 => 118,  375 => 117,  370 => 116,  368 => 115,  365 => 114,  360 => 113,  358 => 112,  351 => 109,  348 => 108,  342 => 104,  332 => 96,  327 => 93,  318 => 91,  315 => 90,  306 => 89,  302 => 88,  294 => 87,  290 => 86,  287 => 85,  281 => 81,  279 => 80,  274 => 77,  272 => 76,  269 => 75,  265 => 73,  255 => 72,  246 => 70,  242 => 69,  234 => 68,  229 => 67,  223 => 63,  221 => 62,  210 => 58,  208 => 57,  198 => 54,  196 => 53,  188 => 48,  179 => 47,  175 => 45,  169 => 42,  166 => 41,  160 => 38,  157 => 37,  155 => 36,  149 => 35,  143 => 34,  140 => 33,  135 => 32,  133 => 31,  123 => 28,  118 => 27,  112 => 26,  106 => 24,  104 => 23,  95 => 20,  93 => 19,  82 => 17,  79 => 16,  76 => 15,  70 => 14,  62 => 10,  58 => 8,  48 => 6,  45 => 5,  42 => 4,  39 => 3,  33 => 2,  11 => 1,);
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
/*    {%set k=0%}*/
/*    {%for actor in params.results%} */
/*     <div id="perfil-actor" class = "actorbox">*/
/*         <div class="header-actorbox">*/
/*             <img class="img-actorbox" src="{%if actor.profile_path == "" %}*/
/*             {{asset('assets/images/profileEmpty.png')}}*/
/*             {% else %}*/
/*             https://image.tmdb.org/t/p/w132_and_h132_bestv2/{{actor.profile_path}}*/
/*             {% endif %}" alt="{{actor.name}}" >*/
/*             <div class="name-actorbox"><label>{{actor.name}}</label> <a href="{{ url('homepage') }}vista/bunactor/{{actor.id}}" /><sup class="glyphicon glyphicon-new-window"> </sup></a> </div>*/
/*         </div>*/
/*         <div class="body-actorbox">*/
/*         {%set i=0%}*/
/*         {%for pelicula in actor.known_for%}*/
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
/*                     <label> {{pelicula.title}} <div id="c{{i}}{{k}}" value="0" class="rateyo-readonly-widg"> </div> Fecha de estreno: {{pelicula.release_date}}</label><br>*/
/*                     {{pelicula.overview}} */
/*                 </div>*/
/*                 */
/*             </div>*/
/*           */
/*             {%set i= i + 1%}*/
/*         {%endfor%} */
/*         </div>*/
/*     </div> */
/*     {%set k= k + 1%}*/
/*     {%endfor%} */
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
/* */
/* */
/* {%block javascripts%}*/
/*  {{ parent() }}*/
/* <script>*/
/*      $(function() {*/
/*         {% set k = 0 %}*/
/*         {% for actor in params.results%}*/
/*         */
/*             {% set i = 0 %}*/
/*             {% for pelicula in actor.known_for%}*/
/*             */
/*                 var rating = {{pelicula.vote_average}};*/
/*                 $(".counter").text(rating);*/
/*                 $("#c{{i}}{{k}}").rateYo({*/
/*                     readOnly: true,*/
/*                     rating: rating,*/
/*                     numStars: 10,*/
/*                     precision: 10,*/
/*                     minValue: 1,*/
/*                     maxValue: 10*/
/*                 }).on("rateyo.change", function(e, data) {*/
/*                     $("#c{{i}}{{k}}").val(data.rating);*/
/*                 });*/
/*                 {%set i = i + 1%}*/
/*             {%endfor%}*/
/*         {%set k = k + 1%}*/
/*         {%endfor%}*/
/*      });*/
/*     </script>   */
/* {%endblock%}*/
