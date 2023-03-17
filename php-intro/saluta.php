<?php 

$name = $_GET['name'];
var_dump($_GET);

$p = 'lreom ipmsum dolor sit amet, bla bla bla';

?>

<h1>Ciao <?php echo $name ?></h1>

<?php 
echo strlen($name);

$p2 = str_replace('bla','***',$p);

echo '<br>';
echo $p2;

?>

<!-- <script>

const GET = {
  name: 'Gianluca'
}

console.log(`ciao ${ GET['name'] }`)
</script> -->