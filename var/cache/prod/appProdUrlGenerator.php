<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'login_action' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LoginBundle\\Controller\\LoginController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login/procesador',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout_action' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LoginBundle\\Controller\\LoginController::loginOutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'vista_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::iniciarIndexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/vista/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pelicula' => array (  0 =>   array (    0 => 'consulta',    1 => 'numero_pagina',  ),  1 =>   array (    '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::verResultadosBusquedaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'numero_pagina',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'consulta',    ),    2 =>     array (      0 => 'text',      1 => '/vista/buscar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pelicula_consulta_barra' => array (  0 =>   array (    0 => 'consulta',  ),  1 =>   array (    '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::verResultadosBusquedaAction',    'numero_pagina' => 1,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'consulta',    ),    2 =>     array (      0 => 'text',      1 => '/vista/buscar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pelicula_consulta_sin_barra' => array (  0 =>   array (    0 => 'consulta',  ),  1 =>   array (    '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::verResultadosBusquedaAction',    'numero_pagina' => 1,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'consulta',    ),    1 =>     array (      0 => 'text',      1 => '/vista/buscar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pelicula_consulta_con_barra' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::iniciarIndexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/vista/buscar/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show' => array (  0 =>   array (    0 => 'consulta',    1 => 'numero_pagina',  ),  1 =>   array (    '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::verResultadosBusquedaShowAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'numero_pagina',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'consulta',    ),    2 =>     array (      0 => 'text',      1 => '/vista/secret/buscar/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_consulta_barra' => array (  0 =>   array (    0 => 'consulta',  ),  1 =>   array (    '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::verResultadosBusquedaShowAction',    'numero_pagina' => 1,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'consulta',    ),    2 =>     array (      0 => 'text',      1 => '/vista/secret/buscar/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_consulta_sin_barra' => array (  0 =>   array (    0 => 'consulta',  ),  1 =>   array (    '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::verResultadosBusquedaShowAction',    'numero_pagina' => 1,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'consulta',    ),    1 =>     array (      0 => 'text',      1 => '/vista/secret/buscar/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'generos_barra' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::verListaGenerosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/vista/generos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pelicula_barra' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/vista/buscar/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mostrarPelicula_minuscula' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::verPeliculaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/vista/mostrarpelicula',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::mostrarLoginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/vista/login/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_sin_barra' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TinkerSoft\\VistaBundle\\Controller\\DefaultController::mostrarLoginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/vista/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_the_movie_data_base_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TinkerSoft\\APITheMovieDataBaseBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/movie_database/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mostrarPelicula' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TinkerSoft\\APITheMovieDataBaseBundle\\Controller\\APIController::obtenerPeliculaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/movie_database/mostrarPelicula',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mostrarTendencias' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TinkerSoft\\APITheMovieDataBaseBundle\\Controller\\APIController::obtenerPeliculasTendenciaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/movie_database/mostrarTendencias/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuarios_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TinkerSoft\\UsuariosBundle\\Controller\\UsuariosController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuarios/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuarios_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TinkerSoft\\UsuariosBundle\\Controller\\UsuariosController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/usuarios',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuarios_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TinkerSoft\\UsuariosBundle\\Controller\\UsuariosController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuarios/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuarios_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TinkerSoft\\UsuariosBundle\\Controller\\UsuariosController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/usuarios',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuarios_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TinkerSoft\\UsuariosBundle\\Controller\\UsuariosController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/usuarios',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tinker_soft_usuarios_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TinkerSoft\\UsuariosBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'funciones_sitio_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FuncionesSitioBundle:Default:index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/funciones/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'calificacion_pelicula' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TinkerSoft\\FuncionesSitioBundle\\Controller\\FuncionesSitioController::calificarPeliculaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/funciones/reg_calificacion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
