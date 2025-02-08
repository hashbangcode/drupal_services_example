<?php

namespace Drupal\services_simple_example;

/**
 * An example of a simple service.
 *
 * This service has no dependencies.
 */
class SimpleService implements SimpleServiceInterface {

  /**
   * {@inheritDoc}
   */
  public function getArray():array {
    return [];
  }

}
