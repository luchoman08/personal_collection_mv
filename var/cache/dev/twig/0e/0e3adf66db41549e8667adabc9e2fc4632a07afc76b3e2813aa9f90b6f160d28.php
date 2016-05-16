<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_4e5a52890aaba702dfae53fd6aaf6bd350fe70b32f3a4f902f61306b8e1e2bce extends Twig_Template
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
        $__internal_aaa5336d3d58d335b27015ba382d98bdbc3b95a2b048016c8af95c0dba8586ed = $this->env->getExtension("native_profiler");
        $__internal_aaa5336d3d58d335b27015ba382d98bdbc3b95a2b048016c8af95c0dba8586ed->enter($__internal_aaa5336d3d58d335b27015ba382d98bdbc3b95a2b048016c8af95c0dba8586ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_aaa5336d3d58d335b27015ba382d98bdbc3b95a2b048016c8af95c0dba8586ed->leave($__internal_aaa5336d3d58d335b27015ba382d98bdbc3b95a2b048016c8af95c0dba8586ed_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
