<?php

$header = <<<EOF
@link http://www.yiiframework.com/
@copyright Copyright (c) 2018 Yii Software LLC
@license http://www.yiiframework.com/license/
EOF;

return PhpCsFixer\Config::create()
    ->setUsingCache(true)
    ->setRiskyAllowed(true)
    ->setRules(array(
        '@PSR2' => true,
        'header_comment'                             =>  [
            'header'        => $header,
            'separate'      => 'bottom',
            'location'      => 'after_declare_strict',
            'commentType'   => 'PHPDoc',
        ],
    ))
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__)
    )
;
