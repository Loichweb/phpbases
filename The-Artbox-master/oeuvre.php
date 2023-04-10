<?php include('oeuvres.php'); ?>
<?php include('header.php'); ?>

<?php 
  $id = $_GET["id"];
  array_unshift($oeuvres, null);
  $oeuvre = $oeuvres[$id];
?>

 <main>
    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="<?php echo $oeuvre["img"]; ?>" alt= "<?php echo $oeuvre["alt"]; ?>">
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $oeuvre["title"]; ?></h1>
            <p class="description"><?php echo $oeuvre["author"]; ?></p>
            <p class="description-complete"><?php echo $oeuvre["description"]; ?></p>
        </div>
    </article>
</main>

<!-- <?php 

if( !isset($_GET['id'] ) ){
    echo "il y a pas de ID !!!";
}

if( isset($_GET['id'] ) ){
    $id = $_GET['id'];
}
?> -->


<?php include('footer.php'); 