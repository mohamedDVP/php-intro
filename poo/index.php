<?php
// objet, classe, public, polymorphisme, héritage, attributs
// constructeur, méthodes, encapsulation, classe abstraite
// interface

// Définition
class User
{

    private const LEGAL_AGE = 18;

    private int $id;
    private string $name;
    private int $age;
    private string $description;
    private bool $active;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * Returns true if user's is over fixed legal age
     *
     * @return boolean
     */
    public function hasLegalAge(): bool
    {
        return $this->age >= self::LEGAL_AGE;
    }

    // Getter
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of name
     *
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param string $name
     *
     * @return self
     */

     // Setter
    public function setName(string $name): self {
        $this->name = $name;
        return $this;
    }

    /**
     * Get the value of age
     *
     * @return int
     */
    public function getAge(): int {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @param int $age
     *
     * @return self
     */
    public function setAge(int $age): self {
        $this->age = $age;
        return $this;
    }

    /**
     * Get the value of description
     *
     * @return string
     */
    public function getDescription(): string {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self {
        $this->description = $description;
        return $this;
    }

    /**
     * Get the value of active
     *
     * @return bool
     */
    public function getActive(): bool {
        return $this->active;
    }

    /**
     * Set the value of active
     *
     * @param bool $active
     *
     * @return self
     */
    public function setActive(bool $active): self {
        $this->active = $active;
        return $this;
    }
}

// Instanciation d'un objet
$user = new User(123);


var_dump($user);

echo $user->getId();
$user->setName('Bob')
    ->setAge(59)
    ->setDescription('president desk local just press problem which love golden such needed suddenly calm receive size machinery gave boy star people directly turn movie hay')
    ->setActive(true);

echo $user->getName();


$admin = new User(1);

$admin->setAge(32);

echo $admin->hasLegalAge() ? "L'admin est autorisé à boire de l'alcool" : "Pas autorisé !";
