<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'api_platform.graphql.action.entrypoint' shared service.

include_once $this->targetDirs[3].'/vendor/api-platform/core/src/GraphQl/Resolver/Factory/ResolverFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/GraphQl/Resolver/ResourceAccessCheckerTrait.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/GraphQl/Resolver/Factory/CollectionResolverFactory.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/GraphQl/Resolver/Factory/ItemMutationResolverFactory.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/GraphQl/Resolver/ItemResolver.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/GraphQl/Resolver/ResourceFieldResolver.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/GraphQl/Type/SchemaBuilderInterface.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/GraphQl/Type/SchemaBuilder.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/GraphQl/ExecutorInterface.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/GraphQl/Executor.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/GraphQl/Action/EntrypointAction.php';

$a = ${($_ = isset($this->services['serializer']) ? $this->services['serializer'] : $this->getSerializerService()) && false ?: '_'};
$b = ${($_ = isset($this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceMetadataFactoryInterface']) ? $this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceMetadataFactoryInterface'] : $this->getResourceMetadataFactoryInterfaceService()) && false ?: '_'};
$c = ${($_ = isset($this->services['ApiPlatform\Core\Security\ResourceAccessCheckerInterface']) ? $this->services['ApiPlatform\Core\Security\ResourceAccessCheckerInterface'] : $this->getResourceAccessCheckerInterfaceService()) && false ?: '_'};
$d = ${($_ = isset($this->services['ApiPlatform\Core\Api\IriConverterInterface']) ? $this->services['ApiPlatform\Core\Api\IriConverterInterface'] : $this->getIriConverterInterfaceService()) && false ?: '_'};

return $this->services['api_platform.graphql.action.entrypoint'] = new \ApiPlatform\Core\GraphQl\Action\EntrypointAction(new \ApiPlatform\Core\GraphQl\Type\SchemaBuilder(${($_ = isset($this->services['api_platform.metadata.property.name_collection_factory']) ? $this->services['api_platform.metadata.property.name_collection_factory'] : $this->getApiPlatform_Metadata_Property_NameCollectionFactoryService()) && false ?: '_'}, ${($_ = isset($this->services['ApiPlatform\Core\Metadata\Property\Factory\PropertyMetadataFactoryInterface']) ? $this->services['ApiPlatform\Core\Metadata\Property\Factory\PropertyMetadataFactoryInterface'] : $this->getPropertyMetadataFactoryInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceNameCollectionFactoryInterface']) ? $this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceNameCollectionFactoryInterface'] : $this->getResourceNameCollectionFactoryInterfaceService()) && false ?: '_'}, $b, new \ApiPlatform\Core\GraphQl\Resolver\Factory\CollectionResolverFactory(${($_ = isset($this->services['api_platform.collection_data_provider']) ? $this->services['api_platform.collection_data_provider'] : $this->getApiPlatform_CollectionDataProviderService()) && false ?: '_'}, ${($_ = isset($this->services['api_platform.subresource_data_provider']) ? $this->services['api_platform.subresource_data_provider'] : $this->getApiPlatform_SubresourceDataProviderService()) && false ?: '_'}, $a, ${($_ = isset($this->services['api_platform.identifiers_extractor.cached']) ? $this->services['api_platform.identifiers_extractor.cached'] : $this->getApiPlatform_IdentifiersExtractor_CachedService()) && false ?: '_'}, $b, $c, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, true), new \ApiPlatform\Core\GraphQl\Resolver\Factory\ItemMutationResolverFactory($d, ${($_ = isset($this->services['ApiPlatform\Core\DataPersister\DataPersisterInterface']) ? $this->services['ApiPlatform\Core\DataPersister\DataPersisterInterface'] : $this->load(__DIR__.'/getDataPersisterInterfaceService.php')) && false ?: '_'}, $a, $b, $c, ${($_ = isset($this->services['api_platform.validator']) ? $this->services['api_platform.validator'] : $this->load(__DIR__.'/getApiPlatform_ValidatorService.php')) && false ?: '_'}), new \ApiPlatform\Core\GraphQl\Resolver\ItemResolver($d, $a, $b, $c), new \ApiPlatform\Core\GraphQl\Resolver\ResourceFieldResolver($d), ${($_ = isset($this->services['api_platform.filter_locator']) ? $this->services['api_platform.filter_locator'] : $this->services['api_platform.filter_locator'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array())) && false ?: '_'}, true), new \ApiPlatform\Core\GraphQl\Executor(), ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'}, false, false, '');
