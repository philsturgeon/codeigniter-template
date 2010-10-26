function create_menu(basepath)
{
	var base = (basepath == 'null') ? '' : basepath;

	document.write(
		'<table cellpadding="0" cellspaceing="0" border="0" style="width:98%"><tr>' +
		'<td class="td" valign="top">' +

		'<h3>Author</h3>' +
		'<ul>' +
		'	<li><a href="http://philsturgeon.co.uk/">Phil Sturgeon</a></li>' +
		'	<li><a href="http://twitter.com/philsturgeon">Twitter</a></li>' +
		'	<li><a href="http://bitbucket.org/philsturgeon/codeigniter-template">BitBucket</a></li>' +
		'</ul>' +

		'<h3>Basic Info</h3>' +
		'<ul>' +
		'	<li><a href="'+base+'changelog.html">Changelog</a></li>' +
		'	<li><a href="'+base+'index.html#license">License</a></li>' +
		'	<li><a href="http://bitbucket.org/philsturgeon/codeigniter-template">BitBucket</a></li>' +
		'	<li><a href="http://github.com/philsturgeon/codeigniter-template">GitHub</a></li>' +
		'</ul>' +

		'</td><td class="td_sep" valign="top">' +

		'<h3>Introduction</h3>' +
		'<ul>' +
			'<li><a href="'+base+'index.html#install">Installation</a></li>' +
			'<li><a href="'+base+'index.html#loading">Loading the Library</a></li>' +
			'<li><a href="'+base+'index.html#config">Configuration</a></li>' +
		'</ul>' +

		'<h3>General Topics</h3>' +
		'<ul>' +
			'<li><a href="'+base+'layouts.html">Layouts</a></li>' +
			'<li><a href="'+base+'partials.html">Partials</a></li>' +
		'</ul>' +

		'<h3>Cool Shit</h3>' +
		'<ul>' +
			'<li><a href="'+base+'modules.html">Module support</a></li>' +
			'<li><a href="'+base+'mobile.html">Mobile support</a></li>' +
		'</ul>' +

		'</td><td class="td_sep" valign="top">' +

		'<h3>Method Reference</h3>' +
		'<ul>' +
		'	<li><a href="'+base+'library.html#title">title()</a></li>' +
		'	<li><a href="'+base+'library.html#set">set()</a></li>' +
		'	<li><a href="'+base+'library.html#prepend_metadata">prepend_metadata()</a></li>' +
		'	<li><a href="'+base+'library.html#append_metadata">append_metadata()</a></li>' +
		'	<li><a href="'+base+'library.html#set_layout">set_layout()</a></li>' +
		'	<li><a href="'+base+'library.html#set_theme">set_theme()</a></li>' +
		'	<li><a href="'+base+'library.html#set_partial">set_partial()</a></li>' +
		'	<li><a href="'+base+'library.html#inject_partial">inject_partial()</a></li>' +
		'	<li><a href="'+base+'library.html#build">build()</a></li>' +
		'</ul>' +

		'</td></tr></table>');
}