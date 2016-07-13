<?php

/* :usuarios:index.html.twig */
class __TwigTemplate_07f4b288d6569b26d02a751542d8e14ae938ec57136185cb082d08a15c3718ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseSinFondo.html.twig", ":usuarios:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseSinFondo.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "
";
        // line 4
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<style>
    .fondo{
        background-image=\"\";
    }
    .table-responsive{
        overflow-x:hidden;
    }
</style>
";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "    
      <!-- Advanced Tables -->
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\" >
                             <div style=\"float:right; margin-top:20px;\">
                                <a class =\"btn btn-sm  btn-success\" href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("usuarios_new");
        echo "\">Nuevo usuario</a>
                                </div>
                              <h3>Usuarios </h3>
                             
                                </div>
                        </div>
                        <div class=\"panel-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                                    <thead>
                                       <tr>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>Nickname</th>
                                            <th>Correo Electronico</th>
                                            <th>Rol</th>
                                            <th>Estado</th>
                                            <th>Men&uacute;</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                         ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 42
            echo "                                            <tr>
                                                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "nombres", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "apellidos", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "nickname", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "correoElectronico", array()), "html", null, true);
            echo "</td>
                                                <td>
                                                        ";
            // line 48
            if (($this->getAttribute($context["usuario"], "rol", array()) == "0")) {
                // line 49
                echo "                                                            Estandar
                                                        ";
            }
            // line 51
            echo "                                                         ";
            if (($this->getAttribute($context["usuario"], "rol", array()) == "1")) {
                // line 52
                echo "                                                            Auditor
                                                        ";
            }
            // line 54
            echo "                                                         ";
            if (($this->getAttribute($context["usuario"], "rol", array()) == "2")) {
                // line 55
                echo "                                                            Administrador
                                                        ";
            }
            // line 57
            echo "                                                </td>
                                                <td>";
            // line 58
            if ($this->getAttribute($context["usuario"], "estado", array())) {
                echo "Habilitado";
            } else {
                echo "Deshabilitado";
            }
            echo "</td>
                                                <td>
                                                   
                                                        <div class=\"panel-heading\">
                                                            <a class=\"btn btn-primary btn-sm\" style=\"float:left;\" href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuarios_show", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\">Opciones</a>
                                                         
                                                 
                                                            </div>
                                                 
                                                </td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    <!--End Advanced Tables -->
 
          

";
    }

    // line 84
    public function block_javascripts($context, array $blocks = array())
    {
        // line 85
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
 <!-- DATA TABLE SCRIPTS -->
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
       
     <script>
            \$(document).ready(function () {
                \$('#dataTables-example').dataTable();
            });
    </script>
";
    }

    public function getTemplateName()
    {
        return ":usuarios:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 88,  178 => 87,  173 => 85,  170 => 84,  156 => 70,  142 => 62,  131 => 58,  128 => 57,  124 => 55,  121 => 54,  117 => 52,  114 => 51,  110 => 49,  108 => 48,  103 => 46,  99 => 45,  95 => 44,  91 => 43,  88 => 42,  84 => 41,  60 => 20,  53 => 15,  50 => 14,  36 => 4,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'baseSinFondo.html.twig' %}*/
/* {%block stylesheets%}*/
/* */
/* {{parent()}}*/
/* <style>*/
/*     .fondo{*/
/*         background-image="";*/
/*     }*/
/*     .table-responsive{*/
/*         overflow-x:hidden;*/
/*     }*/
/* </style>*/
/* {%endblock%}*/
/* {% block body %}*/
/*     */
/*       <!-- Advanced Tables -->*/
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-heading" >*/
/*                              <div style="float:right; margin-top:20px;">*/
/*                                 <a class ="btn btn-sm  btn-success" href="{{ path('usuarios_new') }}">Nuevo usuario</a>*/
/*                                 </div>*/
/*                               <h3>Usuarios </h3>*/
/*                              */
/*                                 </div>*/
/*                         </div>*/
/*                         <div class="panel-body">*/
/*                             <div class="table-responsive">*/
/*                                 <table class="table table-striped table-bordered table-hover" id="dataTables-example">*/
/*                                     <thead>*/
/*                                        <tr>*/
/*                                             <th>Nombres</th>*/
/*                                             <th>Apellidos</th>*/
/*                                             <th>Nickname</th>*/
/*                                             <th>Correo Electronico</th>*/
/*                                             <th>Rol</th>*/
/*                                             <th>Estado</th>*/
/*                                             <th>Men&uacute;</th>*/
/*                                        </tr>*/
/*                                     </thead>*/
/*                                     <tbody>*/
/*                                          {% for usuario in usuarios %}*/
/*                                             <tr>*/
/*                                                 <td>{{ usuario.nombres }}</td>*/
/*                                                 <td>{{ usuario.apellidos }}</td>*/
/*                                                 <td>{{ usuario.nickname }}</td>*/
/*                                                 <td>{{ usuario.correoElectronico }}</td>*/
/*                                                 <td>*/
/*                                                         {% if usuario.rol == "0" %}*/
/*                                                             Estandar*/
/*                                                         {%endif%}*/
/*                                                          {% if usuario.rol == "1" %}*/
/*                                                             Auditor*/
/*                                                         {%endif%}*/
/*                                                          {% if usuario.rol == "2" %}*/
/*                                                             Administrador*/
/*                                                         {%endif%}*/
/*                                                 </td>*/
/*                                                 <td>{% if usuario.estado %}Habilitado{% else %}Deshabilitado{% endif %}</td>*/
/*                                                 <td>*/
/*                                                    */
/*                                                         <div class="panel-heading">*/
/*                                                             <a class="btn btn-primary btn-sm" style="float:left;" href="{{ path('usuarios_show', { 'id': usuario.id }) }}">Opciones</a>*/
/*                                                          */
/*                                                  */
/*                                                             </div>*/
/*                                                  */
/*                                                 </td>*/
/*                                             </tr>*/
/*                                         {% endfor %}*/
/* */
/*                                     </tbody>*/
/*                                 </table>*/
/*                             </div>*/
/*                             */
/*                         </div>*/
/*                     <!--End Advanced Tables -->*/
/*  */
/*           */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* {%block javascripts%}*/
/* {{parent()}}*/
/*  <!-- DATA TABLE SCRIPTS -->*/
/*     <script src="{{asset('assets/js/jquery.dataTables.js')}}"></script>*/
/*     <script src="{{asset('assets/js/dataTables.bootstrap.js')}}"></script>*/
/*        */
/*      <script>*/
/*             $(document).ready(function () {*/
/*                 $('#dataTables-example').dataTable();*/
/*             });*/
/*     </script>*/
/* {%endblock%}*/
/* */
