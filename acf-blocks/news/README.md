# Блок News

Код для ACF полей лежит в папке acf-json
В виде json и ввиде php файла
```
/acf-json/news.json
/acf-json/field_group.php
```
Подключение блока в шаблоне:
```php
get_template_part( 'acf-blocks/news/index' );
```
Переменные для scss
```scss
$breakpoints
@include media('>=tablet') { }
```
