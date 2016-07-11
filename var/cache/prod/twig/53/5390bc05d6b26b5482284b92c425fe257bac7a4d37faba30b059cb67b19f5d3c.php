<?php

/* :usuarios:editEstandar.html.twig */
class __TwigTemplate_cf425d4d743e5f18badb9d6934dcee292ba6c80f1cdb6401d4d74cc9332995b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseSinFondo.html.twig", ":usuarios:editEstandar.html.twig", 1);
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
                                  <a   class=\"btn btn-sm btn-default\"  href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getUrl("usuarios_index");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "id", array()), "html", null, true);
        echo "/showEstandar\">Atras</a>
                                  </div>
                                 <h1>Modificar mis datos</h1>

                        </div>
                        <div class=\"panel-body\">



    ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_start');
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'widget');
        echo "
        <br>
        <center>
        <input type=\"submit\" id=\"btnGuardar\" class=\"btn btn-primary\" value=\"Guardar\" />
    ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_end');
        echo "


   
            ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
 
    </center>
    
    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":usuarios:editEstandar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 26,  61 => 22,  54 => 18,  50 => 17,  36 => 8,  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends 'baseSinFondo.html.twig' %}*/
/* */
/* */
/* {% block body %}*/
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-heading">*/
/*                                  <div style="float:right;  margin-top:20px;">*/
/*                                   <a   class="btn btn-sm btn-default"  href="{{url('usuarios_index')}} {{usuario.id}}/showEstandar">Atras</a>*/
/*                                   </div>*/
/*                                  <h1>Modificar mis datos</h1>*/
/* */
/*                         </div>*/
/*                         <div class="panel-body">*/
/* */
/* */
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <br>*/
/*         <center>*/
/*         <input type="submit" id="btnGuardar" class="btn btn-primary" value="Guardar" />*/
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
