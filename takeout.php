<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Take out</title>
<!--Author: Tairema Dailey
Assignment: Your assignment is to create a web page to solicit and then validate information for a take out order
for the Polynesian Palace. After the user submits the order, do the following in Javascript:
• Last name and phone number must be filled in.
• Pick up or delivery must be checked
• For delivery, the street and city are required
• At least one item must have a non‐zero quantity
If the form validates, redisplay it with the subtotal, tax and total filled in along with a message at the
bottom thanking the user for their order and indicating when it will be ready to be picked up (20
minutes) or when it will be delivered (40 minutes).
If the form does not validate, clearly indicate the errors.

-->

<link href="scripts/main.css" type="text/css" rel="stylesheet"/>
<script language="javascript">
var items=[];
var totals;
var itemsSelected=[];
function validate()
{
	with(document.orderForm)
	{
 	if(document.orderForm.lastName.value == "")
	{
		alert("The last name is required");
		document.orderForm.lastName.focus();
	    return false;
	}
	
	
	if(document.orderForm.phone.value.search(/\d{3}\-\d{3}\-\d{4}/)==-1)
   {
      alert("Please enter a phone number with the format xxx-xxx-xxxx.");
	  document.orderForm.phone.focus();
      return false;
   }	
	
	if((document.orderForm.delivery.checked == false) && (document.orderForm.pickUp.checked == false))
	{
		alert("Please check a delivery type");
		return false;
		
	}
	
	if (document.orderForm.delivery.checked == true) 
	{
		
		if (document.orderForm.street.value == "")
		{
		alert ("Please add an street address!");
		document.orderForm.street.focus();
		return false;
		}

	if (document.orderForm.city.value == "") 
		{
		alert ("Please add a city!");
		document.orderForm.city.focus();
		return false;
		}
	}
	
	if(itemsSelected.length != 0){
					var finalOrder="";
					for(i=0; i<itemsSelected.length; i++){
							finalOrder=finalOrder+itemsSelected[i]+"\n";
						}
}

	conf = confirm("Please Confirm your order:\n"+finalOrder);	
	 if ( (conf == true) && (document.orderForm.delivery.checked == true))
	 				  {
					  alert(" Thank you! Your order will be ready in 40 mintues!");
					  return true;
					  }
					else
					  {
					  alert(" Thank you! Your order will be ready in 20 mintues!");
					  return true;
					  }
					 
	
	
  } //with ends
} //function ends


function getItemAmount()
{
	var meals=["Chicken Chop Suey","Sweet and Sour Pork","Shrimp Lo Mein","Moo Shi Chicken","Fried Rice"];
	var priceItems =[4.50,6.25,5.25,6.50,2.35];
    var selItem = parseInt(event.currentTarget.id);
	var itemAmount = priceItems[selItem];
	var newAmount=event.currentTarget.value*itemAmount.toFixed(2);
	totalDisplay[selItem].value=newAmount.toFixed(2);
	var addedItems=meals[selItem];
	items.splice(selItem,1,newAmount);
	
	var oTotal=0;
	for(i=0; i<items.length; i++){
			oTotal=oTotal+items[i];		
		}
		
	document.totals.subtotal.value=Math.round(oTotal*100).toFixed(2)/100;
	var tax = oTotal*.05;
	tax=Math.round(tax*100).toFixed(2)/100
	document.totals.tax.value=tax.toFixed(2);
	totals = oTotal+tax;
	document.totals.total.value=totals.toFixed(2);
	
	if(event.currentTarget.value != 0){
	var orderedItems = event.currentTarget.value +" order(s) of : "+ addedItems +"  $"+ newAmount.toFixed(2);
	itemsSelected.splice(selItem,1,orderedItems);
	}
	
	else{
		itemsSelected.splice(selItem,1);
	}
}
		
	

</script>
</head>

<body>
<div id="wrapper">
<header>
<?php include("_includes/header.php");?>
</header>
<aside>
<?php include("_includes/links.php");?>
</aside>
<section>
<div id="rForm">
 <h2 align="center">Polynesian Palace - Take-Out Menu</h2><br>
    <form id="orderForm" name="orderForm" method="post" action="" onSubmit="return validate()">
      <table width="500" border="0" align="center" cellpadding="5" cellspacing="5">
        <tr>
          <td align="right"> First Name:
            <input name="firstName" type="text"></td>
          <td align="right">Last Name*:
            <input name="lastName" type="text"></td>
        </tr>
        <tr>
          <td align="right"> Street:
            <input name="street" type="text"></td>
          <td align="right">City:
            <input name="city" type="text"></td>
        </tr>
        <tr>
          <td align="right">Phone*:
            <input name="phone" type="text" placeholder="xxx-xxx-xxxx"></td>
          
         <td align="center" bgcolor="#CCCCCC"><input name="pickUp" value="pickUp" type="checkbox">
            Pick Up
            <input name="delivery" type="checkbox" value="delivery">
            Delivery</td>
            
        </tr>
      </table>
      </form>
       
      <form id="selectedItems" name="selectedItems" method="post" action="" >
      <table width="600" border="0" align="center" cellpadding="5" cellspacing="5">
        <tr>
          <th width="95" scope="col">Select Item</th>
          <th width="143" scope="col">Item Name</th>
          <th width="97" scope="col">Cost Each</th>
          <th width="100" scope="col" align="right">Total Cost</th>
        </tr>
        <tr><td><select id="0" name='Chicken Chop Suey' onChange="getItemAmount()">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        </select></td><td>Chicken Chop Suey</td><td>$4.50</td></tr>
        
        <tr><td><select id="1" name='Sweet and Sour Pork' onChange="getItemAmount()">
       <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        </select></td><td>Sweet and Sour Pork</td><td>$6.25</td></tr>
		
        <tr><td><select id="2" name='Shrimp Lo Mein' onChange="getItemAmount()">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option></select></td><td>Shrimp Lo Mein</td><td>$5.25</td></tr>
		
        <tr><td><select id="3" name='Moo Shi Chicken' onChange="getItemAmount()">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option></select></td><td>Moo Shi Chicken</td><td>$6.50</td></tr>
		
        <tr><td><select id="4" name='Fried Rice' onChange="getItemAmount()">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option></select></td><td>Fried Rice</td><td>$2.35</td></tr>
		</form>
        
        
        <form id="totalDisplay" name="totalDisplay" method="post" action="">
        <tr><td class="totalD">$<input type='text' id="1" name="1"> </input></td></tr>
        <tr><td class="totalD">$<input type='text' id="2" name="2"> </input></td></tr>
        <tr><td class="totalD">$<input type='text' id="3" name="3"> </input></td></tr>
        <tr><td class="totalD">$<input type='text' id="4" name="4"> </input></td></tr>
        <tr><td class="totalD">$<input type='text' id="5" name="5"> </input></td></tr> 
        </form>
        
        <form id = "totals" name="totals" method="post" action="" onSubmit="return validate()">  
        <tr>
          <td>&nbsp;</td>
          <td colspan="2" align="center">Subtotal</td>
          <td>$<input type="text" name="subtotal" id="subtotal">
            </input></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td colspan="2" align="center" >Mass Tax 5%</td>
          <td>$<input type="text" name="tax" id="tax">
            </input></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td colspan="2" align="center" >Total</td>
          <td>$<input type="text" name="total" id="total">
            </input></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="3" ><input type="submit" value="Submit Order" onsubmit="validate()"></td>
        </tr>
      </table>
</form>


</div>

</section>



</div>
<footer>
<p>&copy; 2012 Tairema Dailey </p>
</footer>
</body>
</html>