<?php

/**
 * @file
 * Example of usage the class_resolver service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\DependencyInjection\ClassResolver;
// The service interfaces.
use Drupal\Core\DependencyInjection\ClassResolverInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

/**
 * The example.
 */
class Example {

  /**
   * The class_resolver service.
   *
   * @var \Drupal\Core\DependencyInjection\ClassResolverInterface
   */
  protected $classResolver;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\DependencyInjection\ClassResolverInterface $class_resolver
   *   The class_resolver service.
   */
   public function __construct(ClassResolverInterface $class_resolver) {
     $this->classResolver = $class_resolver;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('class_resolver')
    );
  }

}
