<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_52bbfbd135d5b0fcc3b0485f1aa7ea99c7de1cca9f133d4ac529aa1c565a3733 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_494f01234afe49bcf2dd75d67f23b0d0a5735b399aded3d4fe5a329259bd9b20 = $this->env->getExtension("native_profiler");
        $__internal_494f01234afe49bcf2dd75d67f23b0d0a5735b399aded3d4fe5a329259bd9b20->enter($__internal_494f01234afe49bcf2dd75d67f23b0d0a5735b399aded3d4fe5a329259bd9b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_494f01234afe49bcf2dd75d67f23b0d0a5735b399aded3d4fe5a329259bd9b20->leave($__internal_494f01234afe49bcf2dd75d67f23b0d0a5735b399aded3d4fe5a329259bd9b20_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_71917fa59feaf8a1d4a73f6744469743f399f97cb5211f3867347e9f30546ae7 = $this->env->getExtension("native_profiler");
        $__internal_71917fa59feaf8a1d4a73f6744469743f399f97cb5211f3867347e9f30546ae7->enter($__internal_71917fa59feaf8a1d4a73f6744469743f399f97cb5211f3867347e9f30546ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_71917fa59feaf8a1d4a73f6744469743f399f97cb5211f3867347e9f30546ae7->leave($__internal_71917fa59feaf8a1d4a73f6744469743f399f97cb5211f3867347e9f30546ae7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c98aa0f4d0e19170196f268e5d722c9a627abac3f65ca348d705196c296e4c0d = $this->env->getExtension("native_profiler");
        $__internal_c98aa0f4d0e19170196f268e5d722c9a627abac3f65ca348d705196c296e4c0d->enter($__internal_c98aa0f4d0e19170196f268e5d722c9a627abac3f65ca348d705196c296e4c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c98aa0f4d0e19170196f268e5d722c9a627abac3f65ca348d705196c296e4c0d->leave($__internal_c98aa0f4d0e19170196f268e5d722c9a627abac3f65ca348d705196c296e4c0d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_19a109391274ae175d95f057540887640f12c3032880264f5d26ce64e6606ab1 = $this->env->getExtension("native_profiler");
        $__internal_19a109391274ae175d95f057540887640f12c3032880264f5d26ce64e6606ab1->enter($__internal_19a109391274ae175d95f057540887640f12c3032880264f5d26ce64e6606ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_19a109391274ae175d95f057540887640f12c3032880264f5d26ce64e6606ab1->leave($__internal_19a109391274ae175d95f057540887640f12c3032880264f5d26ce64e6606ab1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
