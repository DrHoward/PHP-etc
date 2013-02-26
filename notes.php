/*************/
/* PHP Notes */
/*************/

// Superglobals (9):
    $_GET, $_POST, $_COOKIE
    $_FILES, $_SESSION, $_SERVER, $_ENV
    $_REQUEST: GET + POST + COOKIE. Avoid this.
    $GLOBALS: Everything. Avoid this.

// Preset Variables:
    $_SERVER['HTTP_REFERER'] - previous page. Note the one 'R'. Perma-typo.
    $_SERVER['HTTP_USER_AGENT'] - name reported by visitor's browser
    $_SERVER['PATH_INFO'] - any data passed in the URL after the script name
    $_SERVER['PHP_SELF'] - name of script in execution
    $_SERVER['REQUEST_METHOD'] - either GET or POST
    $_SERVER['QUERY_STRING'] - includes everything after the question mark in a GET request

// Add a '!' to the end of a string
    $mystr[strlen($mystr)-1] = "!";

// Nasty PHPception
    $foo = "Variable!\n";
    $bar = "foo";
    print $$bar;

// Reference:
    $a = 10; $b =& $a;
    print ++$a; print $b;
    print ++$b; print $a;
    func(&$a, &$b); // passes actual variable, not an instance

// Constants
    define("CURRENT_TIME", time());
    __FILE__ - full path of script in execution*
    __LINE__ - line number PHP is executing
    __FUNCTION__ - name of function PHP is executing
    __CLASS__ - name of class of object being used
    __METHOD__ - name of class function PHP is inside
    PHP_EOL - OS-specific EOL
    PHP_OS, PHP_VERSION, DEFAULT_INCLUDE_PATH

// Conditions
    or - executes only if first condition fails; use with die()
    || - higher precedence than 'OR' and '='; strict usage

// Functions
    strtoupper(), isset(), die(), eval()
    strtotime() - loose converter to Unix time

// Input Filtering
    // Make sure it is an integer
    $integer = intval($_POST['variable_name']);

    // Make it safe to use in a URL
    $url_string = urlencode($_POST['variable_name']);


/*************/
/* HTML Tips */
/*************/

// Block vs. Inline
    // Block
    <p> - paragraph
    <div> - division: groups block elements for formatting
    <form> - input form
    <header> - header
    <nav> - section of navigation links/URLs
    <ul> - unordered list (bulleted)
    <li> - single list item
    <h1> - heading format

    // Inline
    <a> - hyperlink
    <span> - groups inline code
    <b> - bold
    <em> - emphasized text (~italic)
    <i> - italic
    <cite> - cited source (~italic)
    <mark> - highlight
    <code> - formats for code

    // Replaced Elements
    <img> - insert image
    <object> - insert multimedia
    <input> - input field for user
    <select> - dropdown list: use with <option>



$_SESSION[]
$_COOKIE[]

REST vs SOAP
Site Responsiveness
:w

http://www.tuxradar.com/practicalphp/4/7/1
