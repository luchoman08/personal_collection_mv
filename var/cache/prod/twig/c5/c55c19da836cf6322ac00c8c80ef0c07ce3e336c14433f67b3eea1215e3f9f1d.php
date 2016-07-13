<?php

/* TinkerSoftUsuariosBundle:Default:index.html.twig */
class __TwigTemplate_3d11b29a2c84ddcf7a67072de99eee6642630d5cafe47f5d19a694c44ae776a4 extends Twig_Template
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
        // line 1
        echo "<script>
    
    window.location=\"";
        // line 3
        echo $this->env->getExtension('routing')->getUrl("vista_homepage");
        echo "\";
    
</script>
";
    }

    public function getTemplateName()
    {
        return "TinkerSoftUsuariosBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
/* <script>*/
/*     */
/*     window.location="{{url('vista_homepage')}}";*/
/*     */
/* </script>*/
/* */
