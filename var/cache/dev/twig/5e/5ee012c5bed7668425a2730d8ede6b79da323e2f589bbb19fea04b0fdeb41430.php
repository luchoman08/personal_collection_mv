<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_24784cce7e9dce81ee19e727e29ecabc4ab510aba61a6f4c39e1a4637667ced5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86986d69c8a8658d2908e8f097112f17677048f8b5e15dd4c12d3701284e4e28 = $this->env->getExtension("native_profiler");
        $__internal_86986d69c8a8658d2908e8f097112f17677048f8b5e15dd4c12d3701284e4e28->enter($__internal_86986d69c8a8658d2908e8f097112f17677048f8b5e15dd4c12d3701284e4e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86986d69c8a8658d2908e8f097112f17677048f8b5e15dd4c12d3701284e4e28->leave($__internal_86986d69c8a8658d2908e8f097112f17677048f8b5e15dd4c12d3701284e4e28_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e1e3f0db99f73f0e0baaafaf8a0c51c1b269934280f5c399d156e2ac4bf7b57f = $this->env->getExtension("native_profiler");
        $__internal_e1e3f0db99f73f0e0baaafaf8a0c51c1b269934280f5c399d156e2ac4bf7b57f->enter($__internal_e1e3f0db99f73f0e0baaafaf8a0c51c1b269934280f5c399d156e2ac4bf7b57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e1e3f0db99f73f0e0baaafaf8a0c51c1b269934280f5c399d156e2ac4bf7b57f->leave($__internal_e1e3f0db99f73f0e0baaafaf8a0c51c1b269934280f5c399d156e2ac4bf7b57f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e0c449b1c752747c62d29ed683d269780a9c7a5151859e5f1f26d3e87dd92570 = $this->env->getExtension("native_profiler");
        $__internal_e0c449b1c752747c62d29ed683d269780a9c7a5151859e5f1f26d3e87dd92570->enter($__internal_e0c449b1c752747c62d29ed683d269780a9c7a5151859e5f1f26d3e87dd92570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e0c449b1c752747c62d29ed683d269780a9c7a5151859e5f1f26d3e87dd92570->leave($__internal_e0c449b1c752747c62d29ed683d269780a9c7a5151859e5f1f26d3e87dd92570_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a7c886b5179418395f54a15634301ac417d4b7086c08aa2ede3213b4e0323430 = $this->env->getExtension("native_profiler");
        $__internal_a7c886b5179418395f54a15634301ac417d4b7086c08aa2ede3213b4e0323430->enter($__internal_a7c886b5179418395f54a15634301ac417d4b7086c08aa2ede3213b4e0323430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a7c886b5179418395f54a15634301ac417d4b7086c08aa2ede3213b4e0323430->leave($__internal_a7c886b5179418395f54a15634301ac417d4b7086c08aa2ede3213b4e0323430_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
