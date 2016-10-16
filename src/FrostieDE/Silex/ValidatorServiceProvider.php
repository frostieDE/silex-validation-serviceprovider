<?php

namespace FrostieDE\Silex;

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Cache\ArrayCache;
use Pimple\Container;
use Symfony\Component\Validator\Mapping\Cache\DoctrineCache;
use Symfony\Component\Validator\Mapping\Factory\LazyLoadingMetadataFactory;
use Symfony\Component\Validator\Mapping\Loader\AnnotationLoader;

class ValidatorServiceProvider extends \Silex\Provider\ValidatorServiceProvider {
    /**
     * @inheritDoc
     */
    public function register(Container $app) {
        parent::register($app);

        $app['validator.mapping.class_metadata_factory'] = function() {
            $reader = new AnnotationReader();
            $cache = new DoctrineCache(new ArrayCache());
            $loader = new AnnotationLoader($reader);

            return new LazyLoadingMetadataFactory($loader, $cache);
        };
    }
}