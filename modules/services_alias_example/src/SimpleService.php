<?php

declare(strict_types=1);

namespace Drupal\services_alias_example;

/**
 * An example of a simple service.
 *
 * This service has no dependencies.
 */
class SimpleService implements SimpleServiceInterface {

  /**
   * {@inheritDoc}
   */
  public function getTheString():string {
    return 'The string.';
  }

}
