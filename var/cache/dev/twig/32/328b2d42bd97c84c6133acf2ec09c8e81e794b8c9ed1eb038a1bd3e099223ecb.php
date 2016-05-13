<?php

/* base.html.twig */
class __TwigTemplate_4bba17e58d43a89c381565c401c04bff2e375787a0947d1bf3e0aa8a84a87c81 extends Twig_Template
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
        $__internal_7016294fbb9ca1aa368c15b73cce4254ae0b05fcec4d3d2f67483244fb5d3594 = $this->env->getExtension("native_profiler");
        $__internal_7016294fbb9ca1aa368c15b73cce4254ae0b05fcec4d3d2f67483244fb5d3594->enter($__internal_7016294fbb9ca1aa368c15b73cce4254ae0b05fcec4d3d2f67483244fb5d3594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7016294fbb9ca1aa368c15b73cce4254ae0b05fcec4d3d2f67483244fb5d3594->leave($__internal_7016294fbb9ca1aa368c15b73cce4254ae0b05fcec4d3d2f67483244fb5d3594_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_801bb2f97945b89efae7257ab3879567fce0d2cce18de0352cd687c6ce637176 = $this->env->getExtension("native_profiler");
        $__internal_801bb2f97945b89efae7257ab3879567fce0d2cce18de0352cd687c6ce637176->enter($__internal_801bb2f97945b89efae7257ab3879567fce0d2cce18de0352cd687c6ce637176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_801bb2f97945b89efae7257ab3879567fce0d2cce18de0352cd687c6ce637176->leave($__internal_801bb2f97945b89efae7257ab3879567fce0d2cce18de0352cd687c6ce637176_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_def9586288f6c28cfb8afb849ccbfe65726f3168f5bc39982e33f3d7b1d1887d = $this->env->getExtension("native_profiler");
        $__internal_def9586288f6c28cfb8afb849ccbfe65726f3168f5bc39982e33f3d7b1d1887d->enter($__internal_def9586288f6c28cfb8afb849ccbfe65726f3168f5bc39982e33f3d7b1d1887d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_def9586288f6c28cfb8afb849ccbfe65726f3168f5bc39982e33f3d7b1d1887d->leave($__internal_def9586288f6c28cfb8afb849ccbfe65726f3168f5bc39982e33f3d7b1d1887d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d97bf4df1dc75e67522fc0a5f93a5a91e56f533f89e331bec045fba0c3f8258 = $this->env->getExtension("native_profiler");
        $__internal_2d97bf4df1dc75e67522fc0a5f93a5a91e56f533f89e331bec045fba0c3f8258->enter($__internal_2d97bf4df1dc75e67522fc0a5f93a5a91e56f533f89e331bec045fba0c3f8258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2d97bf4df1dc75e67522fc0a5f93a5a91e56f533f89e331bec045fba0c3f8258->leave($__internal_2d97bf4df1dc75e67522fc0a5f93a5a91e56f533f89e331bec045fba0c3f8258_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3b38669924bf36a419a0450bbbd8b4f44826d55fe678018c756ca593a75c76e3 = $this->env->getExtension("native_profiler");
        $__internal_3b38669924bf36a419a0450bbbd8b4f44826d55fe678018c756ca593a75c76e3->enter($__internal_3b38669924bf36a419a0450bbbd8b4f44826d55fe678018c756ca593a75c76e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3b38669924bf36a419a0450bbbd8b4f44826d55fe678018c756ca593a75c76e3->leave($__internal_3b38669924bf36a419a0450bbbd8b4f44826d55fe678018c756ca593a75c76e3_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
