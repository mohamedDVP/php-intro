<?php

class Email
{
    private string $email;

    /**
     * Create a new instance of Email class
     * 
     * @param string $email Plain text email
     * @throws InvalidArgumentException if Email format is invalid
     */
    public function __construct(string $email)
    {
        $this->email = $email;

        if(!$this->isValid())
        {
            throw new InvalidArgumentException("Le format de l'email et incorrect");
        }
    }

    public function isValid(): bool
    {
        return filter_var($this->email, FILTER_VALIDATE_EMAIL) !== false;
    }

    /**
     * Get the value of email
     *
     * @return string
     */
    public function getEmail(): string {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self {
        $this->email = $email;
        return $this;
    }
}