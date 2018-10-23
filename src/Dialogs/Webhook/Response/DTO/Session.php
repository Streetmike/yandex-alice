<?php

namespace Yandex\Dialogs\Webhook\Response\DTO;
/**
 * Class Session
 * Данные о сессии.
 *
 * @package Yandex\Dialogs\Webhook\Response\DTO
 */
class Session
{
    /**
     * @var string Уникальный идентификатор сессии, 64 байта.
     */
    protected $sessionId;
    /**
     * @var int Идентификатор сообщения в рамках сессии. Инкрементируется с каждым следующим запросом.
     */
    protected $messageId;
    /**
     * @var string Обфусцированный идентификатор пользователя.
     */
    protected $userId;

    /**
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * @param string $sessionId
     *
     * @return Session
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;

        return $this;
    }

    /**
     * @return int
     */
    public function getMessageId()
    {
        return $this->messageId;
    }

    /**
     * @param int $messageId
     *
     * @return Session
     */
    public function setMessageId($messageId)
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     *
     * @return Session
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }
}