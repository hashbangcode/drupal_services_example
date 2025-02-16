<?php

declare(strict_types=1);

namespace Drupal\services_alias_example;

/**
 * Interface for the SimpleService service.
 */
interface SimpleServiceInterface {

  /**
   * Get the string.
   *
   * @return string
   *   The string.
   */
  public function getTheString():string;

}
