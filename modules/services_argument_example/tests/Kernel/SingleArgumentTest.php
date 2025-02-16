<?php

declare(strict_types=1);

namespace Drupal\Tests\services_argument_example\Kernel;

use Drupal\KernelTests\KernelTestBase;

/**
 * Kernel tests for the SingleArgument service.
 */
class SingleArgumentTest extends KernelTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'services_argument_example',
  ];

  /**
   * Test that the generated password is 12 characters long.
   */
  public function testSimpleService() {
    /** @var \Drupal\services_argument_example\SingleArgument $argumentService */
    $argumentService = \Drupal::service('services_argument_example.single_argument');
    $this->assertTrue(strlen($argumentService->generate12CharacterPassword()) === 12);
  }

}
