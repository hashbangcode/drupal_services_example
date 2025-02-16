<?php

declare(strict_types=1);

namespace Drupal\Tests\services_parent_example\Kernel;

use Drupal\KernelTests\KernelTestBase;

/**
 * Kernel tests for the Generate12CharacterPassword service.
 */
class Generate12CharacterPasswordTest extends KernelTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'services_parent_example',
  ];

  /**
   * Test that the generated password is 12 characters long.
   */
  public function testSimpleService() {
    /** @var \Drupal\services_parent_example\Generate12CharacterPassword $service */
    $service = \Drupal::service('services_parent_example.generate_12_character_password');
    $this->assertTrue(strlen($service->generatePassword()) === 12);
  }

}
