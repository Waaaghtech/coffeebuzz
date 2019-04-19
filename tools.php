<?php
function styleCLink()
{
    $here = $_SERVER['SCRIPT_NAME'];
    $bits = explode('/', $here);
    $filename = $bits[count($bits) - 1];
    echo "<style>nav a[href$='$filename'] { color: #fce4a8; }</style>";
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

class echoer
{

    /**
     * echo out the header content, which is only "coffebuzz" as buissness name.
     * echo out drop down nav menu 
     * get veriables from $_SERVER to find out if the user have logged in, if logged in, echo out the username and dropdown menu
     * if not, display the login & signup buttons
     * 
     */
    function HeaderValue()
    {
        echo '<header>
    /*to be filled*/
    </header>';
    if (condition) {
        # logged in
    }else {
        # not logged in
    }
    }

    
    /**
     * echo the footer which is the copyright info and the links
     */
    function FooterValue()
    {
        echo '<footer>
        <div>&copy;
            <script>
                document.write(new Date().getFullYear());
            </script> copyright info </div>
        
        <div>the links
        <a href=\'../placeHolder.html\'>placeHolder</a>
        <a href=\'../placeHolder.html\'>placeHolder</a>
        <a href=\'../placeHolder.html\'>placeHolder</a>
        <a href=\'../placeHolder.html\'>placeHolder</a>

        </div>
    </footer>';
    }


}