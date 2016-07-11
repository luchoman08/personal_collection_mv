<?php

/* :usuarios:registrarUsuario.html.twig */
class __TwigTemplate_5a235bbb81349865e8d1cbdce91683ebc2784ef25c20b8b145dadf9550b9bfd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", ":usuarios:registrarUsuario.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'loginoptions' => array($this, 'block_loginoptions'),
            'classcontenido' => array($this, 'block_classcontenido'),
            'contenido' => array($this, 'block_contenido'),
            'barraderecha' => array($this, 'block_barraderecha'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Registro de usuario ";
    }

    // line 3
    public function block_loginoptions($context, array $blocks = array())
    {
    }

    // line 6
    public function block_classcontenido($context, array $blocks = array())
    {
        echo "col-md-12 fondoContenido";
    }

    // line 7
    public function block_contenido($context, array $blocks = array())
    {
        // line 8
        echo "
   <iframe =\"100%\" height=\"650\"  src=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("usuarios_new_estandar");
        echo "\">
   </iframe>

";
    }

    // line 13
    public function block_barraderecha($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return ":usuarios:registrarUsuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 13,  55 => 9,  52 => 8,  49 => 7,  43 => 6,  38 => 3,  32 => 2,  11 => 1,);
    }
}
/* {%extends 'index.html.twig'%}*/
/* {%block title%} Registro de usuario {%endblock%}*/
/* {%block loginoptions%}*/
/* {% endblock %}*/
/* */
/* {% block classcontenido %}col-md-12 fondoContenido{% endblock %}*/
/* {% block contenido %}*/
/* */
/*    <iframe ="100%" height="650"  src="{{path('usuarios_new_estandar')}}">*/
/*    </iframe>*/
/* */
/* {%endblock%}*/
/* {%block barraderecha%}*/
/* {%endblock%}*/
/* */
