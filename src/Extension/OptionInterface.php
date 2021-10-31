<?php

namespace Tulpar\Contracts\Extension;

interface OptionInterface
{
    /**
     * Get character.
     *
     * @return string
     */
    public function getCharacter(): string;

    /**
     * Set character.
     *
     * @param  string  $character
     * @return $this
     */
    public function setCharacter(string $character): self;

    /**
     * Get name.
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Set name.
     *
     * @param  string  $name
     * @return $this
     */
    public function setName(string $name): self;

    /**
     * Is exists.
     *
     * @return bool
     */
    public function isExists(): bool;

    /**
     * Set exists.
     *
     * @param  bool  $exists
     * @return $this
     */
    public function setExists(bool $exists): self;
}
