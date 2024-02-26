<?php
include "components/navbar.php";
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title>Game World</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@3.7.4/dist/full.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>


<?php
if (!isset($_SESSION['login'])) {
    header('Location: index.php');
    return;
}
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
<body>
    <div class="box">
        <div class="wrapper">
            <section class="users">
                <header>
                    <?php
                        foreach(getUsers($mysqli) as $row) {
                    ?>
                    <div class="content">
                    <div class="users-list">
                    <img src="../public/images/<?php echo $row['profielfoto'] ?>">
                        <div class="details">
                            <span><?php echo $row['voornaam'] . " " . $row['naam'] ?></span>
                            <?php echo'
                            <a href="vriendverzoek.php?verzoek='.$row['gebruikerid']. '" class="btn btn-active btn-accent">Vrienschapverzoek sturen</a>';

                            if($_SESSION["admin"] = "true") {
                                echo '<a href="verwijder.php?gebruiker='.$row['gebruikerid']. '" class="btn btn-error">Verwijder gebruiker</a>';
                            };
                        
                            echo '
                            <p>_̲_̲_̲_̲_̲_̲_̲_̲_̲_̲_̲_̲_̲_̲_̲_̲_̲_̲_̲_̲_̲_̲_̲_̲_̲_̲_̲_̲_̲_̲_̲_̲_̲_̲_̲_̲_̲_̲_̲_̲_̲_̲</p>
                            <br>
                            ';
                            ?>

                        </div>
                        <?php
                        }   
                        ?>
                </header>
            </section>
        </div>
    </div>
</body>

<style>
*
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
}
.box
{
    padding-left: 40%;
}
.wrapper
{
    background: #fff;
    width: 450px;
    border-radius: 16px;
    box-shadow: 0 0 128px 0 rgba(0,0,0,0.1), 0 32px 64px -48px rgba(0,0,0,0.5);
}
.users
{
    padding: 25px 30px;
}
.users header, .users-list a
{
    display: flex;
    align-items: center;
    padding-bottom: 20px;
    justify-content: space-between;
    border-bottom: 1px solid #e6e6e6;
}
.wrapper img
{
    object-fit: cover;
    border-radius: 50%;
}
:is(.users, .users-list) .content
{
    display: flex;
    align-items: center;
}
.users header .content img
{
    height: 50px;
    width: 50px;    
}
:is(.users, .users-list) .details
{
    margin-left: 15px;
    color: #000;
}
:is(.users, .users-list) .details span
{
    font-size: 18px;
    font-weight: 500; 
}
.users .search
{
    margin: 20px 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.users .search .text
{
    font-size: 18px;
}
.users .search input
{
    position: absolute;
    height: 42px;
    width: 22%;
    border: 1px solid #ccc;
    padding: 0 13px;
    font-size: 16px;
    border-radius: 5px 0 0 5px;
    outline: none;
}
.users .search button
{
    width: 47px;
    height: 42px;
    border: none;
    outline: none;
    color: #fff;
    background: #333;
    cursor: pointer;
    font-size: 17px;
    border-radius: 0 5px 5px 0;
}
.users-list 
{
    max-height: 600px;
    overflow-y: auto;
}
.users-list::-webkit-scrollbar
{
    width: 5px;
}

.users-list a
{
    margin-bottom: 15px;
    padding-bottom: 10px;
    padding-right: 15px;
    border-bottom-color: #f1f1f1;
}

.users-list a:last-child
{
    border: none;
    margin-bottom: 0px;
}

.users-list a .content img
{
    height: 40px;
    width: 40px;
}

.users-list a .content p
{
    color: #67676a;;
}

.content .status-dot
{
    font-size: 15px;
}

</style>

 

</body>
</html>