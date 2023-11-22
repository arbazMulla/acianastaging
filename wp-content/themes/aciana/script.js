//Hiding the first column in Subscription Table

document.addEventListener('DOMContentLoaded', function(){
  let proColumnHeader = document.querySelector('.planCols:first-child .basicPlancontent');
  let premiumColumnHeader = document.querySelector('.premium .planCols:first-child .basicPlancontent');
  if (proColumnHeader || premiumColumnHeader) {
    // proColumnHeader.style.display = 'none';
    // premiumColumnHeader.style.display = 'none';
}
})

document.addEventListener('DOMContentLoaded', function(){
  //Label for 3 month
  let basicLabel = document.createElement('div');
  basicLabel.className = 'mostPopular1';
  basicLabel.innerText = 'Basic Plan';

  document.querySelector('.planCols:nth-child(2) .basicPlancontent .labelPlaceholder').appendChild(basicLabel);
  
  //Label for 6 month
  let standardLabel = document.createElement('div');
  standardLabel.className = 'mostPopular1';
  standardLabel.innerText = 'Standard Plan';

  document.querySelector('.planCols:nth-child(4) .basicPlancontent .labelPlaceholder').appendChild(standardLabel);


});



document.addEventListener('DOMContentLoaded', function(){
  const premium = document.getElementsByClassName('premium');
  //Label for 3 month
 
  if(premium = ''){
    let premiumbasicLabel = document.createElement('div');
    premiumbasicLabel.className = 'mostPopular1';
    premiumbasicLabel.innerText = 'Basic Plan';
    document.querySelector('.premium .planCols:nth-child(2) .pricingplanheadercontent .basicPlancontent .labelPlaceholder').appendChild(premiumbasicLabel);
  }
  
  //Label for 6 month
  if(premium = ''){
  let premiumstandardLabel = document.createElement('div');
  premiumstandardLabel.className = 'mostPopular1';
  premiumstandardLabel.innerText = 'Standard Plan';
  document.querySelector('.premium .planCols:nth-child(4) .pricingplanheadercontent .basicPlancontent .labelPlaceholder').appendChild(premiumstandardLabel);
  }  
  console.log();
});