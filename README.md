# DateTimeLocale

Format DateTime object in the language you want

## How to use DateTimeLocale ?

DateTimeLocale is very simple to use.
Just look at the code below :
```php
$date = new DateTime();
$date->set_locale('Fr');

echo $date->format('d F \à H\hi');
```

That will you show this for exemple :
```
14 Septembre à 18h25
```

## set_locale function

Use this function to change the language you want.
```php
void set_locale(string $language);
```

Here is the current list of languages you can use :
- Fr (French)
- En (English)
- Us (United State)
- Du (German)
- Es (Spanish)

I'll improve this list soon.
