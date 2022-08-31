<?php


namespace Patters\Behavioral\Iterator;


class PhpDeveloper implements Collection
{
    public string $name;
    public array $skills;

    /**
     * PhpDeveloper constructor.
     * @param string $name
     * @param array $skills
     */
    public function __construct(string $name, array $skills)
    {
        $this->name = $name;
        $this->skills = $skills;
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

    /**
     * @return array
     */
    public function getSkills(): array
    {
        return $this->skills;
    }

    /**
     * @param array $skills
     */
    public function setSkills(array $skills): void
    {
        $this->skills = $skills;
    }

    public function getIterator(): Iterator
    {
        return new SkillIterator($this->skills);
    }
}