<?php

/* base.html.twig */
class __TwigTemplate_ba482072fc4da96097ff412c0850c5f124990c2c934b37fe333cee9d9fe91a86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"container fondo\">
        ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "QMP";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        
            <!-- Latest compiled and minified CSS -->
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("star/jquery.rateyo.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>
            <!-- Optional theme -->
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/qmp.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

        ";
    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        // line 22
        echo "        
        <!--    <script>
                \$(document).ready(function(){
                    \$('[data-toggle=\"popover\"]').popover();   
                });
            </script>
        --!>
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins)
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
            <!-- Latest compiled and minified JavaScript -->
            <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
    
        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 33,  93 => 22,  90 => 21,  85 => 20,  78 => 13,  72 => 10,  68 => 9,  64 => 7,  61 => 6,  55 => 5,  49 => 36,  46 => 21,  44 => 20,  38 => 17,  35 => 16,  33 => 6,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}QMP{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*         */
/*             <!-- Latest compiled and minified CSS -->*/
/*             <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" crossorigin="anonymous">*/
/*             <link rel="stylesheet" href="{{asset('star/jquery.rateyo.min.css')}}" rel="stylesheet" />*/
/*             <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>*/
/*             <!-- Optional theme -->*/
/*             <link href="{{asset('assets/css/qmp.css')}}" rel="stylesheet" />*/
/* */
/*         {% endblock %}*/
/*         */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body class="container fondo">*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*         */
/*         <!--    <script>*/
/*                 $(document).ready(function(){*/
/*                     $('[data-toggle="popover"]').popover();   */
/*                 });*/
/*             </script>*/
/*         --!>*/
/*             <!-- jQuery (necessary for Bootstrap's JavaScript plugins)*/
/*             <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*             <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/*             <!-- Latest compiled and minified JavaScript -->*/
/*             <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/*     */
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
