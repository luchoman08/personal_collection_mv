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
                                 <h1>Registro de nuevos usuarios</h1>

                        </div>
                        <div class=\"panel-body\">

    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        <br>
        <center>
        <input type=\"submit\" value=\"Crear\" id=\"btnCrear\" class=\"btn btn-primary btn-sm\" />
        </center>
    ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

</div>
</div>
";
    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        // line 28
        echo "
";
        // line 29
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script>
\$('#btnCrear').click(function(){
   

    window.location.href = \"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\";
});
</script>
";
    }

    // line 38
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
        return array (  97 => 38,  89 => 34,  81 => 29,  78 => 28,  75 => 27,  66 => 22,  58 => 17,  54 => 16,  40 => 4,  37 => 3,  31 => 2,  11 => 1,);
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
/*                                  <h1>Registro de nuevos usuarios</h1>*/
/* */
/*                         </div>*/
/*                         <div class="panel-body">*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <br>*/
/*         <center>*/
/*         <input type="submit" value="Crear" id="btnCrear" class="btn btn-primary btn-sm" />*/
/*         </center>*/
/*     {{ form_end(form) }}*/
/* */
/* </div>*/
/* </div>*/
/* {% endblock %}*/
/* {%block javascripts%}*/
/* */
/* {{parent()}}*/
/* <script>*/
/* $('#btnCrear').click(function(){*/
/*    */
/* */
/*     window.location.href = "{{path('login')}}";*/
/* });*/
/* </script>*/
/* {%endblock%}*/
/* {%block barraderecha%}*/
/* {%endblock%}*/
