# MyStacey

A Flat File CMS

## Sources

The original idea is from [Kolber Stacey on Github](https://github.com/kolber/stacey "Kolber Stacey on Github").

[Here](http://www.kolber.info "Stacey Demo Website") you can find a demo website.

There are a lot of other repositories that contain the word **Stacey** and a part of them are forks of the above mentioned repository or contain something useful.

## Installations

1. First installation online is on [Byethost](http://sitebuilder.is-great.net "Stacey on Byethost"). It is more or less the same as the original from Kolber Stacey's repository. The localhost-version is [here](http://byet-sitebuilder.localhost/ "Stacey localhost").
2. A more adopted version you can find on [Host4Free](https://stacey.template-hamster.host4free.de/ "Stacey on Host4Free"). There is a [localhost version too](http://h4f-stacey.localhost/ "Host4Free on localhost").

## Improvements

### 15.07.2019 - Version 3.0.0 from Anthony Kolber

The original version Stacey 3.0.0 has the following issues:

    Deprecated: Methods with the same name as their class will not be constructors in a future version of PHP; Markdown_Parser has a deprecated constructor in \app\parsers\markdown-parser.inc.php on line 221
    
    Deprecated: Methods with the same name as their class will not be constructors in a future version of PHP; MarkdownExtra_Parser has a deprecated constructor in \app\parsers\markdown-parser.inc.php on line 1687

### 15.07.2019 - Version 3.1.0 new Markdown library

* \app\parsers\markdown-parser.inc.php - changed for the new markdown parser
* \app\parsers\php-markdown - files of the markdown library from Michel Fortin michelf
* \app\stacey.inc.php - Version number 3.1.0
