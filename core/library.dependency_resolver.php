<?php

/**
 * @file
 * Example of usage the library.dependency_resolver service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Asset\LibraryDependencyResolver;
// The service interfaces.
use Drupal\Core\Asset\LibraryDependencyResolverInterface;

/**
 * The example.
 */
class Example {

  /**
   * The library.dependency_resolver service.
   *
   * @var \Drupal\Core\Asset\LibraryDependencyResolverInterface
   */
  protected $dependencyResolver;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Asset\LibraryDependencyResolverInterface $dependency_resolver
   *   The dependency_resolver service.
   */
   public function __construct(LibraryDependencyResolverInterface $dependency_resolver) {
     $this->dependencyResolver = $dependency_resolver;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('library.dependency_resolver')
    );
  }

}
