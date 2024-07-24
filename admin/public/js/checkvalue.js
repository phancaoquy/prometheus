const nameField = document.querySelector('input');

nameField.addEventListener('input', () => {
  nameField.setCustomValidity('');
  nameField.checkValidity();
    console.log(nameField.checkValidity());

});

nameField.addEventListener('invalid', () => {
  nameField.setCustomValidity('Vui Lòng Điền Đầy Đủ Thông Tin !!!.');
})