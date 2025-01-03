<?php
/**
 * @var WorldCityModel $city
 */
?>

<h1>City: <?php echo e($city->getCityWithCountry()); ?></h1>
<table>
  <tbody>
    <tr>
      <th>City name</th>
      <td><?php echo e($city->city);?></td>
    </tr>
    <tr>
      <th>City name (ascii)</th>
      <td><?php echo e($city->cityAscii);?></td>
    </tr>
    <tr>
      <th>Country</th>
      <td><?php echo e($city->country);?></td>
    </tr>
    <tr>
      <th>Flag of the country</th>
      <td><?php echo e($city->getCountryFlag());?></td>
    </tr>
    <tr>
      <th>ISO2 code of the country</th>
      <td><?php echo e($city->iso2);?></td>
    </tr>
  </tbody>
</table>