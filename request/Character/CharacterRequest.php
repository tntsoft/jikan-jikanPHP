<?php

namespace Jikan\Request\Character;

use Jikan\Helper\Constants;
use Jikan\Request\RequestInterface;

/**
 * Class Character
 *
 * @package Jikan\Request
 */
class CharacterRequest implements RequestInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * CharacterRequest constructor.
     *
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * Get the path to request
     *
     * @return string
     */
    public function getPath(): string
    {
        return sprintf(Constants::BASE_URL.'/character/%d', $this->id);
    }
}
