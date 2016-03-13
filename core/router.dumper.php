<?php

/**
 * @file
 * Example of usage the router.dumper service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\ProxyClass\Routing\MatcherDumper;
// The service interfaces.
use Drupal\Core\Routing\MatcherDumperInterface;
use Symfony\Component\Routing\Matcher\Dumper\MatcherDumperInterface;

/**
 * The example.
 */
class Example {

  /**
   * The router.dumper service.
   *
   * @var \Drupal\Core\ProxyClass\Routing\MatcherDumper
   */
  protected $dumper;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\ProxyClass\Routing\MatcherDumper $dumper
   *   The dumper service.
   */
   public function __construct(MatcherDumper $dumper) {
     $this->dumper = $dumper;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('router.dumper')
    );
  }

}
