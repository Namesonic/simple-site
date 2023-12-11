# Simple Site

This is a scaffolding project for the Simple Site Framework.

Build loosely around the Laravel Framework structure for familiarity, use this package
to build a simple html website application that utilizes a simple template feature.

## Features

- Lightweight MVC Structure (sans M)
- Multiple Layouts
- No CSS/js dependencies (install your own)
- Simple variable substitution handling for templates
- Configuration Handling (coming soon)
- Exception Handling

## Requires

- PHP 8.1 or greater

## Installation

Exchange `my-site-name` below with the folder name that will contain your new website.

`composer create-project namesonic/simple-site my-site-name`

If composer did not install any dependencies (missing the /vendor folder), or even if it did, you can run, `composer install` to double check.

## Configuration

For a production server, your webserver document root should be configured to point to `my-site-name/public` folder.

## Development

This package lays out the following directory structure meant to organize your code, layouts and display pages.

```
app\
    Http\
        Controllers\
            Add new pages to the website here
        Exceptions\
            Add custom code exception handlers here
config\
    Store configuration files here
public\
    This is the public facing folder for the application
    js\
    css\
    img\
resources\
    errordocs\
        Website errordocuments are served from this folder <404.php>
    layouts\
        Global template layouts are stored here <layoutname.php>
    views\
        Individual page layouts are stored here <pagename.php>
```

### URL Format

Using a standard /home-page URL will look for the HomePageController.php file in your controllers directory.

You can also include "/" to traverse folder structures, helping you to keep your controllers and views neatly organized.

For e.g. A sub-folder URL like this /gallery/main-item will organize your items into a gallery folder structure.

```
app\
    Http\
        Controllers\
            Gallery\
                MainItemController.php
```

### Exception Handling

(coming soon)

### Error Documents

(coming soon)