# Обработка строк

## Требования

- PHP 7.0

## Установка

```bash
$ composer require alexander-gladkov/string-processing
```

## Использование

```php
$processor = new \AlexanderGladkov\StringProcessing\StringProcessor();
echo $processor->getLength('string'); // 6
```