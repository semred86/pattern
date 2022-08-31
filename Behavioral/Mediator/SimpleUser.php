<?php


namespace Patters\Behavioral\Mediator;


class SimpleUser implements User
{
    private Chat $chat;
    private string $name;

    /**
     * Admin constructor.
     * @param Chat $chat
     * @param string $name
     */
    public function __construct(Chat $chat, string $name)
    {
        $this->chat = $chat;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function sendMessage(string $message)
    {
        $this->chat->sendMessage($message, $this);
    }

    public function getMessage(string $message)
    {
        print "$this->name receiving message: $message.\n";
    }
}