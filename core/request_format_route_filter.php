<?php

/**
 * @file
 * Example of usage the request_format_route_filter service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Routing\RequestFormatRouteFilter;
// The service interfaces.
use Drupal\Core\Routing\RouteFilterInterface;
use Symfony\Cmf\Component\Routing\NestedMatcher\RouteFilterInterface;

/**
 * The example.
 */
class Example {

  /**
   * The request_format_route_filter service.
   *
   * @var \Drupal\Core\Routing\RequestFormatRouteFilter
   */
  protected $requestFormatRouteFilter;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Routing\RequestFormatRouteFilter $request_format_route_filter
   *   The request_format_route_filter service.
   */
   public function __construct(RequestFormatRouteFilter $request_format_route_filter) {
     $this->requestFormatRouteFilter = $request_format_route_filter;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('request_format_route_filter')
    );
  }

}
