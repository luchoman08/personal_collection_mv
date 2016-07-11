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

        if (0 === strpos($pathinfo, '/rv')) {
            // tinker_soft_reportes_vistas_homepage
            if ($pathinfo === '/rv') {
                return array (  '_controller' => 'TinkerSoft\\ReportesBundle\\Controller\\ReportesController::generarReportePeliculasVistasAction',  '_route' => 'tinker_soft_reportes_vistas_homepage',);
            }

            if (0 === strpos($pathinfo, '/rvu')) {
                // tinker_soft_reportes_vistas_usuarios_homepage
                if ($pathinfo === '/rvu') {
                    return array (  '_controller' => 'TinkerSoft\\ReportesBundle\\Controller\\ReportesController::generarReportePeliculasVistasUsuariosAction',  '_route' => 'tinker_soft_reportes_vistas_usuarios_homepage',);
                }

                if (0 === strpos($pathinfo, '/rvug')) {
                    // tinker_soft_reportes_vistas_usuarios_genero_ultimo_mes_homepage
                    if ($pathinfo === '/rvugum') {
                        return array (  '_controller' => 'TinkerSoft\\ReportesBundle\\Controller\\ReportesController::generarReportePeliculasVistasUsuariosGenerosUltimoMesAction',  '_route' => 'tinker_soft_reportes_vistas_usuarios_genero_ultimo_mes_homepage',);
                    }

                    // tinker_soft_reportes_vistas_usuarios_genero_homepage
                    if ($pathinfo === '/rvug') {
                        return array (  '_controller' => 'TinkerSoft\\ReportesBundle\\Controller\\ReportesController::generarReportePeliculasVistasUsuariosGenerosAction',  '_route' => 'tinker_soft_reportes_vistas_usuarios_genero_homepage',);
                    }

                }

                // tinker_soft_reportes_vistas_usuarios_ultimo_mes_homepage
                if ($pathinfo === '/rvuum') {
                    return array (  '_controller' => 'TinkerSoft\\ReportesBundle\\Controller\\ReportesController::generarReportePeliculasVistasUsuariosUltimoMesAction',  '_route' => 'tinker_soft_reportes_vistas_usuarios_ultimo_mes_homepage',);
                }

                // tinker_soft_reportes_vistas_usuario_homepage
                if ($pathinfo === '/rvu') {
                    return array (  '_controller' => 'TinkerSoft\\ReportesBundle\\Controller\\ReportesController::generarReportePeliculasVistasUsuariosAction',  '_route' => 'tinker_soft_reportes_vistas_usuario_homepage',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/login')) {
            // login_action
            if ($pathinfo === '/login/procesador') {
                return array (  '_controller' => 'LoginBundle\\Controller\\LoginController::loginAction',  '_route' => 'login_action',);
            }

            // logout_action
            if ($pathinfo === '/login/logout') {
                return array (  '_controller' => 'LoginBundle\\Controller\\LoginController::loginOutAction',  '_route' => 'logout_action',);
            }

            // registro_generos_action
            if ($pathinfo === '/login/procesadorg') {
                return array (  '_controller' => 'LoginBundle\\Controller\\LoginController::registrarGustosAction',  '_route' => 'registro_generos_action',);
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

            // pelicula
            if (0 === strpos($pathinfo, '/vista/buscar') && preg_match('#^/vista/buscar/(?P<consulta>[^/]++)/(?P<numero_pagina>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pelicula')), array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::verResultadosBusquedaAction',));
            }

            if (0 === strpos($pathinfo, '/vista/similares')) {
                // similares
                if (preg_match('#^/vista/similares/(?P<consulta>[^/]++)/(?P<numero_pagina>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'similares')), array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::verResultadosSimilaresAction',));
                }

                // similares_barra
                if (preg_match('#^/vista/similares/(?P<consulta>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'similares_barra');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'similares_barra')), array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::verResultadosSimilaresAction',  'numero_pagina' => 1,));
                }

            }

            if (0 === strpos($pathinfo, '/vista/b')) {
                if (0 === strpos($pathinfo, '/vista/buscar')) {
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

                }

                if (0 === strpos($pathinfo, '/vista/bgeneros')) {
                    // pelicula_consulta_generos_barra
                    if (preg_match('#^/vista/bgeneros/(?P<generos>[^/]++)/?$#s', $pathinfo, $matches)) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'pelicula_consulta_generos_barra');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pelicula_consulta_generos_barra')), array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::verResultadosGenerosAction',  'numero_pagina' => 1,));
                    }

                    // pelicula_consulta_generos_sin_barra
                    if (preg_match('#^/vista/bgeneros/(?P<generos>[^/]++)/(?P<numero_pagina>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pelicula_consulta_generos_sin_barra')), array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::verResultadosGenerosAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/vista/bavgeneros')) {
                    // pelicula_consulta_generos_string_url
                    if (rtrim($pathinfo, '/') === '/vista/bavgeneros') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'pelicula_consulta_generos_string_url');
                        }

                        return array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::verResultadoPorGeneroAction',  'numero_pagina' => 1,  '_route' => 'pelicula_consulta_generos_string_url',);
                    }

                    // pelicula_consulta_generos_string_sin_barra
                    if (preg_match('#^/vista/bavgeneros/(?P<genero>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pelicula_consulta_generos_string_sin_barra')), array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::verResultadoPorGeneroAction',  'numero_pagina' => 1,));
                    }

                    // pelicula_consulta_generos_string_barra
                    if (preg_match('#^/vista/bavgeneros/(?P<genero>[^/]++)/?$#s', $pathinfo, $matches)) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'pelicula_consulta_generos_string_barra');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pelicula_consulta_generos_string_barra')), array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::verResultadoPorGeneroAction',  'numero_pagina' => 1,));
                    }

                    // pelicula_consulta_generos_string_paginado
                    if (preg_match('#^/vista/bavgeneros/(?P<genero>[^/]++)/(?P<numero_pagina>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pelicula_consulta_generos_string_paginado')), array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::verResultadoPorGeneroAction',));
                    }

                }

                // pelicula_consulta_con_barra
                if (rtrim($pathinfo, '/') === '/vista/buscar') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'pelicula_consulta_con_barra');
                    }

                    return array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::iniciarIndexAction',  '_route' => 'pelicula_consulta_con_barra',);
                }

                if (0 === strpos($pathinfo, '/vista/bactor')) {
                    // pelicula_consulta_actor_string_url
                    if (rtrim($pathinfo, '/') === '/vista/bactor') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'pelicula_consulta_actor_string_url');
                        }

                        return array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::verResultadoActorAction',  'numero_pagina' => 1,  '_route' => 'pelicula_consulta_actor_string_url',);
                    }

                    // pelicula_consulta_actor
                    if (preg_match('#^/vista/bactor/(?P<actor>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pelicula_consulta_actor')), array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::verResultadoActorAction',  'numero_pagina' => 1,));
                    }

                    // pelicula_consulta_actor_barra
                    if (preg_match('#^/vista/bactor/(?P<actor>[^/]++)/?$#s', $pathinfo, $matches)) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'pelicula_consulta_actor_barra');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pelicula_consulta_actor_barra')), array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::verResultadoActorAction',  'numero_pagina' => 1,));
                    }

                    // pelicula_consulta_actor_paginado
                    if (preg_match('#^/vista/bactor/(?P<actor>[^/]++)/(?P<numero_pagina>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pelicula_consulta_actor_paginado')), array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::verResultadoActorAction',));
                    }

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

            if (0 === strpos($pathinfo, '/vista/mostrarpelicula')) {
                // mostrarPelicula_minuscula
                if (preg_match('#^/vista/mostrarpelicula/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mostrarPelicula_minuscula')), array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::verPeliculaAction',  'optional' => 0,));
                }

                // mostrarPelicula_minuscula_secret
                if (preg_match('#^/vista/mostrarpelicula/(?P<id>[^/]++)/secret$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mostrarPelicula_minuscula_secret')), array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::verPeliculaAction',  'optional' => 1,));
                }

            }

            if (0 === strpos($pathinfo, '/vista/login')) {
                // login
                if (rtrim($pathinfo, '/') === '/vista/login') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'login');
                    }

                    return array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::mostrarLoginAction',  '_route' => 'login',);
                }

                // login_sin_barra
                if ($pathinfo === '/vista/login') {
                    return array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::mostrarLoginAction',  '_route' => 'login_sin_barra',);
                }

            }

            if (0 === strpos($pathinfo, '/vista/demo')) {
                // demo
                if ($pathinfo === '/vista/demo') {
                    return array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::demoAction',  '_route' => 'demo',);
                }

                // demo_slash
                if (rtrim($pathinfo, '/') === '/vista/demo') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'demo_slash');
                    }

                    return array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::demoAction',  '_route' => 'demo_slash',);
                }

            }

            if (0 === strpos($pathinfo, '/vista/listas')) {
                // listas
                if ($pathinfo === '/vista/listas') {
                    return array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::mostrarListasAction',  '_route' => 'listas',);
                }

                // listas_barra
                if (rtrim($pathinfo, '/') === '/vista/listas') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'listas_barra');
                    }

                    return array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::mostrarListasAction',  '_route' => 'listas_barra',);
                }

            }

            if (0 === strpos($pathinfo, '/vista/usuario')) {
                // usuario
                if ($pathinfo === '/vista/usuario') {
                    return array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::panelUsuarioAction',  '_route' => 'usuario',);
                }

                // usuario_barra
                if (rtrim($pathinfo, '/') === '/vista/usuario') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'usuario_barra');
                    }

                    return array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::panelUsuarioAction',  '_route' => 'usuario_barra',);
                }

            }

            if (0 === strpos($pathinfo, '/vista/a')) {
                if (0 === strpos($pathinfo, '/vista/auditor')) {
                    // auditor
                    if ($pathinfo === '/vista/auditor') {
                        return array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::panelAuditorAction',  '_route' => 'auditor',);
                    }

                    // auditor_barra
                    if (rtrim($pathinfo, '/') === '/vista/auditor') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'auditor_barra');
                        }

                        return array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::panelAuditorAction',  '_route' => 'auditor_barra',);
                    }

                }

                if (0 === strpos($pathinfo, '/vista/administrador')) {
                    // administrador
                    if ($pathinfo === '/vista/administrador') {
                        return array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::panelAdministradorAction',  '_route' => 'administrador',);
                    }

                    // administrador_barra
                    if (rtrim($pathinfo, '/') === '/vista/administrador') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'administrador_barra');
                        }

                        return array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::panelAdministradorAction',  '_route' => 'administrador_barra',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/vista/b')) {
                if (0 === strpos($pathinfo, '/vista/bavanzada')) {
                    // busqueda_avanzada
                    if ($pathinfo === '/vista/bavanzada') {
                        return array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::busquedaAvanzadaAction',  '_route' => 'busqueda_avanzada',);
                    }

                    // busqueda_avanzada_barra
                    if (rtrim($pathinfo, '/') === '/vista/bavanzada') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'busqueda_avanzada_barra');
                        }

                        return array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::busquedaAvanzadaAction',  '_route' => 'busqueda_avanzada_barra',);
                    }

                }

                // pelicula_consulta_un_actor
                if (0 === strpos($pathinfo, '/vista/bunactor') && preg_match('#^/vista/bunactor/(?P<actorid>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pelicula_consulta_un_actor')), array (  '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::verResultadoUnActorAction',));
                }

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

            // usuarios_show_estandar
            if (preg_match('#^/usuarios/(?P<id>[^/]++)/showEstandar$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuarios_show_estandar;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuarios_show_estandar')), array (  '_controller' => 'TinkerSoft\\UsuariosBundle\\Controller\\UsuariosController::showEstandarAction',));
            }
            not_usuarios_show_estandar:

            // usuarios_new
            if ($pathinfo === '/usuarios/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_usuarios_new;
                }

                return array (  '_controller' => 'TinkerSoft\\UsuariosBundle\\Controller\\UsuariosController::newAction',  '_route' => 'usuarios_new',);
            }
            not_usuarios_new:

            // usuarios_registro
            if ($pathinfo === '/usuarios/registro') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_usuarios_registro;
                }

                return array (  '_controller' => 'TinkerSoft\\UsuariosBundle\\Controller\\UsuariosController::registroAction',  '_route' => 'usuarios_registro',);
            }
            not_usuarios_registro:

            // usuarios_edit
            if (preg_match('#^/usuarios/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_usuarios_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuarios_edit')), array (  '_controller' => 'TinkerSoft\\UsuariosBundle\\Controller\\UsuariosController::editAction',));
            }
            not_usuarios_edit:

            // usuarios_edit_estandar
            if (preg_match('#^/usuarios/(?P<id>[^/]++)/editEstandar$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_usuarios_edit_estandar;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuarios_edit_estandar')), array (  '_controller' => 'TinkerSoft\\UsuariosBundle\\Controller\\UsuariosController::editEstandarAction',));
            }
            not_usuarios_edit_estandar:

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

        if (0 === strpos($pathinfo, '/funciones')) {
            // funciones_sitio_homepage
            if (rtrim($pathinfo, '/') === '/funciones') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'funciones_sitio_homepage');
                }

                return array (  '_controller' => 'FuncionesSitioBundle:Default:index',  '_route' => 'funciones_sitio_homepage',);
            }

            // calificacion_pelicula
            if ($pathinfo === '/funciones/reg_calificacion') {
                return array (  '_controller' => 'TinkerSoft\\FuncionesSitioBundle\\Controller\\FuncionesSitioController::calificarPeliculaAction',  '_route' => 'calificacion_pelicula',);
            }

            // crear_lista
            if ($pathinfo === '/funciones/crearListaVistas') {
                return array (  '_controller' => 'TinkerSoft\\FuncionesSitioBundle\\Controller\\FuncionesSitioController::crearListaVistasAction',  '_route' => 'crear_lista',);
            }

            // adicionar_pelicula_lista
            if ($pathinfo === '/funciones/adicionarPeliculaLista') {
                return array (  '_controller' => 'TinkerSoft\\FuncionesSitioBundle\\Controller\\FuncionesSitioController::adicionarPeliculaListaAction',  '_route' => 'adicionar_pelicula_lista',);
            }

            if (0 === strpos($pathinfo, '/funciones/marcar')) {
                // marcar_vista
                if ($pathinfo === '/funciones/marcarVista') {
                    return array (  '_controller' => 'TinkerSoft\\FuncionesSitioBundle\\Controller\\FuncionesSitioController::adicionarPeliculaListaVistasAction',  '_route' => 'marcar_vista',);
                }

                // marcar_por_ver
                if ($pathinfo === '/funciones/marcarPorVer') {
                    return array (  '_controller' => 'TinkerSoft\\FuncionesSitioBundle\\Controller\\FuncionesSitioController::adicionarPeliculaListaPorVerAction',  '_route' => 'marcar_por_ver',);
                }

            }

            if (0 === strpos($pathinfo, '/funciones/adicionar')) {
                // adicionar_lista
                if ($pathinfo === '/funciones/adicionarLista') {
                    return array (  '_controller' => 'TinkerSoft\\FuncionesSitioBundle\\Controller\\FuncionesSitioController::crearListaPersonalizadaAction',  '_route' => 'adicionar_lista',);
                }

                // adicionar_pelicula_lista_personalizada
                if ($pathinfo === '/funciones/adicionarPeliculaListaPersonalizada') {
                    return array (  '_controller' => 'TinkerSoft\\FuncionesSitioBundle\\Controller\\FuncionesSitioController::adicionarPeliculaListaPersonalizadaAction',  '_route' => 'adicionar_pelicula_lista_personalizada',);
                }

            }

            if (0 === strpos($pathinfo, '/funciones/eliminar')) {
                // eliminar_pelicula_lista_personalizada
                if ($pathinfo === '/funciones/eliminarPeliculaColeccionPersonalizada') {
                    return array (  '_controller' => 'TinkerSoft\\FuncionesSitioBundle\\Controller\\FuncionesSitioController::eliminarPeliculaColeccionPersonalizadaAction',  '_route' => 'eliminar_pelicula_lista_personalizada',);
                }

                // eliminar_coleccion_personalizada
                if ($pathinfo === '/funciones/eliminarColeccionPersonalizada') {
                    return array (  '_controller' => 'TinkerSoft\\FuncionesSitioBundle\\Controller\\FuncionesSitioController::eliminarColeccionPersonalizadaAction',  '_route' => 'eliminar_coleccion_personalizada',);
                }

            }

            // cambiar_nombre_coleccion
            if ($pathinfo === '/funciones/cambiarNombreColeccion') {
                return array (  '_controller' => 'TinkerSoft\\FuncionesSitioBundle\\Controller\\FuncionesSitioController::cambiarNombreColeccionAction',  '_route' => 'cambiar_nombre_coleccion',);
            }

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
