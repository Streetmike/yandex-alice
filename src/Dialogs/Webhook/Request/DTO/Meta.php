<?php

namespace Yandex\Dialogs\Webhook\Request\DTO;
/**
 * Class Meta
 * Информация об устройстве, с помощью которого пользователь разговаривает с Алисой.ѵ
 *
 * @package Yandex\Dialogs\Webhook\Request\DTO
 */
class Meta
{
    /**
     * @var string Язык в POSIX-формате.
     */
    protected $locale;
    /**
     * @var \DateTimeZone Название часового пояса, включая алиасы.
     */
    protected $timezone;
    /**
     * @var string Идентификатор устройства и приложения, в котором идет разговор.
     */
    protected $clientId;

    /**
     * @param string $locale
     *
     * @return Meta
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * @param \DateTimeZone $timezone
     *
     * @return Meta
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * @param string $clientId
     *
     * @return Meta
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @return \DateTimeZone
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * @return string
     */
    public function getClientId()
    {
        return $this->clientId;
    }
}