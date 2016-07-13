<?php

/* :usuarios:show.html.twig */
class __TwigTemplate_f48b4c895089306c8154df84000e54253305f1c77ab6dc49cde2c5580de9c65e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseSinFondo.html.twig", ":usuarios:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
      <!-- Advanced Tables -->
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                          
                           <div style=\"float:right; margin-top:20px;\">
                            ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
                             <a class=\"btn btn-primary btn-sm\" onclick=\"location.href = '";
        // line 11
        echo $this->env->getExtension('routing')->getUrl("usuarios_index");
        echo "';\">Atras</a>
                             <a class=\"btn  btn-success btn-sm\"  href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuarios_edit", array("id" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "id", array()))), "html", null, true);
        echo "\">Editar</a>&nbsp;
                             <input class=\"btn  btn-danger btn-sm\"  type=\"submit\" value=\"Borrar\">

                             
                            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
                              
                              
                           </div>
                            <h3>Datos de usuario </h3>
                        </div>
                        <div class=\"panel-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                                    
  <tbody>

            <tr>
                <th>Nombres</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nombres", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Apellidos</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "apellidos", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nickname</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nickname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Correoelectronico</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "correoElectronico", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "password", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rol</th>
                <td>
                    ";
        // line 51
        if (($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "rol", array()) == 0)) {
            // line 52
            echo "                    Estandar
                    ";
        }
        // line 54
        echo "                    ";
        if (($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "rol", array()) == 1)) {
            // line 55
            echo "                    Auditor
                    ";
        }
        // line 57
        echo "                    ";
        if (($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "rol", array()) == 2)) {
            // line 58
            echo "                    Administrador
                    ";
        }
        // line 60
        echo "                </td>
            </tr>
            <tr>
                <th>Estado</th>
                <td>";
        // line 64
        if ($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "estado", array())) {
            echo "Habilitado";
        } else {
            echo "Deshabilitado";
        }
        echo "</td>
            </tr>
        </tbody>

                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                 <ul>


      

           
                        
                    </div>
                    <!--End Advanced Tables -->

";
    }

    public function getTemplateName()
    {
        return ":usuarios:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 64,  127 => 60,  123 => 58,  120 => 57,  116 => 55,  113 => 54,  109 => 52,  107 => 51,  99 => 46,  92 => 42,  85 => 38,  78 => 34,  71 => 30,  54 => 16,  47 => 12,  43 => 11,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'baseSinFondo.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*       <!-- Advanced Tables -->*/
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-heading">*/
/*                           */
/*                            <div style="float:right; margin-top:20px;">*/
/*                             {{ form_start(delete_form) }}*/
/*                              <a class="btn btn-primary btn-sm" onclick="location.href = '{{url('usuarios_index')}}';">Atras</a>*/
/*                              <a class="btn  btn-success btn-sm"  href="{{ path('usuarios_edit', { 'id': usuario.id }) }}">Editar</a>&nbsp;*/
/*                              <input class="btn  btn-danger btn-sm"  type="submit" value="Borrar">*/
/* */
/*                              */
/*                             {{ form_end(delete_form) }}*/
/*                               */
/*                               */
/*                            </div>*/
/*                             <h3>Datos de usuario </h3>*/
/*                         </div>*/
/*                         <div class="panel-body">*/
/*                             <div class="table-responsive">*/
/*                                 <table class="table table-striped table-bordered table-hover" id="dataTables-example">*/
/*                                     */
/*   <tbody>*/
/* */
/*             <tr>*/
/*                 <th>Nombres</th>*/
/*                 <td>{{ usuario.nombres }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Apellidos</th>*/
/*                 <td>{{ usuario.apellidos }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nickname</th>*/
/*                 <td>{{ usuario.nickname }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Correoelectronico</th>*/
/*                 <td>{{ usuario.correoElectronico }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Password</th>*/
/*                 <td>{{ usuario.password }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Rol</th>*/
/*                 <td>*/
/*                     {%if usuario.rol == 0%}*/
/*                     Estandar*/
/*                     {%endif%}*/
/*                     {%if usuario.rol == 1%}*/
/*                     Auditor*/
/*                     {%endif%}*/
/*                     {%if usuario.rol == 2%}*/
/*                     Administrador*/
/*                     {%endif%}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Estado</th>*/
/*                 <td>{% if usuario.estado %}Habilitado{% else %}Deshabilitado{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/* */
/*                                     </tbody>*/
/*                                 </table>*/
/*                             </div>*/
/*                             */
/*                         </div>*/
/*                  <ul>*/
/* */
/* */
/*       */
/* */
/*            */
/*                         */
/*                     </div>*/
/*                     <!--End Advanced Tables -->*/
/* */
/* {% endblock %}*/
/* */
