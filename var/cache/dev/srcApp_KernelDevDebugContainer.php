<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSRpgNzO\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSRpgNzO/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSRpgNzO.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSRpgNzO\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerSRpgNzO\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'SRpgNzO',
    'container.build_id' => 'ef74443a',
    'container.build_time' => 1554470432,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSRpgNzO');