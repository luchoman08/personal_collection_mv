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
        echo "    <div id =\"cabezera\" class=\"cabezera\"> 
    <div id=\"watermark\" class=\"watermark\">
           ";
        // line 17
        $this->displayBlock('moviename', $context, $blocks);
        // line 18
        echo "    </div> 
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
        // line 30
        echo $this->env->getExtension('routing')->getUrl("homepage");
        echo "vista\">QMP</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <!--<ul class=\"nav navbar-nav navbar-right\">
                    <li><a href=\"#\">Ingresar</a></li>

                </ul>-->
               <div class=\"navbar-form navbar-right buscar\" role=\"search\">
                    <div class=\"form-group\">
                        <input type=\"text\" id =\"valorBuscar\" class=\"form-control\" placeholder=\"Buscar peliculas ... :)\" size=\"50\">
                    </div>
                    <button id = \"Buscar\" type=\"submit\" class=\"btn btn-default\">Buscar</button>
               </div>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


    <div class=\"";
        // line 53
        $this->displayBlock('classcontenido', $context, $blocks);
        echo "\">

    ";
        // line 55
        $this->displayBlock('contenido', $context, $blocks);
        // line 123
        echo "
    </div>

    ";
        // line 126
        $this->displayBlock('barraderecha', $context, $blocks);
        // line 263
        echo "
    </div>

    <div class=\"col-md-9 footerQMP\">
        <label>Copyright QMP &copy; 2016 Website by TinkerSoft</label>
    </div>
    
    ";
        // line 270
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 17
    public function block_moviename($context, array $blocks = array())
    {
        echo "The Good Dinosaur";
    }

    // line 53
    public function block_classcontenido($context, array $blocks = array())
    {
        echo "col-md-9 fondoContenido";
    }

    // line 55
    public function block_contenido($context, array $blocks = array())
    {
        // line 56
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
        // line 77
        $this->displayBlock('tendencia', $context, $blocks);
        // line 80
        echo "             

             
            </div>


            <div id=\"top\" class=\" tab-pane fade\">

                ";
        // line 88
        $this->displayBlock('mejorvaloradas', $context, $blocks);
        // line 91
        echo "                
            </div>

            <div id=\"estrenos\" class=\"tab-pane fade\">

                ";
        // line 96
        $this->displayBlock('estrenos', $context, $blocks);
        // line 99
        echo "
            </div>

            <div id=\"proximamente\" class=\" tab-pane fade\">

                ";
        // line 104
        $this->displayBlock('proximamente', $context, $blocks);
        // line 107
        echo "

            </div>
            
            <div id=\"ultimas\" class=\" tab-pane fade\">

                ";
        // line 113
        $this->displayBlock('ultimas', $context, $blocks);
        // line 116
        echo "

            </div>

        </div>
        
        ";
    }

    // line 77
    public function block_tendencia($context, array $blocks = array())
    {
        // line 78
        echo "               
               ";
    }

    // line 88
    public function block_mejorvaloradas($context, array $blocks = array())
    {
        // line 89
        echo "               
                ";
    }

    // line 96
    public function block_estrenos($context, array $blocks = array())
    {
        // line 97
        echo "               
                ";
    }

    // line 104
    public function block_proximamente($context, array $blocks = array())
    {
        // line 105
        echo "               
                ";
    }

    // line 113
    public function block_ultimas($context, array $blocks = array())
    {
        // line 114
        echo "               
                ";
    }

    // line 126
    public function block_barraderecha($context, array $blocks = array())
    {
        // line 127
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

    // line 270
    public function block_javascripts($context, array $blocks = array())
    {
        // line 271
        echo "    
    <script type=\"text/javascript\" src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("star/jquery.rateyo.min.js"), "html", null, true);
        echo "\"></script>
    <script>

//no funca esa webada LOL pruebelo ahi

\$('#valorBuscar').keypress(function(event){
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13'){
       
        var url = \"http://p-c-m-luchoman.c9users.io/personal_collection_mv/web/vista/buscar/\"+\$(\"#valorBuscar\").val();


//chambonada por ahora prro :v my paila xddd eso solo era un from summit xddd

window.location.href =url;
    }
});
\$(\"#Buscar\").click(function () {
     

        var url = \"http://p-c-m-luchoman.c9users.io/personal_collection_mv/web/vista/buscar/\"+\$(\"#valorBuscar\").val();


//chambonada por ahora prro :v my paila xddd eso solo era un from summit xddd

window.location.href =url;

        \$.ajax({
            type: \"POST\",
            url: url,
            data: \$(\"#valorBuscar\").val(),
            success: function (data)
            {

                

                                 //\$(\"#mensaje\").html(data)
                           
                              //   document.getElementById('valorBuscar').innerHTML = data;
                                 

                             }

                         });

        

    });
    </script>
   
     


    ";
        // line 325
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
        return array (  469 => 325,  413 => 272,  410 => 271,  407 => 270,  268 => 127,  265 => 126,  260 => 114,  257 => 113,  252 => 105,  249 => 104,  244 => 97,  241 => 96,  236 => 89,  233 => 88,  228 => 78,  225 => 77,  215 => 116,  213 => 113,  205 => 107,  203 => 104,  196 => 99,  194 => 96,  187 => 91,  185 => 88,  175 => 80,  173 => 77,  150 => 56,  147 => 55,  141 => 53,  135 => 17,  131 => 270,  122 => 263,  120 => 126,  115 => 123,  113 => 55,  108 => 53,  82 => 30,  68 => 18,  66 => 17,  62 => 15,  59 => 14,  51 => 8,  45 => 5,  42 => 4,  39 => 3,  11 => 1,);
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
/*     <div id ="cabezera" class="cabezera"> */
/*     <div id="watermark" class="watermark">*/
/*            {%block moviename%}The Good Dinosaur{% endblock %}*/
/*     </div> */
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
/*                 <!--<ul class="nav navbar-nav navbar-right">*/
/*                     <li><a href="#">Ingresar</a></li>*/
/* */
/*                 </ul>-->*/
/*                <div class="navbar-form navbar-right buscar" role="search">*/
/*                     <div class="form-group">*/
/*                         <input type="text" id ="valorBuscar" class="form-control" placeholder="Buscar peliculas ... :)" size="50">*/
/*                     </div>*/
/*                     <button id = "Buscar" type="submit" class="btn btn-default">Buscar</button>*/
/*                </div>*/
/* */
/*             </div>*/
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
/*     {% block javascripts %}*/
/*     */
/*     <script type="text/javascript" src="{{asset('star/jquery.rateyo.min.js')}}"></script>*/
/*     <script>*/
/* */
/* //no funca esa webada LOL pruebelo ahi*/
/* */
/* $('#valorBuscar').keypress(function(event){*/
/*     var keycode = (event.keyCode ? event.keyCode : event.which);*/
/*     if(keycode == '13'){*/
/*        */
/*         var url = "http://p-c-m-luchoman.c9users.io/personal_collection_mv/web/vista/buscar/"+$("#valorBuscar").val();*/
/* */
/* */
/* //chambonada por ahora prro :v my paila xddd eso solo era un from summit xddd*/
/* */
/* window.location.href =url;*/
/*     }*/
/* });*/
/* $("#Buscar").click(function () {*/
/*      */
/* */
/*         var url = "http://p-c-m-luchoman.c9users.io/personal_collection_mv/web/vista/buscar/"+$("#valorBuscar").val();*/
/* */
/* */
/* //chambonada por ahora prro :v my paila xddd eso solo era un from summit xddd*/
/* */
/* window.location.href =url;*/
/* */
/*         $.ajax({*/
/*             type: "POST",*/
/*             url: url,*/
/*             data: $("#valorBuscar").val(),*/
/*             success: function (data)*/
/*             {*/
/* */
/*                 */
/* */
/*                                  //$("#mensaje").html(data)*/
/*                            */
/*                               //   document.getElementById('valorBuscar').innerHTML = data;*/
/*                                  */
/* */
/*                              }*/
/* */
/*                          });*/
/* */
/*         */
/* */
/*     });*/
/*     </script>*/
/*    */
/*      */
/* */
/* */
/*     {{ parent() }}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
