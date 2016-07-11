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
        // line 64
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
    <div class=\"alert alert-warning\" role=\"alert\"><strong>Warning!!</strong> Limitación de la API, solo se cargarán máximo los primeros 10 resultados.</div>
    
    <div class=\"resultados-header\">N&uacute;mero de resultados para <b>\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perfil"]) ? $context["perfil"] : null), "name", array()), "html", null, true);
        echo "\"</b>: ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["params"]) ? $context["params"] : null)), "html", null, true);
        echo " </div> <br>
   
    <div id=\"perfil-actor\" class = \"actorbox\">
        <div class=\"header-actorbox\">
            <img class=\"img-actorbox\" src=\"";
        // line 23
        if (($this->getAttribute((isset($context["perfil"]) ? $context["perfil"] : null), "profile_path", array()) == "")) {
            // line 24
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/profileEmpty.png"), "html", null, true);
            echo "
            ";
        } else {
            // line 26
            echo "            https://image.tmdb.org/t/p/w132_and_h132_bestv2/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perfil"]) ? $context["perfil"] : null), "profile_path", array()), "html", null, true);
            echo "
            ";
        }
        // line 27
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perfil"]) ? $context["perfil"] : null), "name", array()), "html", null, true);
        echo "\" >
            <div class=\"name-actorbox\"><label>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perfil"]) ? $context["perfil"] : null), "name", array()), "html", null, true);
        echo "</label> </div>
        </div>
        <div class=\"body-actorbox\">
        ";
        // line 31
        $context["i"] = 0;
        // line 32
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["params"]) ? $context["params"] : null));
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
    }

    // line 62
    public function block_barraderecha($context, array $blocks = array())
    {
        echo " ";
    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        // line 67
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script>
     \$(function() {
        ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["params"]) ? $context["params"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 71
            echo "            var rating = ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "vote_average", array()), "html", null, true);
            echo ";
            \$(\".counter\").text(rating);
            \$(\"#c";
            // line 73
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
            // line 81
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").val(data.rating);
            });
                ";
            // line 83
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 84
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
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
        return array (  250 => 85,  244 => 84,  242 => 83,  237 => 81,  226 => 73,  220 => 71,  216 => 70,  209 => 67,  206 => 66,  200 => 62,  185 => 54,  183 => 53,  175 => 48,  167 => 47,  163 => 45,  157 => 42,  154 => 41,  148 => 38,  145 => 37,  143 => 36,  137 => 35,  131 => 34,  128 => 33,  123 => 32,  121 => 31,  115 => 28,  110 => 27,  104 => 26,  98 => 24,  96 => 23,  87 => 19,  82 => 16,  79 => 15,  73 => 14,  65 => 10,  61 => 8,  51 => 6,  48 => 5,  45 => 4,  42 => 3,  36 => 2,  32 => 1,  30 => 64,  11 => 1,);
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
/*     <div class="alert alert-warning" role="alert"><strong>Warning!!</strong> Limitación de la API, solo se cargarán máximo los primeros 10 resultados.</div>*/
/*     */
/*     <div class="resultados-header">N&uacute;mero de resultados para <b>"{{ perfil.name }}"</b>: {{params|length}} </div> <br>*/
/*    */
/*     <div id="perfil-actor" class = "actorbox">*/
/*         <div class="header-actorbox">*/
/*             <img class="img-actorbox" src="{%if perfil.profile_path == "" %}*/
/*             {{asset('assets/images/profileEmpty.png')}}*/
/*             {% else %}*/
/*             https://image.tmdb.org/t/p/w132_and_h132_bestv2/{{perfil.profile_path}}*/
/*             {% endif %}" alt="{{perfil.name}}" >*/
/*             <div class="name-actorbox"><label>{{perfil.name}}</label> </div>*/
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
/*         {% for pelicula in params%}*/
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
