# Elgg whoops

![Whoops!](http://i.imgur.com/0VQpe96.png)

**whoops** is an error handler framework for PHP. Out-of-the-box, it provides a pretty
error interface that helps you debug your web projects, but at heart it's a simple yet
powerful stacked error handling system. 

This is a quick and dirt integration of Whoops into elgg. It uses the [PHP Dotenv library](https://github.com/vlucas/phpdotenv) to enable/disable the error detection by Whoops.

### Installation

- Clone this repository, and run ``` composer install ```
- Copy the  ``` .env.example ``` file to  ``` .env ``` 
- Change  ``` APP_ENV=prod ```  to  ``` APP_ENV=dev ``` 
- Place the plugin at the bottom of the page

#### Features
- Flexible, stack-based error handling
- Stand-alone library with (currently) no required dependencies
- Simple API for dealing with exceptions, trace frames & their data
- Includes a pretty rad error page for your webapp projects
- Includes the ability to [open referenced files directly in your editor and IDE](docs/Open%20Files%20In%20An%20Editor.md)
- Includes handlers for different response formats (JSON, XML, SOAP)
- Easy to extend and integrate with existing libraries
- Clean, well-structured & tested code-base
- You can add as many .env variables as you want, and use them in any plugin