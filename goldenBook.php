<?php require 'header.php';

require 'class/Message.php';
require 'class/GuestBook.php';

$Message = null;
$display = null;
$post = [];
$fichier = 'messages';
$HTML = null;
$error = null;
$success = null;
$date = new DateTime();
$date = $date->format('Y/m/d');
$heure = new DateTime();
$heure = $heure->format('H:i');

if (isset($_POST['name']) && isset($_POST['message'])) {

    $Message = new Message($_POST['name'], $_POST['message'], $date, $heure);
    $MessageIsValid = $Message->isValid();
    !$MessageIsValid ? $error = $Message->getErrors() : $error = null;
    $HTML = $Message->toHTML();
    $toJSON = json_encode($Message->toJSON());

    $GuestBook = new GuestBook($fichier);
    $addMessage = $GuestBook->addMessage($toJSON);
    $post = $GuestBook->getMessage($fichier);
}

?>

<?= $error ?>

<h2>Leave a comment</h2><br>

<form action="" method="POST">
    <div class="d-flex flex-column bd-highlight mb-3">
        <input type="text" name="name" placeholder="Enter your name" required minlength="3">
        <textarea minlength="10" required name="message" id="message" placeholder="Your message" cols="10" rows="5"></textarea>
    </div>
    <button class='btn btn-primary' type="submit">Send</button>

</form>

<h2>Commentaire</h2>

<?php !$Message = null ?? $display = $Message->fromJSON($post); ?>


<br>
<HR width="100%" size=3>
<?php require 'footer.php' ?>