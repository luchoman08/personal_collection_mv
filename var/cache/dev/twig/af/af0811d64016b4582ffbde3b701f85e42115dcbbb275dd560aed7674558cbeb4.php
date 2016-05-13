<?php

/* base.html.twig */
class __TwigTemplate_d68edc14f3c581a7f62757c514ab7a89454aab2b6df8d45550abea6fdc3378a6 extends Twig_Template
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
        $__internal_3d22576b7327879f9dbae0a7433dc2c8c3369b7f485072d249d395af28a86b0d = $this->env->getExtension("native_profiler");
        $__internal_3d22576b7327879f9dbae0a7433dc2c8c3369b7f485072d249d395af28a86b0d->enter($__internal_3d22576b7327879f9dbae0a7433dc2c8c3369b7f485072d249d395af28a86b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3d22576b7327879f9dbae0a7433dc2c8c3369b7f485072d249d395af28a86b0d->leave($__internal_3d22576b7327879f9dbae0a7433dc2c8c3369b7f485072d249d395af28a86b0d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_45140d33fada07dd99b94b956fc844dbfca7c3abfc9f123bdbd5768f90b0500d = $this->env->getExtension("native_profiler");
        $__internal_45140d33fada07dd99b94b956fc844dbfca7c3abfc9f123bdbd5768f90b0500d->enter($__internal_45140d33fada07dd99b94b956fc844dbfca7c3abfc9f123bdbd5768f90b0500d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_45140d33fada07dd99b94b956fc844dbfca7c3abfc9f123bdbd5768f90b0500d->leave($__internal_45140d33fada07dd99b94b956fc844dbfca7c3abfc9f123bdbd5768f90b0500d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9b8cb9c26d975484b223befcbd5e66ba9047f34f3388920cd28c4149f9469ba2 = $this->env->getExtension("native_profiler");
        $__internal_9b8cb9c26d975484b223befcbd5e66ba9047f34f3388920cd28c4149f9469ba2->enter($__internal_9b8cb9c26d975484b223befcbd5e66ba9047f34f3388920cd28c4149f9469ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9b8cb9c26d975484b223befcbd5e66ba9047f34f3388920cd28c4149f9469ba2->leave($__internal_9b8cb9c26d975484b223befcbd5e66ba9047f34f3388920cd28c4149f9469ba2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7518d39d9c3be655f841acec31c4d02d3b95c7568dcee597c94dc9f3658a2ce = $this->env->getExtension("native_profiler");
        $__internal_b7518d39d9c3be655f841acec31c4d02d3b95c7568dcee597c94dc9f3658a2ce->enter($__internal_b7518d39d9c3be655f841acec31c4d02d3b95c7568dcee597c94dc9f3658a2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b7518d39d9c3be655f841acec31c4d02d3b95c7568dcee597c94dc9f3658a2ce->leave($__internal_b7518d39d9c3be655f841acec31c4d02d3b95c7568dcee597c94dc9f3658a2ce_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b462853f39111c33906c7f9366894bf4f81fccf2b41ce904dd988d498b7bfd46 = $this->env->getExtension("native_profiler");
        $__internal_b462853f39111c33906c7f9366894bf4f81fccf2b41ce904dd988d498b7bfd46->enter($__internal_b462853f39111c33906c7f9366894bf4f81fccf2b41ce904dd988d498b7bfd46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b462853f39111c33906c7f9366894bf4f81fccf2b41ce904dd988d498b7bfd46->leave($__internal_b462853f39111c33906c7f9366894bf4f81fccf2b41ce904dd988d498b7bfd46_prof);

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
