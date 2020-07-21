<?php


namespace App;


use Illuminate\Database\Eloquent\JsonEncodingException;


class Salary  {
    /** @var int*/
    private $minsal;
    /** @var int*/
    private $maxsal;

    /**
     * @return int
     */
    public function getMinsal(): int
    {
        return $this->minsal;
    }

    /**
     * @param int $minsal
     */
    public function setMinsal(int $minsal): void
    {
        $this->minsal = $minsal;
    }

    /**
     * @return int
     */
    public function getMaxsal(): int
    {
        return $this->maxsal;
    }

    /**
     * @param int $maxsal
     */
    public function setMaxsal(int $maxsal): void
    {
        $this->maxsal = $maxsal;
    }



}
