<?php

declare(strict_types=1);

namespace Formapro\TelegramBot;

interface ChatMemberInterface
{
    public function getId(): int;

    public function isBot(): bool;

    public function getFirstName(): ?string;

    public function getUsername(): ?string;
}
