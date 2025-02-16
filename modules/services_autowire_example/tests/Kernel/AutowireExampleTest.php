<?php

namespace Drupal\Tests\services_autowire_example\Kernel;

use Drupal\KernelTests\KernelTestBase;

/**
 * Kernel tests for the SingleArgument service.
 */
class AutowireExampleTest extends KernelTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'services_autowire_example',
  ];

  /**
   * Test that the generatePassword() method generates a 12 character password.
   */
  public function testSimpleService() {
    /** @var \Drupal\services_autowire_example\AutowireExample $simpleService */
    $argumentService = \Drupal::service('services_autowire_example.autowire_example');
    $this->assertTrue(strlen($argumentService->generate12CharacterPassword()) === 12);
  }

}
