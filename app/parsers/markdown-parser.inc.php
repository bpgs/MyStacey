<?php

/**
 * Markdown plugin
 *
 *  @package Morfy
 *  @subpackage Plugins
 *  @author Romanenko Sergey / Awilum
 *  @copyright 2014 Romanenko Sergey / Awilum
 *  @version 1.0.0
 *
 */

use \Michelf\MarkdownExtra;
include 'php-markdown/Michelf/Markdown.php';
include 'php-markdown/Michelf/MarkdownExtra.php';

function markdown($content)
{
    return MarkdownExtra::defaultTransform($content);
}