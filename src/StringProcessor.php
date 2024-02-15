<?php

declare(strict_types=1);

namespace AlexanderGladkov\StringProcessing;


class StringProcessor
{
    /**
     * @param string $string
     * @return int
     */
    public function getLength(string $string): int
    {
        return mb_strlen($string);
    }
}