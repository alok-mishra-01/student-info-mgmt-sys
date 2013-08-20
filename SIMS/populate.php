<SCRIPT language=JavaScript>
function reload(form)
{
// Setting the variable with the value of selected country's ID
var val=populate.countryList.options[populate.countryList.options.selectedIndex].value;

// Sending the country id in the query string to retrieve the city list
self.location='populate.php?countryId=' + val ;
}
</script>

<?php

/*
- Function to return the Country list as an array
- The array can be generated from a database resultset
*/
function getCountryList()
{
  // Country List array
  $countryList    = array (
                          '1' => 'Bangladesh',
                          '2' => 'USA',
                          '3' => 'UK'
                          );
 
  return $countryList;
}

/*
- Function to return the City list as an array
- Country ID is used to generate the city list
*/
function getCityList($countryId)
{
  // City list array
  // First key of the array is the Country ID, which holds an array of City list
  $cityList       = array (
                          '1' => array ('Dhaka', 'Chittagong', 'What else'),
                          '3' => array ('London', 'Cannot Remember'),
                          '2' => array ('Washington', 'N.Y.', 'etc')
                          );
 
  return $cityList[$countryId];
}
?>

<form action="populate.php" name="populate">

<?
// Retrieving the country list
$countryList  = getCountryList();

// Setting the variable if the country is selected for its city list
@$countryId  = $_GET['countryId'];

// Retrieving the city list if a country is selected
$cityList   = ($countryId) ? getCityList($countryId) : null;

if (!empty($countryList))
{
  // Generating the country drop down menu
  echo "<select onChange='reload(this.form)' name='countryList'>";
  foreach ($countryList as $key => $value)
  {
    echo "<option value='$key'";
   
    if ($countryId == $key)
      echo "selected";
   
    echo ">$value</option>";
  }
  echo "</select>";
}

if (!empty($cityList))
{
  // Generating the city drop down menu if a country is selected
  echo "<select name='cityList'>";
  foreach ($cityList as $key => $value)
  {
    echo "<option value='$key'>$value</option>";
  }
  echo "</select>";
}

?>
</form>
