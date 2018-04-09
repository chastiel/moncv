<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // homepage
        if (0 === strpos($pathinfo, '/cv') && preg_match('#^/cv(?:/(?P<name>[^/]++)(?:/(?P<firstname>[^/]++))?)?$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'homepage')), array (  'name' => 'Charlotte',  'firstname' => 'Chaminade',  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',));
        }

        // create_formation
        if ('/create/formation' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::createAction',  '_route' => 'create_formation',);
        }

        if (0 === strpos($pathinfo, '/loisirs/create')) {
            // create_loisir
            if ('/loisirs/create' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\LoisirController::createAction',  '_route' => 'create_loisir',);
            }

            // validate_create_loisir
            if ('/loisirs/create_valid' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\LoisirController::validateLoisirAction',  '_route' => 'validate_create_loisir',);
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_validate_create_loisir;
                }

                return $ret;
            }
            not_validate_create_loisir:

        }

        elseif (0 === strpos($pathinfo, '/loisirs/edit')) {
            // edit_loisir
            if (preg_match('#^/loisirs/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_loisir')), array (  '_controller' => 'AppBundle\\Controller\\LoisirController::editAction',));
            }

            // validate_edit_loisir
            if (0 === strpos($pathinfo, '/loisirs/edit_valid') && preg_match('#^/loisirs/edit_valid/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'validate_edit_loisir')), array (  '_controller' => 'AppBundle\\Controller\\LoisirController::validateEditLoisirAction',));
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_validate_edit_loisir;
                }

                return $ret;
            }
            not_validate_edit_loisir:

        }

        elseif (0 === strpos($pathinfo, '/toto')) {
            // api_entrypoint
            if (preg_match('#^/toto(?:/(?P<index>index)(?:\\.(?P<_format>[^/]++))?)?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_entrypoint')), array (  '_controller' => 'api_platform.action.entrypoint',  '_format' => '',  '_api_respond' => '1',  'index' => 'index',));
            }

            // api_doc
            if (0 === strpos($pathinfo, '/toto/docs') && preg_match('#^/toto/docs(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_doc')), array (  '_controller' => 'api_platform.action.documentation',  '_api_respond' => '1',  '_format' => '',));
            }

            // api_jsonld_context
            if (0 === strpos($pathinfo, '/toto/contexts') && preg_match('#^/toto/contexts/(?P<shortName>.+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_jsonld_context')), array (  '_controller' => 'api_platform.jsonld.action.context',  '_api_respond' => '1',  '_format' => 'jsonld',));
            }

            if (0 === strpos($pathinfo, '/toto/experiences')) {
                // api_experiences_get_collection
                if (preg_match('#^/toto/experiences(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_experiences_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Experience',  '_api_collection_operation_name' => 'get',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_experiences_get_collection;
                    }

                    return $ret;
                }
                not_api_experiences_get_collection:

                // api_experiences_post_collection
                if (preg_match('#^/toto/experiences(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_experiences_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Experience',  '_api_collection_operation_name' => 'post',));
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_api_experiences_post_collection;
                    }

                    return $ret;
                }
                not_api_experiences_post_collection:

                // api_experiences_get_item
                if (preg_match('#^/toto/experiences/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_experiences_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Experience',  '_api_item_operation_name' => 'get',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_experiences_get_item;
                    }

                    return $ret;
                }
                not_api_experiences_get_item:

                // api_experiences_delete_item
                if (preg_match('#^/toto/experiences/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_experiences_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Experience',  '_api_item_operation_name' => 'delete',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_api_experiences_delete_item;
                    }

                    return $ret;
                }
                not_api_experiences_delete_item:

                // api_experiences_put_item
                if (preg_match('#^/toto/experiences/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_experiences_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Experience',  '_api_item_operation_name' => 'put',));
                    if (!in_array($requestMethod, array('PUT'))) {
                        $allow = array_merge($allow, array('PUT'));
                        goto not_api_experiences_put_item;
                    }

                    return $ret;
                }
                not_api_experiences_put_item:

            }

            elseif (0 === strpos($pathinfo, '/toto/loisirs')) {
                // api_loisirs_get_collection
                if (preg_match('#^/toto/loisirs(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_loisirs_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Loisir',  '_api_collection_operation_name' => 'get',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_loisirs_get_collection;
                    }

                    return $ret;
                }
                not_api_loisirs_get_collection:

                // api_loisirs_post_collection
                if (preg_match('#^/toto/loisirs(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_loisirs_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Loisir',  '_api_collection_operation_name' => 'post',));
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_api_loisirs_post_collection;
                    }

                    return $ret;
                }
                not_api_loisirs_post_collection:

                // api_loisirs_get_item
                if (preg_match('#^/toto/loisirs/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_loisirs_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Loisir',  '_api_item_operation_name' => 'get',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_loisirs_get_item;
                    }

                    return $ret;
                }
                not_api_loisirs_get_item:

                // api_loisirs_delete_item
                if (preg_match('#^/toto/loisirs/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_loisirs_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Loisir',  '_api_item_operation_name' => 'delete',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_api_loisirs_delete_item;
                    }

                    return $ret;
                }
                not_api_loisirs_delete_item:

                // api_loisirs_put_item
                if (preg_match('#^/toto/loisirs/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_loisirs_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Loisir',  '_api_item_operation_name' => 'put',));
                    if (!in_array($requestMethod, array('PUT'))) {
                        $allow = array_merge($allow, array('PUT'));
                        goto not_api_loisirs_put_item;
                    }

                    return $ret;
                }
                not_api_loisirs_put_item:

            }

            elseif (0 === strpos($pathinfo, '/toto/formations')) {
                // api_formations_get_collection
                if (preg_match('#^/toto/formations(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_formations_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Formation',  '_api_collection_operation_name' => 'get',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_formations_get_collection;
                    }

                    return $ret;
                }
                not_api_formations_get_collection:

                // api_formations_post_collection
                if (preg_match('#^/toto/formations(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_formations_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Formation',  '_api_collection_operation_name' => 'post',));
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_api_formations_post_collection;
                    }

                    return $ret;
                }
                not_api_formations_post_collection:

                // api_formations_get_item
                if (preg_match('#^/toto/formations/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_formations_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Formation',  '_api_item_operation_name' => 'get',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_formations_get_item;
                    }

                    return $ret;
                }
                not_api_formations_get_item:

                // api_formations_delete_item
                if (preg_match('#^/toto/formations/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_formations_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Formation',  '_api_item_operation_name' => 'delete',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_api_formations_delete_item;
                    }

                    return $ret;
                }
                not_api_formations_delete_item:

                // api_formations_put_item
                if (preg_match('#^/toto/formations/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_formations_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Formation',  '_api_item_operation_name' => 'put',));
                    if (!in_array($requestMethod, array('PUT'))) {
                        $allow = array_merge($allow, array('PUT'));
                        goto not_api_formations_put_item;
                    }

                    return $ret;
                }
                not_api_formations_put_item:

            }

            elseif (0 === strpos($pathinfo, '/toto/passions')) {
                // api_passions_get_collection
                if (preg_match('#^/toto/passions(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_passions_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Passions',  '_api_collection_operation_name' => 'get',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_passions_get_collection;
                    }

                    return $ret;
                }
                not_api_passions_get_collection:

                // api_passions_post_collection
                if (preg_match('#^/toto/passions(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_passions_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Passions',  '_api_collection_operation_name' => 'post',));
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_api_passions_post_collection;
                    }

                    return $ret;
                }
                not_api_passions_post_collection:

                // api_passions_get_item
                if (preg_match('#^/toto/passions/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_passions_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Passions',  '_api_item_operation_name' => 'get',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_passions_get_item;
                    }

                    return $ret;
                }
                not_api_passions_get_item:

                // api_passions_delete_item
                if (preg_match('#^/toto/passions/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_passions_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Passions',  '_api_item_operation_name' => 'delete',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_api_passions_delete_item;
                    }

                    return $ret;
                }
                not_api_passions_delete_item:

                // api_passions_put_item
                if (preg_match('#^/toto/passions/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_passions_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Passions',  '_api_item_operation_name' => 'put',));
                    if (!in_array($requestMethod, array('PUT'))) {
                        $allow = array_merge($allow, array('PUT'));
                        goto not_api_passions_put_item;
                    }

                    return $ret;
                }
                not_api_passions_put_item:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
