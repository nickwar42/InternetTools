const address = document.getElementById('addrinput')
const province = document.getElementById('provinput')
const city = document.getElementById('cityinput')
const postal = document.getElementById9'zipinput');
const error = document.getElementById('errorText')




form.addEventListener('submitBtn', (e) =>{
let messages = []
if(address.value === '' || address.value ==null){
messages.push('Address is required!')
}

if(country === 'canada'){
if(postal.length != 6){
messages.push('Enter a valid postal code')
}
}

if(country ==='usa'){
if(postal.length != 5){
messages.push('Enter a valid zip')
}
}


if(province.value === '' || province.value ==null){
messages.push('Province is required!')
}

if(city.value === '' || city.value ==null){
messages.push('City is required!')
}

if(messages.length > 0){
e.preventDefault();
errorElement.innerText = messages.join(', ')
}
})


Not gonna lie, I'm not sure that this code works. I sure love this career! /s
