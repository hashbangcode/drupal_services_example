<?php

declare(strict_types=1);

namespace Drupal\Tests\services_argument_example\Unit;

use Drupal\Core\Password\DefaultPasswordGenerator;
use Drupal\services_argument_example\SingleArgument;
use Drupal\Tests\UnitTestCase;

/**
 * Unit tests for the SingleArgument service.
 */
class SingleArgumentTest extends UnitTestCase {

  /**
   * Test that the generated password is 12 characters long.
   */
  public function testSimpleService() {
    $argumentService = new SingleArgument(new DefaultPasswordGenerator());
    $this->assertTrue(strlen($argumentService->generate12CharacterPassword()) === 12);
  }

}
