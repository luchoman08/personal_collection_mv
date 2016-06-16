<?php

/* VistaBundle:Default:buscar.html.twig */
class __TwigTemplate_50848ecbb4c364def03999f31fbfa241889066437844de23e7c4e2a98c27d38d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "VistaBundle:Default:buscar.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'loginoptions' => array($this, 'block_loginoptions'),
            'contenido' => array($this, 'block_contenido'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 88
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
    public function block_contenido($context, array $blocks = array())
    {
        // line 15
        echo "    
     <div class=\"resultados-header\">N&uacute;mero de resultados para <b>\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["consulta"]) ? $context["consulta"] : null), "html", null, true);
        echo "\"</b>: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "total_results", array()), "html", null, true);
        echo "  Pagina:";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "page", array()), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "total_pages", array()), "html", null, true);
        echo " </div> <br>

    ";
        // line 18
        $context["i"] = 0;
        // line 19
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "results", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 20
            echo "    
    <div class=\"resultado\" onclick=\"location.href='";
            // line 21
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "'\">
         <a href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" >
            ";
            // line 23
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 24
                echo "                
                <img src=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" alt=\"...\">
                           
                ";
            } else {
                // line 28
                echo "                        
                <img src=\"https://image.tmdb.org/t/p/w185/";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" alt=\"...\">
                        
            ";
            }
            // line 32
            echo "            </a>
            <div class=\"resultado-articulo\">
                <label> ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
            echo " <div id=\"c";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" value=\"0\" class=\"rateyo-readonly-widg\"> </div> Fecha de estreno: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "release_date", array()), "html", null, true);
            echo "</label><br>
                ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "overview", array()), "html", null, true);
            echo " 
            </div>
            
        </div>
      
        ";
            // line 40
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 41
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
        
    <nav>
            <ul class=\"pager\">
                
                ";
        // line 46
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "page", array()) == 1)) {
            // line 47
            echo "                
                    <li class=\"previous disabled\"><a href=\"#\"><span aria-hidden=\"true\">&larr;</span> P&aacute;gina anterior</a></li>
                             
                ";
        } else {
            // line 51
            echo "                    ";
            if (((isset($context["flag"]) ? $context["flag"] : null) == "similares")) {
                echo "   
                        <li class=\"previous\"><a href=\"";
                // line 52
                echo $this->env->getExtension('routing')->getUrl("homepage");
                echo "vista/similares/";
                echo twig_escape_filter($this->env, (isset($context["consulta"]) ? $context["consulta"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "page", array()) - 1), "html", null, true);
                echo "\"><span aria-hidden=\"true\">&larr;</span> P&aacute;gina anterior</a></li>
                    ";
            } elseif ((            // line 53
(isset($context["flag"]) ? $context["flag"] : null) == "generos")) {
                echo " 
                        <li class=\"previous\"><a href=\"";
                // line 54
                echo $this->env->getExtension('routing')->getUrl("homepage");
                echo "vista/bgeneros/";
                echo twig_escape_filter($this->env, (isset($context["consulta"]) ? $context["consulta"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "page", array()) - 1), "html", null, true);
                echo "\"><span aria-hidden=\"true\">&larr;</span> P&aacute;gina anterior</a></li>
                    ";
            } else {
                // line 56
                echo "                        <li class=\"previous\"><a href=\"";
                echo $this->env->getExtension('routing')->getUrl("homepage");
                echo "vista/buscar/";
                echo twig_escape_filter($this->env, (isset($context["consulta"]) ? $context["consulta"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "page", array()) - 1), "html", null, true);
                echo "\"><span aria-hidden=\"true\">&larr;</span> P&aacute;gina anterior</a></li>
                    ";
            }
            // line 57
            echo "    
                ";
        }
        // line 59
        echo "                
                ";
        // line 60
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "page", array()) == $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "total_pages", array()))) {
            // line 61
            echo "                
                    <li class=\"next disabled\"><a href=\"#\"> P&aacute;gina siguiente <span aria-hidden=\"true\">&rarr;</span></a></li>
                    
                ";
        } elseif (($this->getAttribute(        // line 64
(isset($context["params"]) ? $context["params"] : null), "page", array()) >= 1000)) {
            // line 65
            echo "                
                     <li class=\"next disabled\"><a href=\"#\"> P&aacute;gina siguiente <span aria-hidden=\"true\">&rarr;</span></a></li>
                
                ";
        } else {
            // line 69
            echo "                    
                    ";
            // line 70
            if (((isset($context["flag"]) ? $context["flag"] : null) == "similares")) {
                echo " 
                        <li class=\"next\"><a href=\"";
                // line 71
                echo $this->env->getExtension('routing')->getUrl("homepage");
                echo "vista/similares/";
                echo twig_escape_filter($this->env, (isset($context["consulta"]) ? $context["consulta"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "page", array()) + 1), "html", null, true);
                echo "\"> P&aacute;gina siguiente <span aria-hidden=\"true\">&rarr;</span></a></li>
                    ";
            } elseif ((            // line 72
(isset($context["flag"]) ? $context["flag"] : null) == "generos")) {
                echo " 
                        <li class=\"next\"><a href=\"";
                // line 73
                echo $this->env->getExtension('routing')->getUrl("homepage");
                echo "vista/bgeneros/";
                echo twig_escape_filter($this->env, (isset($context["consulta"]) ? $context["consulta"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "page", array()) + 1), "html", null, true);
                echo "\"> P&aacute;gina siguiente <span aria-hidden=\"true\">&rarr;</span></a></li>
                    ";
            } else {
                // line 74
                echo " 
                        <li class=\"next\"><a href=\"";
                // line 75
                echo $this->env->getExtension('routing')->getUrl("homepage");
                echo "vista/buscar/";
                echo twig_escape_filter($this->env, (isset($context["consulta"]) ? $context["consulta"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "page", array()) + 1), "html", null, true);
                echo "\"> P&aacute;gina siguiente <span aria-hidden=\"true\">&rarr;</span></a></li>
                    ";
            }
            // line 77
            echo "                      
                    
                ";
        }
        // line 80
        echo "                
                
            </ul>
    </nav>
       

";
    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        // line 91
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script>
     \$(function() {
        ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "results", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 95
            echo "            var rating = ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "vote_average", array()), "html", null, true);
            echo ";
            \$(\".counter\").text(rating);
            \$(\"#c";
            // line 97
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
            // line 105
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").val(data.rating);
            });
                ";
            // line 107
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 108
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "     });
    </script>   
";
    }

    public function getTemplateName()
    {
        return "VistaBundle:Default:buscar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 109,  323 => 108,  321 => 107,  316 => 105,  305 => 97,  299 => 95,  295 => 94,  288 => 91,  285 => 90,  275 => 80,  270 => 77,  261 => 75,  258 => 74,  249 => 73,  245 => 72,  237 => 71,  233 => 70,  230 => 69,  224 => 65,  222 => 64,  217 => 61,  215 => 60,  212 => 59,  208 => 57,  198 => 56,  189 => 54,  185 => 53,  177 => 52,  172 => 51,  166 => 47,  164 => 46,  152 => 41,  150 => 40,  142 => 35,  134 => 34,  130 => 32,  124 => 29,  121 => 28,  115 => 25,  112 => 24,  110 => 23,  104 => 22,  98 => 21,  95 => 20,  90 => 19,  88 => 18,  77 => 16,  74 => 15,  71 => 14,  63 => 10,  59 => 8,  49 => 6,  46 => 5,  43 => 4,  40 => 3,  34 => 2,  30 => 1,  28 => 88,  11 => 1,);
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
/* {% block contenido %}*/
/*     */
/*      <div class="resultados-header">N&uacute;mero de resultados para <b>"{{ consulta }}"</b>: {{params.total_results}}  Pagina:{{ params.page }} de {{ params.total_pages }} </div> <br>*/
/* */
/*     {%set i=0%}*/
/*     {%for pelicula in params.results%}*/
/*     */
/*     <div class="resultado" onclick="location.href='{{ url('homepage') }}vista/mostrarpelicula/{{pelicula.id}}'">*/
/*          <a href="{{ url('homepage') }}vista/mostrarpelicula/{{pelicula.id}}" >*/
/*             {% if pelicula.poster_path == "" %}*/
/*                 */
/*                 <img src="{{asset('assets/images/movie.png')}}" alt="...">*/
/*                            */
/*                 {% else %}*/
/*                         */
/*                 <img src="https://image.tmdb.org/t/p/w185/{{pelicula.poster_path}}" alt="...">*/
/*                         */
/*             {% endif %}*/
/*             </a>*/
/*             <div class="resultado-articulo">*/
/*                 <label> {{pelicula.title}} <div id="c{{i}}" value="0" class="rateyo-readonly-widg"> </div> Fecha de estreno: {{pelicula.release_date}}</label><br>*/
/*                 {{pelicula.overview}} */
/*             </div>*/
/*             */
/*         </div>*/
/*       */
/*         {%set i= i + 1%}*/
/*     {%endfor%} */
/*         */
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
/*                         <li class="previous"><a href="{{ url('homepage') }}vista/buscar/{{ consulta }}/{{ params.page - 1 }}"><span aria-hidden="true">&larr;</span> P&aacute;gina anterior</a></li>*/
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
/*                         <li class="next"><a href="{{ url('homepage') }}vista/buscar/{{ consulta }}/{{ params.page + 1 }}"> P&aacute;gina siguiente <span aria-hidden="true">&rarr;</span></a></li>*/
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
