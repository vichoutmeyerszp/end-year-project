<?php
include "components/navbar.php";

?>

<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/daisyui@3.7.4/dist/full.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>

<h1 class="md:text-center text-4xl font-bold mb-8">Feedback bekijken</h1>

<div class="overflow-x-auto">
  <table class="table">
    <thead>
      <tr>
        <th>feedback-id</th>
        <th>Email feedback</th>
        <th>Gegeven feedback</th>
        <th>Gegeven score</th>
      </tr>
    </thead>
    <tbody>
<?php
if(isset($_GET['Colors'])) {
    foreach(getReview($mysqli, $_GET["Colors"]) as $row) {
        var_dump(getReview($mysqli, $_GET["Colors"]));
        echo '


            <tr>
                <td>'.$row["feedbackid"].'</td>
                <td>'.$row["email"].'</td>
                <td>'.$row["feedback"].'</td>
                <td>'.$row["score"].'</td>
               </tr>';


        
        }   

}


if(isset($_GET['SpaceInvaders'])) {
    foreach(getReview($mysqli, "SpaceInvaders") as $row){

        echo '<tr>
        <td>'.$row["feedbackid"].'</td>
        <td>'.$row["email"].'</td>
        <td>'.$row["feedback"].'</td>
        <td>'.$row["score"].'</td>
        </tr>';
    }
}

if(isset($_GET['Tetris'])) {
    foreach(getReview($mysqli, "Tetris") as $row){
        echo '<tr>
        <td>'.$row["feedbackid"].'</td>
        <td>'.$row["email"].'</td>
        <td>'.$row["feedback"].'</td>
        <td>'.$row["score"].'</td>
        </tr>';
    }
}

if(isset($_GET['BSC'])) {
    foreach(getReview($mysqli, "BSC") as $row){
        echo '<tr>
        <td>'.$row["feedbackid"].'</td>
        <td>'.$row["email"].'</td>
        <td>'.$row["feedback"].'</td>
        <td>'.$row["score"].'</td>
        </tr>';
    }
}

if(isset($_GET['Snake'])) {
    foreach(getReview($mysqli, "Snake") as $row){
        echo '<tr>
        <td>'.$row["feedbackid"].'</td>
        <td>'.$row["email"].'</td>
        <td>'.$row["feedback"].'</td>
        <td>'.$row["score"].'</td>
        </tr>';
    }
}

?>
</tbody>
</table>
</div>