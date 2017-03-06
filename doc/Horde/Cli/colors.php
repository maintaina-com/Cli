#!/usr/bin/env php
<?php
/**
 * @package Cli
 */

require 'Horde/Cli.php';
$cli = new Horde_Cli();

/* Explicit colors */
$cli->writeln($cli->red('Red'));
$cli->writeln($cli->yellow('Yellow'));
$cli->writeln($cli->green('Green'));
$cli->writeln($cli->blue('Blue'));
$cli->writeln($cli->color('magenta', 'Magenta'));
$cli->writeln($cli->color('cyan', 'Cyan'));
$cli->writeln($cli->color('lightgray', 'Light Gray'));
$cli->writeln();

/* These messages are automatically colorized based on the message type. */
$cli->message('test', 'cli.error');
$cli->message('test', 'cli.warning');
$cli->message('test', 'cli.success');
$cli->message('test', 'cli.message');
