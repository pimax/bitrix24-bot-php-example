<?php

require_once(dirname(__FILE__) . '/vendor/autoload.php');

$config = require 'config.php';

use pimax\bitrix24\BotApp;
use pimax\bitrix24\Bot;
use pimax\bitrix24\Message;

$bot = new BotApp($_REQUEST["auth"]);

switch($_REQUEST['event'])
{
    // Receive message from user
    case 'ONIMBOTMESSAGEADD':
        switch ($_REQUEST['data']['PARAMS']['MESSAGE'])
        {
            case '/command1':
                $bot->send(new Message("Command 1 response", $_REQUEST['data']['PARAMS']['DIALOG_ID']));
            break;

            case '/command2':
                $bot->send(new Message("Command 2 response", $_REQUEST['data']['PARAMS']['DIALOG_ID']));
            break;

            case '/command3':
                $bot->send(new Message("Command 3 response", $_REQUEST['data']['PARAMS']['DIALOG_ID']));
            break;

            default:
                $bot->send(new Message("Hello", $_REQUEST['data']['PARAMS']['DIALOG_ID'], [
                    new Message('[send=/command1]Command 1[/send]'),
                    new Message('[send=/command2]Command 2[/send]'),
                    new Message('[send=/command3]Command 3[/send]'),
                ]));
        }
    break;

    // Bot join to chat
    case 'ONIMBOTJOINCHAT':
        $bot->send(new Message("Hello", $_REQUEST['data']['PARAMS']['DIALOG_ID'], [
            new Message('[send=/command1]Command 1[/send]'),
            new Message('[send=/command2]Command 2[/send]'),
            new Message('[send=/command3]Command 3[/send]'),
        ]));
    break;

    // Bot deleted
    case 'ONIMBOTDELETE':
        $bot->uninstall();
    break;

    // Bot installed
    case 'ONAPPINSTALL':
        $bot->install(new Bot(
            $config['alias'],
            $config['type'],
            $config['url_message_add'],
            $config['url_welcome_message'],
            $config['url_bot_delete'],
            $config['data']
        ));
    break;
}