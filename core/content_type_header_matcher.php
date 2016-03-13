<?php

/**
 * @file
 * Example of usage the content_type_header_matcher service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Routing\ContentTypeHeaderMatcher;
// The service interfaces.
use Drupal\Core\Routing\RouteFilterInterface;
use Symfony\Cmf\Component\Routing\NestedMatcher\RouteFilterInterface;

/**
 * The example.
 */
class Example {

  /**
   * The content_type_header_matcher service.
   *
   * @var \Drupal\Core\Routing\ContentTypeHeaderMatcher
   */
  protected $contentTypeHeaderMatcher;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Routing\ContentTypeHeaderMatcher $content_type_header_matcher
   *   The content_type_header_matcher service.
   */
   public function __construct(ContentTypeHeaderMatcher $content_type_header_matcher) {
     $this->contentTypeHeaderMatcher = $content_type_header_matcher;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('content_type_header_matcher')
    );
  }

}
