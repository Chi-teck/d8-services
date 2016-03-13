<?php

/**
 * @file
 * Example of usage the title_resolver service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Controller\TitleResolver;
// The service interfaces.
use Drupal\Core\Controller\TitleResolverInterface;

/**
 * The example.
 */
class Example {

  /**
   * The title_resolver service.
   *
   * @var \Drupal\Core\Controller\TitleResolverInterface
   */
  protected $titleResolver;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Controller\TitleResolverInterface $title_resolver
   *   The title_resolver service.
   */
   public function __construct(TitleResolverInterface $title_resolver) {
     $this->titleResolver = $title_resolver;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('title_resolver')
    );
  }

}
