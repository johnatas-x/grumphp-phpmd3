# Description

This repository allows you to use guvra's work to add support for PHPMD 3.x in GrumPHP.

For more context, see the related issue https://github.com/phpro/grumphp/issues/1209 and the associated pull request https://github.com/phpro/grumphp/pull/1210.

# Installation

Install it using composer:

```composer require --dev johnatas-x/grumphp-phpmd3```


# Usage

1) Add the extension in your grumphp.yml file:
```yaml
extensions:
  - GrumphpPhpMd3\ExtensionLoader
```

2) Add phpmd3 to the tasks:
```
tasks:
  phpmd3:
    whitelist_patterns: []
    exclude: []
    report_format: text
    ruleset: ['phpmd.xml.dist']
    triggered_by: ['php']
```
