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
* []() MySQL 8
* []() Graphql
* []() React JS
* []()Bootstrap 4

<hr>

<!-- Tools and Technology -->
## DevOps Tools ♾️
* []() Docker
* []() Kubernetes
* []() Helm
* []() GitOps
* []() Github Actions


<br>

<!-- Setup application -->
# Setuping the Project 🚀

## Running with Normal Way  🏝
Installing the project with normal way of Laravel projects. Make sure you have the following service on your machine:

- php 8.x
- MySQL 8
- Composer

Clone the project to your machine:
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
<hr>

## Running the Application with Docker 🐳

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
<hr>


## Running the Application with Kubernetes ☸
First of all make sure you has [Helm](https://helm.sh/docs/intro/install/) installed on your machine, becaues we will used to install the MySql database deployment.

Enter kubernetes directory in this project
``` shell
cd k8s/
```

Applying helm to run MySql database.
``` shell
./deploy_mysql_redis_helm.sh
```

Apply the mainfests files of application.
```shell
kubectl apply -f .
```

Verified the status of pods
```shell
kubectl get pods
```
if everything is running, you can access the application throw,<br>
http://localhost:30007

<br>

The backend is forked from [Saleem Hadad](https://github.com/saleem-hadad)

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