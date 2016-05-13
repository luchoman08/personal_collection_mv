<?php

/* base.html.twig */
class __TwigTemplate_4629afbee337d51c721a2a3a2296a52577cb140edf4e8d2777a4b2b7006aad61 extends Twig_Template
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
        $__internal_b6c2bde74ab68c1589aaf241957699adcc131931c31db27e23775094cc0824d5 = $this->env->getExtension("native_profiler");
        $__internal_b6c2bde74ab68c1589aaf241957699adcc131931c31db27e23775094cc0824d5->enter($__internal_b6c2bde74ab68c1589aaf241957699adcc131931c31db27e23775094cc0824d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b6c2bde74ab68c1589aaf241957699adcc131931c31db27e23775094cc0824d5->leave($__internal_b6c2bde74ab68c1589aaf241957699adcc131931c31db27e23775094cc0824d5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f341f34623990fbfdb9c6af10ef0275bf666368249ae489f76cd7b5720b1a46 = $this->env->getExtension("native_profiler");
        $__internal_3f341f34623990fbfdb9c6af10ef0275bf666368249ae489f76cd7b5720b1a46->enter($__internal_3f341f34623990fbfdb9c6af10ef0275bf666368249ae489f76cd7b5720b1a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3f341f34623990fbfdb9c6af10ef0275bf666368249ae489f76cd7b5720b1a46->leave($__internal_3f341f34623990fbfdb9c6af10ef0275bf666368249ae489f76cd7b5720b1a46_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e709d7e13bbe6351c64447a7bcf3f61065f6feab26b9ab7ea3869db519a3e4c6 = $this->env->getExtension("native_profiler");
        $__internal_e709d7e13bbe6351c64447a7bcf3f61065f6feab26b9ab7ea3869db519a3e4c6->enter($__internal_e709d7e13bbe6351c64447a7bcf3f61065f6feab26b9ab7ea3869db519a3e4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e709d7e13bbe6351c64447a7bcf3f61065f6feab26b9ab7ea3869db519a3e4c6->leave($__internal_e709d7e13bbe6351c64447a7bcf3f61065f6feab26b9ab7ea3869db519a3e4c6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d183197bda716863cd82200573857615ac146ba23a606c1a5c0905848bbc1327 = $this->env->getExtension("native_profiler");
        $__internal_d183197bda716863cd82200573857615ac146ba23a606c1a5c0905848bbc1327->enter($__internal_d183197bda716863cd82200573857615ac146ba23a606c1a5c0905848bbc1327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d183197bda716863cd82200573857615ac146ba23a606c1a5c0905848bbc1327->leave($__internal_d183197bda716863cd82200573857615ac146ba23a606c1a5c0905848bbc1327_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a231f0f92879e3870b4e150291f615346b43b1dbb398eeff1e28ddf415f17d9a = $this->env->getExtension("native_profiler");
        $__internal_a231f0f92879e3870b4e150291f615346b43b1dbb398eeff1e28ddf415f17d9a->enter($__internal_a231f0f92879e3870b4e150291f615346b43b1dbb398eeff1e28ddf415f17d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a231f0f92879e3870b4e150291f615346b43b1dbb398eeff1e28ddf415f17d9a->leave($__internal_a231f0f92879e3870b4e150291f615346b43b1dbb398eeff1e28ddf415f17d9a_prof);

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
