# CodeIgniter-Template

CodeIgniter-Template is a Template library that helps your build complex views with [CodeIgniter](https://codeigniter.com).
It has logic to work with themes & modules and helps add your title, meta-data, breadcrumbs and partial views.


## Requirements

1. PHP 5.2+
2. CodeIgniter 2.0.3

## Installation

* Use [composer](https://getcomposer.org) to install this package

`composer require philsturgeon/codeigniter-template`

* Add this **package** to auto-load packages array (application/config/autoload.php)

`$autoload['packages'] = array(FCPATH . 'vendor/philsturgeon/codeigniter-template/src');`

or include it with Loader library
`$this->load->add_package_path(FCPATH . 'vendor/philsturgeon/codeigniter-template/src');`

* Add default **configuration** file to auto-load config array (application/config/autoload.php)

`$autoload['config'] = array('template');`

or include it with Loader library
`$this->load->config('template');`

* Add the **library** to auto-load library array (application/config/autoload.php)

`$autoload['library'] = array('template');`

or include it with Loader library
`$this->load->library('template');`


## Documentation

Open `user_guide/index.html` in your browser for docs.
