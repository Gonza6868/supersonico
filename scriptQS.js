let texto = "Somos una empresa que creamos 4 compañeros del IES 9-023 en busca de generar un impacto en la moda urbana. Queremos ser algo más que una tienda de ropa. Queremos vestir a las personas de una forma diferente, con indumentaria única en el país."

document.getElementById("btn-qs").addEventListener("click", displayText);

function displayText() {
  document.getElementById("quienes-somos").innerHTML = texto;
}


