<?php

namespace LaravelBot\BotFather\Plugin;

class Handlers
{
    private array $handlers = [];

    public function Handler($name, $callback)
    {
        if (is_callable($callback)) {
            $this->handlers[$name] = $callback;
        }
    }

    public function Run($name, ...$args)
    {
        if (isset($this->handlers[$name])){
            return call_user_func($this->handlers[$name], ...$args);
        }
    }
}
