
console.log("hello world");
let Name = document.getElementById("Uname");
let MobileNO =document.getElementById("Mbnum");
let Email =document.getElementById("mail");
let Password =document.getElementById("passW");
let ConfPassword =document.getElementById("CpassW");
let UNM = document.getElementById("UserNameMessage");
let MM = document.getElementById("MobileMessage");
let EM = document.getElementById("EmailMessage");
let PM = document.getElementById("PasswordMessage");
let CPM = document.getElementById("ConfirmPassMessage");
let button = document.getElementById("button");
let BigName = document.getElementById("namee");
let BigNum = document.getElementById("mobile");
let BigMail = document.getElementById("emaill");
let BigPass = document.getElementById("pass");
let BigCPass = document.getElementById("cpass");
let houseNo = document.getElementById("houseNum");
let HM = document.getElementById("houseNumMessage");
let BigHouseNum = document.getElementById("houseno");
let Locality = document.getElementById("locality");
let LM = document.getElementById("LocalityMessage");
let Biglocality = document.getElementById("localitys");
let Landmark = document.getElementById("landmark");
let LMM = document.getElementById("LandMarkMessage");
let BigLandmark = document.getElementById("landmarks");
let PinCode = document.getElementById("pincode");
let PCM = document.getElementById("PinCodeMessage");button
let BigPincode = document.getElementById("pincodee");
let City = document.getElementById("city");
let CM = document.getElementById("CityMessage");
let BigCity = document.getElementById("cityy");
let State = document.getElementById("state");
let SM = document.getElementById("StateMessage");
let BigState = document.getElementById("statee");
let submit = document.getElementById("submit");
console.log(submit);


let flag=0;
let flagstam =0;
Name.addEventListener("blur",()=>{
   console.log("name has been blurred");
   let regex = /^[a-zA-z]([0-9a-zA-z]){3,20}/;
   let str = Name.value;
   if(str.length==0)
   {
    UNM.innerText = "Username can't be left UnFilled";
    BigName.style.border = `3px solid red`;
    
   }
   else if(regex.test(str)){
    BigName.style.border = `3px solid rgb(137, 230, 156)`;
    UNM.innerText = "";
     flag++;
   }
   else{
    UNM.innerText = "Username must have 3-20 characters and must start with alphabet and can't contain space";
    BigName.style.border = `3px solid red`;

   }
     console.log(flag);
     if(flag==11){
      button.innerHTML = `<input type="submit" id="submit" class="button" value="SIGNUP">`;
   
 }
})
MobileNO.addEventListener("blur",()=>{
    console.log("mobile has been blurred");
    let regex = /^[789]([0-9]){9}/;
    let str = MobileNO.value;
    if(str.length==0)
   {
    MM.innerText = "Mobile number can't be left UnFilled";
    BigNum.style.border = `3px solid red`;
   }
    else if(regex.test(str)){

     MM.innerText = "";
     flag++;
     BigNum.style.border = `3px solid rgb(137, 230, 156)`;

    }
    else{
     MM.innerText = "Mobile Number must be of 10 Number only";
     BigNum.style.border = `3px solid red`;

 
    }
    console.log(flag);
 if(flag==11){
     button.innerHTML = `<input type="submit" id="submit" class="button" value="SIGNUP">`;
   
}
}
)
Email.addEventListener("blur",()=>{
   console.log("Email has been blurred");
   let regex = /^([_\.\-0-9a-zA-z]+)@([_\.\-0-9a-zA-z]+)\.([a-zA-Z]){2,7}$/;
   let str = Email.value;
   if(str.length==0)
   {
    EM.innerText = "Email can't be left UnFilled";
    BigMail.style.border = `3px solid red`;
   }
  else if(regex.test(str)){
    EM.innerText = "";
    flag++;
    BigMail.style.border = `3px solid rgb(137, 230, 156)`;
   }
   else{
    EM.innerText = "Enter a valid email";
    BigMail.style.border = `3px solid red`;

   }
   console.log(flag);
 if(flag==11){
     button.innerHTML = `<input type="submit" id="submit" class="button" value="SIGNUP">`;
   
}
})

Password.addEventListener("blur",()=>{
   console.log("Password has been blurred");
   let regex1 =/[a-z]/;
   let regex2 =/[A-Z]/;
   let regex3 =/[0-9]/g;
   let str = Password.value;
   let length = str.length;
   if(str.length==0)
   {
    PM.innerText = "Password can't be left UnFilled";
    BigPass.style.border = `3px solid red`;
   }
   else if(regex1.test(str)&&regex2.test(str)&&regex3.test(str)&&length>5&&length<20){
    PM.innerText = "";
    if(flagstam==0)
    {
        flag++;
        flagstam++;
    }
    console.log(flagstam);
    BigPass.style.border = `3px solid rgb(137, 230, 156)`;

   }
   else{
    PM.innerText = "Password must contain An Upper_Case a Lower_Case And a number and must be of 8 characters";
    BigPass.style.border = `3px solid red`;
}
 console.log(flag);
 if(flag==11){
     button.innerHTML = `<input type="submit" id="submit" class="button" value="SIGNUP">`;
  
 }
})
ConfPassword.addEventListener("blur",()=>{
   console.log("cPasssword has been blurred");
   let str = Password.value;
   let Cstr = ConfPassword.value;
   if(Cstr.length==0)
   {
    CPM.innerText = "this can't be left UnFilled";
    BigCPass.style.border = `3px solid red`;
   }
   else if(str==Cstr){
    CPM.innerText = "";
    BigCPass.style.border = `3px solid rgb(137, 230, 156)`;
    flag++;
   }
   else{
    CPM.innerText = "Password does not match";
    BigCPass.style.border = `3px solid red`;

   }
    console.log(flag);
 if(flag==11){
    button.innerHTML = `<input type="submit" id="submit" class="button" value="SIGNUP">`;
   
 }
})
 houseNo.addEventListener("blur",()=>{
   console.log("Password has been blurred");
    let regex =/([0-9]){1,4}/g;
   let str = houseNo.value;
   let length = str.length;
   if(str.length==0)
   {
    HM.innerText = "house number can't be left UnFilled";
    
     //BigHouseNum.style.border = `3px solid rgb(122, 0, 18)`;
   }
   else if(regex.test(str)){
    HM.innerText = "";
     flag++;
    console.log(flagstam);
    // BigHouseNum.style.border = `3px solid rgb(137, 230, 156)`;

   }
   else{
    HM.innerText = "invalid input";
    // BigHouseNum.style.border = `3px solid rgb(122, 0, 18)`;
}
 console.log(flag);
 if(flag==11){
     button.innerHTML = `<input type="submit" id="submit" class="button" value="SIGNUP">`;
   
 }
})
 Locality.addEventListener("blur",()=>{
   console.log("Password has been blurred");
    let regex =/([a-zA-Z])/g;
   let str = Locality.value;
   let length = str.length;
   if(str.length==0)
   {
    LM.innerText = "locality can't be left UnFilled";
    // Biglocality.style.border = `3px solid rgb(122, 0, 18)`;
   }
   else if(regex.test(str)){
    LM.innerText = "";
     flag++;
    console.log(flagstam);
    // Biglocality.style.border = `3px solid rgb(137, 230, 156)`;

   }
   else{
    LM.innerText = "invalid input";
    // Biglocality.style.border = `3px solid rgb(122, 0, 18)`;
}
 console.log(flag);
 if(flag==11){
     button.innerHTML = `<input type="submit" id="submit" class="button" value="SIGNUP">`;
    
 }
 }
)
 
landmark.addEventListener("blur",()=>{
   console.log("Password has been blurred");
    let regex =/([a-zA-Z0-9])/g;
   let str = landmark.value;
   let length = str.length;
   if(str.length==0)
   {
    LMM.innerText = "Landmark can't be left UnFilled";
    // BigLandmark.style.border = `3px solid rgb(122, 0, 18)`;
   }
   else if(regex.test(str)){
    LMM.innerText = "";
     flag++;
    console.log(flagstam);
    // BigLandmark.style.border = `3px solid rgb(137, 230, 156)`;

   }
   else{
    LMM.innerText = "invalid input";
    // BigLandmark.style.border = `3px solid rgb(122, 0, 18)`;
}
console.log(flag);
 if(flag==11){
     button.innerHTML = `<input type="submit" id="submit" class="button" value="SIGNUP">`;
   
 }
})
PinCode.addEventListener("blur",()=>{
   console.log("Password has been blurred");
    let regex =/(^[1-9][0-9]{5})/g;
   let str = PinCode.value;
   let length = str.length;
   if(str.length==0)
   {
    PCM.innerText = "Pincode can't be left UnFilled";
    // BigPincode.style.border = `3px solid rgb(122, 0, 18)`;
   }
   else if(regex.test(str)){
    PCM.innerText = "";
     flag++;
    console.log(flagstam);
    // BigPincode.style.border = `3px solid rgb(137, 230, 156)`;

   }
   else{
     PCM.innerText = "invalid input";
    //  BigPincode.style.border = `3px solid rgb(122, 0, 18)`;
}
 console.log(flag);
 if(flag==11){
     button.innerHTML = `<input type="submit" id="submit" class="button" value="SIGNUP">`;
   
 }
})
City.addEventListener("blur",()=>{
   console.log("Password has been blurred");
   let regex =/([a-zA-Z])/g;
   let str = City.value;
   let length = str.length;
   if(str.length==0)
   {
    CM.innerText = "city can't be left UnFilled";
    // BigCity.style.border = `3px solid rgb(122, 0, 18)`;
   }
   else if(regex.test(str)){
    CM.innerText = "";
     flag++;
    console.log(flagstam);
    // BigCity.style.border = `3px solid rgb(137, 230, 156)`;

   }
   else{
     CM.innerText = "invalid input";
    //  BigCity.style.border = `3px solid rgb(122, 0, 18)`;
}
 console.log(flag);
 if(flag==11){    
    button.innerHTML = `<input type="submit" id="submit" class="button" value="SIGNUP">`;
   
 }
})
State.addEventListener("blur",()=>{
   console.log("Password has been blurred");
   let regex =/([a-zA-Z])/g;
   let str = State.value;
   let length = str.length;
   if(str.length==0)
   {
    SM.innerText = "State can't be left UnFilled";
    // BigState.style.border = `3px solid rgb(122, 0, 18)`;
   }
   else if(regex.test(str)){
    SM.innerText = "";
     flag++;
     
   

    console.log(flagstam);
    // BigState.style.border = `3px solid rgb(137, 230, 156)`;

   }
   else{
     SM.innerText = "invalid input";
    //  BigState.style.border = `3px solid rgb(122, 0, 18)`;
}
console.log(flag);
     if(flag==11){
        button.innerHTML = `<input type="submit" id="submit" class="button" value="SIGNUP">`;
      
    }
 
})

