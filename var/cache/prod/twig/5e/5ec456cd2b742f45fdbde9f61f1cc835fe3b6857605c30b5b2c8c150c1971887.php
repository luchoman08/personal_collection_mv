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
            'tendencia' => array($this, 'block_tendencia'),
            'mejorvaloradas' => array($this, 'block_mejorvaloradas'),
            'estrenos' => array($this, 'block_estrenos'),
            'proximamente' => array($this, 'block_proximamente'),
            'ultimas' => array($this, 'block_ultimas'),
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
        echo "    <div class=\"cabezera\"></div>

    <nav class=\"navbar navbar-default\">

        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">QMP</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <!--<ul class=\"nav navbar-nav navbar-right\">
                    <li><a href=\"#\">Ingresar</a></li>

                </ul>-->
                <form class=\"navbar-form navbar-right buscar\" role=\"search\">
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Buscar peliculas ... :)\" size=\"50\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-default\">Buscar</button>
                </form>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


    <div class=\"col-md-9 fondoContenido\">


        <center>
            <!--<a data-toggle=\"tab\" href=\"#tendencia\" class=\"buttonBase button5\">Tendencias</a>
            <a data-toggle=\"tab\" href=\"#estrenos\" class=\"buttonBase button5\">Estrenose</a>-->

            <ul class=\"nav nav-pills nav-pills-custom\">
                <li class=\"active active-custom\"><a data-toggle=\"tab\" href=\"#tendencia\">Tendencia</a></li>
                <li><a data-toggle=\"tab\" href=\"#top\">Mejores valoradas</a></li>
                <li><a data-toggle=\"tab\" href=\"#estrenos\">Estrenos</a></li>
                <li><a data-toggle=\"tab\" href=\"#proximamente\">Proximamente</a></li>
                <li><a data-toggle=\"tab\" href=\"#ultimas\">&Uacute;ltimas adicionadas</a></li>
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
        // line 73
        $this->displayBlock('tendencia', $context, $blocks);
        // line 76
        echo "             

             
            </div>


            <div id=\"top\" class=\" tab-pane fade\">

                ";
        // line 84
        $this->displayBlock('mejorvaloradas', $context, $blocks);
        // line 87
        echo "                
            </div>

            <div id=\"estrenos\" class=\"tab-pane fade\">

                ";
        // line 92
        $this->displayBlock('estrenos', $context, $blocks);
        // line 95
        echo "
            </div>

            <div id=\"proximamente\" class=\" tab-pane fade\">

                ";
        // line 100
        $this->displayBlock('proximamente', $context, $blocks);
        // line 103
        echo "

            </div>
            
            <div id=\"ultimas\" class=\" tab-pane fade\">

                ";
        // line 109
        $this->displayBlock('ultimas', $context, $blocks);
        // line 112
        echo "

            </div>

        </div>

    </div>


    <div class=\"col-md-3 columna-index-boostrap\">
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
                <button class=\"btn btn-lg btn-default btn-block\" type=\"submit\">Ingresar</button>
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

    </div>

    <div class=\"col-md-9 footerQMP\">
        <label>Copyright QMP &copy; 2016 Website by TinkerSoft</label>
    </div>
    
    ";
        // line 263
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 73
    public function block_tendencia($context, array $blocks = array())
    {
        // line 74
        echo "               
               ";
    }

    // line 84
    public function block_mejorvaloradas($context, array $blocks = array())
    {
        // line 85
        echo "               
                ";
    }

    // line 92
    public function block_estrenos($context, array $blocks = array())
    {
        // line 93
        echo "               
                ";
    }

    // line 100
    public function block_proximamente($context, array $blocks = array())
    {
        // line 101
        echo "               
                ";
    }

    // line 109
    public function block_ultimas($context, array $blocks = array())
    {
        // line 110
        echo "               
                ";
    }

    // line 263
    public function block_javascripts($context, array $blocks = array())
    {
        // line 264
        echo "    
    <script type=\"text/javascript\" src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("star/jquery.rateyo.min.js"), "html", null, true);
        echo "\"></script>

   
     


    ";
        // line 271
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
        return array (  372 => 271,  363 => 265,  360 => 264,  357 => 263,  352 => 110,  349 => 109,  344 => 101,  341 => 100,  336 => 93,  333 => 92,  328 => 85,  325 => 84,  320 => 74,  317 => 73,  313 => 263,  160 => 112,  158 => 109,  150 => 103,  148 => 100,  141 => 95,  139 => 92,  132 => 87,  130 => 84,  120 => 76,  118 => 73,  58 => 15,  55 => 14,  47 => 8,  41 => 5,  38 => 4,  35 => 3,  11 => 1,);
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
/*     <div class="cabezera"></div>*/
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
/*                 <a class="navbar-brand" href="#">QMP</a>*/
/*             </div>*/
/* */
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                 <!--<ul class="nav navbar-nav navbar-right">*/
/*                     <li><a href="#">Ingresar</a></li>*/
/* */
/*                 </ul>-->*/
/*                 <form class="navbar-form navbar-right buscar" role="search">*/
/*                     <div class="form-group">*/
/*                         <input type="text" class="form-control" placeholder="Buscar peliculas ... :)" size="50">*/
/*                     </div>*/
/*                     <button type="submit" class="btn btn-default">Buscar</button>*/
/*                 </form>*/
/* */
/*             </div>*/
/*             <!-- /.navbar-collapse -->*/
/*         </div>*/
/*         <!-- /.container-fluid -->*/
/*     </nav>*/
/* */
/* */
/*     <div class="col-md-9 fondoContenido">*/
/* */
/* */
/*         <center>*/
/*             <!--<a data-toggle="tab" href="#tendencia" class="buttonBase button5">Tendencias</a>*/
/*             <a data-toggle="tab" href="#estrenos" class="buttonBase button5">Estrenose</a>-->*/
/* */
/*             <ul class="nav nav-pills nav-pills-custom">*/
/*                 <li class="active active-custom"><a data-toggle="tab" href="#tendencia">Tendencia</a></li>*/
/*                 <li><a data-toggle="tab" href="#top">Mejores valoradas</a></li>*/
/*                 <li><a data-toggle="tab" href="#estrenos">Estrenos</a></li>*/
/*                 <li><a data-toggle="tab" href="#proximamente">Proximamente</a></li>*/
/*                 <li><a data-toggle="tab" href="#ultimas">&Uacute;ltimas adicionadas</a></li>*/
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
/* */
/*     </div>*/
/* */
/* */
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
/*                 <button class="btn btn-lg btn-default btn-block" type="submit">Ingresar</button>*/
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
/* */
/*    */
/*      */
/* */
/* */
/*     {{ parent() }}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
