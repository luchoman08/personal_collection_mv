<?php

/* :usuarios:new.html.twig */
class __TwigTemplate_416df7c4e1083052b7ac774137a5ab6f8e068b97bf2efd1dc9f605b0fab4b06b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseSinFondo.html.twig", ":usuarios:new.html.twig", 1);
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

                       <div class=\"panel panel-default\">
                         
                        <div class=\"panel-heading\">
                                 <div style=\"float:right;  margin-top:20px;\">
                                  <input   type=\"submit\" value=\"Atras\" class=\"btn btn-sm btn-default\" onclick=\"location.href = '";
        // line 10
        echo $this->env->getExtension('routing')->getUrl("usuarios_index");
        echo "';\">
                                  </div>
                                 <h3>Registro de nuevos usuarios</h3>

                        </div>
                        <div class=\"panel-body\">
                            ";
        // line 16
        if (((isset($context["error"]) ? $context["error"] : null) == 1)) {
            // line 17
            echo "<div class=\"alert alert-warning alert-dismissible\" role=\"alert\">
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
  El nickname \"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nickname", array()), "html", null, true);
            echo "\" ya esta registrado 
</div>
";
        }
        // line 22
        echo "
                            ";
        // line 23
        if (((isset($context["error"]) ? $context["error"] : null) == 2)) {
            // line 24
            echo "<div class=\"alert alert-warning alert-dismissible\" role=\"alert\">
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
  El correo \"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "correoElectronico", array()), "html", null, true);
            echo "\" ya esta registrado 
</div>
";
        }
        // line 29
        echo "

    ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        <br>
        <center>
        <input type=\"submit\" value=\"Crear\" class=\"btn btn-primary btn-sm\" />
        </center>
    ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

</div>
</div>
";
    }

    public function getTemplateName()
    {
        return ":usuarios:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 37,  83 => 32,  79 => 31,  75 => 29,  69 => 26,  65 => 24,  63 => 23,  60 => 22,  54 => 19,  50 => 17,  48 => 16,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'baseSinFondo.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* */
/*                        <div class="panel panel-default">*/
/*                          */
/*                         <div class="panel-heading">*/
/*                                  <div style="float:right;  margin-top:20px;">*/
/*                                   <input   type="submit" value="Atras" class="btn btn-sm btn-default" onclick="location.href = '{{url('usuarios_index')}}';">*/
/*                                   </div>*/
/*                                  <h3>Registro de nuevos usuarios</h3>*/
/* */
/*                         </div>*/
/*                         <div class="panel-body">*/
/*                             {%if error ==1%}*/
/* <div class="alert alert-warning alert-dismissible" role="alert">*/
/*   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*   El nickname "{{usuario.nickname}}" ya esta registrado */
/* </div>*/
/* {%endif%}*/
/* */
/*                             {%if error ==2%}*/
/* <div class="alert alert-warning alert-dismissible" role="alert">*/
/*   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*   El correo "{{usuario.correoElectronico}}" ya esta registrado */
/* </div>*/
/* {%endif%}*/
/* */
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <br>*/
/*         <center>*/
/*         <input type="submit" value="Crear" class="btn btn-primary btn-sm" />*/
/*         </center>*/
/*     {{ form_end(form) }}*/
/* */
/* </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
