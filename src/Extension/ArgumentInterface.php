<?php

namespace Tulpar\Contracts\Extension;

interface ArgumentInterface
{
    public const CAST_STRING = "string";
    public const CAST_INTEGER = "integer";
    public const CAST_FLOAT = "float";
    public const CAST_BOOLEAN = "boolean";

    /**
     * Set required
     *
     * @param  bool  $required
     * @return $this
     */
    public function setRequired(bool $required): self;

    /**
     * Is required
     *
     * @return bool
     */
    public function isRequired(): bool;

    /**
     * Set argument cast.
     *
     * @param  string  $cast
     * @return $this
     */
    public function setCast(string $cast): self;

    /**
     * Get argument cast type
     *
     * @return string
     */
    public function getCast(): string;

    /**
     * Set argument value.
     *
     * @param  string  $value
     * @return $this
     */
    public function setValue(string $value): self;

    /**
     * Get value of argument.
     *
     * @return string|int|float|bool|null
     */
    public function getValue(): string|int|float|bool|null;
}
