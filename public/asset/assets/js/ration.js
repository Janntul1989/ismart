// dairy cow ration
function calculate() {
  // Retrieve input values
  const weight = parseFloat(document.getElementById('weight').value) || 0;
  const milk = parseFloat(document.getElementById('milk').value) || 0;
  const danap = parseFloat(document.getElementById('danap').value) || 0;
  const grassp = parseFloat(document.getElementById('grassp').value) || 0;

  // Perform calculations
  const amisp = (weight * 1) + (milk * 100);
  const amisc = (danap * 200) + (grassp * 20);
  const danapp = (weight * 0.015) + (milk * 0.03);
  const grasspp = (weight * 0.03) + (milk * 0.2) + (weight * 0.015);
  const soktip = (danap * 10) + (grassp * 2);
  const soktic = (weight * 0.1) + (milk * 5);
  const dryp = (danap * 0.9) + (grassp * 0.8);
  const dryc = weight * 0.02;

  //Format the results
  const formattedResults = `
      আমিষের প্রাপ্যতা: ${formatWeight(amisp)}<br><br>
      আমিষের চাহিদা: ${formatWeight(amisc)}<br><br>
      দানাদার প্রকৃত পরিমাণ: ${formatWeight(danapp)}<br><br>
      ঘাসের প্রকৃত পরিমাণ: ${formatWeight(grasspp)}<br><br>
      শক্তির প্রাপ্যতা(মে.জু): ${soktip}<br><br>
      শক্তির চাহিদা (মে.জু) ${soktic}<br><br>
      শুস্ক পদার্থের প্রাপ্যতা: ${formatWeight(dryp)}<br><br>
      শুস্ক পদার্থের চাহিদা: ${formatWeight(dryc)}
  `;


  function formatWeight(weight) {
    const kg = Math.floor(weight);
    const grams = Math.round((weight % 1) * 1000);

    if (grams === 0) {
      return `  ${kg} কেজি`;
    } else {
      return `  ${kg} কেজি ${grams} গ্রাম`;
    }
  }



  // Display the results
  document.getElementById('results').innerHTML = formattedResults;

  // Create a bar graph
  createBarGraph({
    amisp: amisp,
    amisc: amisc,
    danapp: danapp,
    grasspp: grasspp,
    soktip: soktip,
    soktic: soktic,
    dryp: dryp,
    dryc: dryc
  });

}

function clearFields() {
  // Clear input fields and results
  document.getElementById('weight').value = '';
  document.getElementById('milk').value = '';
  document.getElementById('danap').value = '';
  document.getElementById('grassp').value = '';
  document.getElementById('results').innerHTML = '';
}





// <<<<<<<<<<<<<<<<<<< another calculator   >>>>>>>>>>>>>>>>>>>>>>


const userInput = document.getElementById('userInput');
const output1 = document.getElementById('output1');
const output2 = document.getElementById('output2');
const output3 = document.getElementById('output3');

userInput.addEventListener('input', updateOutputs);

function updateOutputs() {
  const inputValue = parseFloat(userInput.value);

  if (!isNaN(inputValue)) {
    // Formulas for the outputs
    const formula1 = (inputValue * 860) / 1000;
    const formula2 = (inputValue * 5);
    const formula3 = (inputValue * 30) / 1000;

    // Update the three output elements with the calculated values
    output1.textContent = formula1;
    output2.textContent = formula2;
    output3.textContent = formula3;
  } else {
    // If the input is not a valid number, clear the outputs
    output1.textContent = "";
    output2.textContent = "";
    output3.textContent = "";
  }
}