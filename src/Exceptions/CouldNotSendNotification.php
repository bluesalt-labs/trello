<?php

namespace NotificationChannels\Trello\Exceptions;

class CouldNotSendNotification extends \Exception
{
    public static function serviceRespondedWithAnError($response)
    {
        return new static('Trello responded with an error: `'.$response->getBody()->getContents().'`');
    }
}
