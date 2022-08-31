<?php


namespace Patters\Behavioral\Mediator;


class SimpleChat implements Chat
{
    private User $admin;
    private array $users;

    /**
     * @param User $admin
     */
    public function setAdmin(User $admin): void
    {
        $this->admin = $admin;
    }

    /**
     * @param User $user
     */
    public function addUserToChat(User $user): void
    {
        $this->users[] = $user;
    }


    public function sendMessage(string $message, User $user)
    {
        foreach ($this->users as $u) {
            if ($u != $user){
                $u->getMessage($message);
            }
        }
        $this->admin->getMessage($message);
    }
}