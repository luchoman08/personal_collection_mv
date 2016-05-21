<?php

/* LoginBundle:Default:index.html.twig */
class __TwigTemplate_3de510c799655bf8ccf20b56423f5cebc177dacf0e492eefd278194c7bb4429a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "LoginBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<form method = \"POST\" action=\"";
        echo $this->env->getExtension('routing')->getPath("login_action");
        echo "\">
    <h1>Bienvenido!</h1>
  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">Email address</label>
    <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\"  placeholder=\"Email\" required />
  </div>
  <div class=\"form-group\">
    <label for=\"exampleInputPassword1\">Password</label>
    <input type=\"password\" class=\"form-control\" id=\"password\" name = \"password\" placeholder=\"Password\" required />
  </div>
 
  <div class=\"checkbox\">
    <label>
      <input type=\"checkbox\"> Check me out
    </label>
  </div>
  <button type=\"submit\" class=\"btn btn-default\">Submit</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "LoginBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {%extends 'base.html.twig'%}*/
/* {% block body%}*/
/* <form method = "POST" action="{{path('login_action')}}">*/
/*     <h1>Bienvenido!</h1>*/
/*   <div class="form-group">*/
/*     <label for="exampleInputEmail1">Email address</label>*/
/*     <input type="email" class="form-control" id="email" name="email"  placeholder="Email" required />*/
/*   </div>*/
/*   <div class="form-group">*/
/*     <label for="exampleInputPassword1">Password</label>*/
/*     <input type="password" class="form-control" id="password" name = "password" placeholder="Password" required />*/
/*   </div>*/
/*  */
/*   <div class="checkbox">*/
/*     <label>*/
/*       <input type="checkbox"> Check me out*/
/*     </label>*/
/*   </div>*/
/*   <button type="submit" class="btn btn-default">Submit</button>*/
/* </form>*/
/* {% endblock%}*/
