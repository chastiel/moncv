<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'homepage' => array (  0 =>   array (    0 => 'name',    1 => 'firstname',  ),  1 =>   array (    'name' => 'Charlotte',    'firstname' => 'Chaminade',    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'firstname',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    2 =>     array (      0 => 'text',      1 => '/cv',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'create_formation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/create/formation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'create_loisir' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\LoisirController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/loisirs/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'validate_create_loisir' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\LoisirController::validateLoisirAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/loisirs/create_valid',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edit_loisir' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\LoisirController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/loisirs/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'validate_edit_loisir' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\LoisirController::validateEditLoisirAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/loisirs/edit_valid',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_entrypoint' => array (  0 =>   array (    0 => 'index',    1 => '_format',  ),  1 =>   array (    '_controller' => 'api_platform.action.entrypoint',    '_format' => '',    '_api_respond' => '1',    'index' => 'index',  ),  2 =>   array (    'index' => 'index',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => 'index',      3 => 'index',    ),    2 =>     array (      0 => 'text',      1 => '/toto',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_doc' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'api_platform.action.documentation',    '_api_respond' => '1',    '_format' => '',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/toto/docs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_jsonld_context' => array (  0 =>   array (    0 => 'shortName',    1 => '_format',  ),  1 =>   array (    '_controller' => 'api_platform.jsonld.action.context',    '_api_respond' => '1',    '_format' => 'jsonld',  ),  2 =>   array (    'shortName' => '.+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '.+',      3 => 'shortName',    ),    2 =>     array (      0 => 'text',      1 => '/toto/contexts',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_experiences_get_collection' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'api_platform.action.get_collection',    '_format' => NULL,    '_api_resource_class' => 'AppBundle\\Entity\\Experience',    '_api_collection_operation_name' => 'get',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/toto/experiences',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_experiences_post_collection' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'api_platform.action.post_collection',    '_format' => NULL,    '_api_resource_class' => 'AppBundle\\Entity\\Experience',    '_api_collection_operation_name' => 'post',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/toto/experiences',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_experiences_get_item' => array (  0 =>   array (    0 => 'id',    1 => '_format',  ),  1 =>   array (    '_controller' => 'api_platform.action.get_item',    '_format' => NULL,    '_api_resource_class' => 'AppBundle\\Entity\\Experience',    '_api_item_operation_name' => 'get',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/toto/experiences',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_experiences_delete_item' => array (  0 =>   array (    0 => 'id',    1 => '_format',  ),  1 =>   array (    '_controller' => 'api_platform.action.delete_item',    '_format' => NULL,    '_api_resource_class' => 'AppBundle\\Entity\\Experience',    '_api_item_operation_name' => 'delete',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/toto/experiences',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_experiences_put_item' => array (  0 =>   array (    0 => 'id',    1 => '_format',  ),  1 =>   array (    '_controller' => 'api_platform.action.put_item',    '_format' => NULL,    '_api_resource_class' => 'AppBundle\\Entity\\Experience',    '_api_item_operation_name' => 'put',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/toto/experiences',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_loisirs_get_collection' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'api_platform.action.get_collection',    '_format' => NULL,    '_api_resource_class' => 'AppBundle\\Entity\\Loisir',    '_api_collection_operation_name' => 'get',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/toto/loisirs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_loisirs_post_collection' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'api_platform.action.post_collection',    '_format' => NULL,    '_api_resource_class' => 'AppBundle\\Entity\\Loisir',    '_api_collection_operation_name' => 'post',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/toto/loisirs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_loisirs_get_item' => array (  0 =>   array (    0 => 'id',    1 => '_format',  ),  1 =>   array (    '_controller' => 'api_platform.action.get_item',    '_format' => NULL,    '_api_resource_class' => 'AppBundle\\Entity\\Loisir',    '_api_item_operation_name' => 'get',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/toto/loisirs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_loisirs_delete_item' => array (  0 =>   array (    0 => 'id',    1 => '_format',  ),  1 =>   array (    '_controller' => 'api_platform.action.delete_item',    '_format' => NULL,    '_api_resource_class' => 'AppBundle\\Entity\\Loisir',    '_api_item_operation_name' => 'delete',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/toto/loisirs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_loisirs_put_item' => array (  0 =>   array (    0 => 'id',    1 => '_format',  ),  1 =>   array (    '_controller' => 'api_platform.action.put_item',    '_format' => NULL,    '_api_resource_class' => 'AppBundle\\Entity\\Loisir',    '_api_item_operation_name' => 'put',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/toto/loisirs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_formations_get_collection' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'api_platform.action.get_collection',    '_format' => NULL,    '_api_resource_class' => 'AppBundle\\Entity\\Formation',    '_api_collection_operation_name' => 'get',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/toto/formations',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_formations_post_collection' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'api_platform.action.post_collection',    '_format' => NULL,    '_api_resource_class' => 'AppBundle\\Entity\\Formation',    '_api_collection_operation_name' => 'post',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/toto/formations',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_formations_get_item' => array (  0 =>   array (    0 => 'id',    1 => '_format',  ),  1 =>   array (    '_controller' => 'api_platform.action.get_item',    '_format' => NULL,    '_api_resource_class' => 'AppBundle\\Entity\\Formation',    '_api_item_operation_name' => 'get',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/toto/formations',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_formations_delete_item' => array (  0 =>   array (    0 => 'id',    1 => '_format',  ),  1 =>   array (    '_controller' => 'api_platform.action.delete_item',    '_format' => NULL,    '_api_resource_class' => 'AppBundle\\Entity\\Formation',    '_api_item_operation_name' => 'delete',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/toto/formations',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_formations_put_item' => array (  0 =>   array (    0 => 'id',    1 => '_format',  ),  1 =>   array (    '_controller' => 'api_platform.action.put_item',    '_format' => NULL,    '_api_resource_class' => 'AppBundle\\Entity\\Formation',    '_api_item_operation_name' => 'put',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/toto/formations',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_passions_get_collection' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'api_platform.action.get_collection',    '_format' => NULL,    '_api_resource_class' => 'AppBundle\\Entity\\Passions',    '_api_collection_operation_name' => 'get',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/toto/passions',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_passions_post_collection' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'api_platform.action.post_collection',    '_format' => NULL,    '_api_resource_class' => 'AppBundle\\Entity\\Passions',    '_api_collection_operation_name' => 'post',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/toto/passions',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_passions_get_item' => array (  0 =>   array (    0 => 'id',    1 => '_format',  ),  1 =>   array (    '_controller' => 'api_platform.action.get_item',    '_format' => NULL,    '_api_resource_class' => 'AppBundle\\Entity\\Passions',    '_api_item_operation_name' => 'get',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/toto/passions',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_passions_delete_item' => array (  0 =>   array (    0 => 'id',    1 => '_format',  ),  1 =>   array (    '_controller' => 'api_platform.action.delete_item',    '_format' => NULL,    '_api_resource_class' => 'AppBundle\\Entity\\Passions',    '_api_item_operation_name' => 'delete',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/toto/passions',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_passions_put_item' => array (  0 =>   array (    0 => 'id',    1 => '_format',  ),  1 =>   array (    '_controller' => 'api_platform.action.put_item',    '_format' => NULL,    '_api_resource_class' => 'AppBundle\\Entity\\Passions',    '_api_item_operation_name' => 'put',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/toto/passions',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
