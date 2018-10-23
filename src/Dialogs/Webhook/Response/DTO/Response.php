<?php

namespace Yandex\Dialogs\Webhook\Response\DTO;

use Yandex\Dialogs\Webhook\Response\DTO\Buttons\Collection;

/**
 * Class Response
 *
 * @package Yandex\Dialogs\Webhook\Responce\DTO
 */
class Response
{
    /**
     * @var string Текст, который следует показать пользователю, максимум 1024 символа. Обязательное свойство.
     */
    protected $text;

    /**
     * @var string Ответ в формате TTS (text-to-speech), максимум 1024 символа.
     * @see https://tech.yandex.ru/dialogs/alice/doc/speech-tuning-docpage/#speech-tuning
     */
    protected $tts;

    /**
     * @var bool Признак конца разговора. Обязательное свойство.
     * Допустимые значения:
     * false — сессию следует продолжить;
     * true — сессию следует завершить.
     */
    protected $isEndSession;

    /**
     * @var Session Данные о сессии. Обязательное свойство.
     */
    protected $session;

    /**
     * @var string Версия протокола.
     */
    protected $version;

    /**
     * @var Collection
     */
    protected $buttons;

    /**
     * Response constructor.
     */
    public function __construct()
    {
        $this->buttons = new Collection();
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     *
     * @return Response
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return string
     */
    public function getTts()
    {
        return $this->tts;
    }

    /**
     * @param string $tts
     *
     * @return Response
     */
    public function setTts($tts)
    {
        $this->tts = $tts;

        return $this;
    }

    /**
     * @return bool
     */
    public function isEndSession()
    {
        return $this->isEndSession;
    }

    /**
     * @param bool $isEndSession
     *
     * @return Response
     */
    public function setIsEndSession($isEndSession)
    {
        $this->isEndSession = $isEndSession;

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
     * @return Response
     */
    public function setSession(Session $session)
    {
        $this->session = $session;

        return $this;
    }

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
     * @return Response
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return Collection
     */
    public function getButtons()
    {
        return $this->buttons;
    }

    /**
     * @param Collection $buttons
     *
     * @return Response
     */
    public function setButtons(Collection $buttons)
    {
        $this->buttons = $buttons;

        return $this;
    }
}