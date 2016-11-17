@extends('layouts.main')
@section('formStyle')
<style>
    form{
        
        margin:0 auto;
        width:50%;
        font-size:19px;
      
    }
   
 
    label{
        width:200px;
        float:left;
    
    }
    
  
    input[type = 'text']{
     
        float:left;
        height:30px;
        width:330px;
        font-size:18px;
        
    }
    
    input [type = 'submit']{
       font-size:30px;
    }
   h2{
       width:100%;
       float:left;
   }
    h6{
        width:100%;
        float:left;
        margin:14px 0;
    }
    #formwrapper{
        width:100%;
    }
</style>
@stop

@section('form')

	    <center><h1 style = "font-size:30px;">Account Registration Form</h1></center>
	    <h3>Please fill this from in its entirety and fax it back along with a copy of your Resale Tax Certificate to:
 Long Island headquarters: Fax #: 631 769 4000 New York City Branch: Fax #: 646 366 8005 </h3>
 
	    <form>
	    <label>Business Name: </label><input type = "text" name = "businessName"><br><br>
<label>Billing Address: </label><input type = "text" name = "businessAddress"><br><br>

<label>Business#</label> <input type = "text" name = "businessAddress"><br><br>
<label>Fax#</label> <input type = "text" name = "faxPhone"><br><br>
<label>Mobile#</label> <input type = "text" name = "mobilePhone"><br><br>
<label>Email Address</label> <input type = "text" name = "EmailAddress"><br><br>
 <label>Web Address</label> <input type = "text" name = "WebAddress" ><br><br>
<label>Owner/Officer</label> <input type = "text" name = "Officer"><br><br>
<label>Contact Person</label> <input type = "text" name = "Contact"><br><br>
<label>Federal Tax Id #</label> <input type = "text" name = "taxId"><br><br>
<label>Resale Tax Certificate #/Validated Date</label> <input type = "text" name = "TaxResale">


<br><br><br><br>
<center><h2>Payment Terms</h2></center>

<br><br><br><br>

    <h6>I - COD : Payments to be made by Cash , Bank Check , or Wire Transfer</h6>
<h6>II - COD : Payments to be made by Company Check</h6>
<h6>III - COD : Time Bond : Payments to be made either by Cash, Company Check, or Bank Check</h6>
<h6>Bank Name and Business Account #:</h6><br><br>
<input type = "text" name = "bankname" placeholder = "Bank Name">&nbsp 
<input type = "text" name = "account" placeholder = "Business Account #">
<h6>Bank Address and Phone #:</h6><br><br>
<input type = "text" name = "bankname" placeholder = "Address">&nbsp 
<input type = "text" name = "account" placeholder = "Phone #"><br><br>

<center><H2 style = "margin-top:40px">Trade References</H2></center><br>

<h6>Company #1 Information:</h6><br><br>
<input  type = "text" name = "name" placeholder = "Name"> 
<input  type = "text" name = "contact" placeholder = "Contact Person">
<input  type = "text" name = "address" placeholder = "Address"> 
<input  type = "text" name = "phone" placeholder = "Phone #">
<h6>Company #2 Information:</h6><br><br>
<input  type = "text" name = "name" placeholder = "Name"> 
<input  type = "text" name = "contact" placeholder = "Contact Person">
<input  type = "text" name = "address" placeholder = "Address"> 
<input  type = "text" name = "phone" placeholder = "Phone #">
<h6>Company #2 Information:</h6><br><br>
<input  type = "text" name = "name" placeholder = "Name"> 
<input  type = "text" name = "contact" placeholder = "Contact Person">
<input  type = "text" name = "address" placeholder = "Address"> 
<input  type = "text" name = "phone" placeholder = "Phone #"><br><br><br>

<center><label style = "margin-top:8px">Signature</label></center><br><br><br>
<input style = "margin-top:8px" id = "short" type = "text" name = "signature" placeholder = "Signature / Date"></center> 
<input type = "submit" value = "SUBMIT" style = "background:#4fc3f7;float:left; width:100%; margin-top:50px; border-radius:20px; font-size:30px">
</form>	    
	</div>
	
	<div class="clear"></div>
</div>
</div>

</body>
</html>
@stop