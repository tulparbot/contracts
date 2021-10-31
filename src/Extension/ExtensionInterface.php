<?php

namespace Tulpar\Contracts\Extension;

use Tulpar\Contracts\Extension\AuthorInterface;

interface ExtensionInterface
{
    /**
     * Get extension name.
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Get extension author.
     *
     * @return \Tulpar\Contracts\Extension\AuthorInterface
     */
    public function getAuthor(): AuthorInterface;

    /**
     * Command list
     *
     * @return array
     */
    public function getCommands(): array;

    /**
     * Filter list
     *
     * @return array
     */
    public function getFilters(): array;
}
