<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEkxjous\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEkxjous/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerEkxjous.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerEkxjous\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerEkxjous\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Ekxjous',
    'container.build_id' => 'b9f4f6ef',
    'container.build_time' => 1516045062,
));
