<?php

/* :usuarios:edit.html.twig */
class __TwigTemplate_a69e79a7f0f5383ba1de18ff64275b17b98333928d03c4d24649df59c7a6d3f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseSinFondo.html.twig", ":usuarios:edit.html.twig", 1);
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                                 <div style=\"float:right;  margin-top:20px;\">
                                  <a   class=\"btn btn-sm btn-default\"  onclick=\"location.href = '";
        // line 8
        echo $this->env->getExtension('routing')->getUrl("usuarios_index");
        echo "';\">Atras</a>
                                  </div>
                                 <h3>Editar usuario</h3>

                        </div>
                        <div class=\"panel-body\">
                            ";
        // line 14
        if (((isset($context["accion"]) ? $context["accion"] : null) == 1)) {
            // line 15
            echo "<div class=\"alert alert-success alert-dismissible\" role=\"alert\">
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
  Se han guardado los cambios 
</div>
";
        }
        // line 20
        echo "
    ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_start');
        echo "
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'widget');
        echo "
        <br>
        <center>
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Guardar\" />
    ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_end');
        echo "


   
            ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
 
    </center>
    
    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":usuarios:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 30,  68 => 26,  61 => 22,  57 => 21,  54 => 20,  47 => 15,  45 => 14,  36 => 8,  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends 'baseSinFondo.html.twig' %}*/
/* */
/* */
/* {% block body %}*/
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-heading">*/
/*                                  <div style="float:right;  margin-top:20px;">*/
/*                                   <a   class="btn btn-sm btn-default"  onclick="location.href = '{{url('usuarios_index')}}';">Atras</a>*/
/*                                   </div>*/
/*                                  <h3>Editar usuario</h3>*/
/* */
/*                         </div>*/
/*                         <div class="panel-body">*/
/*                             {%if accion ==1%}*/
/* <div class="alert alert-success alert-dismissible" role="alert">*/
/*   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*   Se han guardado los cambios */
/* </div>*/
/* {%endif%}*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <br>*/
/*         <center>*/
/*         <input type="submit" class="btn btn-primary" value="Guardar" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/* */
/*    */
/*             {{ form_start(delete_form) }}*/
/*  */
/*     </center>*/
/*     */
/*     </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
