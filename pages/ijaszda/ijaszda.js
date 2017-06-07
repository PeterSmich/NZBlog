var isInitialised = false;
var vegetationAnimals = new Map();
var choosenVegetation;
var points;
var targetPoint;
var numOfShot;
var missedShot;
var achived;


function initialise(){
	if(not isInitialised){
		vegetationAnimals.set('Fuvespuszta', ['Nyúl', 'Róka', 'Vaddisznó', 'Őz', 'Szarvas']);
		vegetationAnimals.set('Szafari', ['Szurikáta', 'Strucc', 'Gazella', 'Tigris', 'Oroszlán']);
		choosenVegetation = 'NAN';
		isInitialised = true;
	}
}

function chooseVegetation(veg){
	choosenVegetation = veg;
}

function setVegetation(){
	
}
