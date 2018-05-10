<script>
    function openNav() {
        document.getElementById("login-form").style.display = "block";
    }

    function closeNav() {
        document.getElementById("login-form").style.display = "none";
    }
</script>

<?php

if(session_id() == '' || !isset($_SESSION)) { // session isn't started
    session_start();
}

include "includes/get_generics.inc.php";
require_once "includes/get_headers.inc.php";

$lang_key = 1;

if (isset($_SESSION['lang_key'])) {
    $lang_key = $_SESSION['lang_key'];
}

//ეს ორი ხაზია საჭირო
require_once "includes/tr.inc.php";
$labels = getTranslationsByKey($lang_key);

include "login_form.mod.php";

?>

<!--labels-ს აქვს id, value (რაც უნდა გამოვიდეს გვერდზე), title (რომლის მიხედვითაც ვიღებთ ამ არაიდან),-->
<!--language_key (ყველას ის აქვს, რაც getTranslationsByKey ფუნქციას გადავეცით,-->
<!--ქართული არის 1. ასევე შეიძლება ჰქონდეს page, რომელიც განსაზღვრავს, რომელ გვერდზე უნდა გამოდიოდეს ეს ლეიბლი, მაგ. index.php-->
<!--გამოყენება ასეთია:-->
<?php //echo $labels['some_title']; ?>

<section class="k-page-header" style="background-color: rgb(240, 240, 240);">
    <div class="k-top-bar">
        <!-- RD Navbar Brand -->
        <div class="k-logo">
            <a href="index.php" class="brand-name primary-color">
                <img src="images/logo.png" data-srcset-base="images/" data-srcset-ext="logo1.png" alt="" width="410" height="100">
            </a>
        </div>
        <div class="k-menu">
            <?php
                $top_links = getHeadersByLevel($lang_key, 0);
                foreach ($top_links as $top_link) { ?>
                    <div class="k-dropdown">
                        <a class="" onclick="window.location.href='<?php echo $top_link['url']; ?>'"><?php echo $top_link['name']; ?></a>
                        <div class="k-dropdown-content">
                            <?php
                                $parent_id = $top_link['id'];
                                $children = getHeadersByParent($lang_key, $parent_id);
                                foreach ($children as $child) { ?>
                                    <div>
										<a href="<?php echo $child['url']; ?>"><?php echo $child['name']; ?> &#8599;</a>
									</div>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                    <?php
                }
            ?>
        </div>
        <div class="k-flags">
            <ul>
				<li style="height: 31px;"><a href="?lang=geo"><img src="images/geo.png"></a></li>
				<li style="height: 31px;"><a href="?lang=eng"><img src="images/eng.png"></a></li>
				<!--<div><a href="?lang=rus"> <img src="images/rus.png"></a></div>-->
			</ul>            
        </div>
        <ul class="navbar-user" style="visibility: hidden;">
            <?php if (isset($_SESSION["logged"]) && $_SESSION["logged"] == true) { ?>
                <div class="dropdown">
                    <button class="dropbtn"> <span class="material-icons-account_box"></span></button>
                    <div class="dropdown-content1">
                        <a href="profile.php"><?php echo $labels['mm_sub_profile']; ?> &#8599;</a>
                        <?php if ($_SESSION['user']['is_admin'] == 1) { ?>
                            <a href="admin.php"><?php echo $labels['mm_sub_admin']; ?> &#8599;</a>
                        <?php } ?>
                        <a href="includes/logout.inc.php"><?php echo $labels['mm_sub_exit']; ?> &#8599;</a>
                    </div>
                </div>
            <?php } else { ?>
            <li>
				<a href="#"><span onclick="openNav()" class="material-icons-account_box"></span></a>
			</li>
            <?php } ?>
        </ul>
        <!-- END RD Navbar Brand -->
    </div>
</section>

<form id="all-tours-hidden" method="post" action="includes/tour_search.inc.php" style="display: none">
</form>

<form id="actual-tours-hidden" method="post" action="includes/tour_search.inc.php" style="display: none">
    <input type="hidden" name="actual" value="1">
</form>

<form id="outgoing-tours" method="post" action="includes/tour_search.inc.php" style="display: none">
    <input type="hidden" name="tour_type" value="1">
</form>

<form id="incoming-tours" method="post" action="includes/tour_search.inc.php" style="display: none">
    <input type="hidden" name="tour_type" value="2">
</form>