<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4f3e60ec1c9f3079acfdc63c8e455195291e4ec2c965059b1b46fe8660538b57 extends Twig_Template
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
        $__internal_3efdf9735806d127f3ca2417c47d9d13055384cb5568d3c152a34f58dd97fda6 = $this->env->getExtension("native_profiler");
        $__internal_3efdf9735806d127f3ca2417c47d9d13055384cb5568d3c152a34f58dd97fda6->enter($__internal_3efdf9735806d127f3ca2417c47d9d13055384cb5568d3c152a34f58dd97fda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3efdf9735806d127f3ca2417c47d9d13055384cb5568d3c152a34f58dd97fda6->leave($__internal_3efdf9735806d127f3ca2417c47d9d13055384cb5568d3c152a34f58dd97fda6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0c731256d15d548dc7005ea3c069cd411b53b80db8fd63285a0cb0d5794d0c1d = $this->env->getExtension("native_profiler");
        $__internal_0c731256d15d548dc7005ea3c069cd411b53b80db8fd63285a0cb0d5794d0c1d->enter($__internal_0c731256d15d548dc7005ea3c069cd411b53b80db8fd63285a0cb0d5794d0c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0c731256d15d548dc7005ea3c069cd411b53b80db8fd63285a0cb0d5794d0c1d->leave($__internal_0c731256d15d548dc7005ea3c069cd411b53b80db8fd63285a0cb0d5794d0c1d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2fd5c1d5b655e219f77c13f634fc176006fe10c3a4f6d6151ba85a47191cc177 = $this->env->getExtension("native_profiler");
        $__internal_2fd5c1d5b655e219f77c13f634fc176006fe10c3a4f6d6151ba85a47191cc177->enter($__internal_2fd5c1d5b655e219f77c13f634fc176006fe10c3a4f6d6151ba85a47191cc177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2fd5c1d5b655e219f77c13f634fc176006fe10c3a4f6d6151ba85a47191cc177->leave($__internal_2fd5c1d5b655e219f77c13f634fc176006fe10c3a4f6d6151ba85a47191cc177_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fcb4f2153f3d923797860765c128f28b7be56a034ffd958494db4f04846e66f3 = $this->env->getExtension("native_profiler");
        $__internal_fcb4f2153f3d923797860765c128f28b7be56a034ffd958494db4f04846e66f3->enter($__internal_fcb4f2153f3d923797860765c128f28b7be56a034ffd958494db4f04846e66f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fcb4f2153f3d923797860765c128f28b7be56a034ffd958494db4f04846e66f3->leave($__internal_fcb4f2153f3d923797860765c128f28b7be56a034ffd958494db4f04846e66f3_prof);

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
