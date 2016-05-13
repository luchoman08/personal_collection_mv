<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_06a650e88cf5113ddbd7b67def7c969075de93d564f96788a6f56158e6f894d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_b63363cb2e6df5135fb0bfc50a5e3380fd77f8aa71ff32de1434111c563d882c = $this->env->getExtension("native_profiler");
        $__internal_b63363cb2e6df5135fb0bfc50a5e3380fd77f8aa71ff32de1434111c563d882c->enter($__internal_b63363cb2e6df5135fb0bfc50a5e3380fd77f8aa71ff32de1434111c563d882c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b63363cb2e6df5135fb0bfc50a5e3380fd77f8aa71ff32de1434111c563d882c->leave($__internal_b63363cb2e6df5135fb0bfc50a5e3380fd77f8aa71ff32de1434111c563d882c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6774eadbd16eb5126be235bd018ad302fa04bb4917f5eee2a74448e399d03edd = $this->env->getExtension("native_profiler");
        $__internal_6774eadbd16eb5126be235bd018ad302fa04bb4917f5eee2a74448e399d03edd->enter($__internal_6774eadbd16eb5126be235bd018ad302fa04bb4917f5eee2a74448e399d03edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6774eadbd16eb5126be235bd018ad302fa04bb4917f5eee2a74448e399d03edd->leave($__internal_6774eadbd16eb5126be235bd018ad302fa04bb4917f5eee2a74448e399d03edd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_428cb56639246d3739667d1ab09623e0477a3c1fb2058b1e90574b2437d78f55 = $this->env->getExtension("native_profiler");
        $__internal_428cb56639246d3739667d1ab09623e0477a3c1fb2058b1e90574b2437d78f55->enter($__internal_428cb56639246d3739667d1ab09623e0477a3c1fb2058b1e90574b2437d78f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_428cb56639246d3739667d1ab09623e0477a3c1fb2058b1e90574b2437d78f55->leave($__internal_428cb56639246d3739667d1ab09623e0477a3c1fb2058b1e90574b2437d78f55_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9460b0d707fd7cfcc77e6eff797d86ac62acc29c1f2271a7d2e5e20b71df17d0 = $this->env->getExtension("native_profiler");
        $__internal_9460b0d707fd7cfcc77e6eff797d86ac62acc29c1f2271a7d2e5e20b71df17d0->enter($__internal_9460b0d707fd7cfcc77e6eff797d86ac62acc29c1f2271a7d2e5e20b71df17d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9460b0d707fd7cfcc77e6eff797d86ac62acc29c1f2271a7d2e5e20b71df17d0->leave($__internal_9460b0d707fd7cfcc77e6eff797d86ac62acc29c1f2271a7d2e5e20b71df17d0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
