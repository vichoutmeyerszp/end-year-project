<?php
include "./connect.php";
include "./functions/userFunctions.php";
include "./functions/adminFunctions.php";
session_start();
?>
<div class="navbar bg-black-100">
  <div class="flex-1">
  <a href="index.php" class="btn normal-case text-xl text-white">Game World</a>
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
        <li><a href="announcementGoals.php">Goals</a></li>
        <details open>
            <summary>Profiel</summary>
            <ul>
                <li><a href="profielbewerken.php" class="justify-between text-xs">- Bewerken</a></li>
                <li><a href="vrienden.php" class="justify-between text-xs">- Vrienden</a></li>
                <li><a href="verzoeken.php" class="justify-between text-xs">- Verzoeken</a></li>
                <li><a href="spelers.php" class="justify-between text-xs">- Spelers</a></li>
            </ul>
        </details>

        <li><a href="loguit.php">Uitloggen</a></li>
    </ul>
</div>
<?php
        } else {
            print '<a href="login.php" class="btn text-white ml-2">Sign in</a>';
        }
?>
</div>
</div>
