# Fnance Tracking
[![LinkedIn][linkedin-shield]][linkedin-url]
[![Twitter][twitter-shield]][twittwe-url]
[![Twitter][github-shield]][github-url]

<!-- TABLE OF CONTENTS -->
<details open="open">
  <summary><h2 style="display: inline-block">Table of Contents</h2></summary>
  <ol>
    <li>
      <a href="#about-the-project">About Project</a>
    </li>
    <li>
      <a href="#about-the-project">Tools & Technology</a>
    </li>
    <li>
      <a href="#build_with">DevOps Tools</a>
    </li>
    <li><a href="#usage">How to Setup</a></li>
    <li><a href="#contact">Contact</a></li>
  </ol>
</details>

<hr>


Web application free open source, personal finance tracking. Build it with new technology.
<p align="center">

![Home_Page](https://i.imgur.com/U842uyV.jpg)
</p>

<hr>

<!-- Tools and Technology -->
## Tools and Technology
* []() PHP Laravel 8
* []() React JS
* []() MySQL 8
* []()Bootstrap 4

<hr>

<!-- Tools and Technology -->
## DevOps Tools
* []() Docker
* []() Kubernetes
* []() GitOps
* []() Github Actions

<hr>

<!-- Setup application -->
## How to Setup
To install this project with normal way of Laravel projects make sure you have the following on your machine:
- php >= 8.x
- MySQL 8
- Composer

First, clone the project to your machine:
```shell
git clone https://github.com/Ahmad-Faqehi/Fnance_Tracking.git
cd Fnance_Tracking/
```
Create .env file:
```shell
cp .env.example .env
```
<small><b> Add database config to .env file </b> </small>



Install composer dependencies:
```shell
composer install
```
Generate key:
```shell
php artisan key:generate
```
Execute the migration:
```shell
php artisan migrate --seed
```

Run the application:
```shell
php artisan serve
```
Once done, visit the app on http://localhost:8000

<br>

## Running the application using Docker 🐳
The easiest way to run the project is by using Docker.

Build the image:
```shell
docker build . -t facne
```
It's require MySQL, so below command to run MySQL database using docker:
```shell
docker run -d -e MYSQL_DATABASE=fnace -e MYSQL_USER=ahmed -e MYSQL_PASSWORD=harderpass123 -p 3306:3306 --name mysql mysql/mysql-server:8.0
```
Runing the continer of the application
```shell
docker run -d -p 8000:8000 -e XDB_HOST=mysql -e XDB_PORT=3306 -e XDB_DATABASE=fnace -e XDB_USERNAME=ahmed -e XDB_PASSWORD=harderpass123 --name fnace facne
```
Then, you can access the application throw http://localhost:8000


[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/ahmad-faqehi
[twitter-shield]: https://img.shields.io/badge/-twitter-black.svg?style=for-the-badge&logo=twitter&colorB=555
[twittwe-url]: https://twitter.com/A_F775
[github-shield]: https://img.shields.io/badge/-github-black.svg?style=for-the-badge&logo=github&colorB=555
[github-url]: https://github.com/Ahmad-Faqehi