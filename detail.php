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
$detail = getinformationpays()
?>

<?php
 echo "<h1> Le Pays " . $pays . "</h1>";?>
   <div class="container">
    
    <div>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
         <tr>
         <th> id</th> 
         <th>Code</th> 
         <th>Name</th>
         <th>Continent</th> 
         <th>Region</th> 
         <th>SurfaceArea</th> 
         <th>IndepYear</th> 
         <th>Population</th>
         <th>LifeExpectancy</th> 
         <th>GNP</th> 
         <th>GNPOld</th> 
         <th> LocalName </th>
         <th>GovernmentForm</th> 
         <th>HeadOfState </th>
         <th>Capital </th>
         <th>Code2</th>

           
           
         </tr>
        </thead>
        <tbody>
       <?php
       
          foreach($detail as $detail) : ?>
          <tr>
            <td> <?php echo $detail->id ?></td>
            <td> <?php echo $detail->Code ?></td> 
            <td> <?php echo $detail->Name ?></td> 
            <td> <?php echo $detail->Continent?></td> 
            <td> <?php echo $detail->Region ?></td> 
            <td> <?php echo $detail->SurfaceArea?></td> 
            <td> <?php echo $detail->IndepYear ?></td> 
            <td> <?php echo $detail->Population ?></td> 
            <td> <?php echo $detail->LifeExpectancy ?></td> 
            <td> <?php echo $detail->GNP ?></td> 
            <td> <?php echo $detail->GNPOld ?></td> 
            <td> <?php echo $detail->LocalName ?></td> 
            <td> <?php echo $detail->GovernmentForm ?></td> 
            <td> <?php echo $detail->HeadOfState ?></td> 
            <td> <?php echo $detail->Capital?></td> 
            <td> <?php echo $detail->Code2 ?></td>  
            
            

          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    
    

<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>