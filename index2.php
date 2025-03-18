<?php
/**
 * Home Page
 *
 * PHP version 7
 *
 * @category  Page
 * @package   Application
 * @author    SIO-SLAM <sio@ldv-melun.org>
 * @copyright 2019-2021 SIO-SLAM
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      https://github.com/sio-melun/geoworld
 */

?>
<?php  require_once 'header.php'; ?>
<?php
require_once 'inc/manager-db.php';
if (isset($_GET['name']) && !empty($_GET['name']) ){
$continent = ($_GET['name']);
$desPays = getCountriesByContinent($continent);
}
else{
$continent = "Monde";
$desPays = getAllCountries();
}
?>

  <div class="container">
    <h1>Les pays du Monde </h1>
    <div>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
         <tr>
           <th>Nom</th>
           <th>Population</th>
           <th>President</th>
           <th>Surface</th>
           <th>Region</th>
           <th>Capitale</th>
         </tr>
        </thead>
        <tbody>
       <?php
       // $desPays est un tableau dont les éléments sont des objets représentant
       // des caractéristiques d'un pays (en relation avec les colonnes de la table Country)
          foreach($desPays as $pays) : ?>
          <tr>
            <td> <?php echo $pays->Name ?></td> 
            <td> <?php echo $pays->Population ?></td>
            <td> <?php echo $pays->HeadOfState ?></td>
            <td> <?php echo $pays->SurfaceArea ?></td>
            <td> <?php echo $pays->Region ?></td>
            <td> <?php echo $pays->Capital ?></td>

          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    
    

<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>
