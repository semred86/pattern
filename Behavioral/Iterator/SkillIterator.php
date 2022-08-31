<?php


namespace Patters\Behavioral\Iterator;


class SkillIterator implements Iterator
{
    protected int $index;
    protected array $skills;

    /**
     * SkillIterator constructor.
     * @param array $skills
     */
    public function __construct(array $skills)
    {
        $this->skills = $skills;
        $this->index = 0;
    }

    public function hasNext(): bool
    {
        return $this->index < count($this->skills);
    }

    public function next()
    {
        return $this->skills[$this->index++];
    }
}