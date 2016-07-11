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
        <input type=\"submit\" value=\"Crear\" class=\"btn btn-primary btn-sm\" />
        </center>
    ";
        // line 22
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
        return array (  57 => 22,  49 => 17,  45 => 16,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'baseSinFondo.html.twig' %}*/
/* */
/* {% block body %}*/
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
/*         <input type="submit" value="Crear" class="btn btn-primary btn-sm" />*/
/*         </center>*/
/*     {{ form_end(form) }}*/
/* */
/* </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
