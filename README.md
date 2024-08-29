# "NÖT Hobby Market" - CZ
Stránky pro nákup materiálů, nářadí, dekorací a zahradních potřeb. 

Umožňují uživateli možnost přidávat do svého košíku a "zakoupit" zboží. Pro majitele stránek s přihlášením admin umožňují stránky tvorbu produktů k nabídce, jejich úprava a odstranění.

Tato stránka s nabídkami pracovních míst byla vytvořena v systému Laravel na základě vlastního nápadu.

## Použité technologie

PHP verze: 8.3
NODE verze: 22.2.0
LARAVEL verze: 11.16.0
Databáze typ: SQLITE

## Instalace

1. Naklonujte uložiště/repository:
    ```
        git clone https://github.com/Samuel-Laznicka/NOT-Hobby-Market.git
        cd Not-Hobby-Market
    ```

2. Nainstalujte závislosti/dependencies:
    ```
        composer install
        npm install
    ```

3. Zkopírujte soubor `.env.example` do souboru `.env` a nakonfigurujte prostředí:
    ```
        cp .env.example .env
    ```

4. Vygenerujte klíč aplikace:
    ```
        php artisan key:generate
    ```

5. Spusťte migraci a vytvořte SQLite databázi:
    ```
        php artisan migrate
    ```

6. Vytvořte databázi (nepovinné):
    ```
        php artisan db:seed --class=CategoriesSeeder
    ```

7. Spusťte vývojový server:
    ```
        npm run dev
    ```

## Použití

Po spuštění aplikace k ní můžete přistupovat ve webovém prohlížeči na adrese `http://not-hobby-market.test/`.




# "NÖT Hobby Market" - EN
Site for purchasing materials, tools, decorations, and garden supplies. 

They allow users to add items to their cart and "purchase" them. For site owners with an admin login, the site allows the creation of products to offer, edit, and remove them.

This job listings page was created in Laravel based on a custom idea.

## Technologies used

PHP version: 8.3
NODE version: 22.2.0
LARAVEL version: 11.16.0
Database type: SQLITE

## Installation

1. Clone the repository(s):
    ```
        git clone https://github.com/Samuel-Laznicka/NOT-Hobby-Market.git
        cd Not-Hobby-Market
    ```

2. Install dependencies/dependencies:
    ```
        composer install
        npm install
    ```

3. Copy the `.env.example` file to the `.env` file and configure the environment:
    ```
        cp .env.example .env
    ```

4. Generate the application key:
    ```
        php artisan key:generate
    ```

5. Run the migration and create the SQLite database:
    ```
        php artisan migrate
    ```

6. Create the database (optional):
    ```
        php artisan db:seed --class=CategoriesSeeder
    ```

7. Start the development server:
    ```
        npm run dev
    ```

## Usage

Once the application is running, you can access it in a web browser at `http://not-hobby-market.test/`.

Translated with DeepL.com (free version)
