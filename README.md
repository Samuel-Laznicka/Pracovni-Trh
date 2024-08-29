# "Pracovní Trh" - CZ

Stránky s nabídkou pracovních míst.

Uživatelé mohou prohlížet a zveřejňovat volná pracovní místa a upravovat nebo mazat pozice, které uvedli.

Tato stránka s nabídkami pracovních míst byla vytvořena v systému Laravel na základě kurzu Laracasts „30 Days to Learn Laravel“.

## Použité technologie

PHP verze: 8.3
NODE verze: 22.2.0
LARAVEL verze: 11.16.0
Databáze typ: SQLITE

## Instalace

1. Naklonujte uložiště/repository:
    ```
        git clone https://github.com/Samuel-Laznicka/Pracovni-Trh.git
        cd pracovni-trh
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
        php artisan db:seed --class=DatabaseSeeder
    ```

7. Spusťte vývojový server:
    ```
        npm run dev
    ```

## Použití

Po naservírování aplikace k ní můžete přistupovat ve webovém prohlížeči na adrese `http://pracovni-trh.test/`.




# "Pracovní Trh" - ENG

Jobs-listing site.

Users can view and post job vacancies and edit or delete the positions they have listed.

This job listings site was built with Laravel, based on the Laracasts "30 Days to Learn Laravel" path.

## Used Technology

PHP version: 8.3
NODE version: 22.2.0
LARAVEL version: 11.16.0
Database type: SQLITE

## Installation

1. Clone the repository:
    ```
        git clone https://github.com/Samuel-Laznicka/Pracovni-Trh.git
        cd pracovni-trh
    ```

2. Install dependencies:
    ```
        composer install
        npm install
    ```


3. Copy the `.env.example` file to `.env` and configure your environment variables:
    ```
        cp .env.example .env
    ```

4. Generate an application key:
    ```
        php artisan key:generate
    ```

5. Run the migrations and create a SQLite database:
    ```
        php artisan migrate
    ```

6. Seed the database (optional):
    ```
        php artisan db:seed --class=DatabaseSeeder
    ```

7. Start the development server:
    ```
        npm run dev
    ```

## Usage

After serving the application, you can access it in your web browser at `http://pracovni-trh.test/`.
