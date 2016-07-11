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
                                  <a   class=\"btn btn-sm btn-default\"  href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("usuarios_index");
        echo "\">Atras</a>
                                  </div>
                                 <h1>Editar usuario</h1>

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
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Guardar\" />
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
        return ":usuarios:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 26,  59 => 22,  52 => 18,  48 => 17,  36 => 8,  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends 'baseSinFondo.html.twig' %}*/
/* */
/* */
/* {% block body %}*/
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-heading">*/
/*                                  <div style="float:right;  margin-top:20px;">*/
/*                                   <a   class="btn btn-sm btn-default"  href="{{ path('usuarios_index') }}">Atras</a>*/
/*                                   </div>*/
/*                                  <h1>Editar usuario</h1>*/
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
