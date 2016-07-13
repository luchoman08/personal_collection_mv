<?php

/* index.html.twig */
class __TwigTemplate_150204315ec32c6b9d6901dcfaf26a247fbd1ada805a3badc37c63a61cd19c96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'login' => array($this, 'block_login'),
            'loginoptions' => array($this, 'block_loginoptions'),
            'moviename' => array($this, 'block_moviename'),
            'classcontenido' => array($this, 'block_classcontenido'),
            'contenido' => array($this, 'block_contenido'),
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "  
    ";
        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
   
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("star/jquery.rateyo.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>
    
    <meta http-equiv=\"Cache-control\" content=\"private\">
    
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "
    <div id =\"cabezera\" class=\"cabezera\"> 
    
        ";
        // line 19
        $this->displayBlock('login', $context, $blocks);
        // line 20
        echo "    
        <div id=\"watermark\" class=\"watermark\">
           ";
        // line 22
        $this->displayBlock('moviename', $context, $blocks);
        // line 23
        echo "        </div> 
    </div>

    <nav class=\"navbar navbar-default\">

        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getUrl("homepage");
        echo "vista\">QMP</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
               <!--<ul class=\"nav navbar-nav navbar-form navbar-right\">
                    <li><button id = \"Buscar\" type=\"submit\" class=\"btn btn-default\">Ingresar</button></li>

                </ul>-->
               <div class=\"navbar-form navbar-right buscar\" role=\"search\">
                    <!--<div class=\"form-group\">
                        <input type=\"text\" id =\"valorBuscar\" class=\"form-control\" placeholder=\"Buscar peliculas ... :)\" size=\"40%\">
                    </div>
                    <button id = \"Buscar\" type=\"submit\" class=\"btn btn-default\">Buscar</button>-->
                    <div id = \"buscar_input\" class=\"input-group\" style=\"\">
                      <input type=\"text\" style = \"display:inline;\" id =\"valorBuscar\" class=\"form-control autocomplete\" placeholder=\"Buscar peliculas ... :)\" aria-label=\"...\" size=\"40%\">
                      <div class=\"input-group-btn\">
                        <button type=\"button\"id=\"btnBuscar\" style=\"diplay:inline;\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Buscar <span class=\"caret\"></span></button>
                        <ul class=\"dropdown-menu dropdown-menu-right\">
                          <li><a id = \"Buscar_palabras\" href=\"#\">Palabras</a></li>
                          <li><a id = \"Buscar_genero\" href=\"#\">G&eacute;nero</a></li>
                          <li><a id = \"Buscar_actor\" href=\"#\">Actor</a></li>
                        </ul>
                      </div><!-- /btn-group -->
                    </div><!-- /input-group -->
               </div>
               
               
               
           
            </div>
            
            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


    <div class=\"";
        // line 74
        $this->displayBlock('classcontenido', $context, $blocks);
        echo "\">

    ";
        // line 76
        $this->displayBlock('contenido', $context, $blocks);
        // line 144
        echo "
    </div>

    ";
        // line 147
        $this->displayBlock('barraderecha', $context, $blocks);
        // line 284
        echo "
    </div>

    <div class=\"col-md-9 footerQMP\">
        <label>Copyright QMP &copy; 2016 Website by TinkerSoft</label>
    </div>
    

";
    }

    // line 19
    public function block_login($context, array $blocks = array())
    {
        echo "<div class=\"usuario-login-index\">";
        $this->displayBlock('loginoptions', $context, $blocks);
        echo "</div>";
    }

    public function block_loginoptions($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getUrl("login");
        echo "\">Ingresar</a>";
    }

    // line 22
    public function block_moviename($context, array $blocks = array())
    {
    }

    // line 74
    public function block_classcontenido($context, array $blocks = array())
    {
        echo "col-md-9 fondoContenido";
    }

    // line 76
    public function block_contenido($context, array $blocks = array())
    {
        // line 77
        echo "        <center>
            <!--<a data-toggle=\"tab\" href=\"#tendencia\" class=\"buttonBase button5\">Tendencias</a>
            <a data-toggle=\"tab\" href=\"#estrenos\" class=\"buttonBase button5\">Estrenose</a>-->

            <ul class=\"nav nav-pills nav-pills-custom\">
                <li  class=\"active active-custom\"> <a id =\"a_tendencia\" data-toggle=\"tab\" href=\"#tendencia\">Tendencia</a></li>
                <li><a id =\"a_mejores_valoradas\" data-toggle=\"tab\" href=\"#top\">Mejores valoradas</a></li>
                <li><a id =\"a_estrenos\" data-toggle=\"tab\" href=\"#estrenos\">Estrenos</a></li>
                <li><a id =\"a_proximamente\" data-toggle=\"tab\" href=\"#proximamente\">Proximamente</a></li>
                <!--<li><a data-toggle=\"tab\" href=\"#ultimas\">&Uacute;ltimas adicionadas</a></li>-->
            </ul>


        </center>
        <!--<ul class=\"nav nav-tabs\">
            <li class=\"active\"><a data-toggle=\"tab\" href=\"#tendencia\">Tendencia</a></li>
            <li><a data-toggle=\"tab\" href=\"#estrenos\">Estrenos</a></li>
        </ul>-->
        <div class=\"tab-content\">
            <br>
            <div id=\"tendencia\" class=\" tab-pane fade in active \">
               ";
        // line 98
        $this->displayBlock('tendencia', $context, $blocks);
        // line 101
        echo "             

             
            </div>


            <div id=\"top\" class=\" tab-pane fade\">

                ";
        // line 109
        $this->displayBlock('mejorvaloradas', $context, $blocks);
        // line 112
        echo "                
            </div>

            <div id=\"estrenos\" class=\"tab-pane fade\">

                ";
        // line 117
        $this->displayBlock('estrenos', $context, $blocks);
        // line 120
        echo "
            </div>

            <div id=\"proximamente\" class=\" tab-pane fade\">

                ";
        // line 125
        $this->displayBlock('proximamente', $context, $blocks);
        // line 128
        echo "

            </div>
            
            <div id=\"ultimas\" class=\" tab-pane fade\">

                ";
        // line 134
        $this->displayBlock('ultimas', $context, $blocks);
        // line 137
        echo "

            </div>

        </div>
        
        ";
    }

    // line 98
    public function block_tendencia($context, array $blocks = array())
    {
        // line 99
        echo "               
               ";
    }

    // line 109
    public function block_mejorvaloradas($context, array $blocks = array())
    {
        // line 110
        echo "               
                ";
    }

    // line 117
    public function block_estrenos($context, array $blocks = array())
    {
        // line 118
        echo "               
                ";
    }

    // line 125
    public function block_proximamente($context, array $blocks = array())
    {
        // line 126
        echo "               
                ";
    }

    // line 134
    public function block_ultimas($context, array $blocks = array())
    {
        // line 135
        echo "               
                ";
    }

    // line 147
    public function block_barraderecha($context, array $blocks = array())
    {
        // line 148
        echo "    <div class=\"col-md-3 columna-index-boostrap\">
        <div class=\"columna-index\">

            <form class=\"form-signin\">
                <label class=\"sr-only\">username</label>
                <input type=\"text\" id=\"inputEmail\" class=\"form-control\" placeholder=\"username\" required autofocus>
                <label for=\"inputPassword\" class=\"sr-only\">Password</label>
                <input type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
                <div class=\"checkbox\">
                    <!--<label>
            <input type=\"checkbox\" value=\"recordarme\"> Recordarme
          </label>-->
                </div>
                <button class=\"btn btn-default\" type=\"submit\">Ingresar</button>
            </form>
            <hr>
            <h3> Actividad del sitio </h3>
            <a class=\"pagina_feed_item_a\" href=\"#\">
                <div class=\"pagina_feed_item\">

                    <label> Usuario_F88 </label>
                    <br>
                    <table>
                        <tr>
                            <td>Ice Age 2:</td>
                            <td>
                                <div class=\"rateyo-readonly-widg\"></div>
                            </td>
                        </tr>
                    </table>

                </div>
            </a>
            <a class=\"pagina_feed_item_a\" href=\"#\">
                <div class=\"pagina_feed_item\">

                    <label> Usuario_K17 </label>
                    <br>
                    <table>
                        <tr>
                            <td>Matrix:</td>
                            <td>
                                <div class=\"rateyo-readonly-widg\"></div>
                            </td>
                        </tr>
                    </table>

                </div>
            </a>
            <a class=\"pagina_feed_item_a\" href=\"#\">
                <div class=\"pagina_feed_item\">

                    <label> Usuario_U77 </label>
                    <br>
                    <table>
                        <tr>
                            <td>Zootopia:</td>
                            <td>
                                <div class=\"rateyo-readonly-widg\"></div>
                            </td>
                        </tr>
                    </table>

                </div>
            </a>
            <a class=\"pagina_feed_item_a\" href=\"#\">
                <div class=\"pagina_feed_item\">

                    <label> Usuario_Q21 </label>
                    <br>
                    <table>
                        <tr>
                            <td>The Godfather:</td>
                            <td>
                                <div class=\"rateyo-readonly-widg\"></div>
                            </td>
                        </tr>
                    </table>

                </div>
            </a>
            <a class=\"pagina_feed_item_a\" href=\"#\">
                <div class=\"pagina_feed_item\">

                    <label> Usuario_G55 </label>
                    <br>
                    <table>
                        <tr>
                            <td>Interstellar:</td>
                            <td>
                                <div class=\"rateyo-readonly-widg\"></div>
                            </td>
                        </tr>
                    </table>

                </div>
            </a>
            <a class=\"pagina_feed_item_a\" href=\"#\">
                <div class=\"pagina_feed_item\">

                    <label> Usuario_E31 </label>
                    <br>
                    <table>
                        <tr>
                            <td>Buscando a Nemo:</td>
                            <td>
                                <div class=\"rateyo-readonly-widg\"></div>
                            </td>
                        </tr>
                    </table>

                </div>
            </a>
            <a class=\"pagina_feed_item_a\" href=\"#\">
                <div class=\"pagina_feed_item\">

                    <label> Usuario_L64 </label>
                    <br>
                    <table>
                        <tr>
                            <td>Madagascar 3:</td>
                            <td>
                                <div class=\"rateyo-readonly-widg\"></div>
                            </td>
                        </tr>
                    </table>

                </div>
            </a>



        </div>

    </div>
    ";
    }

    // line 293
    public function block_javascripts($context, array $blocks = array())
    {
        // line 294
        echo "    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.js\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("star/jquery.rateyo.min.js"), "html", null, true);
        echo "\"></script>
    <script>
            \$('#valorBuscar').keypress(function(event){
                var keycode = (event.keyCode ? event.keyCode : event.which);
                if(keycode == '13'){
                   
                    var url = \"";
        // line 303
        echo $this->env->getExtension('routing')->getUrl("pelicula_barra");
        echo "\"+\$(\"#valorBuscar\").val();
            
            window.location.href =url;
                }
            });
            \$(\"#Buscar_palabras\").click(function () {
                 
            
                    var url = \"";
        // line 311
        echo $this->env->getExtension('routing')->getUrl("pelicula_barra");
        echo "\"+\$(\"#valorBuscar\").val();
                    window.location.href =url;
        
            });
            \$(\"#Buscar_genero\").click(function () {
                 
            
                    var url = \"";
        // line 318
        echo $this->env->getExtension('routing')->getUrl("pelicula_consulta_generos_string_url");
        echo "\"+\$(\"#valorBuscar\").val();
                    window.location.href =url;
        
            });
            \$(\"#Buscar_actor\").click(function () {
                 
            
                    var url = \"";
        // line 325
        echo $this->env->getExtension('routing')->getUrl("pelicula_consulta_actor_string_url");
        echo "\"+\$(\"#valorBuscar\").val();
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
                \$( \"#valorBuscar\" ).autocomplete({
                  source: availableTags
                });
              });
    </script>
    ";
        // line 359
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    
    ";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  531 => 359,  494 => 325,  484 => 318,  474 => 311,  463 => 303,  454 => 297,  449 => 294,  446 => 293,  307 => 148,  304 => 147,  299 => 135,  296 => 134,  291 => 126,  288 => 125,  283 => 118,  280 => 117,  275 => 110,  272 => 109,  267 => 99,  264 => 98,  254 => 137,  252 => 134,  244 => 128,  242 => 125,  235 => 120,  233 => 117,  226 => 112,  224 => 109,  214 => 101,  212 => 98,  189 => 77,  186 => 76,  180 => 74,  175 => 22,  160 => 19,  148 => 284,  146 => 147,  141 => 144,  139 => 76,  134 => 74,  92 => 35,  78 => 23,  76 => 22,  72 => 20,  70 => 19,  65 => 16,  62 => 15,  52 => 7,  47 => 5,  44 => 4,  41 => 3,  11 => 1,);
    }
}
/* {%extends 'base.html.twig'%}*/
/* */
/* {%block stylesheets%}*/
/*   */
/*     {{ parent() }}*/
/*    */
/*     <link rel="stylesheet" href="{{asset('star/jquery.rateyo.min.css')}}" rel="stylesheet" />*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>*/
/*     */
/*     <meta http-equiv="Cache-control" content="private">*/
/*     */
/* {%endblock%}*/
/* */
/* */
/* {% block body %}*/
/* */
/*     <div id ="cabezera" class="cabezera"> */
/*     */
/*         {%block login%}<div class="usuario-login-index">{% block loginoptions %}<a href="{{url('login')}}">Ingresar</a>{% endblock %}</div>{%endblock%}*/
/*     */
/*         <div id="watermark" class="watermark">*/
/*            {%block moviename%}{% endblock %}*/
/*         </div> */
/*     </div>*/
/* */
/*     <nav class="navbar navbar-default">*/
/* */
/*         <div class="container-fluid">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="{{ url('homepage') }}vista">QMP</a>*/
/*             </div>*/
/* */
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                <!--<ul class="nav navbar-nav navbar-form navbar-right">*/
/*                     <li><button id = "Buscar" type="submit" class="btn btn-default">Ingresar</button></li>*/
/* */
/*                 </ul>-->*/
/*                <div class="navbar-form navbar-right buscar" role="search">*/
/*                     <!--<div class="form-group">*/
/*                         <input type="text" id ="valorBuscar" class="form-control" placeholder="Buscar peliculas ... :)" size="40%">*/
/*                     </div>*/
/*                     <button id = "Buscar" type="submit" class="btn btn-default">Buscar</button>-->*/
/*                     <div id = "buscar_input" class="input-group" style="">*/
/*                       <input type="text" style = "display:inline;" id ="valorBuscar" class="form-control autocomplete" placeholder="Buscar peliculas ... :)" aria-label="..." size="40%">*/
/*                       <div class="input-group-btn">*/
/*                         <button type="button"id="btnBuscar" style="diplay:inline;" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Buscar <span class="caret"></span></button>*/
/*                         <ul class="dropdown-menu dropdown-menu-right">*/
/*                           <li><a id = "Buscar_palabras" href="#">Palabras</a></li>*/
/*                           <li><a id = "Buscar_genero" href="#">G&eacute;nero</a></li>*/
/*                           <li><a id = "Buscar_actor" href="#">Actor</a></li>*/
/*                         </ul>*/
/*                       </div><!-- /btn-group -->*/
/*                     </div><!-- /input-group -->*/
/*                </div>*/
/*                */
/*                */
/*                */
/*            */
/*             </div>*/
/*             */
/*             */
/*             <!-- /.navbar-collapse -->*/
/*         </div>*/
/*         <!-- /.container-fluid -->*/
/*     </nav>*/
/* */
/* */
/*     <div class="{% block classcontenido %}col-md-9 fondoContenido{% endblock %}">*/
/* */
/*     {% block contenido %}*/
/*         <center>*/
/*             <!--<a data-toggle="tab" href="#tendencia" class="buttonBase button5">Tendencias</a>*/
/*             <a data-toggle="tab" href="#estrenos" class="buttonBase button5">Estrenose</a>-->*/
/* */
/*             <ul class="nav nav-pills nav-pills-custom">*/
/*                 <li  class="active active-custom"> <a id ="a_tendencia" data-toggle="tab" href="#tendencia">Tendencia</a></li>*/
/*                 <li><a id ="a_mejores_valoradas" data-toggle="tab" href="#top">Mejores valoradas</a></li>*/
/*                 <li><a id ="a_estrenos" data-toggle="tab" href="#estrenos">Estrenos</a></li>*/
/*                 <li><a id ="a_proximamente" data-toggle="tab" href="#proximamente">Proximamente</a></li>*/
/*                 <!--<li><a data-toggle="tab" href="#ultimas">&Uacute;ltimas adicionadas</a></li>-->*/
/*             </ul>*/
/* */
/* */
/*         </center>*/
/*         <!--<ul class="nav nav-tabs">*/
/*             <li class="active"><a data-toggle="tab" href="#tendencia">Tendencia</a></li>*/
/*             <li><a data-toggle="tab" href="#estrenos">Estrenos</a></li>*/
/*         </ul>-->*/
/*         <div class="tab-content">*/
/*             <br>*/
/*             <div id="tendencia" class=" tab-pane fade in active ">*/
/*                {%block tendencia%}*/
/*                */
/*                {%endblock%}*/
/*              */
/* */
/*              */
/*             </div>*/
/* */
/* */
/*             <div id="top" class=" tab-pane fade">*/
/* */
/*                 {%block mejorvaloradas%}*/
/*                */
/*                 {%endblock%}*/
/*                 */
/*             </div>*/
/* */
/*             <div id="estrenos" class="tab-pane fade">*/
/* */
/*                 {%block estrenos%}*/
/*                */
/*                 {%endblock%}*/
/* */
/*             </div>*/
/* */
/*             <div id="proximamente" class=" tab-pane fade">*/
/* */
/*                 {%block proximamente%}*/
/*                */
/*                 {%endblock%}*/
/* */
/* */
/*             </div>*/
/*             */
/*             <div id="ultimas" class=" tab-pane fade">*/
/* */
/*                 {%block ultimas%}*/
/*                */
/*                 {%endblock%}*/
/* */
/* */
/*             </div>*/
/* */
/*         </div>*/
/*         */
/*         {% endblock %}*/
/* */
/*     </div>*/
/* */
/*     {% block barraderecha %}*/
/*     <div class="col-md-3 columna-index-boostrap">*/
/*         <div class="columna-index">*/
/* */
/*             <form class="form-signin">*/
/*                 <label class="sr-only">username</label>*/
/*                 <input type="text" id="inputEmail" class="form-control" placeholder="username" required autofocus>*/
/*                 <label for="inputPassword" class="sr-only">Password</label>*/
/*                 <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>*/
/*                 <div class="checkbox">*/
/*                     <!--<label>*/
/*             <input type="checkbox" value="recordarme"> Recordarme*/
/*           </label>-->*/
/*                 </div>*/
/*                 <button class="btn btn-default" type="submit">Ingresar</button>*/
/*             </form>*/
/*             <hr>*/
/*             <h3> Actividad del sitio </h3>*/
/*             <a class="pagina_feed_item_a" href="#">*/
/*                 <div class="pagina_feed_item">*/
/* */
/*                     <label> Usuario_F88 </label>*/
/*                     <br>*/
/*                     <table>*/
/*                         <tr>*/
/*                             <td>Ice Age 2:</td>*/
/*                             <td>*/
/*                                 <div class="rateyo-readonly-widg"></div>*/
/*                             </td>*/
/*                         </tr>*/
/*                     </table>*/
/* */
/*                 </div>*/
/*             </a>*/
/*             <a class="pagina_feed_item_a" href="#">*/
/*                 <div class="pagina_feed_item">*/
/* */
/*                     <label> Usuario_K17 </label>*/
/*                     <br>*/
/*                     <table>*/
/*                         <tr>*/
/*                             <td>Matrix:</td>*/
/*                             <td>*/
/*                                 <div class="rateyo-readonly-widg"></div>*/
/*                             </td>*/
/*                         </tr>*/
/*                     </table>*/
/* */
/*                 </div>*/
/*             </a>*/
/*             <a class="pagina_feed_item_a" href="#">*/
/*                 <div class="pagina_feed_item">*/
/* */
/*                     <label> Usuario_U77 </label>*/
/*                     <br>*/
/*                     <table>*/
/*                         <tr>*/
/*                             <td>Zootopia:</td>*/
/*                             <td>*/
/*                                 <div class="rateyo-readonly-widg"></div>*/
/*                             </td>*/
/*                         </tr>*/
/*                     </table>*/
/* */
/*                 </div>*/
/*             </a>*/
/*             <a class="pagina_feed_item_a" href="#">*/
/*                 <div class="pagina_feed_item">*/
/* */
/*                     <label> Usuario_Q21 </label>*/
/*                     <br>*/
/*                     <table>*/
/*                         <tr>*/
/*                             <td>The Godfather:</td>*/
/*                             <td>*/
/*                                 <div class="rateyo-readonly-widg"></div>*/
/*                             </td>*/
/*                         </tr>*/
/*                     </table>*/
/* */
/*                 </div>*/
/*             </a>*/
/*             <a class="pagina_feed_item_a" href="#">*/
/*                 <div class="pagina_feed_item">*/
/* */
/*                     <label> Usuario_G55 </label>*/
/*                     <br>*/
/*                     <table>*/
/*                         <tr>*/
/*                             <td>Interstellar:</td>*/
/*                             <td>*/
/*                                 <div class="rateyo-readonly-widg"></div>*/
/*                             </td>*/
/*                         </tr>*/
/*                     </table>*/
/* */
/*                 </div>*/
/*             </a>*/
/*             <a class="pagina_feed_item_a" href="#">*/
/*                 <div class="pagina_feed_item">*/
/* */
/*                     <label> Usuario_E31 </label>*/
/*                     <br>*/
/*                     <table>*/
/*                         <tr>*/
/*                             <td>Buscando a Nemo:</td>*/
/*                             <td>*/
/*                                 <div class="rateyo-readonly-widg"></div>*/
/*                             </td>*/
/*                         </tr>*/
/*                     </table>*/
/* */
/*                 </div>*/
/*             </a>*/
/*             <a class="pagina_feed_item_a" href="#">*/
/*                 <div class="pagina_feed_item">*/
/* */
/*                     <label> Usuario_L64 </label>*/
/*                     <br>*/
/*                     <table>*/
/*                         <tr>*/
/*                             <td>Madagascar 3:</td>*/
/*                             <td>*/
/*                                 <div class="rateyo-readonly-widg"></div>*/
/*                             </td>*/
/*                         </tr>*/
/*                     </table>*/
/* */
/*                 </div>*/
/*             </a>*/
/* */
/* */
/* */
/*         </div>*/
/* */
/*     </div>*/
/*     {% endblock %}*/
/* */
/*     </div>*/
/* */
/*     <div class="col-md-9 footerQMP">*/
/*         <label>Copyright QMP &copy; 2016 Website by TinkerSoft</label>*/
/*     </div>*/
/*     */
/* */
/* {% endblock %}*/
/*     {% block javascripts %}*/
/*     <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>*/
/*     <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.js"></script>*/
/* */
/*     <script type="text/javascript" src="{{asset('star/jquery.rateyo.min.js')}}"></script>*/
/*     <script>*/
/*             $('#valorBuscar').keypress(function(event){*/
/*                 var keycode = (event.keyCode ? event.keyCode : event.which);*/
/*                 if(keycode == '13'){*/
/*                    */
/*                     var url = "{{url('pelicula_barra')}}"+$("#valorBuscar").val();*/
/*             */
/*             window.location.href =url;*/
/*                 }*/
/*             });*/
/*             $("#Buscar_palabras").click(function () {*/
/*                  */
/*             */
/*                     var url = "{{url('pelicula_barra')}}"+$("#valorBuscar").val();*/
/*                     window.location.href =url;*/
/*         */
/*             });*/
/*             $("#Buscar_genero").click(function () {*/
/*                  */
/*             */
/*                     var url = "{{url('pelicula_consulta_generos_string_url')}}"+$("#valorBuscar").val();*/
/*                     window.location.href =url;*/
/*         */
/*             });*/
/*             $("#Buscar_actor").click(function () {*/
/*                  */
/*             */
/*                     var url = "{{url('pelicula_consulta_actor_string_url')}}"+$("#valorBuscar").val();*/
/*                     window.location.href =url;*/
/*         */
/*             });*/
/*             */
/*     */
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
/*                 $( "#valorBuscar" ).autocomplete({*/
/*                   source: availableTags*/
/*                 });*/
/*               });*/
/*     </script>*/
/*     {{ parent() }}*/
/*     */
/*     */
/*     {% endblock %}*/
