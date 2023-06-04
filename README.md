# PharmacyFinder
>PharmacyFinder is a mobile application designed to help users easily find nearby pharmacies and connect with them for essential medication needs. The app provides a user-friendly interface to locate pharmacies and offers the ability to check if a pharmacy provides shipping services. Additionally, users can conveniently initiate conversations with pharmacies through WhatsApp for further assistance..

<img src='https://github.com/Anass-NB/PharmacyFinder/assets/110456240/9c34624e-1661-45f4-879f-e8d35aafdaed' height="30%" width="30%" />


<img src='https://github.com/Anass-NB/PharmacyFinder/assets/110456240/a7621a37-4b63-4936-bbef-8aeac23150fd' height="30%" width="30%" />


<img src='https://github.com/Anass-NB/PharmacyFinder/assets/110456240/97a888f4-8a8b-4236-88ce-e001f918e080' height="30%" width="30%" />






## Installation

```sh
https://github.com/Anass-NB/PharmacyApp.git
cd PharmacyApp
```

## Starting with the web project : (Laravel Application)
1. 
    ```sh
    cd PharmacyWeb
    ```
1. Copy .env.example file to .env file
    ```sh
    cp .env.example .env
    ```
1. Create database `pharmacy_api` (you can change database name)


1. Go to `.env` file 
    - set database credentials (`DB_DATABASE=pharmacy_api`, `DB_USERNAME=root`, `DB_PASSWORD=`)
    > Make sure to follow your database username and password

1. Install PHP dependencies 
    ```sh
    composer install
    ```

1. Generate key 
    ```sh
    php artisan key:generate
    ```

1. install front-end dependencies
    ```sh
    npm install && npm run build
    ```

1. Run migration
    ```sh
    php artisan migrate
    ```

### Run the web app
1. Run migration
   ```sh
    php artisan serv
    ```

## Mobile Application

1. change your directory to the mobile directory `cd pharmacyMobile`
1. set the ip address of your machine if you are working with local server 
    ```sh
     .env
    ```
    in .env file set the ip address of your server(in your case set ip address of your machine)
2. Run `npm install` in the folder, this will install all npm required packages.
3. To Run the app `npm run start`




