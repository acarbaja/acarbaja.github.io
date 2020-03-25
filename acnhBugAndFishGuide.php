<?php

// reference sources: https://www.webslesson.info/2019/04/how-to-append-database-rows-to-html-table-using-ajax-with-php.html
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>
<head>
  <title>Animal Crossing: New Horizons Seasonal Catches</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

 </head>
 <style>

 </style>
<script>
$(document).ready(function(){

 $('#add_details').on('submit', function(event){
  event.preventDefault();
  $.ajax({
   url:"insert.php",
   method:"POST",
   data:$(this).serialize(),
   dataType:"json",
   beforeSend:function(){
    $('#add').attr('disabled', 'disabled');
   },
   success:function(data){
    $('#add').attr('disabled', false);
    console.log(data);
    console.log(data.validFish.length);

    // clear out any old table data
      $('#fish').find("tr:gt(0)").empty();
  $('#oos_fish').find("tr:gt(0)").empty();
    $('#bugs').find("tr:gt(0)").empty();
      $('#oos_bugs').find("tr:gt(0)").empty();

      for (var j=0;j<data.validFish.length;j++){
         var curr = data.validFish[j];

         var html = '<tr>';
         html += '<td>'+curr.name+'</td>';
         html += '<td>'+curr.location+'</td>';
         html += '<td>'+curr.shadow+'</td>';
         html += '<td>'+curr.price+'</td>';
         html += '<td>'+curr.time+'</td>';
         html += '<td>'+curr.season+'</td>';
          html += '<td>'+curr.exp+'</td>';
         html += '</tr>';
         $('#fish').append(html);
    }
    for (var j=0;j<data.invalidFish.length;j++){
      var curr = data.invalidFish[j];
       var html = '<tr bgcolor="#e8e2e1">';
       html += '<td>'+curr.name+'</td>';
       html += '<td>'+curr.location+'</td>';
       html += '<td>'+curr.shadow+'</td>';
       html += '<td>'+curr.price+'</td>';
       html += '<td>'+curr.time+'</td>';
       html += '<td>'+curr.season+'</td>';
       html += '</tr>';
       $('#oos_fish').append(html);
  }
  for (var j=0;j<data.validBugs.length;j++){
         var curr = data.validBugs[j];
     var html = '<tr>';
     html += '<td>'+curr.name+'</td>';
     html += '<td>'+curr.location+'</td>';
     html += '<td>'+curr.price+'</td>';
     html += '<td>'+curr.time+'</td>';
     html += '<td>'+curr.season+'</td>';
         html += '<td>'+curr.exp+'</td>';
     html += '</tr>';
     $('#bugs').append(html);
}
for (var j=0;j<data.invalidBugs.length;j++){

   var curr = data.invalidBugs[j];
   var html = '<tr  bgcolor="#e8e2e1">';
   html += '<td>'+curr.name+'</td>';
   html += '<td>'+curr.location+'</td>';
   html += '<td>'+curr.price+'</td>';
   html += '<td>'+curr.time+'</td>';
   html += '<td>'+curr.season+'</td>';
   html += '</tr>';
   $('#oos_bugs').append(html);
}
  }
  // END SUCCESS

  })
 });

 // TABLE SETUP
   $('#add_details').DataTable();
});

</script>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/dataTables.bootstrap.min.css" rel="stylesheet"/>

<center>
<h2> Animal Crossing: New Horizons Seasonal Catches </h2>
Select a month and hemisphere to get started! This page displays in-season bugs and fish for ACNH! Made by acarbaja.

 <form method="post" id="add_details">
    <div class="form-group">
   <select id="month" name="month">
     <option label="January" value="Jan">January</option>
     <option label="February" value="Feb">February</option>
     <option label="March" value="Mar">March</option>
     <option label="April" value="Apr">April</option>
      <option label="May" value="May">May</option>
       <option label="June" value="June">June</option>
        <option label="July" value="July">July</option>
         <option label="August" value="Aug">August</option>
          <option label="September" value="Sept">September</option>
           <option label="October" value="Oct">October</option>
            <option label="November"  value="Nov">November</option>
             <option label="December" value="Dec">December</option>
   </select>
&nbsp;&nbsp;&nbsp;&nbsp;
      <select id="hemisphere" name="hemisphere">
        <option label="Northern Hemisphere " value="North">Northern Hemisphere</option>
        <option label="Southern Hemisphere " value="South">Southern Hemisphere</option>
      </select>
      <p>
&nbsp;&nbsp;&nbsp;&nbsp;
      <input label="Priority sort!!" type="checkbox" id="prioritySort" name="prioritySort">Catch Priority sort!!</input>
      &nbsp;&nbsp;&nbsp;&nbsp;
            <input label="Money sort!!" type="checkbox" id="moneySort" name="moneySort">Money sort!!</input>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input label="Alphabetize please!!" type="checkbox" id="alphSort" name="alphSort">Alphabetize please!!</input>

    </div>
   <div class="form-group">
        <input type="submit" name="add" id="add" class="btn btn-success" value="Sort me, baby!" />
  </div>

</form>


<h3>In-Season Fish </h3>
<table id="fish" class="table table-striped table-bordered" style="width:80%">
  <tr>
    <th>Name</th>
    <th>Location</th>
    <th>Shadow</th>
    <th>Price</th>
    <th>Time</th>
    <th>Season</th>
    <th>Priority Rank</th>
  </tr>
  <tbody>
  </tbody>
</table>


<h3> In-Season Bugs </h3>
<table id="bugs" class= "table table-striped table-bordered" style="width:80%">
  <tr>
    <th>Name</th>
    <th>Location</th>
    <th>Price</th>
    <th>Time</th>
    <th>Season</th>
    <th>Priority Rank</th>
  </tr>
  <tbody>
  </tbody>
</table>


<h3>Out of Season Fish </h3>
<table id="oos_fish" class="table table-striped table-bordered" style="width:80%">
  <tr>
    <th>Name</th>
    <th>Location</th>
    <th>Shadow</th>
    <th>Price</th>
    <th>Time</th>
    <th>Season</th>
  </tr>
  <tbody>
  </tbody>
</table>


<h3> Out of Season Bugs </h3>
<table id="oos_bugs" class= "table table-striped table-bordered" style="width:80%">
  <tr>
    <th>Name</th>
    <th>Location</th>
    <th>Price</th>
    <th>Time</th>
    <th>Season</th>
  </tr>
  <tbody>
  </tbody>
</table>

</center>
