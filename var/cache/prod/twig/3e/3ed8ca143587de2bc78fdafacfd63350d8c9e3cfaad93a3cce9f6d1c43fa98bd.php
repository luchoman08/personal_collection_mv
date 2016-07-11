<?php

/* VistaBundle:Default:administrador2.html.twig */
class __TwigTemplate_0afeb6072e5046853560254e21119ed1c89ceb471b53738f65939a76c4480201 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "VistaBundle:Default:administrador2.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'loginoptions' => array($this, 'block_loginoptions'),
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
        echo " QMP - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nombres", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "apellidos", array()), "html", null, true);
        echo " ";
    }

    // line 3
    public function block_loginoptions($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (((isset($context["usuarioLogueado"]) ? $context["usuarioLogueado"] : null) == 1)) {
            // line 5
            echo "
            <a href=\"";
            // line 6
            echo $this->env->getExtension('routing')->getUrl("usuario");
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["nickname"]) ? $context["nickname"] : null), "html", null, true);
            echo "</a> | <a href=\"";
            echo $this->env->getExtension('routing')->getUrl("logout_action");
            echo "\">Salir</a>
       
    ";
        } else {
            // line 8
            echo " 

        ";
            // line 10
            $this->displayParentBlock("loginoptions", $context, $blocks);
            echo " 
    
    ";
        }
    }

    // line 15
    public function block_contenido($context, array $blocks = array())
    {
        // line 16
        echo "
 <h1>Usuarios </h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Nickname</th>
                <th>Correoelectronico</th>
                <th>Password</th>
                <th>Rol</th>
                <th>Estado</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 35
            echo "            <tr>
                <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuarios_show", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "nombres", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "apellidos", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "nickname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "correoElectronico", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "password", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "rol", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            if ($this->getAttribute($context["usuario"], "estado", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuarios_show", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuarios_edit", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("usuarios_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
  
";
    }

    // line 67
    public function block_barraderecha($context, array $blocks = array())
    {
        // line 68
        echo "
    <div class=\"col-md-3 columna-index-boostrap\">
        <div class=\"columna-index\">
            
            <label>";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nombres", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "apellidos", array()), "html", null, true);
        echo "</label>
            
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "VistaBundle:Default:administrador2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 72,  180 => 68,  177 => 67,  168 => 61,  161 => 56,  149 => 50,  143 => 47,  132 => 43,  128 => 42,  124 => 41,  120 => 40,  116 => 39,  112 => 38,  108 => 37,  102 => 36,  99 => 35,  95 => 34,  75 => 16,  72 => 15,  64 => 10,  60 => 8,  50 => 6,  47 => 5,  44 => 4,  41 => 3,  31 => 2,  11 => 1,);
    }
}
/* {%extends 'index.html.twig'%}*/
/* {%block title%} QMP - {{usuario.nombres}} {{usuario.apellidos}} {%endblock%}*/
/* {%block loginoptions%}*/
/*     {% if usuarioLogueado == 1  %}*/
/* */
/*             <a href="{{url('usuario')}}">{{nickname}}</a> | <a href="{{url('logout_action')}}">Salir</a>*/
/*        */
/*     {% else %} */
/* */
/*         {{parent()}} */
/*     */
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block contenido %}*/
/* */
/*  <h1>Usuarios </h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nombres</th>*/
/*                 <th>Apellidos</th>*/
/*                 <th>Nickname</th>*/
/*                 <th>Correoelectronico</th>*/
/*                 <th>Password</th>*/
/*                 <th>Rol</th>*/
/*                 <th>Estado</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for usuario in usuarios %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('usuarios_show', { 'id': usuario.id }) }}">{{ usuario.id }}</a></td>*/
/*                 <td>{{ usuario.nombres }}</td>*/
/*                 <td>{{ usuario.apellidos }}</td>*/
/*                 <td>{{ usuario.nickname }}</td>*/
/*                 <td>{{ usuario.correoElectronico }}</td>*/
/*                 <td>{{ usuario.password }}</td>*/
/*                 <td>{{ usuario.rol }}</td>*/
/*                 <td>{% if usuario.estado %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('usuarios_show', { 'id': usuario.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('usuarios_edit', { 'id': usuario.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('usuarios_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/*   */
/* {% endblock %}*/
/* */
/* {% block barraderecha %}*/
/* */
/*     <div class="col-md-3 columna-index-boostrap">*/
/*         <div class="columna-index">*/
/*             */
/*             <label>{{ usuario.nombres }} {{ usuario.apellidos }}</label>*/
/*             */
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
