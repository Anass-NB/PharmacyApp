# PharmacyFinder
>PharmacyFinder is a mobile application designed to help users easily find nearby pharmacies and connect with them for essential medication needs. The app provides a user-friendly interface to locate pharmacies and offers the ability to check if a pharmacy provides shipping services. Additionally, users can conveniently initiate conversations with pharmacies through WhatsApp for further assistance..


<img src="https://github.com/Anass-NB/PharmacyFinder/assets/110456240/e49aa8e2-bdbc-4b6c-b6a4-0d3bab698337" width="30%" height="30%>

![img|100x100](https://github.com/Anass-NB/PharmacyFinder/assets/110456240/e49aa8e2-bdbc-4b6c-b6a4-0d3bab698337")

![WhatsApp Image 2023-09-05 at 6 13 43 PM](https://github.com/Anass-NB/PharmacyFinder/assets/110456240/8ec8477f-12fb-4eb5-b8c9-73f295902d40)

![WhatsApp Image 2023-09-05 at 6 13 42 PM (4)](https://github.com/Anass-NB/PharmacyFinder/assets/110456240/efcbd974-5a68-4304-9aff-8e5d8efc3a81)

![WhatsApp Image 2023-09-05 at 6 13 42 PM (3)](https://github.com/Anass-NB/PharmacyFinder/assets/110456240/b7ff43cd-749a-4cbe-8865-030ed10ec141)

![WhatsApp Image 2023-09-05 at 6 13 42 PM (1)](https://github.com/Anass-NB/PharmacyFinder/assets/110456240/5eff1a14-73cf-4d29-8d8b-a7da04467e5a)

![WhatsApp Image 2023-09-05 at 6 13 42 PM](https://github.com/Anass-NB/PharmacyFinder/assets/110456240/8d538c89-ab51-4b89-8366-54b0b675dfda)


![WhatsApp Image 2023-09-05 at 6 13 42 PM](https://github.com/Anass-NB/PharmacyFinder/assets/110456240/ae196eaf-c146-4cff-8599-9de12312448f)


![WhatsApp Image 2023-09-05 at 6 13 41 PM](https://github.com/Anass-NB/PharmacyFinder/assets/110456240/056c200d-0ac8-40c1-8d55-b60f57cb242e)

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




