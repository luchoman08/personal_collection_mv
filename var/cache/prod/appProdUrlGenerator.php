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
        'usuarios_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TinkerSoft\\UsuariosBundle\\Controller\\UsuariosController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuarios/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuarios_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TinkerSoft\\UsuariosBundle\\Controller\\UsuariosController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/usuarios',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuarios_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TinkerSoft\\UsuariosBundle\\Controller\\UsuariosController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuarios/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuarios_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TinkerSoft\\UsuariosBundle\\Controller\\UsuariosController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/usuarios',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuarios_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TinkerSoft\\UsuariosBundle\\Controller\\UsuariosController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/usuarios',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tinker_soft_usuarios_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TinkerSoft\\UsuariosBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
