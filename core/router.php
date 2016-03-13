<?php

/**
 * @file
 * Example of usage the router service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Routing\AccessAwareRouter;
// The service interfaces.
use Drupal\Core\Routing\AccessAwareRouterInterface;
use Symfony\Component\Routing\Matcher\RequestMatcherInterface;
use Symfony\Component\Routing\Matcher\UrlMatcherInterface;
use Symfony\Component\Routing\RequestContextAwareInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\RouterInterface;

/**
 * The example.
 */
class Example {

  /**
   * The router service.
   *
   * @var \Drupal\Core\Routing\AccessAwareRouterInterface
   */
  protected $router;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Routing\AccessAwareRouterInterface $router
   *   The router service.
   */
   public function __construct(AccessAwareRouterInterface $router) {
     $this->router = $router;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('router')
    );
  }

}
