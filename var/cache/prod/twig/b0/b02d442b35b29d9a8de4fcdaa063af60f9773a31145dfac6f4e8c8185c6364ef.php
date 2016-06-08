<?php

/* VistaBundle:Default:login.html.twig */
class __TwigTemplate_ee9fca4b0b56e08cb26d41ac8fe4b144b7cb3f20eeaed28089bcc07daff19096 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "VistaBundle:Default:login.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'classcontenido' => array($this, 'block_classcontenido'),
            'login' => array($this, 'block_login'),
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

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    \t
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t<script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/greeter.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
  \t<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
";
    }

    // line 15
    public function block_classcontenido($context, array $blocks = array())
    {
        echo "col-md-12 fondoContenido";
    }

    // line 16
    public function block_login($context, array $blocks = array())
    {
    }

    // line 17
    public function block_contenido($context, array $blocks = array())
    {
        // line 18
        echo "
\t      \t     <div class=\"register\">
\t\t\t\t   <div class=\"col-md-6 login-left\">
\t\t\t\t  \t <h3> Nuevo Usuario</h3>
\t\t\t\t\t <p>Al crear una cuenta en nuestra página, usted podrá tener acceso a las últimas películas de estreno, generar listas de reproducción de películas vistas o por ver y su categoría.</p>
\t\t\t\t\t <a class=\"acount-btn\" href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getUrl("usuarios_new");
        echo "\">Crear una nueva cuenta</a>
\t\t\t\t   </div>
\t\t\t\t   <div class=\"col-md-6 login-right\">
\t\t\t\t  \t<h3>Usuarios Registrados</h3>
\t\t\t\t\t<p>Si usted tiene cuenta con nosotros, porfavor inicie sesión.</p>
\t\t\t\t\t";
        // line 28
        if (((isset($context["error"]) ? $context["error"] : null) == 1)) {
            // line 29
            echo "\t\t\t\t\t<div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
  \t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
  \t\t\t\t\t<strong>Error!</strong> Los datos ingresados no corresponden a un usuario registrado.
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 34
        echo "\t\t\t\t\t
\t\t\t\t\t";
        // line 35
        if (((isset($context["error"]) ? $context["error"] : null) == 2)) {
            // line 36
            echo "\t\t\t\t\t<div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
  \t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
  \t\t\t\t\t<strong>Error!</strong> Debe ingresar primero.
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 41
        echo "\t\t\t\t\t";
        if (((isset($context["error"]) ? $context["error"] : null) == 3)) {
            // line 42
            echo "\t\t\t\t\t<div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
  \t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
  \t\t\t\t\t<strong>Error!</strong> Hola hacker :) 
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 47
        echo "\t\t\t\t\t
\t\t\t\t<form method = \"POST\" action=\"";
        // line 48
        echo $this->env->getExtension('routing')->getUrl("login_action");
        echo "\">
\t\t\t\t\t  <div>
\t\t\t\t\t\t<span>Correo electrónico<label>*</label></span>
\t\t\t\t\t\t<input id=\"email\" name=\"email\" type=\"email\"  required> 
\t\t\t\t\t  </div>
\t\t\t\t\t  <div>
\t\t\t\t\t\t<span>Contraseña<label>*</label></span>
\t\t\t\t\t\t<input id=\"password\" name=\"password\" type=\"password\"  required> 
\t\t\t\t\t  </div>
\t\t\t\t\t  <a class=\"forgot\" href=\"#\">Olvidó su contraseña?</a>
\t\t\t\t\t  <input type=\"submit\" value=\"Iniciar sesión\">
\t\t\t\t    </form>
\t\t\t\t   </div>\t
\t\t\t\t  
\t\t\t     </div>
\t   
\t";
        // line 64
        $this->displayBlock('barraderecha', $context, $blocks);
    }

    public function block_barraderecha($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "VistaBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 64,  121 => 48,  118 => 47,  111 => 42,  108 => 41,  101 => 36,  99 => 35,  96 => 34,  89 => 29,  87 => 28,  79 => 23,  72 => 18,  69 => 17,  64 => 16,  58 => 15,  51 => 12,  47 => 11,  38 => 5,  35 => 4,  32 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* */
/*     {{ parent() }}*/
/*     	*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1">*/
/* 	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/* 	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>*/
/* */
/*     <link href="{{asset('assets/css/greeter.css')}}" rel="stylesheet" type="text/css" media="all" />*/
/*     <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />*/
/*   	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>*/
/* {% endblock %}*/
/* {% block classcontenido %}col-md-12 fondoContenido{% endblock %}*/
/* {% block login %}{% endblock %}*/
/* {%block contenido%}*/
/* */
/* 	      	     <div class="register">*/
/* 				   <div class="col-md-6 login-left">*/
/* 				  	 <h3> Nuevo Usuario</h3>*/
/* 					 <p>Al crear una cuenta en nuestra página, usted podrá tener acceso a las últimas películas de estreno, generar listas de reproducción de películas vistas o por ver y su categoría.</p>*/
/* 					 <a class="acount-btn" href="{{url('usuarios_new')}}">Crear una nueva cuenta</a>*/
/* 				   </div>*/
/* 				   <div class="col-md-6 login-right">*/
/* 				  	<h3>Usuarios Registrados</h3>*/
/* 					<p>Si usted tiene cuenta con nosotros, porfavor inicie sesión.</p>*/
/* 					{%if error == 1%}*/
/* 					<div class="alert alert-danger alert-dismissible" role="alert">*/
/*   					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*   					<strong>Error!</strong> Los datos ingresados no corresponden a un usuario registrado.*/
/* 					</div>*/
/* 					{%endif%}*/
/* 					*/
/* 					{%if error == 2%}*/
/* 					<div class="alert alert-danger alert-dismissible" role="alert">*/
/*   					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*   					<strong>Error!</strong> Debe ingresar primero.*/
/* 					</div>*/
/* 					{%endif%}*/
/* 					{%if error == 3%}*/
/* 					<div class="alert alert-danger alert-dismissible" role="alert">*/
/*   					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*   					<strong>Error!</strong> Hola hacker :) */
/* 					</div>*/
/* 					{%endif%}*/
/* 					*/
/* 				<form method = "POST" action="{{url('login_action')}}">*/
/* 					  <div>*/
/* 						<span>Correo electrónico<label>*</label></span>*/
/* 						<input id="email" name="email" type="email"  required> */
/* 					  </div>*/
/* 					  <div>*/
/* 						<span>Contraseña<label>*</label></span>*/
/* 						<input id="password" name="password" type="password"  required> */
/* 					  </div>*/
/* 					  <a class="forgot" href="#">Olvidó su contraseña?</a>*/
/* 					  <input type="submit" value="Iniciar sesión">*/
/* 				    </form>*/
/* 				   </div>	*/
/* 				  */
/* 			     </div>*/
/* 	   */
/* 	{% block barraderecha %}{%endblock%}*/
/* {%endblock%}*/
