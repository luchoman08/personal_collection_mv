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

        if (0 === strpos($pathinfo, '/movie_database')) {
            // api_the_movie_data_base_homepage
            if (rtrim($pathinfo, '/') === '/movie_database') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'api_the_movie_data_base_homepage');
                }

                return array (  '_controller' => 'TinkerSoft\\APITheMovieDataBaseBundle\\Controller\\DefaultController::indexAction',  '_route' => 'api_the_movie_data_base_homepage',);
            }

            if (0 === strpos($pathinfo, '/movie_database/generos')) {
                // generos
                if (preg_match('#^/movie_database/generos(?:/(?P<_locale>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'generos')), array (  '_controller' => 'TinkerSoft\\APITheMovieDataBaseBundle\\Controller\\APIController::listaGenerosAction',  '_locale' => 'en',));
                }

                // generos_barra
                if (rtrim($pathinfo, '/') === '/movie_database/generos') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'generos_barra');
                    }

                    return array (  '_controller' => 'TinkerSoft\\APITheMovieDataBaseBundle\\Controller\\APIController::listaGenerosAction',  '_locale' => 'en',  '_route' => 'generos_barra',);
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
