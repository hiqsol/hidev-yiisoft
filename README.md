# YiiSoft HiDev

**YiiSoft vendor configuration for HiDev**

[![Latest Stable Version](https://poser.pugx.org/hiqsol/hidev-yiisoft/v/stable)](https://packagist.org/packages/hiqsol/hidev-yiisoft)
[![Total Downloads](https://poser.pugx.org/hiqsol/hidev-yiisoft/downloads)](https://packagist.org/packages/hiqsol/hidev-yiisoft)
[![Build Status](https://img.shields.io/travis/hiqsol/hidev-yiisoft.svg)](https://travis-ci.org/hiqsol/hidev-yiisoft)
[![Scrutinizer Code Coverage](https://img.shields.io/scrutinizer/coverage/g/hiqsol/hidev-yiisoft.svg)](https://scrutinizer-ci.com/g/hiqsol/hidev-yiisoft/)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/hiqsol/hidev-yiisoft.svg)](https://scrutinizer-ci.com/g/hiqsol/hidev-yiisoft/)
[![Dependency Status](https://www.versioneye.com/php/yiisoft:hidev-yiisoft/dev-master/badge.svg)](https://www.versioneye.com/php/yiisoft:hidev-yiisoft/dev-master)

[HiDev] is the automation tool mixed with code generator for easier continuous development.

This plugin provides [YiiSoft] vendor configuration for HiDev.
Used for YiiSoft packages. Can be used as template for configs of other vendors.

Provides YiiSoft information and settings:

- general data: vendor name and company title
- contact data: email, forum, github page
- authors data: names, roles, emails, github and home pages
- default license: BSD-3-Clause

See [src/config/goals.yml].

[HiDev]:                https://github.com/hiqdev/hidev
[YiiSoft]:              https://github.com/yiisoft
[src/config/goals.yml]: src/config/goals.yml

## Installation

The preferred way to install this yii2-extension is through [composer](http://getcomposer.org/download/).

Either run

```sh
php composer.phar require "hiqsol/hidev-yiisoft"
```

or add

```json
"hiqsol/hidev-yiisoft": "*"
```

to the require section of your composer.json.

## License

This project is released under the terms of the BSD-3-Clause [license](LICENSE).
Read more [here](http://choosealicense.com/licenses/bsd-3-clause).

Copyright © 2018, Yii Software LLC (http://www.yiiframework.com/)
