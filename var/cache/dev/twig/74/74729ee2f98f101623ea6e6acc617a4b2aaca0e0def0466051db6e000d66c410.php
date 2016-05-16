<?php

/* base.html.twig */
class __TwigTemplate_d5f7b56f421640cb4cb6be7ecb7889af9e0d3a1a8b0f0cb7995c5c848e5d6603 extends Twig_Template
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
        $__internal_e9e267be12a3b3c6de9c09669b44890f0e2f768162c3f4c3e92aff7fbcea8ebb = $this->env->getExtension("native_profiler");
        $__internal_e9e267be12a3b3c6de9c09669b44890f0e2f768162c3f4c3e92aff7fbcea8ebb->enter($__internal_e9e267be12a3b3c6de9c09669b44890f0e2f768162c3f4c3e92aff7fbcea8ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    <body class=\"container\">
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
        
        $__internal_e9e267be12a3b3c6de9c09669b44890f0e2f768162c3f4c3e92aff7fbcea8ebb->leave($__internal_e9e267be12a3b3c6de9c09669b44890f0e2f768162c3f4c3e92aff7fbcea8ebb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2db4a5e3a6f8db58de4b5eacc8a81e0278c901a17e288a2f41bdb465aec6295d = $this->env->getExtension("native_profiler");
        $__internal_2db4a5e3a6f8db58de4b5eacc8a81e0278c901a17e288a2f41bdb465aec6295d->enter($__internal_2db4a5e3a6f8db58de4b5eacc8a81e0278c901a17e288a2f41bdb465aec6295d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2db4a5e3a6f8db58de4b5eacc8a81e0278c901a17e288a2f41bdb465aec6295d->leave($__internal_2db4a5e3a6f8db58de4b5eacc8a81e0278c901a17e288a2f41bdb465aec6295d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0cc56a9fb1f9313438768b2fcfe99907d94eccdcd4c35eb49f8d2cc0b73a035c = $this->env->getExtension("native_profiler");
        $__internal_0cc56a9fb1f9313438768b2fcfe99907d94eccdcd4c35eb49f8d2cc0b73a035c->enter($__internal_0cc56a9fb1f9313438768b2fcfe99907d94eccdcd4c35eb49f8d2cc0b73a035c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        
            <!-- Latest compiled and minified CSS -->
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>
            <!-- Optional theme -->
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\" crossorigin=\"anonymous\">

           
        ";
        
        $__internal_0cc56a9fb1f9313438768b2fcfe99907d94eccdcd4c35eb49f8d2cc0b73a035c->leave($__internal_0cc56a9fb1f9313438768b2fcfe99907d94eccdcd4c35eb49f8d2cc0b73a035c_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_9259e99df178e67fa06f5d0129574b01785c2de964fe24baa538514fa61dcc7e = $this->env->getExtension("native_profiler");
        $__internal_9259e99df178e67fa06f5d0129574b01785c2de964fe24baa538514fa61dcc7e->enter($__internal_9259e99df178e67fa06f5d0129574b01785c2de964fe24baa538514fa61dcc7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9259e99df178e67fa06f5d0129574b01785c2de964fe24baa538514fa61dcc7e->leave($__internal_9259e99df178e67fa06f5d0129574b01785c2de964fe24baa538514fa61dcc7e_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_58267ec62a8164efcc091652c6844025e921100b880df43118740c8752e29c0d = $this->env->getExtension("native_profiler");
        $__internal_58267ec62a8164efcc091652c6844025e921100b880df43118740c8752e29c0d->enter($__internal_58267ec62a8164efcc091652c6844025e921100b880df43118740c8752e29c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "        
            <script>
                \$(document).ready(function(){
                    \$('[data-toggle=\"popover\"]').popover();   
                });
            </script>

            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
        
             <!-- Latest compiled and minified JavaScript -->
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
        
        ";
        
        $__internal_58267ec62a8164efcc091652c6844025e921100b880df43118740c8752e29c0d->leave($__internal_58267ec62a8164efcc091652c6844025e921100b880df43118740c8752e29c0d_prof);

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
        return array (  111 => 22,  105 => 21,  94 => 20,  79 => 7,  73 => 6,  61 => 5,  52 => 36,  49 => 21,  47 => 20,  41 => 17,  38 => 16,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*         */
/*             <!-- Latest compiled and minified CSS -->*/
/*             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/*             <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>*/
/*             <!-- Optional theme -->*/
/*             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">*/
/* */
/*            */
/*         {% endblock %}*/
/*         */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body class="container">*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*         */
/*             <script>*/
/*                 $(document).ready(function(){*/
/*                     $('[data-toggle="popover"]').popover();   */
/*                 });*/
/*             </script>*/
/* */
/*             <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->*/
/*             <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*         */
/*              <!-- Latest compiled and minified JavaScript -->*/
/*             <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/*         */
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
