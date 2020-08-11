#### To run this application you will need:
- MAMP or XAMPP or WAMP
- MYSQL Server (one that come with WAMP ) 
- Composer [https://getcomposer.org/](https://getcomposer.org/)
- Chorme or Firefox browser

#### Versions
* PHP 7.2

#### Mannualy start

You need to download or clone this repo using link below:

`git clone https://github.com/imamovicdze/news.git`

Then navigate to folder `news` and

`composer install`

After installing dependencies go to mysql server and create database with name:

`newsdb`

Now run command:

`yii migrate` to create tables.

Now create virtual host: 

- name: `news.com` 
- path: `C:\wamp64\www\news\web` (in my case)

Now go to 
`news.com`

login credentials
- username: admin
- password: admin 
