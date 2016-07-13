<?php

/* VistaBundle:Default:auditor.html.twig */
class __TwigTemplate_b6066491e8ce7ddfef9662b244e9e21eba5e4d8af7c5da167892fb18cc202642 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "VistaBundle:Default:auditor.html.twig", 1);
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
        echo " QMP - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nombres", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "apellidos", array()), "html", null, true);
        echo " ";
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
 <div class=\"menu-pelicula-border-black\">
                <ul class=\"menu-pelicula-tab\">
                    <li class=\"active\"><a data-toggle=\"tab\" href=\"#totalvistas\">Pel&iacute;culas vistas&nbsp;</a></li>
                    <li><a data-toggle=\"tab\" href=\"#vistasUsuarios\">Vistas por los usuarios&nbsp;</a></li>
                    <li><a data-toggle=\"tab\" href=\"#ultimomes\">Vistas en el último mes&nbsp;</a></li>
                    <li><a data-toggle=\"tab\" href=\"#generosvistos\">G&eacute;neros vistos&nbsp;</a></li>
                    <li><a data-toggle=\"tab\" href=\"#generosvistosultimomes\">G&eacute;neros vistos en el &uacute;ltimo mes&nbsp;</a></li>
                    
                    
                </ul>
            </div>

            
            <div class=\"tab-content\">
                <div id=\"totalvistas\" class=\"tab-pane fade in active\">
                    <div class=\"alert alert-warning\" role=\"alert\"><strong>Warning!!</strong> Limitación de la API </div>
                    <button id=\"generarReportePeliculasVistas\" type=\"button\" class=\"btn btn-xs btn-default btn-generarPDFS\"> Generar reporte en PDF </button>
                    
                  
                        
                            <table class=\"table table-striped table-bordered table-hover\">
                                <thead>
                                  <tr>
                                   <td>IDPelicula</td>
                                    <td>Nombre película</td>
                                    <td>Veces vista</td>
                                  </tr>
                                </thead>
                                <tbody>
                                 
                                  ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["peliculasvistas"]) ? $context["peliculasvistas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 48
            echo "                                      <tr>
                                        <th>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], 0, array(), "array"), "html", null, true);
            echo "</th>
                                        <th>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], 1, array(), "array"), "html", null, true);
            echo "</th>
                                        <th>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], 2, array(), "array"), "html", null, true);
            echo "</th>
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                                 
                                </tbody>
                              </table>
                </div>
                
                <div id=\"vistasUsuarios\" class=\"tab-pane fade\">
                   <div class=\"alert alert-warning\" role=\"alert\"><strong>Warning!!</strong> Limitación de la API</div>
                    <button id=\"generarReportePeliculasVistasUsuarios\" type=\"button\" class=\"btn btn-xs btn-default btn-generarPDFS\"> Generar reporte en PDF </button>
                    <table class=\"table table-striped table-bordered table-hover\">
                        <thead>
                          <tr>
                           <td>IDPel&iacute;cula</td>
                            <td>Nombre pel&iacute;cula </td>
                            <td>Fecha vista</td>
                            <td>@nickname</td>
                          </tr>
                        </thead>
                        <tbody>
                         
                          ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["peliculasvistasusuarios"]) ? $context["peliculasvistasusuarios"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 74
            echo "                              <tr>
                                <th>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], 0, array(), "array"), "html", null, true);
            echo "</th>
                                <th>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], 1, array(), "array"), "html", null, true);
            echo "</th>
                                <th>";
            // line 77
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pelicula"], 2, array(), "array"), "Y/m/d"), "html", null, true);
            echo "</th>
                                <th>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], 3, array(), "array"), "html", null, true);
            echo "</th>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                         
                        </tbody>
                      </table>
                </div>
                
                <div id=\"ultimomes\" class=\"tab-pane fade\">
                    <div class=\"alert alert-warning\" role=\"alert\"><strong>Warning!!</strong> Limitación de la API</div>
                    <button id=\"generarReportePeliculasVistasUltimoMes\" type=\"button\" class=\"btn btn-xs btn-default btn-generarPDFS\"> Generar reporte en PDF </button>
                    <table class=\"table table-striped table-bordered table-hover\">
                        <thead>
                          <tr>
                           <td>IDPel&iacute;cula</td>
                            <td>Nombre pel&iacute;cula </td>
                            <td>Fecha vista</td>
                            <td>@nickname</td>
                          </tr>
                        </thead>
                        <tbody>
                         
                          ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["peliculasultimomes"]) ? $context["peliculasultimomes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 101
            echo "                              <tr>
                                <th>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], 0, array(), "array"), "html", null, true);
            echo "</th>
                                <th>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], 1, array(), "array"), "html", null, true);
            echo "</th>
                                <th>";
            // line 104
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pelicula"], 2, array(), "array"), "Y/m/d"), "html", null, true);
            echo "</th>
                                <th>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], 3, array(), "array"), "html", null, true);
            echo "</th>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                         
                        </tbody>
                      </table>
                </div>
                
                <div id=\"generosvistos\" class=\"tab-pane fade\">
                   <div class=\"alert alert-warning\" role=\"alert\"><strong>Warning!!</strong> Limitación de la API</div>
                    <button id=\"generarReportePeliculasGenerosVistos\" type=\"button\" class=\"btn btn-xs btn-default btn-generarPDFS\"> Generar reporte en PDF </button>
                    <table class=\"table table-striped table-bordered table-hover\">
                        <thead>
                          <tr>
                           <td>@nickname</td>
                            <td>G&eacute;nero visto</td>
                          </tr>
                        </thead>
                        <tbody>
                         
                          ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["generosvistos"]) ? $context["generosvistos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 126
            echo "                              <tr>
                                <th>";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], 0, array(), "array"), "html", null, true);
            echo "</th>
                                <th>";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], 1, array(), "array"), "html", null, true);
            echo "</th>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "                         
                        </tbody>
                      </table>
                </div>
                
                <div id=\"generosvistosultimomes\" class=\"tab-pane fade\">
                   <div class=\"alert alert-warning\" role=\"alert\"><strong>Warning!!</strong> Limitación de la API</div>
                    <button id=\"generarReportePeliculasGenerosVistosUltimoMes\" type=\"button\" class=\"btn btn-xs btn-default btn-generarPDFS\"> Generar reporte en PDF </button>
                    <table class=\"table table-striped table-bordered table-hover\">
                        <thead>
                          <tr>
                           <td>@nickname</td>
                            <td>G&eacute;nero visto</td>
                          </tr>
                        </thead>
                        <tbody>
                         
                          ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["generosultimomes"]) ? $context["generosultimomes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 149
            echo "                              <tr>
                                <th>";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], 0, array(), "array"), "html", null, true);
            echo "</th>
                                <th>";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], 1, array(), "array"), "html", null, true);
            echo "</th>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "                         
                        </tbody>
                      </table>
                </div>
               
          
    </div>
  
";
    }

    // line 164
    public function block_barraderecha($context, array $blocks = array())
    {
        // line 165
        echo "

";
    }

    // line 169
    public function block_javascripts($context, array $blocks = array())
    {
        // line 170
        echo "<script>
 \$(\"#generarReportePeliculasVistas\").click(function () {
                 
                    var url = \"";
        // line 173
        echo $this->env->getExtension('routing')->getUrl("tinker_soft_reportes_vistas_homepage");
        echo "\";
                    window.location.href =url;
        
            });

 \$(\"#generarReportePeliculasVistasUsuarios\").click(function () {
                 
                    var url = \"";
        // line 180
        echo $this->env->getExtension('routing')->getUrl("tinker_soft_reportes_vistas_usuarios_homepage");
        echo "\";
                    window.location.href =url;
        
            });
            
 \$(\"#generarReportePeliculasVistasUltimoMes\").click(function () {
                 
                    var url = \"";
        // line 187
        echo $this->env->getExtension('routing')->getUrl("tinker_soft_reportes_vistas_usuarios_ultimo_mes_homepage");
        echo "\";
                    window.location.href =url;
        
            });

 \$(\"#generarReportePeliculasGenerosVistos\").click(function () {
                 
                    var url = \"";
        // line 194
        echo $this->env->getExtension('routing')->getUrl("tinker_soft_reportes_vistas_usuarios_genero_homepage");
        echo "\";
                    window.location.href =url;
        
            });

 \$(\"#generarReportePeliculasGenerosVistosUltimoMes\").click(function () {
                 
                    var url = \"";
        // line 201
        echo $this->env->getExtension('routing')->getUrl("tinker_soft_reportes_vistas_usuarios_genero_ultimo_mes_homepage");
        echo "\";
                    window.location.href =url;
        
            });



</script>

 ";
        // line 210
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
    
       
     <script>
            \$(document).ready(function () {
                \$('.table').dataTable();
            });
    </script>
";
    }

    public function getTemplateName()
    {
        return "VistaBundle:Default:auditor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  405 => 212,  401 => 211,  397 => 210,  385 => 201,  375 => 194,  365 => 187,  355 => 180,  345 => 173,  340 => 170,  337 => 169,  331 => 165,  328 => 164,  316 => 154,  307 => 151,  303 => 150,  300 => 149,  296 => 148,  277 => 131,  268 => 128,  264 => 127,  261 => 126,  257 => 125,  238 => 108,  229 => 105,  225 => 104,  221 => 103,  217 => 102,  214 => 101,  210 => 100,  189 => 81,  180 => 78,  176 => 77,  172 => 76,  168 => 75,  165 => 74,  161 => 73,  140 => 54,  131 => 51,  127 => 50,  123 => 49,  120 => 48,  116 => 47,  83 => 16,  80 => 15,  74 => 14,  66 => 10,  62 => 8,  52 => 6,  49 => 5,  46 => 4,  43 => 3,  33 => 2,  11 => 1,);
    }
}
/* {%extends 'index.html.twig'%}*/
/* {%block title%} QMP - {{usuario.nombres}} {{usuario.apellidos}} {%endblock%}*/
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
/* */
/*  <div class="menu-pelicula-border-black">*/
/*                 <ul class="menu-pelicula-tab">*/
/*                     <li class="active"><a data-toggle="tab" href="#totalvistas">Pel&iacute;culas vistas&nbsp;</a></li>*/
/*                     <li><a data-toggle="tab" href="#vistasUsuarios">Vistas por los usuarios&nbsp;</a></li>*/
/*                     <li><a data-toggle="tab" href="#ultimomes">Vistas en el último mes&nbsp;</a></li>*/
/*                     <li><a data-toggle="tab" href="#generosvistos">G&eacute;neros vistos&nbsp;</a></li>*/
/*                     <li><a data-toggle="tab" href="#generosvistosultimomes">G&eacute;neros vistos en el &uacute;ltimo mes&nbsp;</a></li>*/
/*                     */
/*                     */
/*                 </ul>*/
/*             </div>*/
/* */
/*             */
/*             <div class="tab-content">*/
/*                 <div id="totalvistas" class="tab-pane fade in active">*/
/*                     <div class="alert alert-warning" role="alert"><strong>Warning!!</strong> Limitación de la API </div>*/
/*                     <button id="generarReportePeliculasVistas" type="button" class="btn btn-xs btn-default btn-generarPDFS"> Generar reporte en PDF </button>*/
/*                     */
/*                   */
/*                         */
/*                             <table class="table table-striped table-bordered table-hover">*/
/*                                 <thead>*/
/*                                   <tr>*/
/*                                    <td>IDPelicula</td>*/
/*                                     <td>Nombre película</td>*/
/*                                     <td>Veces vista</td>*/
/*                                   </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                  */
/*                                   {% for pelicula in peliculasvistas %}*/
/*                                       <tr>*/
/*                                         <th>{{pelicula[0]}}</th>*/
/*                                         <th>{{pelicula[1]}}</th>*/
/*                                         <th>{{pelicula[2]}}</th>*/
/*                                     </tr>*/
/*                                     {% endfor %}*/
/*                                  */
/*                                 </tbody>*/
/*                               </table>*/
/*                 </div>*/
/*                 */
/*                 <div id="vistasUsuarios" class="tab-pane fade">*/
/*                    <div class="alert alert-warning" role="alert"><strong>Warning!!</strong> Limitación de la API</div>*/
/*                     <button id="generarReportePeliculasVistasUsuarios" type="button" class="btn btn-xs btn-default btn-generarPDFS"> Generar reporte en PDF </button>*/
/*                     <table class="table table-striped table-bordered table-hover">*/
/*                         <thead>*/
/*                           <tr>*/
/*                            <td>IDPel&iacute;cula</td>*/
/*                             <td>Nombre pel&iacute;cula </td>*/
/*                             <td>Fecha vista</td>*/
/*                             <td>@nickname</td>*/
/*                           </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                          */
/*                           {% for pelicula in peliculasvistasusuarios %}*/
/*                               <tr>*/
/*                                 <th>{{pelicula[0]}}</th>*/
/*                                 <th>{{pelicula[1]}}</th>*/
/*                                 <th>{{pelicula[2] |date("Y/m/d")}}</th>*/
/*                                 <th>{{pelicula[3]}}</th>*/
/*                             </tr>*/
/*                             {% endfor %}*/
/*                          */
/*                         </tbody>*/
/*                       </table>*/
/*                 </div>*/
/*                 */
/*                 <div id="ultimomes" class="tab-pane fade">*/
/*                     <div class="alert alert-warning" role="alert"><strong>Warning!!</strong> Limitación de la API</div>*/
/*                     <button id="generarReportePeliculasVistasUltimoMes" type="button" class="btn btn-xs btn-default btn-generarPDFS"> Generar reporte en PDF </button>*/
/*                     <table class="table table-striped table-bordered table-hover">*/
/*                         <thead>*/
/*                           <tr>*/
/*                            <td>IDPel&iacute;cula</td>*/
/*                             <td>Nombre pel&iacute;cula </td>*/
/*                             <td>Fecha vista</td>*/
/*                             <td>@nickname</td>*/
/*                           </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                          */
/*                           {% for pelicula in peliculasultimomes %}*/
/*                               <tr>*/
/*                                 <th>{{pelicula[0]}}</th>*/
/*                                 <th>{{pelicula[1]}}</th>*/
/*                                 <th>{{pelicula[2] |date("Y/m/d")}}</th>*/
/*                                 <th>{{pelicula[3]}}</th>*/
/*                             </tr>*/
/*                             {% endfor %}*/
/*                          */
/*                         </tbody>*/
/*                       </table>*/
/*                 </div>*/
/*                 */
/*                 <div id="generosvistos" class="tab-pane fade">*/
/*                    <div class="alert alert-warning" role="alert"><strong>Warning!!</strong> Limitación de la API</div>*/
/*                     <button id="generarReportePeliculasGenerosVistos" type="button" class="btn btn-xs btn-default btn-generarPDFS"> Generar reporte en PDF </button>*/
/*                     <table class="table table-striped table-bordered table-hover">*/
/*                         <thead>*/
/*                           <tr>*/
/*                            <td>@nickname</td>*/
/*                             <td>G&eacute;nero visto</td>*/
/*                           </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                          */
/*                           {% for pelicula in generosvistos %}*/
/*                               <tr>*/
/*                                 <th>{{pelicula[0]}}</th>*/
/*                                 <th>{{pelicula[1]}}</th>*/
/*                             </tr>*/
/*                             {% endfor %}*/
/*                          */
/*                         </tbody>*/
/*                       </table>*/
/*                 </div>*/
/*                 */
/*                 <div id="generosvistosultimomes" class="tab-pane fade">*/
/*                    <div class="alert alert-warning" role="alert"><strong>Warning!!</strong> Limitación de la API</div>*/
/*                     <button id="generarReportePeliculasGenerosVistosUltimoMes" type="button" class="btn btn-xs btn-default btn-generarPDFS"> Generar reporte en PDF </button>*/
/*                     <table class="table table-striped table-bordered table-hover">*/
/*                         <thead>*/
/*                           <tr>*/
/*                            <td>@nickname</td>*/
/*                             <td>G&eacute;nero visto</td>*/
/*                           </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                          */
/*                           {% for pelicula in generosultimomes %}*/
/*                               <tr>*/
/*                                 <th>{{pelicula[0]}}</th>*/
/*                                 <th>{{pelicula[1]}}</th>*/
/*                             </tr>*/
/*                             {% endfor %}*/
/*                          */
/*                         </tbody>*/
/*                       </table>*/
/*                 </div>*/
/*                */
/*           */
/*     </div>*/
/*   */
/* {% endblock %}*/
/* */
/* {% block barraderecha %}*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {%block javascripts%}*/
/* <script>*/
/*  $("#generarReportePeliculasVistas").click(function () {*/
/*                  */
/*                     var url = "{{url('tinker_soft_reportes_vistas_homepage')}}";*/
/*                     window.location.href =url;*/
/*         */
/*             });*/
/* */
/*  $("#generarReportePeliculasVistasUsuarios").click(function () {*/
/*                  */
/*                     var url = "{{url('tinker_soft_reportes_vistas_usuarios_homepage')}}";*/
/*                     window.location.href =url;*/
/*         */
/*             });*/
/*             */
/*  $("#generarReportePeliculasVistasUltimoMes").click(function () {*/
/*                  */
/*                     var url = "{{url('tinker_soft_reportes_vistas_usuarios_ultimo_mes_homepage')}}";*/
/*                     window.location.href =url;*/
/*         */
/*             });*/
/* */
/*  $("#generarReportePeliculasGenerosVistos").click(function () {*/
/*                  */
/*                     var url = "{{url('tinker_soft_reportes_vistas_usuarios_genero_homepage')}}";*/
/*                     window.location.href =url;*/
/*         */
/*             });*/
/* */
/*  $("#generarReportePeliculasGenerosVistosUltimoMes").click(function () {*/
/*                  */
/*                     var url = "{{url('tinker_soft_reportes_vistas_usuarios_genero_ultimo_mes_homepage')}}";*/
/*                     window.location.href =url;*/
/*         */
/*             });*/
/* */
/* */
/* */
/* </script>*/
/* */
/*  {{ parent() }}*/
/*   <script src="{{asset('assets/js/jquery.dataTables.js')}}"></script>*/
/*     <script src="{{asset('assets/js/dataTables.bootstrap.js')}}"></script>*/
/*     */
/*        */
/*      <script>*/
/*             $(document).ready(function () {*/
/*                 $('.table').dataTable();*/
/*             });*/
/*     </script>*/
/* {%endblock%}*/
/* */
