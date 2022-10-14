const formForm = document.getElementById('form')
const passwdInput = document.getElementById('passwd')

formForm.addEventListener('submit', e => {
  e.preventDefault()

  // Validar contraseña: Al menos 5 caracteres, máximo 10, empieza con letra mayúscula y al menos tiene un dígito.
  if (/^(?=.*\d)[A-ZÑ].{4,10}/.test(passwdInput.value)) {
    window.alert('OK')
    e.target.submit()
  }

  window.alert('La contraseña debe tener entre 5 y 10 caracteres, empezar con una letra mayúscula y tener al menos un dígito.')
  passwdInput.focus()
})
