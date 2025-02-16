<?php

declare(strict_types=1);

namespace Drupal\services_simple_example;

/**
 * Interface for the SimpleService service.
 */
interface SimpleServiceInterface {

  /**
   * Get an array.
   *
   * @return array
   *   The array.
   */
  public function getArray():array;

}
