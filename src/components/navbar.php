<?php
include "./connect.php";
include "./functions/userFunctions.php";
session_start();
?>
<div class="navbar bg-[#F8F8F8]">
    <div class="navbar-start">
        <a href="index.php" class="btn btn-ghost normal-case text-xl text-black">Game World</a>
    </div>
        <?php
        if (isset($_SESSION["login"])) {

            ?>
<div class="dropdown dropdown-end">
    <label tabindex="0" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
            <?php
            if ($_SESSION["login"]) {
                $userid = $_SESSION["login"];
                $image = getProfilePicture($mysqli, $userid);
                print '<img src="../public/images/' . $image . '"/>';
            }
            ?>
        </div>
    </label>
    <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-black text-white rounded-box w-52">
        <li><a href="announcement.php">Announcements</a></li>
        <li><a href="profielbewerken.php" class="justify-between">Profiel Bewerken</a></li>
        <li><a href="vrienden.php">vrienden</a></li>
        <li><a href="spelers.php">Andere spelers</a></li>
        <li><a href="loguit.php">Uitloggen</a></li>
    </ul>
</div>
<?php
        } else {
            print '<a href="login.php" class="btn btn-ghost text-black ml-2">login</a>';
        }
?>
</div>
</div>
