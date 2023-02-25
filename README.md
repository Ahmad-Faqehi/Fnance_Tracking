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
      <a href="#tools_tech">Tools & Technology</a>
    </li>
    <li>
      <a href="#devops">DevOps Tools</a>
    </li>
    <li>
    <a href="#usage">How to Setup</a>
    </li>
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
## Tools and Technology 🎯
* []() PHP Laravel 8
* []() React JS
* []() MySQL 8
* []()Bootstrap 4

<hr>

<!-- Tools and Technology -->
## DevOps Tools ♾️
* []() Docker
* []() Kubernetes
* []() GitOps
* []() Github Actions

<hr>

<!-- Setup application -->
## How to Setup 🚀
To install this project with normal way of Laravel projects make sure you have the following on your machine:
- php 8.x
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

## Running the application with Docker 🐳
The easiest way to run the project is by using Docker Compose, make sure you already installed docker and docker composer on your machine.

<br>

Check Docker compose installed:
```shell
docker-compose -v
```

Note: Make sure the ports 80 & 3306 are availables on your machine.

<br>

Running application with docker compose:
```shell
docker-compose up -d
```

Check both two continers are running :
```shell
docker ps
```

Then, you can access the application throw http://localhost

<br>

Removing the application:
```shell
docker-compose down
```

<br>

## Running the application on kubernetes Cluster
Soon...

<br>

The application is forked from [Saleem Hadad](https://github.com/saleem-hadad)

<hr>


<!-- CONTACT -->
## Contact

Ahmad Faqehi - [iAhmad.info](https://iAhmad.info) - alfaqehi775@hotmail.com

Project Link: [https://github.com/Ahmad-Faqehi/Fnance_Tracking](https://github.com/Ahmad-Faqehi/Fnance_Tracking)


<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/ahmad-faqehi
[twitter-shield]: https://img.shields.io/badge/-twitter-black.svg?style=for-the-badge&logo=twitter&colorB=555
[twittwe-url]: https://twitter.com/A_F775
[github-shield]: https://img.shields.io/badge/-github-black.svg?style=for-the-badge&logo=github&colorB=555
[github-url]: https://github.com/Ahmad-Faqehi