<?php

declare(strict_types=1);

namespace Endermanbugzjfc\BackupMe\libs\Inmarelibero\GitIgnoreChecker\Exception;

/**
 * Class GitIgnoreCherkerException
 * @package Endermanbugzjfc\BackupMe\libs\Inmarelibero\GitIgnoreChecker\Exception
 *
 * Base class for all GitChecker exceptions.
 * This class is abstract to ensure that only fine-grained exceptions are thrown throughout the code.
 */
abstract class GitIgnoreCherkerException extends \RuntimeException
{

}
