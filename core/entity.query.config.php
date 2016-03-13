<?php

/**
 * @file
 * Example of usage the entity.query.config service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Config\Entity\Query\QueryFactory;
// The service interfaces.
use Drupal\Core\Entity\Query\QueryFactoryInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The entity.query.config service.
   *
   * @var \Drupal\Core\Config\Entity\Query\QueryFactory
   */
  protected $config;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Config\Entity\Query\QueryFactory $config
   *   The config service.
   */
   public function __construct(QueryFactory $config) {
     $this->config = $config;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity.query.config')
    );
  }

}
