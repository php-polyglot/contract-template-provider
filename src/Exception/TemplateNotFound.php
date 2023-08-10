<?php

declare(strict_types=1);

namespace Polyglot\Contract\TemplateProvider\Exception;

use Exception;
use Throwable;

final class TemplateNotFound extends Exception
{
    public function __construct(string $key, ?Throwable $previous = null)
    {
        parent::__construct(sprintf('template %s not found', $key), 1, $previous);
    }
}
