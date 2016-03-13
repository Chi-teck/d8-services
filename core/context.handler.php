<?php

/**
 * @file
 * Example of usage the context.handler service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Plugin\Context\ContextHandler;
// The service interfaces.
use Drupal\Core\Plugin\Context\ContextHandlerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The context.handler service.
   *
   * @var \Drupal\Core\Plugin\Context\ContextHandlerInterface
   */
  protected $handler;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Plugin\Context\ContextHandlerInterface $handler
   *   The handler service.
   */
   public function __construct(ContextHandlerInterface $handler) {
     $this->handler = $handler;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('context.handler')
    );
  }

}
