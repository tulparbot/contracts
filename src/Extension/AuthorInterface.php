<?php

namespace Tulpar\Contracts\Extension;

interface AuthorInterface
{
    /**
     * Get author first name.
     *
     * @return string
     */
    public function getFirstName(): string;

    /**
     * Get author last name.
     *
     * @return string
     */
    public function getLastName(): string;

    /**
     * Get author email.
     *
     * @return string
     */
    public function getEmail(): string;

    /**
     * Get author url.
     *
     * @return string
     */
    public function getUrl(): string;
}
