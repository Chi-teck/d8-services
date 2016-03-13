<?php

/**
 * @file
 * Example of usage the drupal.proxy_original_service.router.dumper service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Routing\MatcherDumper;
// The service interfaces.
use Drupal\Core\Routing\MatcherDumperInterface;
use Symfony\Component\Routing\Matcher\Dumper\MatcherDumperInterface;

/**
 * The example.
 */
class Example {

  /**
   * The drupal.proxy_original_service.router.dumper service.
   *
   * @var \Drupal\Core\Routing\MatcherDumperInterface
   */
  protected $dumper;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Routing\MatcherDumperInterface $dumper
   *   The dumper service.
   */
   public function __construct(MatcherDumperInterface $dumper) {
     $this->dumper = $dumper;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('drupal.proxy_original_service.router.dumper')
    );
  }

}
