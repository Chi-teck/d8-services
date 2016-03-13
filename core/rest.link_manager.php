<?php

/**
 * @file
 * Example of usage the rest.link_manager service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\rest\LinkManager\LinkManager;
// The service interfaces.
use Drupal\rest\LinkManager\LinkManagerInterface;
use Drupal\rest\LinkManager\RelationLinkManagerInterface;
use Drupal\rest\LinkManager\ConfigurableLinkManagerInterface;
use Drupal\rest\LinkManager\TypeLinkManagerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The rest.link_manager service.
   *
   * @var \Drupal\rest\LinkManager\LinkManagerInterface
   */
  protected $linkManager;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\rest\LinkManager\LinkManagerInterface $link_manager
   *   The link_manager service.
   */
   public function __construct(LinkManagerInterface $link_manager) {
     $this->linkManager = $link_manager;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('rest.link_manager')
    );
  }

}
