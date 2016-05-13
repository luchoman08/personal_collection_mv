<?php

/* usuarios/index.html.twig */
class __TwigTemplate_8e6bfdd862aad6f86e683e08fe662dc416a11e78644db7b2ebd5571caeb14544 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "usuarios/index.html.twig", 1);
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
        $__internal_7e284905396620f5728dec8bce85beaaa528214ecb10753a8f32ac42e2e9ff11 = $this->env->getExtension("native_profiler");
        $__internal_7e284905396620f5728dec8bce85beaaa528214ecb10753a8f32ac42e2e9ff11->enter($__internal_7e284905396620f5728dec8bce85beaaa528214ecb10753a8f32ac42e2e9ff11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuarios/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e284905396620f5728dec8bce85beaaa528214ecb10753a8f32ac42e2e9ff11->leave($__internal_7e284905396620f5728dec8bce85beaaa528214ecb10753a8f32ac42e2e9ff11_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_79c4e6919b2bdb3a891aab832c344285c7d3440db2131bb94aa6d8165845aeef = $this->env->getExtension("native_profiler");
        $__internal_79c4e6919b2bdb3a891aab832c344285c7d3440db2131bb94aa6d8165845aeef->enter($__internal_79c4e6919b2bdb3a891aab832c344285c7d3440db2131bb94aa6d8165845aeef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Usuarios list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
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
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuarios_show", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "apellidos", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "nickname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "correoElectronico", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "password", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "rol", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
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
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuarios_show", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 37
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
        // line 43
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("usuarios_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_79c4e6919b2bdb3a891aab832c344285c7d3440db2131bb94aa6d8165845aeef->leave($__internal_79c4e6919b2bdb3a891aab832c344285c7d3440db2131bb94aa6d8165845aeef_prof);

    }

    public function getTemplateName()
    {
        return "usuarios/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 48,  125 => 43,  113 => 37,  107 => 34,  96 => 30,  92 => 29,  88 => 28,  84 => 27,  80 => 26,  76 => 25,  72 => 24,  66 => 23,  63 => 22,  59 => 21,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Usuarios list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nombre</th>*/
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
/*                 <td>{{ usuario.nombre }}</td>*/
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
/* {% endblock %}*/
/* */
