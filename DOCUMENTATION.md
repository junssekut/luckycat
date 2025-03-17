# Luckycat – Documentation

## 1. Deployment
To run the Luckycat web application, the following requirements are needed:

1. PHP version 8.2 or above  
2. NPM for Vite  
3. MySQL  

### Deployment Steps
1. Clone the repository from GitHub:
   ```sh
   git clone https://github.com/junssekut/luckycat.git
   cd luckycat
   ```
2. Run `composer install`, followed by `npm install`.
3. Create a database named `luckycat`, as specified in the `.env` file.
4. Run `php artisan migrate:fresh --seed` to migrate and seed the database.
5. To start the web server, enter `composer run dev` in the terminal.

## 2. Demo Account
By default, after running `php artisan migrate:fresh --seed`, several test accounts are available.

### User Account
- **Email**: `test@example.com`
- **Password**: `test`

### Vendor Accounts
- **Email**: `admin@synchronizefest.id`
- **Password**: `synchronizefest@2025`

- **Email**: `admin@holafest.id`
- **Password**: `holafest@2025`

## 3. SMTP Server
A functional SMTP server is required to send emails in Luckycat. SMTP credentials should be added to the `.env` file. By default, the `.env` file contains:

> **YOU MUST SETUP THIS FIRST IN YOUR PERSONAL CPANEL OR WHEREVER IT IS**

```
MAIL_MAILER=smtp  
MAIL_SCHEME=null  
MAIL_HOST=your-mail-host  
MAIL_PORT=465  
MAIL_USERNAME=your-mail-username  
MAIL_PASSWORD=your-mail-password  
MAIL_FROM_ADDRESS="your-mail-address"  
MAIL_FROM_NAME="Luckycat"  
```

## 4. Google Login
To enable Google login, OAuth API credentials are required. The `.env` file is preconfigured with the following credentials:

> **YOU MUST SETUP THIS FIRST IN YOUR PERSONAL GOOGLE CLOUD**

```
GOOGLE_CLIENT_ID=your-google-client-id  
GOOGLE_CLIENT_SECRET=your-google-client-secret  
GOOGLE_REDIRECT_URI=http://127.0.0.1:8000/auth/google/callback  
```

> Change the localhost ip to your domain, e.g: 
```
GOOGLE_REDIRECT_URI=http://luckycat.cloud/auth/google/callback  
```

## 5. Luckycat Vendor Dashboard
The Luckycat Vendor Dashboard is available at the `/vendor` URL. Vendor roles have different account types, corresponding to the demo accounts provided above.
