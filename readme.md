## About LaraLogin

Laravel 5.1 with Laravel Scaffolding **User** and **Administrator Authentication**.
Laralogin is an instance of Laravel 5.1 with user/admin **authentication** and **management**.
This is a build out of [Laravel 5.1 Authentication Documentation](http://laravel.com/docs/5.1/authentication).
This is a **semantic** build by design to only have the necessary components. Basic Routing and blade template structure is used in this example.
This is an example to be used as a baseline for [Laravel 5.1 user authentication](http://laravel.com/docs/5.1/authentication).

## Installation/Quick Project Setup
1. Run `sudo git clone https://github.com/jeremykenedy/laralogin.git laralogin`
2. Create a MySQL database for the project
    * ```mysql -u root -p```, if using Vagrant: ```mysql -u homestead -psecret```
    * ```create database laralogin;```
    * ```\q```
3. Copy the .env.example file with command ```sudo cp .env.example .env```
4. Update the .env file with the database settings, see example .env below:
```
APP_ENV=local
APP_DEBUG=true
APP_KEY=SomeRandomString

DB_HOST=localhost
DB_DATABASE=laralogin
DB_USERNAME=homestead
DB_PASSWORD=secret

CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

MAIL_DRIVER=smtp
MAIL_HOST=mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

```
5. From the projects root folder run ```php artisan migrate```



### File locations
```
laralogin/
   ├── app/
   │   ├── Http/
   │   │   └── routes.php
   ├── config/
   │   ├── app.php
   │   ├── database.php
   │   └── view.php
   ├── .env
   ├── composer.json
   └── server.php
```

## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

#### Official Laravel Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

I would love to see your versions. To contribute to the repo please keep the submissions as semantic as possible. This is a refrence to authorization and not the front end presentation.  Thank you!

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Jeremy Kenedy at jeremy@jeremykenedy.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

---

## Development Environement References and help

### VAGRANT Dev Environment References

#### VAGRANT Virtual Machine Details
|Item        |Value:
|:------------- |:-------------|
|Hostname|homestead|
|IP Address|192.168.10.10|
|Username|vagrant|
|SU Password|vagrant|
|Database Host|127.0.0.1|
|Database Port|33060|
|Database Username|homestead|
|Database Password|secret|
#### Start VAGRANT
|Command        |Action
|:------------- |:-------------|
| `vagrant up` | Start Vagrant VM |
| `vagrant up --provision` | Start Vagrant VM if vagrantfile updated |
| `vagrant halt` | Stop Vagrant VM |

#### Access VAGRANT SSH and MySQL
|:Command        |Action      |
|------------- |:------------- |:-------------|
| ```sudo ssh vagrant@127.0.0.1 -p 222``` | Access Vagrant VM via SSH. Password is ``` vagrant  ``` |
| ```mysql -u homestead -psecret``` | Access Vagrant VM MySQL. Password is ``` vagrant  ``` |

### COMPOSER Installation Reference

#### COMPOSER can be installed using the following commands:
```
sudo curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
```

#### COMPOSER on MAC OS X can be installed using the following commands:
```
sudo brew update
sudo brew tap homebrew/dupes
sudo brew tap homebrew/php
sudo brew install composer
```

### NODE JS Installation Reference

#### Node JS can be installed muliple ways:
1. Mac GUI Installer, easiest way (Simply [Download](https://nodejs.org/en/) and Install)
2. Command Line Interface (CLI) using Homebrew Package Manager with the following command:
```
brew install node
```

---

## Things not working (Troubleshooting)?

### Issue: The project has a blank white screen in the browser

#### Check/Update permissions with the following command
```
sudo chmod -R 755 laralogin/
```

### Issue: Cannot access project through web browser after running vagrant up / homestead up

#### Error Message from Browser:
```
This webpage is not available
ERR_NAME_NOT_RESOLVED
```

#### 1. Check Vagrant/Homestead configuration
##### a. Open configuration with the following command:

vim ~/.homestead/Homestead.yaml or laraedit

##### b. Check to make sure your folders are mapped (See example A1.):
Note:
map: Is the path to the your files on your local machine
to: Is the virtual file path to your projects that vagrant will create
###### Example A1
```
folders:
  - map: /Users/yourLocalUserName/Sites/project1
    to: /home/vagrant/Sites/project1/public

  - map: /Users/yourLocalUserName/Sites/project2
    to: /home/vagrant/Sites/project2/public
```
##### c. Check to make sure your projects URI and SYMLINK is mapped (See example A2):
map: Is the local URI of your project
to: Is the virtual symlink to your projects virtual file path
###### Example A2
```
sites:
  - map: project1.local
    to: /home/vagrant/Sites/project1/public

  - map: project2.app
  to: /home/vagrant/Sites/project2/public
```
#### 2. Check your local hosts file for local pointer redirect:
##### a.  Open your hosts file (See example B1):
Note: Instructions are for Mac OS X
###### Example B1
`sudo vim /etc/hosts` or `edithost`

##### b.  Edit your hosts file (See example B2):
Note: Replace examples URI used in Vargrant/Homestead configuration file and use the IP address of your local Vargrant/Homestead virtual machine instance

###### Example B2 - The last line is the important part of the example
```
##
# Host Database
#
# localhost is used to configure the loopback interface
# when the system is booting.  Do not change this entry.
##
127.0.0.1        localhost
255.255.255.255  broadcasthost
192.168.10.10    laravel-admin.local
```

---

## Enjoy

~ Jeremy
