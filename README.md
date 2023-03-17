<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Introduction
This project is designed to extract data from an excel file and read data from it. You can read its need when you have to send a message to all the users simultaneously. For example, you want to send the same type of email to many users at the same time, which is related to marketing or any information. In this, there is a form in the second place where only the email id of the users can be included in the excel file. And same type of email cannot be included again in that email id. Also, the excel file cannot contain any text other than the email id or an invalid email id. It will contain only unique email addresses in which no text will be kept and no duplicate emails address will be kept.

## Requirements
You need to have [Laravel](https://laravel.com/) installed to run this project.

Install [PhpSpreadsheet](https://github.com/PHPOffice/PhpSpreadsheet) library from Github Repo or you can install it by running the following command
<button id="copy-button" data-clipboard-target="#copy-me">Copy</button>

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
