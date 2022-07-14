Esercizio di oggi:
nome repo: laravel-model-controller
Oggi facciamo la nostra prima vera interazione con il database utilizzando l’ORM di Laravel.
1 - Create un nuovo progetto Laravel 7
2 - tramite phpMyAdmin create un nuovo database laravel_model_controller
3 - Importate nel vostro database la tabella movies in allegato
4 - inserite le vostre credenziali per il database nel file .env
5 - Create un model Movie
php artisan make:model Movie
6 - Create un controller che gestirà la rotta /
php artisan make:controller PageController
7 - All’interno della funzione index() del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.
BONUS:
Stilare il layout nei dettagli con Sass

Se avete errori a connettervi col database verificate che il file php.ini sia presente nella cartella C:\MAMP\bin\php\php<versione> (altrimenti copiatelo da quello che si trova in C:\MAMP\conf\php<verisone>). Apritelo e verificate che siano presenti e non commentate (cioè senza ; all'inizio) queste estensioni:
extension=php_mysqli.dll
extension=php_curl.dll
extension=php_pdo_mysql.dll
extension=php_fileinfo.dll
(potrebbe non esserci il php_ iniziale o l'estensione .dll, l'importante è il nome centrale).
Ricordatevi anche che ogni volta che modificate il file .env  dovete riavviare il server (se lo avevate avviato) con php artisan serve (dopo aver chiuso quello aperto con ctrl+c)
