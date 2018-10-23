<?php

namespace Yandex\Dialogs\Webhook\Response\DTO\Buttons;

/**
 * Class Button
 * Кнопки, которые следует показать пользователю. Кнопки можно использовать как ссылки или подсказки для реплик.
 *
 * @package Yandex\Dialogs\Webhook\Responce\DTO\Buttons
 */
class Button
{
    /**
     * @var string Текст кнопки, обязателен для каждой кнопки. Максимум 64 символа. Если для кнопки не указано свойство url, по нажатию текст кнопки будет отправлен навыку как реплика пользователя.
     */
    protected $title;

    /**
     * @var string|null Произвольный JSON, который Яндекс.Диалоги должны отправить обработчику, если данная кнопка будет нажата. Максимум 4096 байт.
     */
    protected $payload;

    /**
     * @var string|null URL, который должна открывать кнопка, максимум 1024 байта.
     */
    protected $url;

    /**
     * @var bool Признак того, что кнопку нужно убрать после следующей реплики пользователя. Допустимые значения:
     *  false — кнопка должна оставаться активной (значение по умолчанию);
     *  true — кнопку нужно скрывать после нажатия.
     */
    protected $isHide;

    /**
     * Button constructor.
     */
    public function __construct()
    {
        $this->isHide = false;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return Button
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * @param string $payload
     *
     * @return Button
     */
    public function setPayload($payload)
    {
        $this->payload = $payload;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return Button
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return bool
     */
    public function isHide()
    {
        return $this->isHide;
    }

    /**
     * @param bool $isHide
     *
     * @return Button
     */
    public function setIsHide($isHide)
    {
        $this->isHide = $isHide;

        return $this;
    }
}