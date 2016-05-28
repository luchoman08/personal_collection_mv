<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/login')) {
            // login_homepage
            if (rtrim($pathinfo, '/') === '/login') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'login_homepage');
                }

                return array (  '_controller' => 'LoginBundle\\Controller\\LoginController::indexAction',  '_route' => 'login_homepage',);
            }

            // login_action
            if ($pathinfo === '/login/procesador') {
                return array (  '_controller' => 'LoginBundle\\Controller\\LoginController::loginAction',  '_route' => 'login_action',);
            }

        }

        if (0 === strpos($pathinfo, '/vista')) {
            // vista_homepage
            if (rtrim($pathinfo, '/') === '/vista') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'vista_homepage');
                }

                return array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::iniciarIndexAction',  '_route' => 'vista_homepage',);
            }

            if (0 === strpos($pathinfo, '/vista/buscar')) {
                // pelicula
                if (preg_match('#^/vista/buscar/(?P<consulta>[^/]++)/(?P<numero_pagina>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pelicula')), array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::verResultadosBusquedaAction',));
                }

                // pelicula_consulta_barra
                if (preg_match('#^/vista/buscar/(?P<consulta>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'pelicula_consulta_barra');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pelicula_consulta_barra')), array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::verResultadosBusquedaAction',  'numero_pagina' => 1,));
                }

                // pelicula_consulta_sin_barra
                if (preg_match('#^/vista/buscar/(?P<consulta>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pelicula_consulta_sin_barra')), array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::verResultadosBusquedaAction',  'numero_pagina' => 1,));
                }

                // pelicula_consulta_con_barra
                if (rtrim($pathinfo, '/') === '/vista/buscar') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'pelicula_consulta_con_barra');
                    }

                    return array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::iniciarIndexAction',  '_route' => 'pelicula_consulta_con_barra',);
                }

            }

            if (0 === strpos($pathinfo, '/vista/secret/buscar/show')) {
                // show
                if (preg_match('#^/vista/secret/buscar/show/(?P<consulta>[^/]++)/(?P<numero_pagina>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'show')), array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::verResultadosBusquedaShowAction',));
                }

                // show_consulta_barra
                if (preg_match('#^/vista/secret/buscar/show/(?P<consulta>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'show_consulta_barra');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_consulta_barra')), array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::verResultadosBusquedaShowAction',  'numero_pagina' => 1,));
                }

                // show_consulta_sin_barra
                if (preg_match('#^/vista/secret/buscar/show/(?P<consulta>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_consulta_sin_barra')), array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::verResultadosBusquedaShowAction',  'numero_pagina' => 1,));
                }

            }

            // generos_barra
            if ($pathinfo === '/vista/generos') {
                return array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::verListaGenerosAction',  '_route' => 'generos_barra',);
            }

            // pelicula_barra
            if (rtrim($pathinfo, '/') === '/vista/buscar') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'pelicula_barra');
                }

                return array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::indexAction',  '_route' => 'pelicula_barra',);
            }

            // mostrarPelicula_minuscula
            if (0 === strpos($pathinfo, '/vista/mostrarpelicula') && preg_match('#^/vista/mostrarpelicula/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mostrarPelicula_minuscula')), array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::verPeliculaAction',));
            }

        }

        if (0 === strpos($pathinfo, '/movie_database')) {
            // api_the_movie_data_base_homepage
            if (rtrim($pathinfo, '/') === '/movie_database') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'api_the_movie_data_base_homepage');
                }

                return array (  '_controller' => 'TinkerSoft\\APITheMovieDataBaseBundle\\Controller\\DefaultController::indexAction',  '_route' => 'api_the_movie_data_base_homepage',);
            }

            if (0 === strpos($pathinfo, '/movie_database/mostrar')) {
                // mostrarPelicula
                if (0 === strpos($pathinfo, '/movie_database/mostrarPelicula') && preg_match('#^/movie_database/mostrarPelicula/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mostrarPelicula')), array (  '_controller' => 'TinkerSoft\\APITheMovieDataBaseBundle\\Controller\\APIController::obtenerPeliculaAction',));
                }

                // mostrarTendencias
                if (rtrim($pathinfo, '/') === '/movie_database/mostrarTendencias') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'mostrarTendencias');
                    }

                    return array (  '_controller' => 'TinkerSoft\\APITheMovieDataBaseBundle\\Controller\\APIController::obtenerPeliculasTendenciaAction',  '_route' => 'mostrarTendencias',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/usuarios')) {
            // usuarios_index
            if (rtrim($pathinfo, '/') === '/usuarios') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuarios_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuarios_index');
                }

                return array (  '_controller' => 'TinkerSoft\\UsuariosBundle\\Controller\\UsuariosController::indexAction',  '_route' => 'usuarios_index',);
            }
            not_usuarios_index:

            // usuarios_show
            if (preg_match('#^/usuarios/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuarios_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuarios_show')), array (  '_controller' => 'TinkerSoft\\UsuariosBundle\\Controller\\UsuariosController::showAction',));
            }
            not_usuarios_show:

            // usuarios_new
            if ($pathinfo === '/usuarios/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_usuarios_new;
                }

                return array (  '_controller' => 'TinkerSoft\\UsuariosBundle\\Controller\\UsuariosController::newAction',  '_route' => 'usuarios_new',);
            }
            not_usuarios_new:

            // usuarios_edit
            if (preg_match('#^/usuarios/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_usuarios_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuarios_edit')), array (  '_controller' => 'TinkerSoft\\UsuariosBundle\\Controller\\UsuariosController::editAction',));
            }
            not_usuarios_edit:

            // usuarios_delete
            if (preg_match('#^/usuarios/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_usuarios_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuarios_delete')), array (  '_controller' => 'TinkerSoft\\UsuariosBundle\\Controller\\UsuariosController::deleteAction',));
            }
            not_usuarios_delete:

        }

        // tinker_soft_usuarios_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'tinker_soft_usuarios_homepage');
            }

            return array (  '_controller' => 'TinkerSoft\\UsuariosBundle\\Controller\\DefaultController::indexAction',  '_route' => 'tinker_soft_usuarios_homepage',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
