// let e = document.getElementById("Security1");
// let z = document.getElementById("Security2");

// let value1 = e.value;
// let value2 = z.value;

// let text1 = e.options[e.selectedIndex].text;
// let text2 = z.options[z.selectedIndex].text;

// // const fname = document.getElementById("#FName");
// // const lname = document.getElementById("#LName");
// // const email = document.getElementById("#Email");
// // const user = document.getElementById("#Username");
// // const password = document.getElementById("#PassWord");
// // const cpassword = document.getElementById("#CPassWord");
// // const secans1 = document.getElementById("#SecAns1");
// // const secans2 = document.getElementById("#SecAns2");

// let fnameval = "";
// let lnameval = "";
// let emailval = "";
// let userval = "";
// let passval = "";
// let cpassval = "";
// let sec1val = "";
// let sec2val = "";

// const securityquest=[
//     {value: "1", text:"What is your mother's maiden name?"},
//     {value: "2", text:"What is the name of your first pet?"},
//     {value: "3", text:"What was your first car?"},
//     {value: "4", text:"What elementary school did you attend?"},
//     {value: "5", text:"What town were you born in?"},
//     {value: "6", text:"What is your first friends First name?"},
//     {value: "7", text:"Who was your childhood hero?"},
//     {value: "8", text:"Who was your childhood crush?"},
//     {value: "9", text:"Where was your best family vacation as a kid?"},
//     {value: "10", text:"What is your favorite holiday?"},
//     {value: "11", text:"What is your favorite mythical creature?"},
//     {value: "12", text:"What is your favorite animal?"},
//     {value: "13", text:"What is your favorite game?"},
//     {value: "14", text:"What is your girlfriends/boyfriends last name?"},
//     {value: "15", text:"What is your dream vehicle?"},
//     {value: "16", text:"What is your dream job?"},
//     {value: "17", text:"What is a goal you wish to achieve?"},
//     {value: "18", text:"What would you want to be known for doing?"},
//     {value: "19", text:"What is your mother-in-law's maiden name?"},
//     {value: "20", text:"What is your favorite season?"}
// ];

// //   let options=[...document.querySelectorAll("#listado option:checked")].map(elemento => elemento.value)
// function check(){
//     const fname = document.getElementById("#FName");
//     const lname = document.getElementById("#LName");
//     const email = document.getElementById("#Email");
//     const user = document.getElementById("#Username");
//     const password = document.getElementById("#PassWord");
//     const cpassword = document.getElementById("#CPassWord");
//     const secans1 = document.getElementById("#SecAns1");
//     const secans2 = document.getElementById("#SecAns2");
//     fnameval = fname.value;
//     lnameval = lname.value;
//     emailval = email.value;
//     userval = user.value;
//     passval = password.value;
//     cpassval = cpassword.value;
//     sec1val = secans1.value;
//     sec2val = secans2.value;

//     if(fnameval = ""){
//         alert("Please fill out First name!");
//     }

//     alert("Testing");
// }

// function Test(){
//     alert("THIS iS A TEST!!!");
// }

// function Makechange(value){
//     var optionValue = value;
//     while(true){
//         if(optionValue == securityquest.val){

//         } 
//         else{
//             z.map(securityquest => securityquest.value);
//         }
//     }
// }_


// const SecQuest=[
//     "What is your mother's maiden name?",
//     "What is the name of your first pet?",
//     "What was your first car?",
//     "What elementary school did you attend?",
//     "What town were you born in?",
//     "What is your first friends First name?",
//     "Who was your childhood hero?",
//     "Who was your childhood crush?",
//     "Where was your best family vacation as a kid?",
//     "What is your favorite holiday?",
//     "What is your favorite mythical creature?",
//     "What is your favorite animal?",
//     "What is your favorite game?",
//     "What is your girlfriends/boyfriends last name?",
//     "What is your dream vehicle?",
//     "What is your dream job?",
//     "What is a goal you wish to achieve?",
//     "What would you want to be known for doing?",
//     "What is your mother-in-law's maiden name?",
//     "What is your favorite season?"

// ]

// var Index = 1;

// for(element in SecQuest){
//     let optn = document.createElement("option");
//     optn.value = Index;
//     optn.innerHTML = element;

//     e.appendChild(optn);
//     z.appendChild(optn);
//     Index++;
// }
// function init(){
//     alert("Page loaded!");
//     var select = document.getElementById('Security1'),
//     i = 1,
//     il = securityquest.length;
    
//     for(; i < il; i+=1){
//         option = document.createElement('option');
//         option.setAttribute('value', securityquest[i].value);
//         option.appendChild(document.createTextNode(securityquest[i].text));
//         select.appendChild(option);
//     }

    
// };

const optionMenu = document.querySelector(".select-menu"),
        selectBtn = optionMenu.querySelector(".select-btn"),
        options = optionMenu.querySelectorAll(".option"),
        sBtn_text = optionMenu.querySelector(".sBtn-text");
        
selectBtn.addEventListener("click", () => optionMenu.classList.toggle("active"));

options.forEach(option =>(
    option.addEventListener("click", ()=>{
        let selectedOption = option.querySelector(".option-text").innerText;
        sBtn_text.innerText = selectedOption;
        console.log(selectedOption);
    })
))
