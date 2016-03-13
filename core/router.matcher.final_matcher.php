<?php

/**
 * @file
 * Example of usage the router.matcher.final_matcher service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Routing\UrlMatcher;
// The service interfaces.
use Symfony\Cmf\Component\Routing\NestedMatcher\FinalMatcherInterface;
use Symfony\Component\Routing\Matcher\UrlMatcherInterface;
use Symfony\Component\Routing\RequestContextAwareInterface;
use Symfony\Component\Routing\Matcher\RequestMatcherInterface;

/**
 * The example.
 */
class Example {

  /**
   * The router.matcher.final_matcher service.
   *
   * @var \Drupal\Core\Routing\UrlMatcher
   */
  protected $finalMatcher;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Routing\UrlMatcher $final_matcher
   *   The final_matcher service.
   */
   public function __construct(UrlMatcher $final_matcher) {
     $this->finalMatcher = $final_matcher;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('router.matcher.final_matcher')
    );
  }

}
