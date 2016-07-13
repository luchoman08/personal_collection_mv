<?php

/* :usuarios:newEstandar.html.twig */
class __TwigTemplate_50c326ece99eb7220dddbea672a32fe7b55599feab0a6dc99d86b8c64969d71e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", ":usuarios:newEstandar.html.twig", 1);
        $this->blocks = array(
            'classcontenido' => array($this, 'block_classcontenido'),
            'contenido' => array($this, 'block_contenido'),
            'javascripts' => array($this, 'block_javascripts'),
            'barraderecha' => array($this, 'block_barraderecha'),
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
    public function block_classcontenido($context, array $blocks = array())
    {
        echo "col-md-12 fondoContenido";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "

                       <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                                 <div style=\"float:right;  margin-top:20px;\">
                                  <input   type=\"submit\" value=\"Atras\" class=\"btn btn-sm btn-default\"  onclick=\"window.history.back();\">
                                  </div>
                                 <center><h2>Bienvenido ^_- </h2></center>

                        </div>
                        <div class=\"panel-body\">
                           
                           
                           
";
        // line 18
        if (((isset($context["error"]) ? $context["error"] : null) == 1)) {
            // line 19
            echo "<div class=\"alert alert-warning alert-dismissible\" role=\"alert\">
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
  El nickname \"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nickname", array()), "html", null, true);
            echo "\" ya esta registrado 
</div>
";
        }
        // line 24
        echo "
";
        // line 25
        if (((isset($context["error"]) ? $context["error"] : null) == 2)) {
            // line 26
            echo "<div class=\"alert alert-warning alert-dismissible\" role=\"alert\">
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
  El correo \"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "correoElectronico", array()), "html", null, true);
            echo "\" ya esta registrado 
</div>
";
        }
        // line 31
        echo "
<div class=\"registro\">
      <div class=\"formulario-registro\">
         ";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
            <br>
            <center>
            <input type=\"submit\" value=\"Crear\" id=\"btnCrear\" class=\"btn btn-primary btn-sm\" />
            </center>
        ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
      </div>
      <div class=\"saludo\">
         <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/baymaxsaluda.png"), "html", null, true);
        echo "\">
      </div>
   </div>

    

</div>
</div>
";
    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        // line 53
        echo "
";
        // line 54
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

";
    }

    // line 57
    public function block_barraderecha($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return ":usuarios:newEstandar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 57,  125 => 54,  122 => 53,  119 => 52,  106 => 43,  100 => 40,  92 => 35,  88 => 34,  83 => 31,  77 => 28,  73 => 26,  71 => 25,  68 => 24,  62 => 21,  58 => 19,  56 => 18,  40 => 4,  37 => 3,  31 => 2,  11 => 1,);
    }
}
/* {%extends 'index.html.twig'%}*/
/* {% block classcontenido %}col-md-12 fondoContenido{% endblock %}*/
/* {% block contenido %}*/
/* */
/* */
/*                        <div class="panel panel-default">*/
/*                         <div class="panel-heading">*/
/*                                  <div style="float:right;  margin-top:20px;">*/
/*                                   <input   type="submit" value="Atras" class="btn btn-sm btn-default"  onclick="window.history.back();">*/
/*                                   </div>*/
/*                                  <center><h2>Bienvenido ^_- </h2></center>*/
/* */
/*                         </div>*/
/*                         <div class="panel-body">*/
/*                            */
/*                            */
/*                            */
/* {%if error ==1%}*/
/* <div class="alert alert-warning alert-dismissible" role="alert">*/
/*   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*   El nickname "{{usuario.nickname}}" ya esta registrado */
/* </div>*/
/* {%endif%}*/
/* */
/* {%if error ==2%}*/
/* <div class="alert alert-warning alert-dismissible" role="alert">*/
/*   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*   El correo "{{usuario.correoElectronico}}" ya esta registrado */
/* </div>*/
/* {%endif%}*/
/* */
/* <div class="registro">*/
/*       <div class="formulario-registro">*/
/*          {{ form_start(form) }}*/
/*             {{ form_widget(form) }}*/
/*             <br>*/
/*             <center>*/
/*             <input type="submit" value="Crear" id="btnCrear" class="btn btn-primary btn-sm" />*/
/*             </center>*/
/*         {{ form_end(form) }}*/
/*       </div>*/
/*       <div class="saludo">*/
/*          <img src="{{asset('assets/images/baymaxsaluda.png')}}">*/
/*       </div>*/
/*    </div>*/
/* */
/*     */
/* */
/* </div>*/
/* </div>*/
/* {% endblock %}*/
/* {%block javascripts%}*/
/* */
/* {{parent()}}*/
/* */
/* {%endblock%}*/
/* {%block barraderecha%}*/
/* {%endblock%}*/
