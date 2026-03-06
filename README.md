# Documentation

## About

A fake banking website for scambaiting inspired by Kitboga's , "Gull and Bull."

## Features to add

- Account transfer
- Any other features I can think of

## How to setup

### This instruction is for windows users, although the steps are mostly the same.

1. Install [XAMPP](https://www.apachefriends.org/index.html).
2. Download the zip file for G.H.-Financial.
3. Go to `C:\xampp\htdocs` (or wherever your htdocs folder is) and delete all the files/folders.
4. Unzip the zip file and drag the folder into the htdocs folder.
5. Rename the folder to something recognizable.
6. Go to `C:\Windows\System32\drivers\etc` and open `hosts` with notepad.
7. Add this text to the end of it and save.

```
127.0.0.1       www.yourbankname.com
```

8. Go to your xampp folder and navigate to `\apache\conf\extra` and open `httpd-vhosts.conf`.
9. Add this text to the end of it and save.

```
<VirtualHost *:80>
    ServerAdmin webmaster@yourbankname
    DocumentRoot "C:/xampp/htdocs/[your_folder_name]"
    ServerName www.yourbankname.com
    ErrorLog "logs/dummy-host2.example.com-error.log"
    CustomLog "logs/dummy-host2.example.com-access.log" common
</VirtualHost>
```

10. Restart 'MySQL' and 'Apache' in the XAMPP control panel.
11. Go to www.yourbankname.com (this link only works on your computer).
12. Done!

## How to use

### JSON

This bank is fully customizable through json scripts.Navigate to /assets/json to see all the available settings.

#### user.json

Stores bank login details such as password, username and the user's full name.

#### history.json

Stores transaction history of the user.

#### setup.json

Stores user preferences which can be edited through the settings page in the dashboard.

#### account.json

Stores user bank accounts along with the value and the card number.

## Experimental Features and Details

- None at the moment
