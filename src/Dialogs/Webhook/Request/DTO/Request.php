<?php

namespace Yandex\Dialogs\Webhook\Request\DTO;

/**
 * Class Request
 *
 * @package Yandex\Dialogs\Webhook\Request\DTO
 */
class Request
{
    /**
     * @var string Версия протокола.
     */
    protected $version;
    /**
     * @var Meta
     */
    protected $meta;
    /**
     * @var Phrase
     */
    protected $phrase;
    /**
     * @var Session
     */
    protected $session;

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     *
     * @return Request
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return Meta
     */
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * @param Meta $meta
     *
     * @return Request
     */
    public function setMeta($meta)
    {
        $this->meta = $meta;

        return $this;
    }

    /**
     * @return Phrase
     */
    public function getPhrase()
    {
        return $this->phrase;
    }

    /**
     * @param Phrase $phrase
     *
     * @return Request
     */
    public function setPhrase($phrase)
    {
        $this->phrase = $phrase;

        return $this;
    }

    /**
     * @return Session
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * @param Session $session
     *
     * @return Request
     */
    public function setSession($session)
    {
        $this->session = $session;

        return $this;
    }
}