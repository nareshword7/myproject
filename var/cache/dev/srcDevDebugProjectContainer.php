<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFzD3x8Z\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFzD3x8Z/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerFzD3x8Z.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerFzD3x8Z\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerFzD3x8Z\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'FzD3x8Z',
    'container.build_id' => 'ff1d9d1f',
    'container.build_time' => 1536848047,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerFzD3x8Z');
