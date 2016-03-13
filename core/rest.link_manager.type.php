<?php

/**
 * @file
 * Example of usage the rest.link_manager.type service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\rest\LinkManager\TypeLinkManager;
// The service interfaces.
use Drupal\rest\LinkManager\TypeLinkManagerInterface;
use Drupal\rest\LinkManager\ConfigurableLinkManagerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The rest.link_manager.type service.
   *
   * @var \Drupal\rest\LinkManager\TypeLinkManagerInterface
   */
  protected $type;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\rest\LinkManager\TypeLinkManagerInterface $type
   *   The type service.
   */
   public function __construct(TypeLinkManagerInterface $type) {
     $this->type = $type;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('rest.link_manager.type')
    );
  }

}
