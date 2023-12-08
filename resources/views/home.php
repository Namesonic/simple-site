<h1>
    Simple Site Example
</h1>

<h2>
    Lightweight HTML Template Framework
</h2>

<p>
    Requires
</p>

<ul>
    <li>PHP</li>
</ul>

<h3>Installation</h3>

<p>Clone the repo into a new folder since it may overwrite your existing files.</p>

<p>
    A webserver is required to process the .htaccess file which will properly map the page URL to the PHP script.  Otherwise you can use ?p=pagename as supplied in the examples.
</p>

<p>
    Here is an example of a link to a page that has not yet been prepared <a href="?p=contact">Contact Us Link</a>.  Since the URL address is "?p=contact" or "/contact" you will need to create an App\Controller\ContactController.php class to handle the page.
</p>