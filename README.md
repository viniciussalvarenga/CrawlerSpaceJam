# Crawler Space Jam

### Captura de informação do site: https://www.spacejam.com/1996/

* Objetivo: Navegar até a url: https://www.spacejam.com/1996/ e capturar a tag "cmp/sitemap.html" para capturar a primeira linha da primeira coluna dentro do Site Map.

### Requerimentos
* PHP **>=** 5.6
* Composer

### Como utilizar:
* Clone este repositório 
```
git clone https://github.com/viniciussalvarenga/CrawlerSpaceJam
```
* Instalar o composer
```
composer install
```
* Navegar até o diretório desafio01-forseti, digitar o comando:
```
php bin/capturarSpace.php
```

### Biblioteca utilizada:
* "symfony/dom-crawler": "^3.2",
* "symfony/css-selector": "^3.0",
* "guzzlehttp/guzzle": "^6.3",
* "forseti/logger": "^1.3",

