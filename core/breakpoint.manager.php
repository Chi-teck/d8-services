<?php

/**
 * @file
 * Example of usage the breakpoint.manager service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\breakpoint\BreakpointManager;
// The service interfaces.
use Drupal\Component\Plugin\Discovery\CachedDiscoveryInterface;
use Drupal\Component\Plugin\PluginManagerInterface;
use Drupal\Component\Plugin\Mapper\MapperInterface;
use Drupal\Component\Plugin\Factory\FactoryInterface;
use Drupal\Component\Plugin\Discovery\DiscoveryInterface;
use Drupal\breakpoint\BreakpointManagerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The breakpoint.manager service.
   *
   * @var \Drupal\breakpoint\BreakpointManagerInterface
   */
  protected $manager;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\breakpoint\BreakpointManagerInterface $manager
   *   The manager service.
   */
   public function __construct(BreakpointManagerInterface $manager) {
     $this->manager = $manager;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('breakpoint.manager')
    );
  }

}
