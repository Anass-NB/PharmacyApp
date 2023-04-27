# PharmacyApp
> This is a mobile application to locate all nearest pharmacies for you location

<img src='https://user-images.githubusercontent.com/110456240/234850504-8f6461c8-25a1-4948-b851-ac77e50b1270.jpeg' height="30%" width="30%" />


<img src='https://user-images.githubusercontent.com/110456240/234850755-ba5a5771-9b42-4ab0-80fe-a3b140987056.jpeg' height="30%" width="30%" />


## Installation

```sh
git clone install my-crazy-module --save
cd PharmacyApp
```

## Starting with the web project : (Laravel Application)
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
2. Run `npm install` in the folder, this will install all npm required packages.
3. To Run the app `npm run start`




# Error on fetching Data
Maybe you have a problem when you fetching data from the api , using Postman, the fetch is working good but  there is no data  in mobile application
the problem is is about a conflict between an emulator localhost and server localhost. Your back-end-server might be ruunning on 127.0.0.1:8000, but an emulator can't find this.
-- Solution
In terminal find your Ipv4-Address with a command 'ipconfig'. For ex., it will be 192.138.1.40

After this put it into your fetch ( 'http://192.138.1.40:8000/'). you ip address
![image](https://user-images.githubusercontent.com/110456240/234855202-19c5f8d0-b638-4e9d-b8bf-f2036de8951c.png)

And what is also important - run your back-end-server with the same host and port.
