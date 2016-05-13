<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d14cc18ef5b714b6ce71097615bb552c09b4f25384449a3ddec652f52f0cb993 extends Twig_Template
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
        $__internal_0256f470ac35ebcb8b5e30fd9a7677bd5ba62a653a525ae3a412d64693bb61dd = $this->env->getExtension("native_profiler");
        $__internal_0256f470ac35ebcb8b5e30fd9a7677bd5ba62a653a525ae3a412d64693bb61dd->enter($__internal_0256f470ac35ebcb8b5e30fd9a7677bd5ba62a653a525ae3a412d64693bb61dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0256f470ac35ebcb8b5e30fd9a7677bd5ba62a653a525ae3a412d64693bb61dd->leave($__internal_0256f470ac35ebcb8b5e30fd9a7677bd5ba62a653a525ae3a412d64693bb61dd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8828bd8896002f9e4a2490c5cc04423afae99aff6624cee31b050364cc3cdc5e = $this->env->getExtension("native_profiler");
        $__internal_8828bd8896002f9e4a2490c5cc04423afae99aff6624cee31b050364cc3cdc5e->enter($__internal_8828bd8896002f9e4a2490c5cc04423afae99aff6624cee31b050364cc3cdc5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8828bd8896002f9e4a2490c5cc04423afae99aff6624cee31b050364cc3cdc5e->leave($__internal_8828bd8896002f9e4a2490c5cc04423afae99aff6624cee31b050364cc3cdc5e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_db448ddde36c82164ff937e922ccd3683ed9e7ba23d701138be76242bc7549c1 = $this->env->getExtension("native_profiler");
        $__internal_db448ddde36c82164ff937e922ccd3683ed9e7ba23d701138be76242bc7549c1->enter($__internal_db448ddde36c82164ff937e922ccd3683ed9e7ba23d701138be76242bc7549c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_db448ddde36c82164ff937e922ccd3683ed9e7ba23d701138be76242bc7549c1->leave($__internal_db448ddde36c82164ff937e922ccd3683ed9e7ba23d701138be76242bc7549c1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1e5a831585107f920a5c9291a4ae4fb71351447b46905c0f915e2c7b77ccac52 = $this->env->getExtension("native_profiler");
        $__internal_1e5a831585107f920a5c9291a4ae4fb71351447b46905c0f915e2c7b77ccac52->enter($__internal_1e5a831585107f920a5c9291a4ae4fb71351447b46905c0f915e2c7b77ccac52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1e5a831585107f920a5c9291a4ae4fb71351447b46905c0f915e2c7b77ccac52->leave($__internal_1e5a831585107f920a5c9291a4ae4fb71351447b46905c0f915e2c7b77ccac52_prof);

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
