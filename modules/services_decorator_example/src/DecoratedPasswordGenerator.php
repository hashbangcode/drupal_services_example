<?php

declare(strict_types=1);

namespace Drupal\services_decorator_example;

use Drupal\Core\Password\DefaultPasswordGenerator;

/**
 * Decorates the Json class.
 */
class DecoratedPasswordGenerator extends DefaultPasswordGenerator {

  /**
   * {@inheritDoc}
   */
  protected $allowedChars = 'abcdefghijkmnopqrstuvwxyz';

}
