<div class="w3-container">

    <h1>Congratulations, it works!</h1>

    <p>Your Namesonic/SimpleSite installation is complete!</p>

    <p>Did you like that <a href="?p=index">splash page</a>?</p>

    <div class="w3-container">
        <div class="w3-row">
            <div class="w3-half">

                <h2>Folder Structure</h2>

                <p>
                    We have included a few example pages, including this one.  You may now modify, add, or delete
                    existing files in this example project.
                </p>

                <p>
                    Using the folder structure guide below will give you an idea of where the files are stored and
                    how to use them.
                </p>

                <blockquote>
<pre>
app\
    Http\
        Controllers\
            IndexController.php (the spash page code)
            HomeController.php (this page's code)
            AboutController.php (code for the /about page)
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
        Global template layouts are stored here
    views\
        home.php (the HTML for this page)
        about.php (the HTML for the /about page)
</pre>
                </blockquote>

            </div>
            <div class="w3-half">

                <h2>Examples</h2>

                <h3>404 Not Found</h3>
                <p>
                    Here and on the navigation bar is an example of a link to a page not found <a href="?p=contact">Contact Us Link</a>.
                </p>

                <p>
                    Since the URL address is "?p=contact" or "/contact" you will need to create an App\Controller\ContactController.php file and class to handle the page.
                </p>

                <h3>Exception Handling</h3>

                <p>
                    Here is an example in action of a default exception handler.  Click the button below.
                </p>

                <form action="" method="post">
                    <button name="exception" value="1">Cause Exception</button>
                </form>

                <h3>Make It Your Own</h3>

                <p>
                    Once you are done browsing the contents of the scaffolding,  you can overwrite these pages and make
                    changes as you see fit by editing the existing controllers, layouts, views, and adding/removing your own code.
                </p>
            </div>
        </div>
    </div>
</div>