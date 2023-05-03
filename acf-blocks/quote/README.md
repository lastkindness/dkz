# Блок Quote

Для работы карусели в блоке необходим slick slider:
```
npm install slick-carousel
```
Подкючить в assets\src\js\app.js
```js
import slick from 'slick-carousel/slick/slick.min.js';
```
Подкючить в assets\src\scss\app.scss
```styles
@import '~slick-carousel/slick/slick.scss';
```
Документация slick slider:
```
https://kenwheeler.github.io/slick/
```
Код для ACF полей лежит в папке acf-json
В виде json и в виде php файла
```
/acf-json/quote.json
/acf-json/field_group.php
```
Подключение блока в шаблоне:
```php
get_template_part( 'acf-blocks/quote/index' );
```
