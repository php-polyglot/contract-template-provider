<?php

declare(strict_types=1);

namespace Polyglot\Contract\TemplateProvider;

use Polyglot\Contract\TemplateProvider\Exception\TemplateNotFound;

interface TemplateProvider
{
    /**
     * @param string $domain
     * @param string $key
     * @param string $locale
     * @return void
     */
    public function need(string $domain, string $key, string $locale): void;

    /**
     * @param string $domain
     * @param string $key
     * @param string $locale
     * @return string
     * @throws TemplateNotFound
     */
    public function get(string $domain, string $key, string $locale): string;

    /**
     * @return void
     */
    public function flush(): void;

    /**
     * @return iterable<string>
     */
    public function getDomains(): iterable;

    /**
     * @return iterable<string>
     */
    public function getLocales(string $domain): iterable;

    /**
     * @return iterable<string, string>
     */
    public function getTemplates(string $domain, string $locale): iterable;
}
