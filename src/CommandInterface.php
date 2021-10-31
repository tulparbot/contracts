<?php

namespace Tulpar\Contracts;

use Discord\Discord;
use Discord\Parts\Channel\Message;
use Discord\Parts\User\Member;
use Discord\Parts\User\User;
use Tulpar\Contracts\Extension\ArgumentInterface;
use Tulpar\Contracts\Extension\OptionInterface;

interface CommandInterface
{
    /**
     * Get the command string.
     *
     * @return string
     */
    public function getCommand(): string;

    /**
     * Get command description.
     *
     * @return string
     */
    public function getDescription(): string;

    /**
     * Get the command version.
     *
     * @return string
     */
    public function getVersion(): string;

    /**
     * Get the arguments.
     *
     * @return array
     */
    public function getArguments(): array;

    /**
     * Add argument
     *
     * @param  ArgumentInterface  $argument
     * @return $this
     */
    public function addArgument(ArgumentInterface $argument): self;

    /**
     * Get the options.
     *
     * @return array
     */
    public function getOptions(): array;

    /**
     * Add option.
     *
     * @param  OptionInterface  $option
     * @return $this
     */
    public function addOption(OptionInterface $option): self;

    /**
     * Get the required permissions.
     *
     * @return array
     */
    public function getPermissions(): array;

    /**
     * Get example valid usages of the command.
     *
     * @return array
     */
    public function getExampleUsages(): array;

    /**
     * Get help of the command.
     *
     * @return string
     */
    public function getHelpText(): string;

    /**
     * Check allowed in private channel.
     *
     * @return bool
     */
    public function isAllowedInPrivateChannel(): bool;

    /**
     * The Tulpar Bot Command Constructor.
     *
     * @param  Message  $message
     * @param  Discord  $discord
     */
    public function __construct(Message $message, Discord $discord);

    /**
     * Check command access.
     *
     * @param  Member|User|string|null  $member
     * @return bool
     */
    public function can(Member|User|string|null $member = null): bool;

    /**
     * Check command ready to use.
     *
     * @return string
     */
    public function check(): string;

    /**
     * Execute the command.
     */
    public function run(): string;
}
