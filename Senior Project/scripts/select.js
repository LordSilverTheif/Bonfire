

window.onload = function(){
  const securityquest=[
    {value: "1", text:"What is your mother's maiden name?"},
    {value: "2", text:"What is the name of your first pet?"},
    {value: "3", text:"What was your first car?"},
    {value: "4", text:"What elementary school did you attend?"},
    {value: "5", text:"What town were you born in?"},
    {value: "6", text:"What is your first friends First name?"},
    {value: "7", text:"Who was your childhood hero?"},
    {value: "8", text:"Who was your childhood crush?"},
    {value: "9", text:"Where was your best family vacation as a kid?"},
    {value: "10", text:"What is your favorite holiday?"},
    {value: "11", text:"What is your favorite mythical creature?"},
    {value: "12", text:"What is your favorite animal?"},
    {value: "13", text:"What is your favorite game?"},
    {value: "14", text:"What is your girlfriends/boyfriends last name?"},
    {value: "15", text:"What is your dream vehicle?"},
    {value: "16", text:"What is your dream job?"},
    {value: "17", text:"What is a goal you wish to achieve?"},
    {value: "18", text:"What would you want to be known for doing?"},
    {value: "19", text:"What is your mother-in-law's maiden name?"},
    {value: "20", text:"What is your favorite season?"}
  ]
  // alert("Page loaded test!");
  var sel = document.getElementById('#Security1');
  var sel2 = document.getElementById('#Security2');

  securityquest.map( (quest, i) => {
    let opt = document.createElement("option");
    opt.value = i; // the index
    opt.innerHTML = quest;
    option.appendChild(document.createTextNode(securityquest[i].text));
    sel.append(opt);
    sel2.append(opt);
    i++;
  });

} 

// let btnPopulate = document.querySelector('#populate')
// let select = document.querySelector('select');
// let quest=[
//   "Pick a question",
//   "What is your mother's maiden name?",
//   "What is the name of your first pet?",
//   "What was your first car?",
//   "What elementary school did you attend?",
//   "What town were you born in?",
//   "What is your first friends First name?",
//   "Who was your childhood hero?",
//   "Who was your childhood crush?",
//   "Where was your best family vacation as a kid?",
//   "What is your favorite holiday?",
//   "What is your favorite mythical creature?",
//   "What is your favorite animal?",
//   "What is your favorite game?",
//   "What is your girlfriends/boyfriends last name?",
//   "What is your dream vehicle?",
//   "What is your dream job?",
//   "What is a goal you wish to achieve?",
//   "What would you want to be known for doing?",
//   "What is your mother-in-law's maiden name?",
//   "What is your favorite season?"
// ]

// btnPopulate.addEventListener('click', () =>{
//   let options = quest.map(quest => "<option value="+$+"{"+quest.toLowerCase()+"}>"+quest+"</option>").join('/n');
//   select.innerHTML= options;
//   select.SecurityQuestion2.innerHTML = options;
// })

let btnTest = document.querySelector("#Test");
let question1 = document.querySelector("#Security1");
let question2 = document.querySelector("#Security2");

btnTest.addEventListener("click", () =>{
  // if(question1.value === question2.value){
  //   alert("Please pick 2 unique security questions!")
  // }
  alert("Test");
})
