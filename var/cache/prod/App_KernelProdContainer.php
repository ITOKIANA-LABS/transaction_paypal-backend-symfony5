<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2xcnrI5\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2xcnrI5/App_KernelProdContainer.php') {
    touch(__DIR__.'/Container2xcnrI5.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\Container2xcnrI5\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \Container2xcnrI5\App_KernelProdContainer([
    'container.build_hash' => '2xcnrI5',
    'container.build_id' => 'ddfc3dde',
    'container.build_time' => 1624884423,
], __DIR__.\DIRECTORY_SEPARATOR.'Container2xcnrI5');