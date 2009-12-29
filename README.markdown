CodeIgniter-Template
====================

CodeIgniter-Template is a Template library that helps your build complex views with CodeIgniter.
It has logic to work with themes & modules and helps add your title, meta-data, breadcrumbs and partial views.

Usage
-----

For any of this to work well, you need some global code running. You can do this by 
[creating a hook](http://codeigniter.com/user_guide/general/hooks.html) or use 
[MY_Controller](http://codeigniter.com/wiki/MY_Controller_-_how_to_extend_the_CI_Controller/). I take MY_Controller 
one step further and have Public_Controller and Admin_Controller, which all of my controllers inherit to gain 
shared logic for the frontend or the backend.

### Global methods

Wrap application/views/layout_name.php around your view

    $this->template->set_layout('layout_name');

Use Parser for the layout and loaded views

    $this->template->enable_parser(FALSE); // default = TRUE

Set a theme name and your layout will be loaded from application/themes/<theme_name>/views/<layout_name>.php 

    $this->template->set_theme('theme_name'); // default = TRUE
    $this->template->set_layout('layout_name');
    
### Per-page methods
    
Load and output view (from the current module, or from the view folder if you aren't using a module

    $this->template->build('view_name', $data);
    
Return the built template

    $output = $this->template->build('view_name', $data, TRUE);
    
Set layout and build template

    $this->template->set_layout('layout_name'); // Should be in application/views/layout_name.php
    $this->template->build('view_name', $data);
	
Set page title manually. The default is "Module | Controller | Method".

    $this->template->title('Some title')->build('view_name', $data);
    
Set partial view (assigns a view to $template['partials']['partial_name']).
It will use the same logic to find a view partial as build(), in that it will try and find it in modules 
and themes or just use global view folder.

    $this->template->set_partial('sidebar', 'partials/sidebar_view');
    
    // Don't search, use exactly what was provided
    $this->template->set_partial('partial_name', 'partials/view_file', FALSE); // application/views/partials/sidebar_view.php

Set breadcrumbs

	$this->template->set_breadcrumb('Blog', 'blog/index')
	    ->set_breadcrumb($article->category->title, 'blog/category/'.$article->category->id)
	    ->set_breadcrumb($article->title, 'blog/article/'.$article->id);

Add lines of metadata

    // <meta name="keywords" content="some, keywords, somebody, for, to, comma-separate" />
    $this->template->set_metadata('keywords', 'some keywords somebody for to comma-separate');
    
    // <link rel="canonical" href="http://example.com/some/other/page" />
    $this->layout->set_metadata('canonical', site_url('some/other/page'), 'link');

> Pretty much all of the methods support method-chaining in PHP 5 to make syntax shorter.

Installation
------------

Drop the libraries/Template.php file into your applicaiton/libraries folder.


Requirements
------------

Only CodeIgniter

Optional: Modular Separation


Extra
-----

If you'd like to request changes, report bug fixes, or contact
the developer of this library, email <email@philsturgeon.co.uk>