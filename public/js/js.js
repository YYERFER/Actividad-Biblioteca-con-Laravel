function cambioOpciones(e) {
    const combo = document.getElementById('opciones'),
      option = combo.options[combo.selectedIndex],
      id = option.value,
      concepto = option.getAttribute('rel');
    document.getElementById('showId').value = id;
    document.getElementById('Concepto').value = concepto;
  }

  function alerta(){
    alert('probando')
  }

