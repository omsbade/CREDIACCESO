/* This script and many more are available free online at
The JavaScript Source!! http://www.javascriptsource.com
Created by: Chris Crenshaw | http://www.creditcarddebtnegotiation.org/ */

// validation function
function isValid(entry, a, b) {
  if (isNaN(entry.value) || (entry.value==null) || (entry.value=="") || (entry.value < a) || (entry.value > b)) {
  alert("Invalid entry. Your min payment should be between " + a + " and " + b + ".")
  entry.focus()
  entry.select()
  return false
  }
  return true
}

// clear results fields when input values changed
function clearCalcs(form) {
  form.num_months.value = ""
  form.total_pay.value = ""
  form.total_int.value = ""
}

function calculate(form) {
// send entries to validation function
// exit if not valid
  if (!isValid(form.balance, 0, 100000)) {  
    return false
  } else if (!isValid(form.interest, 0, 30)) {  
    return false
  } else {         
    var init_bal = eval(form.balance.value);
  }
  if (!isValid(form.mnth_pay, init_bal*.02, init_bal)) {
    return false
  } else {
  // variables used in calculation
  var cur_bal = init_bal;   // used in loop
  var interest = eval(form.interest.value/100);
  var mnth_pay = eval(form.mnth_pay.value);
  var fin_chg = 0;      // finance charge
  var num_mnths = 0;
  var tot_int = 0;
  }
  
  while (cur_bal > 0) {
    fin_chg = cur_bal*interest/12;
    cur_bal = cur_bal - mnth_pay + fin_chg;
    num_mnths++;
      if (num_mnths > 300) {
        alert("We are interrupting this process to prevent a hang which may result with a very high balance, high interest rate and low monthly payment.\n\nTry entering a higher monthly payment amount." )
        form.mnth_pay.focus()
        form.mnth_pay.select()
        return
      }
    tot_int += fin_chg;
  }
  
// display result
  form.num_months.value = num_mnths;
  form.total_pay.value ="$" + round(init_bal + tot_int);
  form.total_int.value ="$" + round(tot_int);
   }

// round to 2 decimal places
function round(x) {
  return Math.round(x*100)/100;
}


