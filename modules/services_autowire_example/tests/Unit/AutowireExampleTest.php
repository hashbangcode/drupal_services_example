<?php

declare(strict_types=1);

namespace Drupal\Tests\services_autowire_example\Unit;

use Drupal\Core\Password\DefaultPasswordGenerator;
use Drupal\services_autowire_example\AutowireExample;
use Drupal\Tests\UnitTestCase;

/**
 * Unit tests for the AutowireExample service.
 */
class AutowireExampleTest extends UnitTestCase {

  /**
   * Test that removeItemFromPayload removes an item from the payload.
   */
  public function testSimpleService() {
    $argumentService = new AutowireExample(new DefaultPasswordGenerator());
    $this->assertTrue(strlen($argumentService->generate12CharacterPassword()) === 12);
  }

}
