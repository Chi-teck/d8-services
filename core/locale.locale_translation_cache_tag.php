<?php

/**
 * @file
 * Example of usage the locale.locale_translation_cache_tag service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\locale\EventSubscriber\LocaleTranslationCacheTag;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The locale.locale_translation_cache_tag service.
   *
   * @var \Drupal\locale\EventSubscriber\LocaleTranslationCacheTag
   */
  protected $localeTranslationCacheTag;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\locale\EventSubscriber\LocaleTranslationCacheTag $locale_translation_cache_tag
   *   The locale_translation_cache_tag service.
   */
   public function __construct(LocaleTranslationCacheTag $locale_translation_cache_tag) {
     $this->localeTranslationCacheTag = $locale_translation_cache_tag;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('locale.locale_translation_cache_tag')
    );
  }

}
