<?php

/* VistaBundle:Default:busquedaAvanzada.html.twig */
class __TwigTemplate_8c239da5db9e03dcdca9559adc027a5673af5d2db5b3908c92067614b4a3c3e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "VistaBundle:Default:busquedaAvanzada.html.twig", 1);
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

    // line 16
    public function block_contenido($context, array $blocks = array())
    {
        // line 17
        echo "

    <div class=\"panel panel-default\">
      <div class=\"panel-body\">
        Busqueda avanzada
        
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <div class=\"input-group\">
              <input type=\"text\" id =\"valorBuscar2\" class=\"form-control autocomplete\" aria-label=\"...\" size=\"30\">
              <div class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Buscar <span class=\"caret\"></span></button>
                <ul class=\"dropdown-menu dropdown-menu-right\">
                  <li><a id = \"Buscar_palabras\" href=\"#c\">por palabras</a></li>
                  <li><a id = \"Buscar_genero\" href=\"#a\">por genero</a></li>
                </ul>
              </div><!-- /btn-group -->
            </div><!-- /input-group -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        
      </div>
    </div>


";
    }

    // line 44
    public function block_barraderecha($context, array $blocks = array())
    {
        echo " ";
    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        // line 46
        echo "    
    ";
        // line 47
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.js\"></script>

    <script>
            \$('#valorBuscar2').keypress(function(event){
                var keycode = (event.keyCode ? event.keyCode : event.which);
                if(keycode == '13'){
                   
                    var url = \"";
        // line 56
        echo $this->env->getExtension('routing')->getUrl("pelicula_barra");
        echo "\"+\$(\"#valorBuscar2\").val();
            
                    window.location.href =url;
                }
            });
            \$(\"#Buscar_palabras\").click(function () {
                 
                    var url = \"";
        // line 63
        echo $this->env->getExtension('routing')->getUrl("pelicula_barra");
        echo "\"+\$(\"#valorBuscar2\").val();
                    alert(url);
                    window.location.href =url;
        
            });
            
            
            \$(function() {
                var availableTags = [
                  \"Action\",
                  \"Adventure\",
                  \"Animation\",
                  \"Comedy\",
                  \"Crime\",
                  \"Documentary\",
                  \"Drama\",
                  \"Family\",
                  \"Fantasy\",
                  \"Foreign\",
                  \"History\",
                  \"Horror\",
                  \"Music\",
                  \"Mystery\",
                  \"Romance\",
                  \"Science Fiction\",
                  \"TV Movie\",
                  \"Thriller\",
                  \"War\",
                  \"Western\"
                ];
                \$( \"#valorBuscar2\" ).autocomplete({
                  source: availableTags
                });
              });
            
    </script>
";
    }

    public function getTemplateName()
    {
        return "VistaBundle:Default:busquedaAvanzada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 63,  132 => 56,  120 => 47,  117 => 46,  114 => 45,  108 => 44,  79 => 17,  76 => 16,  70 => 14,  62 => 10,  58 => 8,  48 => 6,  45 => 5,  42 => 4,  39 => 3,  33 => 2,  11 => 1,);
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
/* */
/* {% block contenido %}*/
/* */
/* */
/*     <div class="panel panel-default">*/
/*       <div class="panel-body">*/
/*         Busqueda avanzada*/
/*         */
/*         <div class="row">*/
/*           <div class="col-lg-12">*/
/*             <div class="input-group">*/
/*               <input type="text" id ="valorBuscar2" class="form-control autocomplete" aria-label="..." size="30">*/
/*               <div class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Buscar <span class="caret"></span></button>*/
/*                 <ul class="dropdown-menu dropdown-menu-right">*/
/*                   <li><a id = "Buscar_palabras" href="#c">por palabras</a></li>*/
/*                   <li><a id = "Buscar_genero" href="#a">por genero</a></li>*/
/*                 </ul>*/
/*               </div><!-- /btn-group -->*/
/*             </div><!-- /input-group -->*/
/*           </div><!-- /.col-lg-6 -->*/
/*         </div><!-- /.row -->*/
/*         */
/*       </div>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block barraderecha %} {% endblock %}*/
/* {%block javascripts%}*/
/*     */
/*     {{ parent() }}*/
/*     <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>*/
/*     <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.js"></script>*/
/* */
/*     <script>*/
/*             $('#valorBuscar2').keypress(function(event){*/
/*                 var keycode = (event.keyCode ? event.keyCode : event.which);*/
/*                 if(keycode == '13'){*/
/*                    */
/*                     var url = "{{url('pelicula_barra')}}"+$("#valorBuscar2").val();*/
/*             */
/*                     window.location.href =url;*/
/*                 }*/
/*             });*/
/*             $("#Buscar_palabras").click(function () {*/
/*                  */
/*                     var url = "{{url('pelicula_barra')}}"+$("#valorBuscar2").val();*/
/*                     alert(url);*/
/*                     window.location.href =url;*/
/*         */
/*             });*/
/*             */
/*             */
/*             $(function() {*/
/*                 var availableTags = [*/
/*                   "Action",*/
/*                   "Adventure",*/
/*                   "Animation",*/
/*                   "Comedy",*/
/*                   "Crime",*/
/*                   "Documentary",*/
/*                   "Drama",*/
/*                   "Family",*/
/*                   "Fantasy",*/
/*                   "Foreign",*/
/*                   "History",*/
/*                   "Horror",*/
/*                   "Music",*/
/*                   "Mystery",*/
/*                   "Romance",*/
/*                   "Science Fiction",*/
/*                   "TV Movie",*/
/*                   "Thriller",*/
/*                   "War",*/
/*                   "Western"*/
/*                 ];*/
/*                 $( "#valorBuscar2" ).autocomplete({*/
/*                   source: availableTags*/
/*                 });*/
/*               });*/
/*             */
/*     </script>*/
/* {%endblock%}*/
