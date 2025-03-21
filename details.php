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
if (isset($_GET['country']) && !empty($_GET['country']) ){
$id = ($_GET['country']);
$pays = getinformationpays($id);
//var_dump($detail);
}
?>

<div class="container">
<?php
echo "<h1>  $pays->Name  </h1>"; ?>
<div>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
         <tr>
          <th>drapeaux</th>
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
         

           
           
         </tr>
        </thead>
        <tbody>
    
       
         
      
          <tr>
            <td> <?php $source= "images/flag/".strtolower($pays->Code2).".png"?>
            <img src=<?=  $source; ?> ></td> 
            <td> <?php echo $pays->id ?></td>
            <td> <?php echo $pays->Code ?></td> 
            <td> <?php echo $pays->Name ?></td> 
            <td> <?php echo $pays->Continent?></td> 
            <td> <?php echo $pays->Region ?></td> 
            <td> <?php echo $pays->SurfaceArea?></td> 
            <td> <?php echo $pays->IndepYear ?></td> 
            <td> <?php echo $pays->Population ?></td> 
            <td> <?php echo $pays->LifeExpectancy ?></td> 
            <td> <?php echo $pays->GNP ?></td> 
            <td> <?php echo $pays->GNPOld ?></td> 
            <td> <?php echo $pays->LocalName ?></td> 
            <td> <?php echo $pays->GovernmentForm ?></td> 
            <td> <?php echo $pays->HeadOfState ?></td>
            
            <td> <?php  echo getCapitale($pays->Capital)->Name; ?></td>
           
         
            
            

           </tr>
          
        </tbody>
      </table>
    
    

<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>