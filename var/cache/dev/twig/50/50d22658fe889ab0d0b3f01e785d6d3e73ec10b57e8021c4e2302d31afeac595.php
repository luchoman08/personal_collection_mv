<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_72dd5215ce21afa00a0a49fc0839e759c88913e9a10f66b724073fe882e66ae4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aba2fa606d243de7de4eb0b84afa872c43115734d88106f7725d85fa1c8417f0 = $this->env->getExtension("native_profiler");
        $__internal_aba2fa606d243de7de4eb0b84afa872c43115734d88106f7725d85fa1c8417f0->enter($__internal_aba2fa606d243de7de4eb0b84afa872c43115734d88106f7725d85fa1c8417f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_aba2fa606d243de7de4eb0b84afa872c43115734d88106f7725d85fa1c8417f0->leave($__internal_aba2fa606d243de7de4eb0b84afa872c43115734d88106f7725d85fa1c8417f0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
