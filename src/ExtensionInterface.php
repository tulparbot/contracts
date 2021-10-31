<?php

namespace Tulpar\Contracts;

interface ExtensionInterface
{
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
