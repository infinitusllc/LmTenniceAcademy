<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Leila Meskhi Tennis Academy </title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    <?php include "mods/style.mod.php"; ?>
</head>


<body>

<?php
if (session_id() == '' || !isset($_SESSION)) // session isn't started
    session_start();

$lang = 'geo';
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
}

$lang_key = 1;
switch ($lang) {
    case 'rus':
        $lang_key = '3';
        break;
    case  'eng':
        $lang_key = '2';
        break;
}

$_SESSION['lang_key'] = $lang_key;
$_SESSION['lang'] = $lang;

require_once "includes/generics.inc.php";
$type = 'news';
if (isset($_GET['type'])) {
    $type = $_GET['type'];
}

include "mods/header.comm.mod.php";

?>

<div class="container-common">

    <?php
    $generics = getGenericsByType($lang_key, $type);

    foreach ($generics as $generic) { ?>
        <div class="generic-container">
            <h2> <?php echo $generic['title']; ?> </h2>
            <div class="content"> <?php echo $generic['intro']; ?> </div>
            <a href="generic_page.php?keyword=<?php echo $generic['keyword']; ?>"> სრულად წაკითხვა </a>
        </div>
    <?php } ?>
</div>
<?php include "mods/footer.mod.php"; ?>
</body>