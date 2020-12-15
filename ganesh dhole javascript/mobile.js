var mob1 = {
    mobile:"MI", 
    model:"Redmi Note 9 pro",
    color:"Blue",
    Price:17500,
    accessories:['charger', 'earphone'], 
    };

var mob2 = {
    mobile:"SAMSANG",
    model:"J12",
    color:"Red",
    Price:8009,
    accessories:['charger', 'earphone'], 
    
    };

// console.log(mob1)

// console.log(mob2)

for (const property in mob1) {
console.log(`${property}: ${mob1[property]}`);
}

for (const property in mob2) {
console.log(`${property}: ${mob2[property]}`);
}  