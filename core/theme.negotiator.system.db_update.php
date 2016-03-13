<?php

/**
 * @file
 * Example of usage the theme.negotiator.system.db_update service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\system\Theme\DbUpdateNegotiator;
// The service interfaces.
use Drupal\Core\Theme\ThemeNegotiatorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The theme.negotiator.system.db_update service.
   *
   * @var \Drupal\system\Theme\DbUpdateNegotiator
   */
  protected $dbUpdate;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\system\Theme\DbUpdateNegotiator $db_update
   *   The db_update service.
   */
   public function __construct(DbUpdateNegotiator $db_update) {
     $this->dbUpdate = $db_update;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('theme.negotiator.system.db_update')
    );
  }

}
