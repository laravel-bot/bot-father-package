<?php

namespace Ispahbod\BotFather\Plugin;

class ForceReply
{
    public static function Create(array $config): string
    {
        return json_encode(array_merge(['force_reply' => true], $config));
    }
}
