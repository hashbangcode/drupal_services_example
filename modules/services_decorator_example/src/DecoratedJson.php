<?php

namespace Drupal\services_decorator_example;

use Drupal\Component\Serialization\Json;

/**
 * Decorates the Json class.
 */
class DecoratedJson extends Json {

  /**
   * {@inheritdoc}
   */
  public static function decode($string) {
    // Change the Json::decode() method to convert large numbers into strings.
    return json_decode($string, TRUE, 512, JSON_BIGINT_AS_STRING);
  }

}
