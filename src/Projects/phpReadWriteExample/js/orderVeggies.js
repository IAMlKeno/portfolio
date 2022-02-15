/**
 * Created by Elkeno on 2017-05-28.
 */

/**
 * This function is used to verify that the form has been properly filled out and enables or disables the submit button
 * based on this.
 *
 * @returns {boolean}
 */
function validateForm()
{

    var pass = false;
    var elems = document.getElementsByClassName("vegetable");
    for(var x = 0; x<elems.length;++x)
    {
        if(elems[x].value > 0)
        {
            pass = true;
        }
    }

    elems = document.getElementsByClassName("customerInfo");
    for(var x = 0; x<elems.length;++x)
    {
        if(elems[x].value == "")
        {
            pass = false;
        }
    }

    if(pass)
    {
        if(!isNaN(document.getElementById("phone").value)) {
            if(document.getElementById("phone").value.length == 10)
                document.getElementById("submit").removeAttribute("disabled");
            else {
                alert("Something is wrong with number: " + document.getElementById("phone").value);
                document.getElementById("submit").setAttribute("disabled", "disabled");
            }
        }else if(isNaN(document.getElementById("phone").value)) {
            alert("Something is wrong with number: " + document.getElementById("phone").value);
            document.getElementById("submit").setAttribute("disabled", "disabled");
        }
    }
    else
    {
        document.getElementById("submit").setAttribute("disabled", "disabled");
    }
    return pass;
}

/**
 * This function is used to calculate the sum of a line. Once the calculation is done, it displays the value on the page
 * in the appropriate field.
 *
 * @param qty
 * @param price
 * @param total
 */
function sumLine(qty, price, total){
    var d = total + 'Value';
    // console.log(d);
    var qt = qty.value;
    var pr = document.getElementById(price).value;
    var t = qt * pr;

    document.getElementById(total).innerHTML = "$" + t.toFixed(2);
    document.getElementById(d).value = t.toFixed(2);
    calculateTotal();
    validateForm();
}

/**
 * This function is used to calculate the total bill for every item order/
 *
 */
function calculateTotal(){
    var lineTotals = document.getElementsByClassName('hiddenCost');
    var total = 0;
    for(var i = 0; i<lineTotals.length; ++i){

        if(parseFloat(lineTotals[i].value) > 0) {
            total += parseFloat(lineTotals[i].value);
        }
    }

    document.getElementById('total').innerHTML = '$' + total.toFixed(2);
}