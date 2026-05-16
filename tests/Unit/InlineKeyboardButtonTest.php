<?php

use PhpTelegramBot\FluentKeyboard\InlineKeyboard\InlineKeyboardButton;

it('creates valid JSON', function () {
    $button = InlineKeyboardButton::make();

    expect($button)->toMatchEntity([

    ]);
});

it('can set known fields', function () {
    $button = InlineKeyboardButton::make()
        ->text('Text')
        ->url('http://example.com')
        ->loginUrl([])
        ->callbackData('Callback Data')
        ->switchInlineQuery('Switch Inline Query')
        ->switchInlineQueryCurrentChat('Switch Inline Query Current Chat')
        ->switchInlineQueryChosenChat(['query' => 'Query'])
        ->callbackGame('Callback Game')
        ->pay()
        ->copyText('Copy Text');

    expect($button)->toMatchEntity([
        'text'                             => 'Text',
        'url'                              => 'http://example.com',
        'login_url'                        => [],
        'callback_data'                    => 'Callback Data',
        'switch_inline_query'              => 'Switch Inline Query',
        'switch_inline_query_current_chat' => 'Switch Inline Query Current Chat',
        'switch_inline_query_chosen_chat'  => ['query' => 'Query'],
        'callback_game'                    => 'Callback Game',
        'pay'                              => true,
        'copy_text'                        => ['text' => 'Copy Text'],
    ]);
});

it('can set text via make', function () {
    $button = InlineKeyboardButton::make('Test');

    expect($button)->toMatchEntity([
        'text' => 'Test',
    ]);
});

it('can set unknown fields', function () {
    $button = InlineKeyboardButton::make()
        ->unknownField('unknown');

    expect($button)->toMatchEntity([
        'unknown_field' => 'unknown',
    ]);
});