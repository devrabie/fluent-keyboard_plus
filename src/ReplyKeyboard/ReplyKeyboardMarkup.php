<?php

namespace PhpTelegramBot\FluentKeyboard\ReplyKeyboard;

use PhpTelegramBot\FluentKeyboard\FluentEntity;
use PhpTelegramBot\FluentKeyboard\KeyboardMarkup;

/**
 * @method self isPersistent(bool $is_persistent = true)
 * @method self resizeKeyboard(bool $resize_keyboard = true)
 * @method self oneTimeKeyboard(bool $one_time_keyboard = true)
 * @method self inputFieldPlaceholder(string $input_field_placeholder)
 * @method self selective(bool $selective = true)
 */
class ReplyKeyboardMarkup extends KeyboardMarkup
{

    protected static string $keyboardFieldName = 'keyboard';

    protected array $defaults = [
        'is_persistent'     => true,
        'resize_keyboard'   => true,
        'one_time_keyboard' => true,
        'selective'         => true,
    ];

}
