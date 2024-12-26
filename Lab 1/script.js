function submitForm(){
    const name = document.forms[0].name.value;
    const mobile = document.forms[0].mobile.value;
    const email = document.forms[0].email.value;
    const address = document.forms[0].address.value;
    const city = document.forms[0].city.value;
    const state = document.forms[0].state.value;
    const profession = document.forms[0].profession.value;
    const orgInst = document.forms[0].orgInst.value;
    const accomodation = document.forms[0].accomodation.value;
    const payMethod = document.forms[0].payMethod.value;
    const idCard = document.forms[0].idCard.value;
    
    if(name === "" || mobile === "" || email === "" || address === "" || city === "" || state === "" || profession === "" || orgInst === "" || payMethod === "choose" || idCard === ""){
        alert("Please fill all the fields");
        return;
    }

    if(RegExp(REGEX_Values.name).test(name) === false){
        alert("Name must be between 2 and 20 characters and should not have digits in it.");
        return;
    }

    if(RegExp(REGEX_Values.mobile).test(mobile) === false){
        alert("Mobile must be 10 digits");
        return;
    }

    if(RegExp(REGEX_Values.email).test(email) === false){
        alert("Email must be valid");
        return;
    }

    if(address === ""){
        alert("Address field is required!");
        return;
    }

    if(RegExp(REGEX_Values.city).test(city) === false){
        alert("City must be between 2 and 20 characters");
        return;
    }

    if(RegExp(REGEX_Values.state).test(state) === false){
        alert("State must be between 2 and 20 characters");
        return;
    }

    if(RegExp(REGEX_Values.profession).test(profession) === false){
        alert("Profession must be between 2 and 20 characters");
        return;
    }

    if(RegExp(REGEX_Values.orgInst).test(orgInst) === false){
        alert("Organization/Institute must be between 2 and 20 characters");
        return;
    }

    if(accomodation !== "yes" && accomodation !== "no"){
        alert("Accomodation must be either yes or no");
        return;
    }

    if(payMethod !== "cash" && payMethod !== "card" && payMethod !== "upi"){
        alert("Payment method must be either cash, card or upi");
        return;
    }

    if(!idCard.endsWith(".jpeg") && !idCard.endsWith(".jpg") && !idCard.endsWith(".png")){
        alert("Only .jpg, .jpeg and .png formats are supported");
        return;
    }

    alert("Thank you for registering!");

}

const REGEX_Values = {
    "name": /^[a-zA-Z]{2,}$/,
    "mobile": /^\d{10}$/,
    "email": /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/,
    "city": /^[a-zA-Z]{2,}$/,
    "state": /^[a-zA-Z]{2,}$/,
    "profession": /^[a-zA-Z]{2,}$/,
    "orgInst": /^[a-zA-Z]{2,}$/
}