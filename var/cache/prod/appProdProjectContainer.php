<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHwxuxvs\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHwxuxvs/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerHwxuxvs.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerHwxuxvs\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerHwxuxvs\appProdProjectContainer(array(
    'container.build_hash' => 'Hwxuxvs',
    'container.build_id' => 'b606ec3f',
    'container.build_time' => 1522069552,
));