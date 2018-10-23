<?php

namespace Yandex\Dialogs\Webhook\Request\DTO;

/**
 * Class Phrase
 * Фраза, полученная от пользователя.
 *
 * @package Yandex\Dialogs\Webhook\Request\DTO
 */
class Phrase
{
    /**
     * @var string Тип ввода:
     *  SimpleUtterance — голосовой ввод;
     *  ButtonPressed — нажатие кнопки.
     */
    protected $type;
    /**
     * @var string Текст пользовательского запроса без активационных фраз Алисы и конкретного навыка.
     */
    protected $command;
    /**
     * @var string Полный текст пользовательского запроса.
     */
    protected $originalUtterance;
    /**
     * @var string JSON, полученный с нажатой кнопкой от обработчика навыка (в ответе на предыдущий запрос).
     */
    protected $payload;
    /**
     * @var array Формальные характеристики реплики, которые удалось выделить Яндекс.Диалогам. Отсутствует, если ни одно из вложенных свойств не применимо.
     */
    protected $markup;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return Phrase
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * @param string $command
     *
     * @return Phrase
     */
    public function setCommand($command)
    {
        $this->command = $command;

        return $this;
    }

    /**
     * @return string
     */
    public function getOriginalUtterance()
    {
        return $this->originalUtterance;
    }

    /**
     * @param string $originalUtterance
     *
     * @return Phrase
     */
    public function setOriginalUtterance($originalUtterance)
    {
        $this->originalUtterance = $originalUtterance;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * @param string $payload
     *
     * @return Phrase
     */
    public function setPayload($payload)
    {
        $this->payload = $payload;

        return $this;
    }

    /**
     * @return array
     */
    public function getMarkup()
    {
        return $this->markup;
    }

    /**
     * @param array $markup
     *
     * @return Phrase
     */
    public function setMarkup($markup)
    {
        $this->markup = $markup;

        return $this;
    }
}