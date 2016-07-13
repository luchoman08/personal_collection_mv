<?php

/* :usuarios:showEstandar.html.twig */
class __TwigTemplate_75824a82a98190ee068cb13bae27a96c9dccc6b201340e9518ec92e4d7a62fe5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseSinFondo.html.twig", ":usuarios:showEstandar.html.twig", 1);
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
                             <a class=\"btn  btn-success btn-sm\"  href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuarios_edit_estandar", array("id" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "id", array()))), "html", null, true);
        echo "\">Editar</a>&nbsp;

                             
                            ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
                              
                              
                           </div>
                            <h1>Mis datos </h1>
                        </div>
                        <div class=\"panel-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                                    
  <tbody>
       
            <tr>
                <th>Nombres</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nombres", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Apellidos</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "apellidos", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nickname</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nickname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Correo electronico</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "correoElectronico", array()), "html", null, true);
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
        return ":usuarios:showEstandar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 40,  80 => 36,  73 => 32,  66 => 28,  49 => 14,  43 => 11,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
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
/*                              <a class="btn  btn-success btn-sm"  href="{{ path('usuarios_edit_estandar', { 'id': usuario.id }) }}">Editar</a>&nbsp;*/
/* */
/*                              */
/*                             {{ form_end(delete_form) }}*/
/*                               */
/*                               */
/*                            </div>*/
/*                             <h1>Mis datos </h1>*/
/*                         </div>*/
/*                         <div class="panel-body">*/
/*                             <div class="table-responsive">*/
/*                                 <table class="table table-striped table-bordered table-hover" id="dataTables-example">*/
/*                                     */
/*   <tbody>*/
/*        */
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
/*                 <th>Correo electronico</th>*/
/*                 <td>{{ usuario.correoElectronico }}</td>*/
/*             </tr>*/
/* */
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
