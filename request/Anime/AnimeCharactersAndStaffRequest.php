<?php

namespace JikanPHP\Request\Anime;

use JikanPHP\Helper\Constants;
use JikanPHP\Request\RequestInterface;

/**
 * Class AnimeRequest
 *
 * @package JikanPHP\Request
 */
class AnimeCharactersAndStaffRequest implements RequestInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * AnimeCharactersAndStaffRequest constructor.
     *
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return sprintf(Constants::BASE_URL.'/anime/%d/characters_staff', $this->id);
    }
}
