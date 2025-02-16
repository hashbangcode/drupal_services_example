<?php

declare(strict_types=1);

namespace Drupal\Tests\services_parent_example\Kernel;

use Drupal\KernelTests\KernelTestBase;

/**
 * Kernel tests for the Generate20CharacterPassword service.
 */
class Generate20CharacterPasswordTest extends KernelTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'services_parent_example',
  ];

  /**
   * Test that the generated password is 20 characters long.
   */
  public function testSimpleService() {
    /** @var \Drupal\services_parent_example\Generate20CharacterPassword $service */
    $service = \Drupal::service('services_parent_example.generate_20_character_password');
    $this->assertTrue(strlen($service->generatePassword()) === 20);
  }

}
