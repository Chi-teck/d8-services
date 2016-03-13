<?php

/**
 * @file
 * Example of usage the path.matcher service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Path\PathMatcher;
// The service interfaces.
use Drupal\Core\Path\PathMatcherInterface;

/**
 * The example.
 */
class Example {

  /**
   * The path.matcher service.
   *
   * @var \Drupal\Core\Path\PathMatcherInterface
   */
  protected $matcher;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Path\PathMatcherInterface $matcher
   *   The matcher service.
   */
   public function __construct(PathMatcherInterface $matcher) {
     $this->matcher = $matcher;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('path.matcher')
    );
  }

}
