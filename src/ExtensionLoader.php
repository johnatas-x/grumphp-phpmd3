<?php

declare(strict_types=1);

namespace GrumphpPhpMd3;

use GrumPHP\Extension\ExtensionInterface;

/**
 * Load extensions for grumphp.
 */
class ExtensionLoader implements ExtensionInterface
{
  /**
   * @return iterable
   */
  public function imports(): iterable
  {
    yield __DIR__ . '/../Services.yaml';
  }

}