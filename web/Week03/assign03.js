
function addTotal(ifclicked)
{
    let item0 = document.getElementById("item_0").checked;
    let item1 = document.getElementById("item_1").checked;
    let item2 = document.getElementById("item_2").checked;

    let item3 = document.getElementById("item_3").checked;
    let item4 = document.getElementById("item_4").checked;
    let item5 = document.getElementById("item_5").checked;

    let item6 = document.getElementById("item_6").checked;
    let item7 = document.getElementById("item_7").checked;
    let item8 = document.getElementById("item_8").checked;

    let item9 = document.getElementById("item_9").checked;
    let item10 = document.getElementById("item_10").checked;
    let item11 = document.getElementById("item_11").checked;
  
    let total = 0;
    let item0_Value = 19.95;
    let item1_Value = 15.19;
    let item2_Value = 19.95;
    let item3_Value = 29.98;
    let item4_Value = 17.49;
    let item5_Value = 17.99;
    let item6_Value = 17.95;
    let item7_Value = 45.99;
    let item8_Value = 17.95;
    let item9_Value = 13.98;
    let item10_Value = 14.89;
    let item11_Value = 11.99;

    if (item0 == true)
        total = total + item0_Value;
    if (item1 == true)
        total = total + item1_Value;
    if (item2 == true)
        total = total + item2_Value;
 
    if (item3 == true)
        total = total + item3_Value;
    if (item4 == true)
        total = total + item4_Value;
    if (item5 == true)
        total = total + item5_Value; 
        
    if (item6 == true)
        total = total + item6_Value;
    if (item7 == true)
        total = total + item7_Value;
    if (item8 == true)
        total = total + item8_Value;        

    if (item9 == true)
        total = total + item9_Value;
    if (item10 == true)
        total = total + item10_Value;
    if (item11 == true)
        total = total + item11_Value;

    document.getElementById("total").value = total.toFixed(2);;

}


function validateFirstName(firstNamePass) 
{
  let firstName = String(firstNamePass.value);

  if (firstName.length == 0)
      return false;
  else
      return true;
}
function validateLastName(lastNamePass) 
{
    let lastName = String(lastNamePass.value);
  
    if (lastName.length == 0)
        return false;
    else
        return true;
}
  
function validateAddress(addressPass) 
{  
    let address = String(addressPass.value);
  
    if (address.length == 0)
        return false;
    else    
        return true;
}
function validatePhone(phoneNumberPass) 
{
    console.log("Checking Phone number " + phoneNumberPass.value )
  
    // let number = Number(phoneNumberPass.value);
    let phoneNumber = String(phoneNumberPass.value);
  
    let pattern1 = /(\d{10})/;
    let pattern2 = /^\d{3}-\d{3}-\d{4}$/g;
    let pattern3 = /^\(\d{3}\)\d{3}-\d{4}$/;
  
    // Used this website to learn about substrings
    //https://www.w3schools.com/jsref/jsref_substr.asp
    let substring1, substring2, substring3;
  
    if (pattern1.test(phoneNumber))
    {
        substring1 = phoneNumber.substr(0,3);
        substring2 = phoneNumber.substr(3,3);
        substring3 = phoneNumber.substr(6,4);
  
        // phoneNumber.replace(/(\d{3})(\d{3})(\d{4})/, "("+ substring1 + ")-" + substring2 + "-" + substring3);
        phoneNumber = "(" + substring1 + ")" + substring2 + "-" + substring3;
        
        document.getElementById("phone").value = phoneNumber;
        document.getElementById("phoneVerify").style.visibility = "hidden";
        return true;
    }
    else if (pattern2.test(phoneNumber))
    {
        substring1 = phoneNumber.substr(0,3);
        substring2 = phoneNumber.substr(4,3);
        substring3 = phoneNumber.substr(7,5);
  
        // phoneNumber.replace(/(\d{3})(\d{3})(\d{4})/, "("+ substring1 + ")-" + substring2 + "-" + substring3);
        phoneNumber = "(" + substring1 + ")" + substring2 + substring3;
        
        document.getElementById("phone").value = phoneNumber;
        document.getElementById("phoneVerify").style.visibility = "hidden";
        return true;
    }
    else if (pattern3.test(phoneNumber))
    {
        document.getElementById("phoneVerify").style.visibility = "hidden";
        return true;
    }
    else 
    {
        document.getElementById("phoneVerify").style.visibility = "visible";
        return false;
    }
}
function validateCreditType()
{
    let visa = document.getElementById("card_visa").checked;
    let master = document.getElementById("card_master").checked;
    let american = document.getElementById("card_american").checked;

    if(visa == true || master == true || american == true)
    {
        return true;
    }
    else
    {
        return false;
    }
}
function validateCardNumber(cardString)
{
    console.log("Card number is " + cardString);
  
    let cardNumber = String(cardString.value);
  
    let pattern = /\d{16}/;
    let pattern2 = /^\d{4} \d{4} \d{4} \d{4}$/;
  
    if (pattern.test(cardNumber))
    {
        let substring1 = cardNumber.substr(0,4);
        let substring2 = cardNumber.substr(4,4);
        let substring3 = cardNumber.substr(8,4);
        let substring4 = cardNumber.substr(12,4);
  
        cardNumber = substring1 + " " + substring2 + " " + substring3 + " " + substring4;
        document.getElementById("credit_card").maxlength = "19";
        document.getElementById("credit_card").value = cardNumber;
        document.getElementById("cardNumberVerify").style.visibility = "hidden";  
        return true;
    }
    else if (pattern2.test(cardNumber))
    {
        document.getElementById("cardNumberVerify").style.visibility = "hidden";
        return true;
    }
    else 
    {
        document.getElementById("cardNumberVerify").style.visibility = "visible";
        return false;
    }
}
//http://www.robarspages.ca/web-development/regex-mmyyyy-regular-expression-for-credit-card-expiration-date/
function validateDate(dateString)
{
    console.log("date is " + dateString);
  
    let date = dateString.value;
  
    let pattern = /^((0[1-9])|(1[0-2]))\/((202[1-9])|(20[3-5][0-9]))$/;

//    let pattern = /^((0[1-9])|(1[0-2]))\/((2020)|(20[2-9][0-9])|(2[3-9][0-9][0-9]|[3-9][0-9][0-9][0-9]))$/;
  
    if (pattern.test(date))
    {
        console.log("Worked");
        document.getElementById("dateVerify").style.visibility = "hidden";
        return true;
    }
    else 
    {
        document.getElementById("dateVerify").style.visibility = "visible";
        return false;
    }
}  


function validateAll()
{
  //Validate First Name
  let firstNameBool = validateFirstName(document.getElementById("first_name"));
  //Validate Last Name
  let lastNameBool = validateLastName(document.getElementById("last_name"));
  //Validate Address
  let addressBool = validateAddress(document.getElementById("address"));
  //Validate Phone
  let phoneBool = validatePhone(document.getElementById("phone"));
  //Valiadte Credit Card Type
  let typeBool = validateCreditType();
  //Validate Card Number
  let cardNumberBool = validateCardNumber(document.getElementById("credit_card"));
  //Validate Expiration Date
  let dateBool = validateDate(document.getElementById("exp_date"));

  console.log("Check values");

  let focus = true;

  if (firstNameBool && lastNameBool && addressBool && phoneBool && typeBool && cardNumberBool && dateBool) 
  {
    var form =  document.getElementById("form-grid");
    form.submit();
  }  
  else 
  {
      if (firstNameBool)
          document.getElementById("firstNameVerify").style.visibility = "hidden";
      else 
      {
          document.getElementById("firstNameVerify").style.visibility = "visible";
          
          if (focus == true) 
          {
              focus = false;
              document.getElementById("first_name").focus();
          }
      }
      if (lastNameBool)
          document.getElementById("lastNameVerify").style.visibility = "hidden";
      else 
      {
          document.getElementById("lastNameVerify").style.visibility = "visible";
          if (focus == true)
          {
              focus = false;
              document.getElementById("last_name").focus();
          }
      }
      if (addressBool)
          document.getElementById("addressVerify").style.visibility = "hidden";
      else 
      {
          document.getElementById("addressVerify").style.visibility = "visible";
          if (focus == true)
          {
              focus = false;
              document.getElementById("address").focus();
          }
      }
      if (phoneBool)
          document.getElementById("phoneVerify").style.visibility = "hidden";
      else
      {
          document.getElementById("phoneVerify").style.visibility = "visible";
          if (focus == true)
          {
              focus = false;
              document.getElementById("phone").focus();
          }
      }
      if (typeBool)
          document.getElementById("creditTypeVerify").style.visibility = "hidden";
      else
      {
          document.getElementById("creditTypeVerify").style.visibility = "visible";
      }      
      if (cardNumberBool)
          document.getElementById("cardNumberVerify").style.visibility = "hidden";
      else
      {
          document.getElementById("cardNumberVerify").style.visibility = "visible";
          if (focus == true)
          {
              focus = false;
              document.getElementById("credit_card").focus();
          }
      }
      if (dateBool)
          document.getElementById("dateVerify").style.visibility = "hidden";
      else
      {
          document.getElementById("dateVerify").style.visibility = "visible";
          if (focus == true)
          {
              focus = false;
              document.getElementById("exp_date").focus();
          }
      }
  } 
}

function resetForm() 
{
  document.getElementById("first_name").focus();
  document.getElementById("firstNameVerify").style.visibility = "hidden";
  document.getElementById("lastNameVerify").style.visibility = "hidden";
  document.getElementById("addressVerify").style.visibility = "hidden";
  document.getElementById("phoneVerify").style.visibility = "hidden";
  document.getElementById("creditTypeVerify").style.visibility = "hidden";
  document.getElementById("cardNumberVerify").style.visibility = "hidden";
  document.getElementById("dateVerify").style.visibility = "hidden";
  let total = 0;
  document.getElementById("total").innerHTML = total.toFixed(2);;
}