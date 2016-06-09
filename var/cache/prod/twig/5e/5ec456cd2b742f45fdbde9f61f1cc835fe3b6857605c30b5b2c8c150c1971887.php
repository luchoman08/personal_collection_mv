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
   
    <!-- Custom styles for this template -->
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("star/jquery.rateyo.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>
    
";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "
    <div id =\"cabezera\" class=\"cabezera\"> 
    
        ";
        // line 18
        $this->displayBlock('login', $context, $blocks);
        // line 19
        echo "    
        <div id=\"watermark\" class=\"watermark\">
           ";
        // line 21
        $this->displayBlock('moviename', $context, $blocks);
        // line 22
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
        // line 34
        echo $this->env->getExtension('routing')->getUrl("homepage");
        echo "vista\">QMP</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
               <!--<ul class=\"nav navbar-nav navbar-form navbar-right\">
                    <li><button id = \"Buscar\" type=\"submit\" class=\"btn btn-default\">Ingresar</button></li>

                </ul>-->
               <div class=\"navbar-form navbar-right buscar\" role=\"search\">
                    <div class=\"form-group\">
                        <input type=\"text\" id =\"valorBuscar\" class=\"form-control\" placeholder=\"Buscar peliculas ... :)\" size=\"40%\">
                    </div>
                    <button id = \"Buscar\" type=\"submit\" class=\"btn btn-default\">Buscar</button>
                    
               </div>
               
               
               
           
            </div>
            
            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


    <div class=\"";
        // line 63
        $this->displayBlock('classcontenido', $context, $blocks);
        echo "\">

    ";
        // line 65
        $this->displayBlock('contenido', $context, $blocks);
        // line 133
        echo "
    </div>

    ";
        // line 136
        $this->displayBlock('barraderecha', $context, $blocks);
        // line 273
        echo "
    </div>

    <div class=\"col-md-9 footerQMP\">
        <label>Copyright QMP &copy; 2016 Website by TinkerSoft</label>
    </div>
    

";
    }

    // line 18
    public function block_login($context, array $blocks = array())
    {
        echo "<div class=\"usuario-login-index\" > ";
        $this->displayBlock('loginoptions', $context, $blocks);
        echo " </div>";
    }

    public function block_loginoptions($context, array $blocks = array())
    {
        echo " <a href=\"";
        echo $this->env->getExtension('routing')->getUrl("login");
        echo "\">Ingresar</a> ";
    }

    // line 21
    public function block_moviename($context, array $blocks = array())
    {
    }

    // line 63
    public function block_classcontenido($context, array $blocks = array())
    {
        echo "col-md-9 fondoContenido";
    }

    // line 65
    public function block_contenido($context, array $blocks = array())
    {
        // line 66
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
        // line 87
        $this->displayBlock('tendencia', $context, $blocks);
        // line 90
        echo "             

             
            </div>


            <div id=\"top\" class=\" tab-pane fade\">

                ";
        // line 98
        $this->displayBlock('mejorvaloradas', $context, $blocks);
        // line 101
        echo "                
            </div>

            <div id=\"estrenos\" class=\"tab-pane fade\">

                ";
        // line 106
        $this->displayBlock('estrenos', $context, $blocks);
        // line 109
        echo "
            </div>

            <div id=\"proximamente\" class=\" tab-pane fade\">

                ";
        // line 114
        $this->displayBlock('proximamente', $context, $blocks);
        // line 117
        echo "

            </div>
            
            <div id=\"ultimas\" class=\" tab-pane fade\">

                ";
        // line 123
        $this->displayBlock('ultimas', $context, $blocks);
        // line 126
        echo "

            </div>

        </div>
        
        ";
    }

    // line 87
    public function block_tendencia($context, array $blocks = array())
    {
        // line 88
        echo "               
               ";
    }

    // line 98
    public function block_mejorvaloradas($context, array $blocks = array())
    {
        // line 99
        echo "               
                ";
    }

    // line 106
    public function block_estrenos($context, array $blocks = array())
    {
        // line 107
        echo "               
                ";
    }

    // line 114
    public function block_proximamente($context, array $blocks = array())
    {
        // line 115
        echo "               
                ";
    }

    // line 123
    public function block_ultimas($context, array $blocks = array())
    {
        // line 124
        echo "               
                ";
    }

    // line 136
    public function block_barraderecha($context, array $blocks = array())
    {
        // line 137
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

    // line 282
    public function block_javascripts($context, array $blocks = array())
    {
        // line 283
        echo "    
    <script type=\"text/javascript\" src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("star/jquery.rateyo.min.js"), "html", null, true);
        echo "\"></script>
    <script>
\$('#valorBuscar').keypress(function(event){
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13'){
       
        var url = \"http://p-c-m-luchoman.c9users.io/personal_collection_mv/web/vista/buscar/\"+\$(\"#valorBuscar\").val();

window.location.href =url;
    }
});
\$(\"#Buscar\").click(function () {
     

var url = \"http://p-c-m-luchoman.c9users.io/personal_collection_mv/web/vista/buscar/\"+\$(\"#valorBuscar\").val();
window.location.href =url;

    });
    </script>
    ";
        // line 303
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
        return array (  463 => 303,  441 => 284,  438 => 283,  435 => 282,  296 => 137,  293 => 136,  288 => 124,  285 => 123,  280 => 115,  277 => 114,  272 => 107,  269 => 106,  264 => 99,  261 => 98,  256 => 88,  253 => 87,  243 => 126,  241 => 123,  233 => 117,  231 => 114,  224 => 109,  222 => 106,  215 => 101,  213 => 98,  203 => 90,  201 => 87,  178 => 66,  175 => 65,  169 => 63,  164 => 21,  149 => 18,  137 => 273,  135 => 136,  130 => 133,  128 => 65,  123 => 63,  91 => 34,  77 => 22,  75 => 21,  71 => 19,  69 => 18,  64 => 15,  61 => 14,  53 => 8,  47 => 5,  44 => 4,  41 => 3,  11 => 1,);
    }
}
/* {%extends 'base.html.twig'%}*/
/* */
/* {%block stylesheets%}*/
/*   */
/*     {{ parent() }}*/
/*    */
/*     <!-- Custom styles for this template -->*/
/*         <link rel="stylesheet" href="{{asset('star/jquery.rateyo.min.css')}}" rel="stylesheet" />*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>*/
/*     */
/* {%endblock%}*/
/* */
/* */
/* {% block body %}*/
/* */
/*     <div id ="cabezera" class="cabezera"> */
/*     */
/*         {%block login%}<div class="usuario-login-index" > {% block loginoptions %} <a href="{{url('login')}}">Ingresar</a> {% endblock %} </div>{%endblock%}*/
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
/*                     <div class="form-group">*/
/*                         <input type="text" id ="valorBuscar" class="form-control" placeholder="Buscar peliculas ... :)" size="40%">*/
/*                     </div>*/
/*                     <button id = "Buscar" type="submit" class="btn btn-default">Buscar</button>*/
/*                     */
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
/*     */
/*     <script type="text/javascript" src="{{asset('star/jquery.rateyo.min.js')}}"></script>*/
/*     <script>*/
/* $('#valorBuscar').keypress(function(event){*/
/*     var keycode = (event.keyCode ? event.keyCode : event.which);*/
/*     if(keycode == '13'){*/
/*        */
/*         var url = "http://p-c-m-luchoman.c9users.io/personal_collection_mv/web/vista/buscar/"+$("#valorBuscar").val();*/
/* */
/* window.location.href =url;*/
/*     }*/
/* });*/
/* $("#Buscar").click(function () {*/
/*      */
/* */
/* var url = "http://p-c-m-luchoman.c9users.io/personal_collection_mv/web/vista/buscar/"+$("#valorBuscar").val();*/
/* window.location.href =url;*/
/* */
/*     });*/
/*     </script>*/
/*     {{ parent() }}*/
/*     {% endblock %}*/
